<?php 

session_start();

if(!isset($_SESSION['customer_email'])){
    
    echo "<script>window.open('../checkout.php','_self')</script>";
    
}else{

include("includes/db.php");
include("functions/functions.php");
    
if(isset($_GET['order_id'])){
    
    $order_id = $_GET['order_id'];
    
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Trang chủ</title>
    <link rel="shortcut icon" type="image/x-icon" href="https://icons.iconarchive.com/icons/cjdowner/cryptocurrency-flat/256/Ark-icon.png">
    <link rel="stylesheet" href="styles/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
   
   <div id="top"><!-- Top Begin -->
       
       <div class="container"><!-- container Begin -->
           
           <div class="col-md-6 offer"><!-- col-md-6 offer Begin -->
               
               <a href="#" class="btn btn-success btn-sm">
                   
                   <?php 
                   
                   if(!isset($_SESSION['customer_email'])){
                       
                       echo "Welcome: Guest";
                       
                   }else{
                       
                       echo "Welcome: " . $_SESSION['customer_email'] . "";
                       
                   }
                   
                   ?>
               
               </a>
               <a href="checkout.php"><?php items(); ?> Sản phẩm trong giỏ | Tổng tiền <?php total_price(); ?> </a>
            
           </div><!-- col-md-6 offer Finish -->
           
           <div class="col-md-6"><!-- col-md-6 Begin -->
               
               <ul class="menu"><!-- cmenu Begin -->
                   
                   <li>
                       <a href="../customer_register.php">Đăng ký</a>
                   </li>
                   <li>
                       <a href="my_account.php">Tài khoản của tôi</a>
                   </li>
                   <li>
                       <a href="../cart.php">Đi đến giỏ hàng</a>
                   </li>
                   <li>
                       <a href="../checkout.php">
                       
                        <?php 
                           
                           if(!isset($_SESSION['customer_email'])){
                       
                                echo "<a href='checkout.php'> Đăng nhập </a>";

                               }else{

                                echo " <a href='logout.php'> Đăng xuất </a> ";

                               }
                           
                         ?>
                       
                       </a>
                   </li>
                   
               </ul><!-- menu Finish -->
               
           </div><!-- col-md-6 Finish -->
           
       </div><!-- container Finish -->
       
   </div><!-- Top Finish -->
   
   <div id="navbar" class="navbar navbar-default"><!-- navbar navbar-default Begin -->
       
       <div class="container"><!-- container Begin -->
           
           <div class="navbar-header"><!-- navbar-header Begin -->
               
               <a href="../index.php" class="navbar-brand home"><!-- navbar-brand home Begin -->
                   
                   <img src="images/ecom-store-logo.png" alt="M-dev-Store Logo" class="hidden-xs">
                   <img src="images/ecom-store-logo-mobile.png" alt="M-dev-Store Logo Mobile" class="visible-xs">
                   
               </a><!-- navbar-brand home Finish -->
               
               <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                   
                   <span class="sr-only">Toggle Navigation</span>
                   
                   <i class="fa fa-align-justify"></i>
                   
               </button>
               
               <button class="navbar-toggle" data-toggle="collapse" data-target="#search">
                   
                   <span class="sr-only">Toggle Search</span>
                   
                   <i class="fa fa-search"></i>
                   
               </button>
               
           </div><!-- navbar-header Finish -->
           
           <div class="navbar-collapse collapse" id="navigation"><!-- navbar-collapse collapse Begin -->
               
               <div class="padding-nav"><!-- padding-nav Begin -->
                   
                   <ul class="nav navbar-nav left"><!-- nav navbar-nav left Begin -->
                       
                       <li>
                           <a href="../index.php">Trang chủ</a>
                       </li>
                       <li>
                           <a href="../shop.php">Sản phẩm</a>
                       </li>
                       <li class="active">
                           <a href="my_account.php">Tài khoản của tôi</a>
                       </li>
                       <li>
                           <a href="../cart.php">Giỏ hàng</a>
                       </li>
                       <li>
                           <a href="../contact.php">Liên hệ</a>
                       </li>
                       
                   </ul><!-- nav navbar-nav left Finish -->
                   
               </div><!-- padding-nav Finish -->
               
               <a href="../cart.php" class="btn navbar-btn btn-secondary right"><!-- btn navbar-btn btn-secondary Begin -->
                   
                   <i class="fa fa-shopping-cart"></i>
                   
                   <span><?php items(); ?> Sản phẩm trong giỏ</span>
                   
               </a><!-- btn navbar-btn btn-secondary Finish -->
               
               <div class="navbar-collapse collapse right"><!-- navbar-collapse collapse right Begin -->
                   
                   <button class="btn btn-secondary navbar-btn" type="button" data-toggle="collapse" data-target="#search"><!-- btn btn-secondary navbar-btn Begin -->
                       
                       <span class="sr-only">Toggle Search</span>
                       
                       <i class="fa fa-search"></i>
                       
                   </button><!-- btn btn-secondary navbar-btn Finish -->
                   
               </div><!-- navbar-collapse collapse right Finish -->
               
               <div class="collapse clearfix" id="search"><!-- collapse clearfix Begin -->
                   
                   <form method="get" action="results.php" class="navbar-form"><!-- navbar-form Begin -->
                       
                       <div class="input-group"><!-- input-group Begin -->
                           
                           <input type="text" class="form-control" placeholder="Search" name="user_query" required>
                           
                           <span class="input-group-btn"><!-- input-group-btn Begin -->
                           
                           <button type="submit" name="search" value="Search" class="btn btn-secondary"><!-- btn btn-secondary Begin -->
                               
                               <i class="fa fa-search"></i>
                               
                           </button><!-- btn btn-secondary Finish -->
                           
                           </span><!-- input-group-btn Finish -->
                           
                       </div><!-- input-group Finish -->
                       
                   </form><!-- navbar-form Finish -->
                   
               </div><!-- collapse clearfix Finish -->
               
           </div><!-- navbar-collapse collapse Finish -->
           
       </div><!-- container Finish -->
       
   </div><!-- navbar navbar-default Finish -->
   
   <div id="content"><!-- #content Begin -->
       <div class="container"><!-- container Begin -->
           <div class="col-md-12"><!-- col-md-12 Begin -->
               
               <ul class="breadcrumb"><!-- breadcrumb Begin -->
                   <li>
                       <a href="index.php">Home</a>
                   </li>
                   <li>
                       My Account
                   </li>
               </ul><!-- breadcrumb Finish -->
               
           </div><!-- col-md-12 Finish -->
           
           <div class="col-md-3"><!-- col-md-3 Begin -->
   
   <?php 
    
    include("includes/sidebar.php");
    
    ?>
               
           </div><!-- col-md-3 Finish -->
           
           <div class="col-md-9"><!-- col-md-9 Begin -->
               
               <div class="box"><!-- box Begin -->
                   
                   <h1 align="center"> Vui lòng xác nhận thanh toán của bạn </h1> 
                   
                   <form action="confirm.php?update_id=<?php echo $order_id;  ?>" method="post" enctype="multipart/form-data"><!-- form Begin -->
                       
                       <div class="form-group"><!-- form-group Begin -->
                           
                         <label> Hóa đơn: </label>
                         <select name="invoice_no" class="form-control"><!-- form-control Begin -->
                              
                              <option selected disabled> Select a invoice </option>
                              
                              <?php 
                              
                              $get_customer_orders = "select * from customer_orders where customer_id = 7 ";
                              $run_customer_orders = mysqli_query($con,$get_customer_orders);
                              
                              while ($row_customer_orders=mysqli_fetch_array($run_customer_orders)){
                                  
                                  $customer_orders_id = $row_customer_orders['order_id'];
                                  $customer_orders_title = $row_customer_orders['invoice_no'];
                                  
                                  echo "
                                  
                                  <option value='$customer_orders_id'> $customer_orders_title </option>
                                  
                                  ";
                                  
                              }
                              
                              ?>
                              
                          </select>
                       </div><!-- form-group Finish -->
                       
                       <div class="form-group"><!-- form-group Begin -->
                           
                         <label> Số tiền đã trả: </label>
                          
                          <input type="text" class="form-control" name="amount_sent" required>
                           
                       </div><!-- form-group Finish -->
                       
                       <div class="form-group"><!-- form-group Begin -->
                           
                         <label> Chọn Phương thức Thanh toán: </label>
                          
                          <select name="payment_mode" class="form-control"><!-- form-control Begin -->
                              
                              <option> Chọn Phương thức Thanh toán </option>
                              <option> Phương thức 1 </option>
                              <option> Phương thức 2 </option>
                              <option> Phương thức 3 </option>
                              <option> Phương thức 4 </option>
                              
                          </select><!-- form-control Finish -->
                           
                       </div><!-- form-group Finish -->
                       
                       <div class="form-group"><!-- form-group Begin -->
                           
                         <label> Hóa đơn giao dịch: </label>
                          
                          <input type="text" class="form-control" name="ref_no" required>
                           
                       </div><!-- form-group Finish -->
                       
                       <div class="form-group"><!-- form-group Begin -->
                           
                         <label> Mã thanh toán : </label>
                          
                          <input type="text" class="form-control" name="code" required>
                           
                       </div><!-- form-group Finish -->
                       
                       <div class="form-group"><!-- form-group Begin -->
                           
                         <label> Ngày thanh toán : </label>
                          
                          <input type="text" class="form-control" name="date" required>
                           
                       </div><!-- form-group Finish -->
                       
                       <div class="text-center"><!-- text-center Begin -->
                           
                           <button class="btn btn-secondary btn-lg" name="confirm_payment"><!-- tn btn-secondary btn-lg Begin -->
                               
                               <i class="fa fa-user-md"></i> Xác nhận
                               
                           </button><!-- tn btn-secondary btn-lg Finish -->
                           
                       </div><!-- text-center Finish -->
                       
                   </form><!-- form Finish -->
                   
                   <?php 
                   
                    if(isset($_POST['confirm_payment'])){
                        
                        $update_id = $_GET['update_id'];
                        
                        $invoice_no = $_POST['invoice_no'];
                        
                        $amount = $_POST['amount_sent'];
                        
                        $payment_mode = $_POST['payment_mode'];
                        
                        $ref_no = $_POST['ref_no'];
                        
                        $code = $_POST['code'];
                        
                        $payment_date = $_POST['date'];
                        
                        $complete = "Complete";
                        
                        $insert_payment = "insert into payments (invoice_no,amount,payment_mode,ref_no,code,payment_date) values ('$invoice_no','$amount','$payment_mode','$ref_no','$code','$payment_date')";
                        
                        $run_payment = mysqli_query($con,$insert_payment);
                        
                        $update_customer_order = "update customer_orders set order_status='$complete' where order_id='$update_id'";
                        
                        $run_customer_order = mysqli_query($con,$update_customer_order);
                        
                        $update_pending_order = "update pending_orders set order_status='$complete' where order_id='$update_id'";
                        
                        $run_pending_order = mysqli_query($con,$update_pending_order);
                        
                        if($run_pending_order){
                            
                            echo "<script>alert('Thank You for purchasing, your orders will be completed within 24 hours work')</script>";
                            
                            echo "<script>window.open('my_account.php?my_orders','_self')</script>";
                            
                        }
                        
                    }
                   
                   ?>
                   
               </div><!-- box Finish -->
               
           </div><!-- col-md-9 Finish -->
           
       </div><!-- container Finish -->
   </div><!-- #content Finish -->
   
   <?php 
    
    include("includes/footer.php");
    
    ?>
    
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
    
</body>
</html>
<?php } ?>