<?php
include("auth.php");
require('db.php');
$status = "";

if (isset($_POST['new']) && $_POST['new'] == 1) {
    $name = $_REQUEST['name'];
    $gender = $_REQUEST['gender'];
    $age = $_REQUEST['age'];
    $email = $_REQUEST['email'];
    $total_debt = $_REQUEST['total_debt'];
    $total_payment = $_REQUEST['total_payment'];

    $ins_query = "INSERT INTO client (name, gender, age, email, total_debt, total_payment)
    VALUES ('$name', '$gender', '$age', '$email', '$total_debt', '$total_payment')";

    mysqli_query($con, $ins_query) or die(mysqli_error($con));
    $status = "New Record Inserted Successfully.</br></br><a href='client_view.php'>View Inserted Record</a>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Insert New Record</title>
    <link rel="stylesheet" href="css/theme.css" />
</head>
<body>
    <div class="form">
        <p><a href="home.html">Home</a> | <a href="client_view.php">View Records</a> | <a href="logout.php">Logout</a></p>
        <div>
        <header>Fill In The Blank Spaces</header>
            
            <form name="form" method="post" action=""> 
                <input type="hidden" name="new" value="1" />
                <p><input type="text" name="name" placeholder="Enter Name" required /></p>
                <p>
                    <label for="gender">Gender:</label>
                    <select name="gender" required>
                        <option value="">Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                    </select>
                </p>
                <p><input type="text" name="age" placeholder="Enter Age" required /></p>
                <p><input type="email" name="email" placeholder="Enter Email" required /></p>
                <p><input type="text" name="total_debt" placeholder="Enter Total Debt" required /></p>
                <p><input type="text" name="total_payment" placeholder="Enter Total Payment" required /></p>
                <p><input name="submit" type="submit" value="Submit" /></p>
            </form>
            <p style="color:#FF0000;"><?php echo $status; ?></p>
        </div>
    </div>
</body>
</html>
