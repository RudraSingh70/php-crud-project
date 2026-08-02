<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form for Jaipur trip</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img  class="jaipur" src="jaipur.jpg" alt="Jaipur" width="100%" height="100%">
    <div class="container">
        <h1>Welcome to Jaipur Trip Form</h1>
        <p>Fill out the form to register yourself for the Jaipur Trip</p>
        <form action="index.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br>
            <label for="age">Age:</label>
            <input type="number" id="age" name="age" min="18" required><br>
            <label for="rollno">RollNo:</label>
            <input type="number" id="rollno" name="rollno" required><br>
            <label for="gender">Gender:</label>
            <input type="radio" id="male" name="gender" value="male" required>
            <label for="male">Male</label>
            <input type="radio" id="female" name="gender" value="female" required>
            <label for="female">Female</label><br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br>
            <label for="phone">Phone:</label>
            <input type="tel" id="phone" name="phone" required><br>
            <label for="date">Date of Travel:</label>
            <input type="date" id="date" name="date" required><br>
            <label for="desc">Additional Information:</label>
            <textarea id="desc" name="desc" rows="4" cols="50"></textarea><br>
            <br>
            <button class="btn">Submit</button>
        </form>
    </div>
    <script src="script.js"></script>
    
</body>
</html>
<?php
 $servername="localhost";
 $username="root";
 $password="";
 $trip="trip";
 $con=mysqli_connect($servername,$username,$password,$trip);
 if(!$con){
     die("Sorry we failed to connect: ".mysqli_connect_error());
 }
 else{
     echo "Connection was successful";
 }
 $name=$_POST['name'];
 $age=$_POST['age'];
 $rollno=$_POST['rollno'];
 $gender=$_POST['gender'];
 $email=$_POST['email'];
 $phone=$_POST['phone'];
 $date=$_POST['date'];
 $desc=$_POST['desc'];

 $sql="INSERT INTO `trip` (`Name`, `Age`, `Roll_no`, `Gender`, `Email`, `Phone`, `Date`, `Additional`) VALUES ( '$name', '$age', '$rollno', '$gender', '$email', '$phone', '$date', '$desc')";
if(mysqli_query($con, $sql)){
    echo "<h2>Registration Successful!</h2>";
}
else{
    echo "Error: " . mysqli_error($con);
}
 ?> 

