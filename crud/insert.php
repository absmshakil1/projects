<?php
include 'config.php';

$name = $_POST['name'];
$price = $_POST['price'];
$image = $_FILES['image'];

print_r($image);

$imagelocation = $_FILES['image']['tmp_name'];

$imagename = $_FILES['image']['name'];

$image_des = "Image/" .$imagename;

move_uploaded_file($imagelocation,$image_des);

$insertQuery = "INSERT INTO `crud`(`name`, `price`, `image`) VALUES ('$name','$price','$image_des')";
 if(mysqli_query($conn,$insertQuery)){
   
    echo"<script> location.href='crud.php' </script>";
 }
