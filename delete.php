<?php
include "db.php";
$id=$_REQUEST['id'];
$query_for_delete = "DELETE FROM `dashboard` WHERE id=$id";
$final_exe = mysqli_query($con, $query_for_delete);
header('location:display.php');
?>