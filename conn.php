<?php
	$conn =  mysqli_connect('localhost', 'root', '', 'db_crud');
	
	if(!$conn){
		die("Error: Cannot connect to the database");
	}
?>
