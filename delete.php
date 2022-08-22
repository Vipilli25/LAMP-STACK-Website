<?php
	include("connect.php");
	$id = $_GET['item_id'];
	$q = "delete from c_list where item_id = $id ";
	mysqli_query($con,$q);
	header("location:index.php");
	
?>
