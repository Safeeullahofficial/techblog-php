<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "techblog";

$connection = mysqli_connect($server, $username, $password, $database);

if(!$connection){
    die("connection not connected" . mysqli_connect_error());
}
else{
    // echo "Connection Successfully";
}

?>