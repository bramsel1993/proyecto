<?php
function dbConnect (){
 	$conn =	null;
 	$host = 'localhost';
 	$db = 	'mydb';
 	$user = 'root';
 	$pwd = 	'';
	try {
	   	$conn = new PDO('mysql:host='.$host.';dbname='.$db, $user, $pwd);
		//echo 'Connected succesfully.<br>';
	}
	catch (PDOException $e) {
		echo '<p>Cannot connect to database !!</p>';
	    exit;
	}
	return $conn;
 }
 
 ?>



