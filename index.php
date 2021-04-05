<?php

 $server="localhost";
 $username="root";
 $password="";
 $dbname = "data";
 $con = mysqli_connect($server,$username,$password,$dbname);
 if(!$con){

    die("connection to this database failed due to ".mysqli_connect_error());
 }
 else{
     echo  "Success connecting to the db";
    }

$name=$_POST['name'];
$gender=$_POST['gender'];
$age=$_POST['age'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$desc=$_POST['other'];
$sql=" INSERT INTO trip ( `name`, `age`, `gender`, `email`, `phone`, `other`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc'); ";
// echo $sql;
mysqli_query($con,$sql);
// $mysqli_close($con);

mysqli_close($con);


?>
