<?php 
	// database connect 

	$host = 'localhost'; // always
	$user_name = 'root'; // use your (but root is default)
	$password = ''; // use your (default is empty)
	$databse_name = 'new_login'; // use your 

	$connecton = mysqli_connect($host,$user_name,$password,$databse_name);
	if(!$connecton){
		echo 'databse not connect !!';
	}


?>