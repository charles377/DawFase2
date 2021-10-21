<?php

$servername = "localhost";
$username = "id16326939_ot192611";
$password = "7kH>W9zWjqKV\ML4";
$database = "id16326939_login_register";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully";


?>
