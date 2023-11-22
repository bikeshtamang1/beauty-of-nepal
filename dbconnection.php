<?php

$servername='localhost';
$username="root";
$password="";
$dbName="userinfo";

try{
$conn=mysqli_connect($servername,$username,$password,$dbName);


}catch (Exception $e){
    die("Connection failed: ".$e.mysqli_error());

}



?> 