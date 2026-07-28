<?php
include "db_connect.php";

$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM students WHERE id=$id");
$row = mysqli_fetch_assoc($result);

if(isset($_POST['update'])){

    $name = $_POST['name'];
    $roll_no = $_POST['roll_no'];
    $email = $_POST['email'];
    $branch = $_POST['branch'];
    $phone = $_POST['phone'];

    $sql = "UPDATE students
            SET name='$name',
                roll_no='$roll_no',
                email='$email',
                branch='$branch',
                phone='$phone'
            WHERE id=$id";

    if(mysqli_query($conn,$sql)){
        header("Location: view_students.php");
        exit();
    } else{
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Edit Student</h2>

<form method="POST">

Name:<br>
<input type="text" name="name" value="<?php echo $row['name']; ?>"><br><br>

Roll Number:<br>
<input type="text" name="roll_no" value="<?php echo $row['roll_no']; ?>"><br><br>

Email:<br>
<input type="email" name="email" value="<?php echo $row['email']; ?>"><br><br>

Branch:<br>
<input type="text" name="branch" value="<?php echo $row['branch']; ?>"><br><br>

Phone:<br>
<input type="text" name="phone" value="<?php echo $row['phone']; ?>"><br><br>

<input type="submit" name="update" value="Update Student">

</form>

</body>
</html>