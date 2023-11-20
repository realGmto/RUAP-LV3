<?php
$host = "lv3-app-server.mysql.database.azure.com";
$user = "gveymybwua";
$pwd = "B1O7KKB32KY368CP$";
$db = "lv3-app-database";
 // $host = "127.0.0.1:52932";
 // $user = "azure";
 // $pwd = "6#vWHD_$";
 // $db = "localdb";
 $conn = mysqli_connect($host,$user,$pwd);
 // Check connection
 if (mysqli_connect_errno())
 {
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
 else {
 echo 'Connected successfully';
 }/*
 $sql = 'CREATE Database ' +$db;
 if ($conn->query($sql) === TRUE) {
 echo "Database created successfully";
 } else {
 echo "Error creating database: " . $conn->error;
 }*/
 mysqli_select_db($conn,$db);
 $sql_create = "CREATE TABLE registration_tbl(id INT NOT NULL
 AUTO_INCREMENT, PRIMARY KEY(id), name VARCHAR(30), email
 VARCHAR(30), date DATE);";
 if ($conn->query($sql_create) === TRUE) {
 echo "Table registration_tbl created successfully";
 } else {
 echo "Error creating table: " . $conn->error;
 }
 $conn->close();
?>