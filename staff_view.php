<?php
include("auth.php");
require('db.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>View Records</title>
<link rel="stylesheet" href="css/theme.css" />
<link rel="stylesheet" href="css/table.css" />
</head>
<body>
<div class="form">
<p><a href="home.html">Home</a> 
| <a href="staff.php">Insert New Record</a> 
| <a href="logout.php">Logout</a></p>
<h2>View Records</h2>
<table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr>
<th><strong>S.No</strong></th>
<th><strong>Name</strong></th>
<th><strong>Gender</strong></th>
<th><strong>Age</strong></th>
<th><strong>Phone Number</strong></th>
<th><strong>Email</strong></th>
<th><strong>Department</strong></th>
<th><strong>Edit</strong></th>
<th><strong>Delete</strong></th>
</tr>
</thead>
<tbody>
<?php
$count = 1;
$sel_query = "SELECT * FROM staff ORDER BY id DESC;";
$result = mysqli_query($con, $sel_query);
while ($row = mysqli_fetch_assoc($result)) {
    ?>
    <tr>
        <td align="center"><?php echo $count; ?></td>
        <td align="center"><?php echo $row["name"]; ?></td>
        <td align="center"><?php echo $row["gender"]; ?></td>
        <td align="center"><?php echo $row["age"]; ?></td>
        <td align="center"><?php echo $row["phone_number"]; ?></td>
        <td align="center"><?php echo $row["email"]; ?></td>
        <td align="center"><?php echo $row["department"]; ?></td>
        <td align="center">
            <a href="staff_edit.php?id=<?php echo $row["id"]; ?>">Edit</a>
        </td>
        <td align="center">
            <a href="staff_delete.php?id=<?php echo $row["id"]; ?>">Delete</a>
        </td>
    </tr>
    <?php
    $count++;
}
?>
</tbody>
</table>
</div>
</body>
</html>