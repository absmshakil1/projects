<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Crud Operation Page</title>
</head>
<body>
 <div class="container-fluid">
          <div class="row justify-content-center">
              <div class= "col-lg-4 col-md-6 col-sm-12">
                <form action="operation.php" method="post" enctype = "multipart/form-data">
                    <h1>Crud Operation</h1>
                    <div class="mb-3">
                      Product Name:
                      <input type="text" class="form-control" name = "name">
                    
                    </div>
                    <div class="mb-3">
                     Product Price:
                      <input type="text" class="form-control" name = "price" >
                    </div>
                    <div class="mb-3">
                     Product Image:
                      <input type="file" class="form-control" name = "image" >
                    </div>
                    <button type="submit" class="btn btn-primary col-12" >Add Here</button>
                     
                  </form>
                </div>
          </div>
      </div>
      <div class = "container">
                  <table class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Image</th>
      <th scope="col">Update</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
      <?php
      include 'config.php';
      $allData = mysqli_query($conn,"SELECT * FROM `crud`");
      while($row=mysqli_fetch_array($allData)){
        echo"<tr>
        <td>$row[id]</td>
        <td>$row[name]</td>
        <td>$row[price]</td>
        <td> <img src='$row[image]' alt= 'Product Image' width ='100px'> </td>
        <td> <a class= 'btn btn-success' href='update.php?id=$row[id]'>Update</a></td>
        <td> <a class= 'btn btn-danger' href='delete.php?id=$row[id]'>Delete</a></td>
      </tr>";  
      }
    ?>

    </tbody>
</table>
 </div>
 

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>