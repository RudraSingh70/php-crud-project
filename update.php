<?php
    $servername="Localhost";
    $username="root";
    $password="";
    $database="trip";
    $con=mysqli_connect($servername,$username,$password,$database);
    if(!$con){
        die("Sorry we failed to connect: ".mysqli_connect_error());
    }
    $id = $_POST['id'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $rollno = $_POST['rollno'];
    $sql = "UPDATE trip 
    SET Name='$name',Age=$age,Roll_no=$rollno WHERE Sno=$id";
    if (mysqli_query($con, $sql)) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . mysqli_error($con);
    }
