<?php
include('database.php');
include('function.php');
$query = '';
$output = array();
$b = new database();

if(isset($_POST["search"]["value"]))
{
 $con='name LIKE "%'.$_POST["search"]["value"].'%" OR email LIKE "%'.$_POST["search"]["value"].'%"  ';

}

if(isset($_POST["order"]))
{
    $con.='ORDER BY '.$_POST['order']['0']['column'].' '.$_POST['order']['0']['dir'].' ';



}
else
{
    $con.='ORDER BY id ASC';


}

if($_POST["length"] != -1)
{
    $con.=' LIMIT ' .$_POST['start']. ', ' .$_POST['length'];

}
$data = array();

$b->select("data","*", $con);
$result = $b->sql;
$filtered_rows = mysqli_num_rows($result);



while($row = mysqli_fetch_assoc($result))
{
    $sub_array = array();

    $sub_array[] = $row["id"];
    $sub_array[] = $row["name"];
    $sub_array[] = $row["email"];
    $sub_array[] = $row["phone"];
    $sub_array[] = $row["subject"];
    $sub_array[] = $row["message"];
    $sub_array[] = $row["created"];
    $sub_array[] = $row["updated"];
    $sub_array[] = '<button type="button" name="update" id="'.$row["id"].'" class="btn btn-primary btn-sm update">Edit</button>';
    $sub_array[] = '<button type="button" name="delete" id="'.$row["id"].'" class="btn btn-danger btn-sm delete">Delete</button>';
    $data[] = $sub_array;
}
$output = array(
    "draw"              =>  intval($_POST["draw"]),
    "recordsTotal"      =>  $filtered_rows,
    "recordsFiltered"   =>  get_total_all_records(),
    "data"              =>  $data
);
echo json_encode($output);
?>
