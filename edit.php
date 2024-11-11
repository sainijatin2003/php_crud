<?php

include 'dbcon.php';
$id = $_GET['id'];

if(isset($_POST['submit'])){
    $fname = $_POST['first_name'];
    $lname = $_POST['last_name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $password = $_POST['password'];

    $sql = "UPDATE `crud` SET `first_name`='$fname',`last_name`='$lname',`email`='$email',`gender`='$gender',`password`='$password' WHERE id=$id";

    if(mysqli_query($con,$sql)){
        header('location:index.php? msg=Updated information successfully');
    }
    else{
        echo "failed";
    }
}


?>

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
    PHP complete CRUD APPLICATION
</nav>

<div class="container">
     <div class="text-center mb-4">
        <h3>Edit User Information</h3>
        <p class="text-muted">Click update after changing any information</p>
     </div>
<?php
$sql = "SELECT * FROM crud WHERE id=$id LIMIT 1";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);

?>
     <div class="container d-flex justify-content-center">
          <form action="" method="post" style="width=50vw;min-width:300px;">
          <div class="row mb-3">
             <div class="col">
                <label class="form-label">First Name:-</label>
                <input type="text" class="form-control" name="first_name" value="<?php echo $row['first_name'];?>">
             </div>
             <div class="col">
                <label class="form-label">Last Name:-</label>
                <input type="text" class="form-control" name="last_name" value="<?php echo $row['last_name'];?>">
             </div>
             
          </div>
          <div class="mb-3">
          <label class="form-label">Email:-</label>
                <input type="text" class="form-control" name="email" value="<?php echo $row['email'];?>">
             </div>

             <div class="form-group mb-3">
            <label for="">Gender</label> &nbsp; &nbsp;
            <input type="radio" class="form-check-input" name="gender" id="male" value="male"<?php echo ($row['gender']=='male')? "checked":"";?>>
            <label for="male" class="form-input-label">Male</label>

            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <input type="radio" class="form-check-input" name="gender" id="female" value="female"<?php echo ($row['gender']=='female')? "checked":"";?>>
            <label for="female" class="form-input-label">Female</label>

          </div>

          <div class="row mb-3">
          <div class="col">
                <label class="form-label">Password:-</label>
                <input type="text" class="form-control" name="password"placeholder="password" value="<?php echo $row['password'];?>">
             </div>
          </div>

              <div>
                <button type="submit" class="btn btn-success" name="submit">Update</button>
            <a href="index.php" class="btn btn-danger">cancle</a>
            </div>
          
          </div>          
        </form>
     </div>
</div>



    <!-- bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>