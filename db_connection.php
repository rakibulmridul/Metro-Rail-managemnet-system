<?php

$servername="localhost";
$username="root";
$db="metro_rail";
$password="";

$conn = mysqli_connect($servername,$username,$password,$db);

if (!$conn) {
  die("Error In Connection".mysqli_connect_error());
}
else {
  //echo"Successfully Connected";
}









 ?>
