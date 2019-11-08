<?php 
  $con = mysqli_connect('localhost','root','','inf-order-circle');
    if(!$con){
      echo '<script>alert("connected")</script>';
    }
 ?>