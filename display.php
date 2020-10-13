

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Hello There</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="create.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="register.php">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="display.php">CRUD Table</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>

      
     
    </ul>

 


  </div>
</nav>
    <div class="container">
        <div class="col-lg-12">
            <h1 class="text-warning text-center">Display Table Data</h1>
            <table class="table table-striped table-hover table-bordered" >
                <tr>
                    <td>
                        <th>Id</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Delete</th>
                        <th>Update</th>
                    </td>
                </tr>
                <?php

                    include 'index.php';

                   

                    
                    $q = " select * from datatable";

                    $query = mysqli_query($con,$q);
                   
                    while($res = mysqli_fetch_array($query)){

                  

                    ?>

                <tr>
                    <td>
                        <th><?php echo $res['id'];?></th>
                        <th><?php echo $res['username'];?></th>
                        <th><?php echo $res['password'];?></th>
                        <th><button class="btn-danger btn"><a href="delete.php?id=<?php echo $res['id']?>" class="text-white">Delete</a></button></th>
                        <th><button class="btn-success btn"><a href="update.php?id=<?php echo $res['id']?>" class="text-white">Update</a></button></th>
                    </td>
                </tr>
                <?php
                    }
                ?>
            </table>
        </div>
    </div>
</body>
</html>