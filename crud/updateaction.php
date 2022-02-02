<?php
include 'config.php';
$id = $_POST['id'];
$name = $_POST['name'];
$price = $_POST['price'];
$image = $_FILES['image'];



$imagelocation = $_FILES['image']['tmp_name'];

$imagename = $_FILES['image']['name'];

$image_des = "Image/" .$imagename;

move_uploaded_file($imagelocation,$image_des);

$updateQuery = "UPDATE `crud` SET `name`='$name',`price`='$price',`image`='$image_des' WHERE id = '$id' ";

 if(mysqli_query($conn,$updateQuery)){
   //  echo"<script>alert('Added')</script>";
    echo"<script> location.href='crud.php' </script>";
 }
