<?php

include('dbconnection.php');

$fullname=$_POST['fullname'];
$email=$_POST['email'];
$phoneNum=$_POST['phonenumber'];
$destination=$_POST['destination'];
$details=$_POST['details'];

try{
    $sql="INSERT into newform values(null,'$fullname','$email','$phoneNum','$destination','$details')";
    $result=$conn->query($sql);
    header("Location: index.html");


}catch(Exception $e){
 die('Error updating the database.');
}

?>