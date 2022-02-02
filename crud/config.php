<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "project";
$conn= mysqli_connect($servername,$username,$password,$dbName);

if(!$conn){
    die("connection error:".mysqli_connect_error());

}
?>