<?php
$conn=mysqli_connect("us-cdbr-east-02.cleardb.com","bec32cb383b011","42206257","test");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// Change character set to utf8
mysqli_set_charset($conn,"utf8");
$url = "http://localhost:8080/a/";
error_reporting(0);
?>
