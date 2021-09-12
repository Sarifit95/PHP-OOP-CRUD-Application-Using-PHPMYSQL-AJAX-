<?php
include('database.php');
include('function.php');

if(isset($_POST["course_id"]))
{
    $b = new database();
    $b->select("data","*", "id = ".$_POST["course_id"]);
    $result = $b->sql;

    $output = array();

    while($row = mysqli_fetch_assoc($result))
    {
        $output["id"] = $row["id"];
        $output["name"] = $row["name"];
        $output["email"] = $row["email"];
        $output["phone"] = $row["phone"];
        $output["subject"] = $row["subject"];
        $output["message"] = $row["message"];


    }
    echo json_encode($output);
}
?>
