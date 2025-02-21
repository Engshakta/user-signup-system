<?php
// Database connection
$host = 'localhost';  
$user = 'root';         
$password = '';        
$database = 'users_db'; 

$mysqli = new mysqli($host, $user, $password, $database);

// Check connection
if ($mysqli->connect_error) {
    die('Connection failed: ' . $mysqli->connect_error);
}

// Get form data
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];

// Prepare and insert into the database
$stmt = $mysqli->prepare("INSERT INTO users (FirstName, LastName, email) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $firstname, $lastname, $email);

if ($stmt->execute()) {
    // Redirect to index.php with success message
    header("Location: index.php?success=true");
    exit();
} else {
    // Handle error
    echo "Error: " . $stmt->error;
}

$stmt->close();
$mysqli->close();
?>
