<?php 

session_start();

include("includes/db.php");
include("functions/functions.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="styles/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
   
   <div id="top"><!-- Top Begin -->
       
       <div class="container"><!-- container Begin -->
           
           <div class="col-md-6 offer"><!-- col-md-6 offer Begin -->
               
               <a href="#" class="btn btn-secondary btn-sm">
                   
                   <?php 
                   
                   if(!isset($_SESSION['customer_email'])){
                       
                       echo "Welcome: Khách hàng";
                       
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
                       <a href="customer_register.php">Đăng ký</a>
                   </li>
                   <li>
                       <a href="checkout.php">Tài khoản của tôi</a>
                   </li>
                   <li>
                       <a href="cart.php">Đi đến giỏ hàng</a>
                   </li>
                   <li>
                       <a href="checkout.php">
                           
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
               
               <a href="index.php" class="navbar-brand home"><!-- navbar-brand home Begin -->
                   
                   <img src="images/logo-1.gif" class="hidden-xs" style="margin-top: 15px;">
                   <img src="images/logo-1.gif" class="visible-xs" style="margin-top: 15px;">
                   
               </a><!-- navbar-brand home Finish -->
               
               <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                   
                   <span class="sr-only">Toggle Navigation</span>
                   
                   <i class="fa fa-align-justify"></i>
                   
               </button>
               
           </div><!-- navbar-header Finish -->
           
           <div class="navbar-collapse collapse" id="navigation"><!-- navbar-collapse collapse Begin -->
               
               <div class="padding-nav"><!-- padding-nav Begin -->
                   
                   <ul class="nav navbar-nav left"><!-- nav navbar-nav left Begin -->
                       
                       <li class="<?php if($active=='Home') echo"active"; ?>">
                           <a href="index.php">Trang chủ</a>
                       </li>
                       <li class="<?php if($active=='Shop') echo"active"; ?>">
                           <a href="shop.php">Sản Phẩm</a>
                       </li>
                       <li class="<?php if($active=='Account') echo"active"; ?>">
                           
                           <?php 
                           
                           if(!isset($_SESSION['customer_email'])){
                               
                               echo"<a href='checkout.php'>Tài khoản của tôi</a>";
                               
                           }else{
                               
                              echo"<a href='customer/my_account.php?my_orders'>Tài khoản của tôi</a>"; 
                               
                           }
                           
                           ?>
                           
                       </li>
                       <li class="<?php if($active=='Cart') echo"active"; ?>">
                           <a href="cart.php">Giỏ hàng</a>
                       </li>
                       <li class="<?php if($active=='Contact') echo"active"; ?>">
                           <a href="contact.php">Liên hệ</a>
                       </li>
                       
                   </ul><!-- nav navbar-nav left Finish -->
                   
               </div><!-- padding-nav Finish -->
               
               <a href="cart.php" class="btn navbar-btn btn-secondary right"><!-- btn navbar-btn btn-secondary Begin -->
                   
                   <i class="fa fa-shopping-cart"></i>
                   
                   <span><?php items(); ?> Sản phẩm trong giỏ</span>
                   
               </a><!-- btn navbar-btn btn-secondary Finish -->
               
           </div><!-- navbar-collapse collapse Finish -->
           
       </div><!-- container Finish -->
       
   </div><!-- navbar navbar-default Finish -->