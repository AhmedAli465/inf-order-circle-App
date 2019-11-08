<?php require '../connection.php' ?>

<!-- Latest compiled and inf-order-circle CSS -->
<link rel="stylesheet" type="text/css" href="../css/inf-order-circle.css">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
<!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css"> -->
<!-- <link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" -->
   <!-- rel = "stylesheet"> -->

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.9.2/i18n/jquery-ui-i18n.min.js"></script> -->
<!-- <script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script> -->


<script src="../js/order.js"></script>

<div class="sidebar-container">
  <div class="sidebar-logo">
    <a href="../index.php" title="" style="color: #fff">Order Circle</a>
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
    <li class="shipped">
      <a href="./shipped.php">
        <i class="fa fa-info-circle" aria-hidden="true"></i> Shipped
      </a>
    </li>
    <li class="cancelled" >
      <a href="./cancelled.php">
        <i class="fa fa-info-circle" aria-hidden="true"></i> Cancelled
      </a>
    </li>
    <li class="all">
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
    <!-- Main component for a primary marketing message or call to action -->
    <div class="jumbotron">
      <!-- <h1>This is about the add oredr</h1> -->
      <div class="row">
        <form method="POST">
          <!-- <h3>Add Order</h3> -->
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="">Order Id:</label>
              <input type="number" class="form-control" id="" placeholder="Order id .." name="order_id">
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">Order Date:</label>
              <!-- <input class="form-control" id="date" name="date" placeholder="MM/DD/YYYY" type="date"/> -->
              <input type="date" class="form-control" id="order_date" name="order_date" autocomplete="off" placeholder="dd-mm-yy">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="">Oredr Status:</label>
              <!-- <input type="email" class="form-control" id="inputEmail4" placeholder=""> -->
              <select name="order_status" class="form-control">
                <option value="">Select order Status..</option>
                <option value="Ok Oredr">Ok Oredr</option>
                <option value="Urgent Oredr">Urgent Oredr</option>
                <option value="Support Working">Support Working</option>
                <option value="On Hold">On Hold</option>
                <option value="In Production">In Production</option>
                <option value="Shipped">Shipped</option>
                <option value="Cancelled">Cancelled</option>
                <option value="Failed">Failed</option>
                <option value="Refunded">Refunded</option>
                <option value="VAT Held">VAT Held</option>
              </select>
            </div>
            <div class="form-group col-md-6">
              <label for="inputEmail4">Order Type:</label>
              <!-- <input type="email" class="form-control" id="inputEmail4" placeholder="Email"> -->
              <select name="order_type" class="form-control" id="order_type">
                <option value="Normal" selected="">Normal</option>
                <option value="Urgent">Urgent</option>
              </select>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Traking ID:</label>
              <input type="text" class="form-control" id="" name="traking_id" placeholder="Traking Id">
            </div>
            <div class="form-group col-md-6">
              <label for="">Shipped By:</label>
              <input type="date" class="form-control" disabled  id="shipped_order" name="shipped_by" autocomplete="off" placeholder="dd-mm-yy">
              <p>Remaning Days:</p>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Comments Factory:</label>
              <!-- <input type="email" class="form-control" id="inputEmail4" placeholder="Email"> -->
              <textarea name="fac_comments" class="form-control" cols="75" rows="10"></textarea>
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">Comments Supports:</label>
              <textarea name="support_comments" class="form-control" cols="75" rows="10"></textarea>
              <!-- <input type="password" class="form-control" id="inputPassword4" placeholder="Password"> -->
            </div>
          </div>
          
          <!-- <div class="form-row"> -->
          <div class="form-group form-row">
            <label for="inputEmail4">Direct Courier Traking:</label>
            <!-- <input type="text" class="form-control" id="inputEmail4" placeholder=""> -->
            <textarea name="" class="form-control" cols="75" rows="10"></textarea>
          </div>
          <!-- <div class="form-group col-md-6">
            <label for="inputPassword4">Password</label>
            <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
          </div> -->
          <!-- </div> -->
          
          
          <button type="submit" name="submit" id="Submit"class="btn btn-primary ">Submit Oredr</button>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
<?php 
  

  if(isset($_POST['submit'])){
        if(!empty($_POST['shipped_by'])){
            $date1 = new DateTime($_POST['shipped_by']);
            $date2 = new DateTime();
             
            $remaning_days = $date2->diff($date1)->format("%a");
             
            // echo $diff;
            // die();
        
           // echo '<script>alert("connected")</script>';
            $order_id = $_POST['order_id'];
            $order_date = $_POST['order_date'];
            $order_status = $_POST['order_status'];
            $order_type = $_POST['order_type'];
            $traking_id = $_POST['traking_id'];
            $shipped_by = $_POST['shipped_by'];
            $comments_fac= $_POST['fac_comments'];
            $comments_supp = $_POST['support_comments'];
            // if()

            $insert_order = "INSERT INTO `orders`( `order_id`, `order_date`, `order_status`, `order_type`, `tracking_id`, `shipped_by`, `comments_factory`, `comments_support`,`remaning_days`) VALUES ('$order_id','$order_date','$order_status','$order_type','$traking_id','$shipped_by','$comments_fac','$comments_supp','$remaning_days')";
            $run = mysqli_query($con,$insert_order);
            if($run){
                        echo '<script>alert("Order is Submited!")</script>';
                  echo '<script>window.open("add_order.php","_self")</script>';
    }
  }
      else {
            $date1 =new DateTime();
            echo $date=$date1->format('Y-m-d');

            // echo '<br>';
            $date=date_create($date);
            date_add($date,date_interval_create_from_date_string("3 days"));
            $shipped_by= date_format($date,"Y-m-d");
            
            $after_adding_days = new DateTime($shipped_by);
            $date2 = new DateTime();
           
            $remaning_days = $date2->diff($after_adding_days)->format("%a");
           // echo '<br>';
          //echo $diff;
        
           // echo '<script>alert("connected")</script>';
            $order_id = $_POST['order_id'];
            $order_date = $_POST['order_date'];
            $order_status = $_POST['order_status'];
            $order_type = $_POST['order_type'];
            $traking_id = $_POST['traking_id'];
            // $shipped_by = $_POST['shipped_by'];
            $comments_fac= $_POST['fac_comments'];
            $comments_supp = $_POST['support_comments'];
            // if()

            $insert_order = "INSERT INTO `orders`( `order_id`, `order_date`, `order_status`, `order_type`, `tracking_id`, `shipped_by`, `comments_factory`, `comments_support`,`remaning_days`) VALUES ('$order_id','$order_date','$order_status','$order_type','$traking_id','$shipped_by','$comments_fac','$comments_supp','$remaning_days')";
            $run = mysqli_query($con,$insert_order);
            if($run){
                        echo '<script>alert("Order is Submited!")</script>';
                  echo '<script>window.open("add_order.php","_self")</script>';    
      }
}}
  ?>
  <script>
     
    var test=<?php echo json_encode ('This is test'); ?>    
  </script>
  <!-- ( $string ); -->

 ?>