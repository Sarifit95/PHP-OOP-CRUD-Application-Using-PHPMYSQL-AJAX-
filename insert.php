<?php
include('database.php');


if(isset($_POST["operation"]))
{
    date_default_timezone_set("Asia/Dhaka");
    if($_POST["operation"] == "Add")
    {


        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $date = date("Y-m-d h:i:s A");

        $a = new database();
        $a->insert('data',['name'=>$name,'email'=>$email,'phone'=>$phone,'subject'=>$subject,'message'=>$message,'created'=>$date,'updated'=>$not]);

//
//        $statement = $connection->prepare("INSERT INTO course (course, students) VALUES (:course, :students)");
//        $result = $statement->execute(
//            array(
//                ':course'   =>  $_POST["course"],
//                ':students' =>  $_POST["students"],
//            )
//        );
    }
    if($_POST["operation"] == "Edit")
    {
        $id = $_POST['course_id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $date = date("Y-m-d h:i:s A");

        $a = new database();
        $a->update('data',['name'=>$name,'email'=>$email,'phone'=>$phone,'subject'=>$subject,'message'=>$message,'updated'=>$date],"id='$id'");

    }

}
?>
