<?php
// Establish the database connection
$connection = mysqli_connect("127.0.0.1", "root", "", "banking_system", 3308);

// Check if connection was successful
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
