<?php
	$conn = new mysqli('localhost', 'root', '', 'assessment');
	
	if(!$conn){
		die("Error: Failed to connect to database!");
	}
?>