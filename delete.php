<?php
include 'dbcon.php';
$id= $_GET['id'];
$sql = "DELETE FROM crud WHERE id=$id";

if(mysqli_query($con,$sql)){
    header('location:index.php?msg=Record Deleted Succefully');
}
?>