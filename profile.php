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
</head>
<body>
<div class="form">
<p><a href="index.php">Home</a> 
| <a href="insert.php">Insert New Record</a> 
| <a href="logout.php">Logout</a></p>
<h2>View Records</h2>
<table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr>
<th><strong>S.No</strong></th>
<th><strong>Name</strong></th>
<th><strong>Age</strong></th>
<th><strong>Status</strong></th> <!-- Added column for Status -->
<th><strong>Edit</strong></th>
<th><strong>Delete</strong></th>
</tr>
</thead>
<tbody>
<?php
$count = 1;
$sel_query = "SELECT * FROM new_record ORDER BY id DESC";
$result = mysqli_query($con, $sel_query);
if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) { ?>
    <tr>
    <td align="center"><?php echo $count; ?></td>
    <td align="center"><?php echo $row["name"]; ?></td>
    <td align="center"><?php echo $row["age"]; ?></td>
    <td align="center"><?php echo $row["status"]; ?></td> <!-- Displaying the Status value -->
    <td align="center">
    <a href="edit.php?id=<?php echo $row["id"]; ?>">Edit</a>
    </td>
    <td align="center">
    <a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a>
    </td>
    </tr>
    <?php $count++;
    }
} else {
    echo "<tr><td colspan='6' align='center'>No records found</td></tr>";
}
?>
</tbody>
</table>
</div>
</body>
</html>
