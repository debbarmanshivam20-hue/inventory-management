<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register Page</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="register.css">
	<link href='https://fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>
</head>
<body>
<?php
 include "db.php";
?>

<!--navbar-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">My Inventory</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="register.php">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Help</a>
        </li>
        
        
          
      
    </div>
  </div>
</nav>


<!--form-->
<div class="container formgrid">
  <div class="row">
    <div class="col">
      
    </div>
    <div class="col middle">

<form method="POST" action="register.php">
  <center><h2>Registration Form</h2></center><br>
   <center> <input type="text" name="namehtml" placeholder="Enter name" class="entry" required></center>
    <br>
    <center><input type="password" name="passhtml" placeholder="Enter Password" class="entry" required>
    </center>
    <br>
    <center><input type="submit" name="submit" value="SUBMIT" class="sub"></center>
    </form>    </div>
    <div class="col">
      
    </div>
  </div>
</div>

<video autoplay muted loop id="bg-video">
  <source src="img/abs.mp4" type="video/mp4">
</video>
<?php
if (isset($_POST['submit'])) {
  $name = $_POST['namehtml'];
  $psw = $_POST['passhtml'];

  $run = " INSERT INTO register(namedb, passworddb) VALUES('$name','$psw')";
  $go = mysqli_query($con, $run);
header('location: login.php');

}
?>





<!-- Footer -->
<footer class="bg-light text-center text-lg-start mt-5">
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2026 Copyright:
    <a class="text-dark" href="#">MyInventory</a>
  </div>
</footer>












<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>