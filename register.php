<?php
session_start();
include('connection.php');

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $designation = $_POST['designation'];
    $course = $_POST['course'];
    $gender = $_POST['gender'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $query = "INSERT INTO Lecturer(Name, Email, Designation, CourseID, Gender, Password) VALUES('$name', '$email', '$designation', '$course', '$gender', '$password')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        header("location:login.php");
    } else {
        echo "Registration failed!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Registration</title>
    <link rel="icon" type="image/jpg" sizes="30x30" href="atibatti.jpg">
</head>
<body>
    
    <form method="post" action="register.php">
    <center><img src="atibatti.jpg" alt="Logo">
    <h1>Register</h1></center>
        <label for="name">Name in full:</label>
        <input type="text" name="name" id="name" required>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>

        <label for="designation">Designation:</label>
        <select name="designation" id="designation" required>
            <option value="">Select Designation</option>
            <option value="Assistant Lecturer">Assistant Lecturer</option>
            <option value="Lecturer">Lecturer</option>
            <option value="Senior Lecturer I">Senior Lecturer I</option>
            <option value="Senior Lecturer II">Senior Lecturer II</option>
        </select>

        <label for="course">Course:</label>
        <select name="course" id="course" required>
            <option value="">Select Course</option>
            <?php
            $query = "SELECT * FROM Course";
            $result = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<option value='" . $row['CourseID'] . "'>" . $row['Title'] . "</option>";
            }
            ?>
        </select>

        <label for="gender">Gender:</label>
        <select name="gender" id="gender" required>
            <option value="">Select Gender</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>

        <input type="submit" name="submit" value="Register">
        <p style="font-size: small;">Already have an account? <a href="login.php">Login here</a></p>
        <p style="font-size: small;"><a href="forgot_password.php">Forgot your password?</a></p>

    </form>
    
</body>
</html>
