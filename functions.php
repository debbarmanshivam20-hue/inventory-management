<?php
 include "db.php";
?>



<?php

function disp(){
    global $con;

    $query = mysqli_query($con,"SELECT * FROM `dashboard` ");

    echo "<div class='table-responsive'>";
    echo "<table class='table table-striped table-bordered'>";
    echo "<thead class='table-dark'>
            <tr>
                <th>ID</th>
                <th>Product Name</th>
                <th>Price</th>
                <th>Available</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
          </thead>";
    echo "<tbody>";

    while ($getvalue = mysqli_fetch_array($query)) {
        $id = $getvalue['id'];
        $pro_nme = $getvalue['pro_name'];
        $price_nme = $getvalue['price_db'];
        $avl_nme = $getvalue['avl_db'];  
        $img_nme = $getvalue['img_db'];

        echo "<tr>
                <td>$id</td>
                <td>$pro_nme</td>
                <td>$price_nme</td>
                <td>$avl_nme</td>
                <td><img src='img/$img_nme' class='img-fluid' style='max-width:180px; height:auto;'></td>
                <td>
                    <a href='edit.php?id=$id' class='btn btn-sm btn-primary'>Edit</a>
                    <a href='delete.php?id=$id' class='btn btn-sm btn-danger'>Delete</a>
                </td>
              </tr>";
    }

    echo "</tbody>";
    echo "</table>";
    echo "</div>";
}

?>



<style>
  .btn-primary, .btn-danger{
    width: 60px;
    font-family: Times New Roman;
    margin: 5px;
  }

  tr, th{
        font-family: Times New Roman;

  }





</style>




