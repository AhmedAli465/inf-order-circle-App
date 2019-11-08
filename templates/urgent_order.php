<?php require '../connection.php' ?>
<!-- Latest compiled and inf-order-circle CSS -->
<link rel="stylesheet" type="text/css" href="../css/inf-order-circle.css">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


<div class="sidebar-container">
  <div class="sidebar-logo"><a href="../index.php" style="color: #fff" title="">Order Circle</a>
    
  </div>
  <ul class="sidebar-navigation">
    <li class="header"></li>
    <!-- <li>
      <a href="./add_order.php">
        <i class="fa fa-home" aria-hidden="true"></i> Add Order
      </a>
    </li> -->
    <li>
      <a href="../index.php">
        <i class="fa fa-tachometer" aria-hidden="true"></i> All Order
      </a>
    </li>
    <!-- <li class="header">Ok Order</li> -->
    <li>
      <a href="./done_order.php">
        <i class="fa fa-users" aria-hidden="true"></i>Ok Order 
      </a>
    </li>
    <li>
      <a href="./urgent_order.php">
        <i class="fa fa-cog" aria-hidden="true"></i> Urgent Orders
      </a>
    </li>
    <li>
      <a href="./support_working.php">
        <i class="fa fa-info-circle" aria-hidden="true"></i> Support Working
      </a>
    </li>
    <li>
      <a href="./on_hold.php">
        <i class="fa fa-info-circle" aria-hidden="true"></i> On Hold
      </a>
    </li>
    <li>
      <a href="./in_production.php">
        <i class="fa fa-info-circle" aria-hidden="true"></i> In Production
      </a>
    </li>
    <li>
      <a href="./shipped.php">
        <i class="fa fa-info-circle" aria-hidden="true"></i> Shipped
      </a>
    </li>
    <li>
      <a href="./cancelled.php">
        <i class="fa fa-info-circle" aria-hidden="true"></i> Cancelled
      </a>
    </li>
    <li>
      <a href="./failed_order.php">
        <i class="fa fa-info-circle" aria-hidden="true"></i> Failed
      </a>
    </li>
    <li>
      <a href="./refund_order.php">
        <i class="fa fa-info-circle" aria-hidden="true"></i> Refunded
      </a>
    </li>
        <li>
      <a href="#">
        <i class="fa fa-info-circle" aria-hidden="true"></i> VAT Held
      </a>
    </li>
  </ul>
</div>
<div class="content-container">

  <div class="container-fluid">
<a href="templates/add_order.php" class="btn btn-info" title="">Add Order</a>
<h1></h1>
        <!-- <div class="card-header font-weight-bold"><h3>Urgent Orders </h3></div> -->
    <!-- Main component for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="card">
        <div class="card-body">
          <table class="table table-hover " id="myTable">
              <thead>
                <tr>
                  <th scope="col">Order ID</th>
                  <th scope="col">Order Date</th>
                  <th scope="col">Order Type</th>
                  <th scope="col">Order Status</th>
<!--                   <th scope="col">Tracking ID</th>
                  <th scope="col">Comments</th>
                  <th scope="col">OK Date</th>
                  <th scope="col">Action</th> -->
                  <!-- <th scope="col">Shipping Date</th> -->
                  <!-- <th scope="col">over Due</th> -->
                  <!-- <th scope="col">Delete</th> -->
                </tr>
              </thead>
              <tbody>
                  <?php
                     $select_all =" SELECT * FROM `orders` WHERE order_type='Urgent'";
                     $run = mysqli_query($con,$select_all);
                     if($run){
                      // echo '<script>alert("Order is Submited!")</script>';
                        foreach($run as $data){

                  ?>
                  <tr>
                    <td><?php echo $data['order_id']; ?></td>
                    <td><?php echo $data['order_date']; ?></td>
                    <td><?php echo $data['order_type']; ?></td>
                    <td><?php echo $data['order_status']; ?></td>
                  </tr>
                <?php  }} ?>
                </tbody>
            </table>
        </div>
      </div>
    </div>

  </div>
</div>


