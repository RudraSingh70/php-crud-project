<?php
    $servername="Localhost";
    $username="root";
    $password="";
    $database="trip";
    $con = mysqli_connect($servername, $username, $password, $database);
    if(!$con){
        die("Sorry we failed to connect: ".mysqli_connect_error());
    }
    
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "SELECT * FROM trip WHERE Sno=$id";
        $result=mysqli_query($con, $sql);
        $row=mysqli_fetch_assoc($result);
    }
    
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Record</title>
</head>
<body>

<h2>Edit Registration</h2>

<form action="update.php" method="post">

    <input type="hidden" name="id" value="<?php echo $row['Sno']; ?>">

    Name:
    <input type="text" name="name" value="<?php echo $row['Name']; ?>"><br><br>

    Age:
    <input type="number" name="age" value="<?php echo $row['Age']; ?>"><br><br>

    Roll No:
    <input type="number" name="rollno" value="<?php echo $row['Roll_no']; ?>"><br><br>

    <input type="submit" value="Update">

</form>

</body>
</html>

