<?php
$databaseServerName = 'localhost';
$databaseUsername = 'userName';
$databasePassword = '';
$theDatabase = 'databaseName';

//connection to database

$databaseConnection = mysqli_connect('localhost', $databaseUsername, $databasePassword, $theDatabase);

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


?>

