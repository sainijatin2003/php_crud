<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD APPLICATION</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<!-- font awesome  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color:lightgreen;">
    PHP COMPLETE CRUD APPLICATION
</nav>

<div class="container">

<?php
if(isset($_GET['msg'])){
          $msg=$_GET['msg'];
          echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
          '.$msg.'
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
}
?>
      <a href="add_new.php" class="btn btn-dark mb-3">Add New </a>
      <table class="table table-hover text-center">
  <thead class="table-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">First name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">Gender</th>
      <th scope="col">Password</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    include 'dbcon.php';
        $sql = "SELECT * FROM crud";
        $result=mysqli_query($con,$sql);
        while($row=mysqli_fetch_array($result)){
    
    ?>
    <tr>
      <th><?php echo $row['id'];?></th>
      <td><?php echo $row['first_name'];?></td>
      <td><?php echo $row['last_name'];?></td>
      <td><?php echo $row['email'];?></td>
      <td><?php echo $row['gender'];?></td>
      <td><?php echo $row['password'];?></td>

      <td>
        <a href="edit.php?id=<?php echo $row['id'];?>" class="link-dark"><i class="fa-solid fa-pen-to-square me-3"></i></a>
        <a href="delete.php?id=<?php echo $row['id'];?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
      
      </td>
    </tr>
    <?php
        }
    ?>
  </tbody>
  
</table>
</div>


    <!-- bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>