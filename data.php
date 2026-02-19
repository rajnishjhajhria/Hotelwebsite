<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "contactform";

// Establish connection
$con = mysqli_connect($server, $username, $password, $database);
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve form data
$firstname = $_POST["name"];
$lastname = $_POST["surname"];
$email = $_POST["email"];
$phone_number = $_POST["number"];
$message = $_POST["message"];

// SQL query to insert data into the 'contact' table
$sql = "INSERT INTO `contact (firstname, lastname, email, password, message) 
        VALUES ('$firstname', '$lastname', '$email', '$phone_number', '$message')";
INSERT INTO `contact` 

// Execute SQL query
$result = mysqli_query($con, $sql);

// Check if the query executed successfully
if ($result) {
    echo "Data submitted successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

// Close connection
mysqli_close($con);
?>