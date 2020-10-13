<?php
include 'index.php';

$id = $_GET['id'];

$q = "DELETE FROM `datatable` WHERE id= $id ";

mysqli_query($con,$q);
header('location:display.php');
?>