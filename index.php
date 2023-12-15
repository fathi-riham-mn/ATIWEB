<?php
session_start();

// Include your connection file
include('connection.php');

// Check if form is submitted
if(isset($_POST['register'])){
    // Registration code here
} elseif(isset($_POST['login'])){
    // Login code here
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Register</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/jpg" sizes="30x30" href="atibatti.jpg">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f0f0;
        }
        .button {
            
            font-size: 24px;
            text-decoration: none;
           
            transition: background-color 0.2s;
            background-color: #ffbf00; /* Updated button color */
            color: #fff;
            cursor: pointer;
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border: 2px solid #000
        }
        .button:hover {
            background-color: #e5ac00; /* Updated hover color */
        }
    </style>
</head>
<body>
<form method="post" action="">
<center><img src="atibatti.jpg" alt="Logo"></center>
    <br /><br /><br />
    <center><a href="login.php" class="button">Login</a>
    <h1>or</h1>
 
    <a href="register.php" class="button">Register</a></center>
</form>
</body>
</html>