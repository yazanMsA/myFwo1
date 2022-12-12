<?php
include('config.php');
$ID = $_GET['id'];
$del = "DELETE FROM prod WHERE id=$ID";
mysqli_query($con, $del);
header('location: products.php');
?>