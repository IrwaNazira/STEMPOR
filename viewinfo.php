<?php

require_once ('dbconnect.php');
include('viewinfo.html'); 

if (isset($_POST['search'])) {
  $criteria = $_POST['criteria'];
  
  $sql = "Select user.schoolname, user.schoolemail, user.password, steminfo.programname, steminfo.date, steminfo.programdescription, steminfo.schoolinvolve, steminfo.studentinvolve, 
  steminfo.company, steminfo.companyname From user, steminfo Where (steminfo.schoolname LIKE '%$criteria%' OR steminfo.programname LIKE '%$criteria%' OR steminfo.company LIKE '%$criteria%' OR steminfo.programdescription LIKE '%$criteria%') AND  user.schoolname = steminfo.schoolname order by user.schoolname";
}

else {

$sql = "Select user.schoolname, user.schoolemail, user.password, steminfo.programname, steminfo.date, steminfo.programdescription, steminfo.schoolinvolve, steminfo.studentinvolve, 
steminfo.company, steminfo.companyname From user, steminfo Where user.schoolname = steminfo.schoolname order by user.schoolname";
}

$stmt = $conn->prepare($sql);
    $stmt->execute();
    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $users = $stmt->fetchAll();  
?>

<!DOCTYPE html>
<html>
<title>STEM Information</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<body>

<div class="w3-container w3-center ">

<!DOCTYPE html>
<html>
<head>
<style>
/* <br>  */
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: auto;
}

td, th {
  border: 1px solid #008080;
  text-align: left;
  padding: 8px;
  text-align : center;
}

</style>
</head>
<body>

<html>
<head>

  <style>
    
  body {
     background: url("image/6.jpg");
       background-size: 100%;
       background-position: 5px -1px;
} 
  </style>

</head>
<body>
   
  <div class="divider"></div>
  <div id="divimg">
    <table border=1 align="center">
        
      <tr>
            
        <!-- <th>ID</th> -->
        <br>

<p><h2 align='center'>Search School Name / Program Name / Program Description / Organization </h2></p>


<!-- <p>z</p> -->
<form class="example" action="viewinfo.php" method="POST" style="margin:auto;max-width:300px">
  <input type="text" placeholder="Search.." name="criteria" id ="criteria" value = "">
  <button type="submit" name = "search"><i class="fa fa-search"></i></button>
</form>
<br>

</body>
        <br>
        <th>School Name</th>
        <th>Program Name</th>
        <th>Date</th>
        <th>Program Description</th>
        <th>School Involve</th>
        <th>Student Involve</th>
        <th>Organization Involve</th>
        <th>Organization Name</th>


      </tr>

      <?php
                foreach($users as $user) { 

          echo "<tr>";
          // echo "<td>".$user['id']."</td>";
          echo "<td>".$user['schoolname']."</td>";
          echo "<td>".$user['programname']."</td>";
          echo "<td>".$user['date']."</td>";
          echo "<td>".$user['programdescription']."</td>";
          echo "<td>".$user['schoolinvolve']."</td>";
          echo "<td>".$user['studentinvolve']."</td>";
          echo "<td>".$user['company']."</td>";
          echo "<td>".$user['companyname']."</td>";
  
            }


      ?>

    </table>
    <p><h2 align='center'>
    <a href="homepage.php" class="w3-bar-item w3-button w3-medium">Return To Homepage</a> </h2></p>
  </div>
</body>
</html>