<?php
session_start();

if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == "admin" && $password == "admin123") {

        $_SESSION['admin'] = $username;

        header("Location: index.php");
        exit();

    } else {

        echo "<script>alert('Invalid Username or Password');</script>";

    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Admin Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<h2>Admin Login</h2>

<form method="POST">

    Username:<br>
    <input type="text" name="username"><br><br>

    Password:<br>
    <input type="password" name="password"><br><br>

    <input type="submit" name="login" value="Login">

</form>

</body>
</html>