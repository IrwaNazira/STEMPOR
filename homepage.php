<!DOCTYPE html>
<html>
<title>STEMPOR Homepage</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"><title>Bootstrap Example</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<body>

<!-- Sidebar -->
<div class="w3-sidebar w3-teal w3-bar-block w3-border-right" style="width:15%">
<br>
  <h3 class="w3-bar-item w3-center ">Menu</h3>
  <a href="index.html" class="w3-bar-item w3-button w3-center w3-border-bottom ">Login to STEMPOR</a>
  <a href="viewinfo.php" class="w3-bar-item w3-button w3-center w3-border-bottom ">View Activity</a>
</div>

<!-- Page Content -->
<div style="margin-left:15%" align="center">

<div class="w3-container w3-teal w3-animate-right">
  <h1>WELCOME TO STEMPOR</h1>
</div>


<style>
  body {
     background: url("image/6.jpg");
       background-size: 100%;
       background-position: 5px -1px;
} 
  </style>

</div>
<!-- slideshow -->
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.mySlides {display:none;}
</style> -->


<div style="margin-left:15%" align="center">
<div class="w3-content w3-section" style="width:50%">
  <img class="mySlides" src="image\1.jpg" style="width:100%" height="40%">
  <img class="mySlides" src="image\3.jpg" style="width:100%" height="40%">
  <img class="mySlides" src="image\7.jpg" style="width:100%" height="25%">
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 3000); // Change image every 3 seconds
}
</script>

</body>

<div class="container-sm border w3-panel w3-pale-green w3-bottombar w3-border-teal ">

<p> <br>
STEM PORtal (STEMPOR) is a database system that stores information about the state education department's 
Science Technology Engineering Mathematics programme for schools in Kedah. Science Technology Engineering and Mathematics (STEM), 
formerly Science Mathematics Engineering and Technology (SMET), is a catch-all term for these academic disciplines. 
In order to improve competitiveness in science and technology development, this term is usually applied to school education policy and curriculum choices.</p>

<p>
In the early 1990s, the first STEM programme was implemented in the United States. 
The goal was to encourage Americans to study science, technology, engineering, and mathematics (STEM) 
subjects and pursue careers in STEM fields such as engineering, medicine, and science. 
The STEM empowerment agenda was clearly outlined in the Malaysian Education Blueprint 2016-2020 
as a proactive step toward bringing Malaysia in line with other developed countries. Beginning in 2017, 
STEM has been taught in schools. STEM's main goal is to encourage students to pursue careers in related fields.</p>


</div>


</body>
</html>

