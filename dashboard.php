<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dashboard Page</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="dash.css">
    <link href='https://fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>

</head>
<body>


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
          <a class="nav-link active" aria-current="page" href="dashboard.php">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="register.php">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="display.php">View</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Help</a>
        </li>
        
        
          
      
    </div>
  </div>
</nav>


<!--session-->

<?php
 include "db.php";
?>



<div class="container sessionhtml">
  <div class="row">
    <div class="col">
      <?php
session_start();
echo "Welcome: ". $_SESSION['namehtml2'];

?>
    </div>
    <div class="col">
      <!--spaced--> 
    </div>
    <div class="col">
     <a href="logout.php"><button class="btn btn-success">logout</button></a>
    </div>
  </div>
</div>












<!--enter data here-->

<div class="container dataentry">
  
  <div class="row">
    

    <form method="POST" enctype="multipart/form-data" action="dashboard.php" >
      
      <label class="lbl">Product Name:</label>
      <input type="text" name="product_html" placeholder="Name of the product" class="inp" required> 
      <br>
      <label class="lbl">Price:</label>
      <input type="number" name="price_html" placeholder="INR" class="inp1" step="0.01" required>
      <br>
      <label class="lbl">Availability:</label>
      <input type="checkbox" name="avl_html1" class="ck" value="1">YES
      <br>
      <label class="lbl">Upload image:</label>
      <input type="file" name="img1" value="upload" class="inp2">
      <br>
    <input type="submit" name="submit4" value="SUBMIT" class="sub1">



    </form>
  </div>


</div>



<?php
if (isset($_POST['submit4'])) {
  $pro_name = $_POST['product_html'];
  $price_value = $_POST['price_html'];
  $avli = $_POST['avl_html1'];
  $im= $_FILES['img1']['name'];
  $img1_type= $_FILES['img1']['type'];
  $img1_size= $_FILES['img1']['size'];
  $img1_tmp= $_FILES['img1']['tmp_name'];
  



  move_uploaded_file($img1_tmp, "img/$im");

$ins = "INSERT INTO dashboard(pro_name, price_db, avl_db, img_db) VALUES ('$pro_name','$price_value','$avli','$im')";


$run_dash = mysqli_query($con,$ins);


if(!$run_dash){
  echo"Something is wrong";
}
else{
  echo "<h3 style='text-align:center; font-weight:600; color:#c70028; font-family: Times New Roman'>Your Form Has Been Submitted</h3>";
}
  

}


?>














<!-- Footer -->
<footer class="bg-light text-center text-lg-start mt-5">
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2026 Copyright:
    <a class="text-dark" href="#">MyInventory</a>
  </div>
</footer>




















<video autoplay muted loop id="bg-video">
  <source src="img/abs.mp4" type="video/mp4">
</video>















<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>