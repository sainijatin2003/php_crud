<?php

$server = "localhost";
$userename= "root";
$password="";
$db = "tutorial";

$con = new  mysqli($server,$userename,$password,$db);

if($con->connect_error){
        die("connection is failed ".$con->connect_error);
}
else{
    echo "connection is okay";
}




?>