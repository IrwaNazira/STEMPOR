<?php
// session_start();
include_once("dbconnect.php");

$schoolemail = $_POST['schoolemail']; 
$password = sha1($_POST['password']);

try {
    $sql = "SELECT * FROM user WHERE schoolemail = '$schoolemail' AND password = '$password'";
    $stmt = $conn->prepare($sql );
    $stmt->execute();
  
    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $count = $stmt->rowCount();
    $users = $stmt->fetchAll();  

    if ($count > 0){
        foreach($users as $user) {
            $schoolemail = $user['schoolemail'];
            $schoolname = $user['schoolname'];
        } 
        
        echo "<script> alert('Login Success')</script>";
        echo "<script> window.location.replace('mainpage.php?schoolemail=".$schoolemail."&schoolname=".$schoolname."') </script>;";
    }else{
        echo "<script> alert('Login Failed')</script>";
        echo "<script> window.location.replace('index.html') </script>;";
    }

} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
  $conn = null;
?>