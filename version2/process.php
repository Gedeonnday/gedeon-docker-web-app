<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
    
    // Simple validation (For demonstration purposes only)
    if ($username == "admin" && $password == "password") {
        echo "Welcome, " "This is, ". $username . "!";
    } else {
        echo "Invalid username or password.";
    }
} else {
    echo "Invalid request method.";
}
?>

