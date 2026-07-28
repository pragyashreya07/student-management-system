<?php
include 'db_connect.php';

$sort = "";

if (isset($_GET['sort'])) {

    if ($_GET['sort'] == "asc") {
        $sort = " ORDER BY name ASC";
    }
    elseif ($_GET['sort'] == "desc") {
        $sort = " ORDER BY name DESC";
    }
}

if (isset($_GET['search']) && $_GET['search'] != "") {

    $search = $_GET['search'];

    $sql = "SELECT * FROM students
            WHERE name LIKE '%$search%'
            OR roll_no LIKE '%$search%'"
            . $sort;

} else {

    $sql = "SELECT * FROM students" . $sort;

}


$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Students</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<p style="text-align:center;">
    Sort:
    <a href="view_students.php?sort=asc">A → Z</a> |
    <a href="view_students.php?sort=desc">Z → A</a>
</p>
<h2>Student List</h2>
<form method="GET" style="width:90%; margin:20px auto;">
    <input type="text" name="search" placeholder="Search by Name or Roll Number"
           value="<?php if(isset($_GET['search'])) echo $_GET['search']; ?>">

    <input type="submit" value="Search">
</form>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Roll No</th>
        <th>Email</th>
        <th>Branch</th>
        <th>Phone</th>
        <th>Action</th>
    </tr>

<?php
while($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>".$row['id']."</td>";
    echo "<td>".$row['name']."</td>";
    echo "<td>".$row['roll_no']."</td>";
    echo "<td>".$row['email']."</td>";
    echo "<td>".$row['branch']."</td>";
    echo "<td>".$row['phone']."</td>";
    echo "<td>
    <a href='edit_student.php?id=".$row['id']."'>Edit</a> |
    <a href='delete_student.php?id=".$row['id']."'>Delete</a>
    </td>";
    echo "</tr>";
}
?>

</table>

<br>
<a href="index.php">Back to Home</a>

</body>
</html>