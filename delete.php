<?php
include('database.php');


if(isset($_POST["course_id"]))
{
    $a = new database();
    $a->delete('data', 'id='.$_POST['course_id']);

}

?>
