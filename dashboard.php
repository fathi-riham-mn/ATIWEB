<?php
session_start();

if (!isset($_SESSION['login_user'])) {
    header("location:index.php");
}

include('connection.php');
$query = "SELECT * FROM Lecturer WHERE LecID=" . $_SESSION['login_user'];
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Dashboard</title>
    <link rel="icon" type="image/jpg" sizes="30x30" href="atibatti.jpg">
    <style>
        .topnav {
            background-color: #333;
            overflow: hidden;
        }

        .topnav a {
            float: left;
            display: block;
            color: #ffbf00;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        .topnav a:hover {
            background-color: #ddd;
            color: black;
        }

        .topnav a.active {
            background-color: #ffbf00;
            color: white;
        }
    </style>   
</head>
<body>
<nav class="topnav">
  <a class="active" href="#home">Home</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
  <a href="#about">About</a>
  <a href="logout.php">Logout</a>
</nav>

    <h1>Welcome, <?php echo $row['Name']; ?>!</h1>
    <p>Your course is: <?php echo $row['CourseID']; ?></p>
    <p>Your email is: <?php echo $row['Email']; ?></p>
    <p>Your gender is: <?php echo $row['Gender']; ?></p>
    <p>Your designation is: <?php echo $row['Designation']; ?></p>

    
</body>
</html>