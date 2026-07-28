<?php
include 'db_connect.php';

if (isset($_POST['name'])) {

    $name = $_POST['name'];
    $roll_no = $_POST['roll_no'];
    $email = $_POST['email'];
    $branch = $_POST['branch'];
    $phone = $_POST['phone'];

    if (empty($name) || empty($roll_no) || empty($email) || empty($branch) || empty($phone)) {
    echo "<script>alert('All fields are required!');</script>";
} else {
    // Your existing INSERT query goes here
}

    $sql = "INSERT INTO students(name, roll_no, email, branch, phone)
            VALUES('$name', '$roll_no', '$email', '$branch', '$phone')";

    if (mysqli_query($conn, $sql)) {
        echo "<h3>Student Added Successfully!</h3>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Add Student</h2>

<form method="POST">

    Name:<br>
    <input type="text" name="name"><br><br>

    Roll Number:<br>
    <input type="text" name="roll_no"><br><br>

    Email:<br>
    <input type="email" name="email"><br><br>

    Branch:<br>
    <input type="text" name="branch"><br><br>

    Phone:<br>
    <input type="text" name="phone"><br><br>

    <input type="submit" value="Add Student">

</form>

<br>

<a href="index.php">Back to Home</a>

</body>
</html>