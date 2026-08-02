<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "trip";

$con = mysqli_connect($servername, $username, $password, $database);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM trip";

$result = mysqli_query($con, $sql);

?>
<!DOCTYPE html>
<html>
<head>
    <title>Trip Registrations</title>
</head>

<body>

<h1>Jaipur Trip Registrations</h1>
<table border="1">

<tr>
    <th>S.No</th>
    <th>Name</th>
    <th>Age</th>
    <th>Roll No</th>
    <th>Gender</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Date</th>
    <th>Description</th>
    <th>Action</th>
</tr>
<?php
while($row = mysqli_fetch_assoc($result))
{ 
    ?>   
    

<tr>

    <td><?php echo $row['Sno']; ?></td>
    <td><?php echo $row['Name']; ?></td>
    <td><?php echo $row['Age']; ?></td>
    <td><?php echo $row['Roll_no']; ?></td>
    <td><?php echo $row['Gender']; ?></td>
    <td><?php echo $row['Email']; ?></td>
    <td><?php echo $row['Phone']; ?></td>
    <td><?php echo $row['Date']; ?></td>
    <td><?php echo $row['Additional']; ?></td>
    <td>
        <a href="delete.php?id=<?php echo $row['Sno']; ?>">
            Delete
        </a>
        <a href="edit.php?id=<?php echo $row['Sno']; ?>">
            Edit
        </a>
    </td>
</tr>
   
<?php
}
?>
</table>
</body>
</html>
