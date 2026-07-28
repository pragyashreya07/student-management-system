<?php
include "db_connect.php";

$id = $_GET['id'];

$sql = "DELETE FROM students WHERE id = $id";

if (mysqli_query($conn, $sql)) {
    header("Location: view_students.php");
    exit();
} else {
    echo "Error: " . mysqli_error($conn);
}
?>