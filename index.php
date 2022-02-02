<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <title>Document</title>
    <style>
              form{
                  background: #fff;
                  padding: 15px;
                  box-shadow: 0px 0px 10px 0px;
                  border-radius: 10px;
              }

    </style>
</head>
<body>
   <div class="container-fluid">
       <div class="row justify-content-center">
           <div class="col-lg-4 col-md-6 col-sm-12">
            <form action="insert.php" method="post" enctype="multitype/form-data">
                <h1>Login</h1>
               <div class="mb-3">
                   ProductName
                <input type="text" class="form-control"  name="UserName"placeholder="Enter email">

               </div>
               <div class="mb-3">
                   Product Pice
                <input type="text" class="form-control" name="pass"placeholder="Enter email">

               </div>
               <div class="mb-3">
                   Products Image
                <input type="file" class="form-control" name="image"placeholder="Enter email">

               </div>
                
                    <div>
                    <button type="submit" class="btn btn-primary col-12">Submit</button>
                    <a href="Register.html">New user? Register first</a>
                 </div>
                  
                </div>
                </div>
       </div>
   </div>
 
</body>
</html>