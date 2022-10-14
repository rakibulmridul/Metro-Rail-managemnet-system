<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="style_home.css">

</head>


<body>
  <br>
  <br>
<h3> Your Balance Is </h3>

<?php
include("db_connection.php");
$sql1 ="show coloumns from card_information";
$result1 = mysqli_query($conn,$sql1);
while ($row1 = mysqli_fetch_row($result1)) {
  ?>
   <?php echo $row1[0]; ?>
<?php
}

 ?>

</body>

<footer>
</footer>


</html>
