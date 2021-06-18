<?php
include_once("dbconnect.php");
include_once("navbar.php");
$schoolemail = $_GET['schoolemail']; 
$schoolname = $_GET['schoolname'];

// if (isset($_COOKIE["email"])){
//   echo "Value is: " . $_COOKIE["email"];
// }
// echo "<head></head><link rel='stylesheet' href='styles.css'></head>";

if (isset($_GET['programname'])) {
  $programname = $_GET['programname'];
  $date = $_GET['date'];
  $programdescription = $_GET['programdescription'];
  $schoolinvolve = $_GET['schoolinvolve'];
  $studentinvolve = $_GET['studentinvolve'];
  $company = $_GET['company'];
  $companyname = $_GET['companyname'];
  try {
    $sql = "INSERT INTO steminfo(programname, date, programdescription,schoolinvolve,studentinvolve,company,companyname, schoolname)
    VALUES ('$programname', '$date', '$programdescription','$schoolinvolve','$studentinvolve','$company','$companyname','$schoolname')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "<script> alert('Insert Success')</script>";
    echo "<script> window.location.replace('mainpage.php?schoolemail=".$schoolemail."&schoolname=".$schoolname."') </script>;";
  } catch(PDOException $e) {
    echo "<script> alert('Insert Error')</script>";
    echo "Error: " . $e->getMessage();
    //echo "<script> window.location.replace('register.html') </script>;";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
</head>

<!-- <p>
<h2 align='center'><?php echo $name?></h2>
</p> -->

<body>
<div class="container">
    <h2 align="center">Insert STEM Info</h2> 

    <form action="addinfo.php" method="get" align="center" onsubmit="return confirm('Are you sure?');">
        <input type="hidden" id="schoolname" name="schoolname" value="<?php echo $schoolname;?>"><br>
        <input type="hidden" id="schoolemail" name="schoolemail" value="<?php echo $schoolemail;?>"><br>
        <label for="programname">Program Name:</label><br>
        <input type="text" id="programname" name="programname" value="" required><br>
        <br>
        <label for="date">Date:</label><br>
        <input type="date" id="date" name="date" value="" required><br>
        <br>
        <label for="programdescription">Program Description:</label><br>
        <input type="text" id="programdescription" name="programdescription" value="" required><br>
        <br>
        <label for="schoolinvolve">School Involve (Enter School Name)</label><br>
        <input type="text" id="schoolinvolve" name="schoolinvolve" value="" required><br>
        <br>
        <label for="studentinvolve">Student Involve (eg: form 5 students)</label><br>
        <input type="text" id="studentinvolve" name="studentinvolve" value="" required><br>
        <br>
        <label for="company">Organization Involve</label><br>
        <select id="company" name="company" value="" required><br>
        <option value="industry">Industry</option>
        <option value="agency">Agency</option>
        <option value="none">None</option>
        </select>
        <br>
        <br>
        <label for="companyname">Organization Name</label><br>
        <input type="text" id="companyname" name="companyname" value="" required><br>
        <br>
        <input type="submit" value="Submit" class="button">
        <br>
        <p align="center"><a href="mainpage.php?schoolemail=<?php echo $schoolemail.'&schoolname='.$schoolname?>">Cancel</a></p>
    </form>
    
    </div>
</body>

</html>