<?php

$course_Id = $_POST["course_id"];
$password = $_POST["pass"];
$email = $_POST["email_id"];

//echo "Course ID: ".$course_Id." "."Password: ".$password." "."Email: ".$email; 
echo "Course Id and password is sent to your email id";
mail($email,"Login Information","Password: ".$password,"Course Id: ".$course_Id);

?>