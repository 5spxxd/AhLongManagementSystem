<?php
include("auth.php");
require('db.php');
$id = $_REQUEST['id'];
$query = "SELECT * FROM staff WHERE id = '".$id."'";
$result = mysqli_query($con, $query) or die(mysqli_error($con));
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Edit Record</title>
<link rel="stylesheet" href="css/theme.css" />
</head>
<body>
<div class="form">
<p><a href="home.html">Home</a> 
| <a href="insert.php">Insert New Record</a> 
| <a href="logout.php">Logout</a></p>
<header>Update</header>

<?php
$status = "";
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $phone_number = $_POST['phone_number'];
    $email = $_POST['email'];
    $department = $_POST['department'];

    $update = "UPDATE staff SET name = '$name', gender = '$gender', age = '$age', 
               phone_number = '$phone_number', email = '$email', department = '$department' 
               WHERE id = '$id'";
    mysqli_query($con, $update) or die(mysqli_error($con));
    $status = "Record Updated Successfully. </br></br>
               <a href='staff_view.php'>View Updated Record</a>";
    echo '<p style="color:#FF0000;">'.$status.'</p>';
} else {
?>
<div>
<form name="form" method="post" action=""> 
<input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
<p><input type="text" name="name" placeholder="Enter Name" required value="<?php echo $row['name']; ?>" /></p>
<p><input type="text" name="gender" placeholder="Enter Gender" required value="<?php echo $row['gender']; ?>" /></p>
<p><input type="text" name="age" placeholder="Enter Age" required value="<?php echo $row['age']; ?>" /></p>
<p><input type="text" name="phone_number" placeholder="Enter Phone Number" required value="<?php echo $row['phone_number']; ?>" /></p>
<p><input type="text" name="email" placeholder="Enter Email" required value="<?php echo $row['email']; ?>" /></p>
<p><input type="text" name="department" placeholder="Enter Department" required value="<?php echo $row['department']; ?>" /></p>
<p><input name="update" type="submit" value="Update" /></p>
</form>
</div>
<?php } ?>
</div>
</body>
</html>