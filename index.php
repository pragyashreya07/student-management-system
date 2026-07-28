<?php
session_start();

if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}


include "db_connect.php";

$result = mysqli_query($conn, "SELECT COUNT(*) AS total FROM students");
$row = mysqli_fetch_assoc($result);

$total_students = $row['total'];

?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Management System</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="navbar">
    <h2>🎓 Student Management System</h2>
    <div class="welcome">
        Welcome, <?php echo $_SESSION['admin']; ?>
    </div>
</div>


<h1>Student Management System</h1>

<div class="dashboard-card">
    <h2>Total Students</h2>
    <h1><?php echo $total_students; ?></h1>
</div>

<div class="dashboard-grid">

    <a href="add_student.php" class="card">
        <h2>➕</h2>
        <p>Add Student</p>
    </a>

    <a href="view_students.php" class="card">
        <h2>📋</h2>
        <p>View Students</p>
    </a>

    <a href="logout.php" class="card">
        <h2>🚪</h2>
        <p>Logout</p>
    </a>

</div>


</body>
</html>