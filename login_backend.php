<?php

include("db_connection.php");

$username = $_POST['UserName'];
$password = $_POST['Password'];

$login_status ="Unsuccessful";

if (trim($username)=="" || trim($password)=="") {
  echo "Enter a valid input";
  $url= "http://localhost/metro_rail/Login.php";
  header("Refresh: 1; URL=$url");
}

else {
  $sql="Select passenger_information.f_name,passenger_information.passenger_id From passenger_information where passenger_information.f_name='$username' AND passenger_information.passenger_id='$password' ";
  $result= mysqli_query($conn,$sql);
  $row_num= mysqli_num_rows($result);
  if($row_num==1) $login_status="Successful";
}

if($login_status=="Successful"){
  $url="http://localhost/metro_rail/login_landing.php";
  header("Refresh: 1; URL=$url");
}
else{
  $url= "http://localhost/metro_rail/Login.php";
  header("Refresh: 3; URL=$url");
}



 ?>
