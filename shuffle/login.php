<?php
// this php script is for connecting with database
// data has to be fetched from local server

// Username is root
$user = 'root';
$password = '';

// Database name is geeksforgeeks
$database = 'shuffle';

// Server is localhost with
// port number 3306
$servername='localhost:3305';
$conn = new mysqli($servername, $user,
				$password, $database);

             

// Checking for connections
if (!$conn){
	echo "Connection Unsuccessful!!!";
}
else{
    echo "connection successful";
}

?>