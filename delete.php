<?php
    $servername="Localhost";
    $username="root";
    $password="";
    $database="trip";
    $con=mysqli_connect($servername,$username,$password,$database);
    if(!$con){
        die("Sorry we failed to connect: ".mysqli_connect_error());
    }
    else{
        echo "Connection was successful";
    }
    $id = $_GET['id'];
    $sql = "DELETE FROM trip WHERE Sno=$id";

mysqli_query($con, $sql);
header("Location: display.php");
exit();
?>
