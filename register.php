<?php
include_once("dbconnect.php");


$schoolname = $_POST['schoolname'];
$schoolemail = $_POST['schoolemail']; 
$password = sha1($_POST['password']);


        try {
            $sql = "INSERT INTO user(schoolname, schoolemail, password)
            VALUES ('$schoolname', '$schoolemail', '$password')";
            // use exec() because no results are returned
            $conn->exec($sql);
            echo "<script> alert('Registration Success')</script>";
            echo "<script> window.location.replace('index.html') </script>;";
        } catch(PDOException $e) {
            echo "<script> alert('Registration Error')</script>";
            echo "<script> window.location.replace('register.html') </script>;";
          
        }
        $conn = null;
     

?>