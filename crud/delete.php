<?php
include 'config.php';
$id = $_GET['id'];
$deletequery = "DELETE FROM `crud` WHERE id= '$id'";
mysqli_query($conn,$deletequery);
header('location:crud.php');