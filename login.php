<?php
session_start();
include('connection.php');

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM Lecturer WHERE Email='$email'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        if (password_verify($password, $row['Password'])) {
            $_SESSION['login_user'] = $row['LecID'];
            header("location:dashboard.php");
        } else {
            echo "Incorrect email or password!";
        }
    } else {
        echo "Incorrect email or password!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
    <link rel="icon" type="image/jpg" sizes="30x30" href="atibatti.jpg">
</head>
<body>
    <form method="post" action="login.php">
    <center><img src="atibatti.jpg" alt="Logo">
    <h1>Login</h1></center>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>

        <input type="submit" name="submit" value="Login">
    </form>
</body>
</html>
