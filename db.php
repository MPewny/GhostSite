<?php
$dbserver = ""; // IP and Port of the database server
$dbname = ""; //Database name
$dblogin = ""; //User login to the database
$dbpass = ""; //User password to the database

$conn = mysqli_connect($dbserver,$dbname,$dblogin,$dbpass);

 if($conn){}
 else{
 die();
 }
  
?>
