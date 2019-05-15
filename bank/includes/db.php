<?php
$databaseServerName = 'localhost';
$databaseUsername = 'mdaswani';
$databasePassword = '520360';
$theDatabase = 'mdaswani';

//connection to database

$databaseConnection = mysqli_connect('localhost', $databaseUsername, $databasePassword, $theDatabase);

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


?>

