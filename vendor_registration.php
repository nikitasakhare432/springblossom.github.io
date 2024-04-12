<?php
session_start();
include("includes/db.php");

include("functions/functions.php");
  ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spring n' Blossom</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- owl carousel css file cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">
  <style>


  </style>
 
</head>
<body>

<!-- header section starts  -->

<header>

<div class="header-1">

    <a href="index.php" class="logo" > <img src="website/product_images/logo.jpgg" alt="Logo image" class="hidden-xs">  </a>
                               
<div class="col-md-6 offer">
    <a href="#" class="btn btn-sucess btn-sm">
        <?php

        if (!isset($_SESSION['vendor_email'])){
        echo "Welcome Guest";
      }else{
      echo "Welcome: " .$_SESSION['vendor_email'] . "";
    }


        ?>
    </a>
<a id="pr" href="#"> Shopping Cart Total Price: INR <?php totalPrice(); ?>, Total Items <?php item(); ?></a>
</div>
  
</div>

<div class="header-2">
   

<nav class="navbar"> 


     <ul >
      
            <li><a  href="index.php">HOME</a></li>
            <li><a  href="trimer.php">SHOP</a></li>
        <li><a href="contactus.php">CONTACT</a></li>
        <li><a  href="about.php">About</a></li>
       <div class="col-md-6">
        <ul class="menu">
            <li>
                         <div class="collapse clearfix" id="search">
                             <form class="navbar-form" method="get" action="result.php">
                                 <div class="input-group">
                                     <input type="text" name="user_query" placeholder="search" class="form-control" required="">
                                     <button type="submit" value="search" name="search" class="btn btn-primary">
                                         <i class="fa fa-search"></i>
                                     </button>
                                 </div>
                             </form>
                         </div>
                   </li>



                <li>
                  <a href="cart.php" class="">
                    <i class="fa fa-shopping-cart"></i>
                      <span><?php item(); ?> items in cart</span>
                        </a>
                </li>
                   

                   <li>
                   <a  href="#customer_registration.php"><i class="fa fa-user-plus"></i>Register</a></li>
                   <li>
                   <li>
                   <a class="active" href="vendor_registration.php"><i class=""></i>Vendors</a></li>
                   <li>
                   <?php

                    if (!isset($_SESSION['customer_email'])){
                    echo "<a href='checkout.php'>My Account</a>";

                         } else{
                    
                    echo "<a href='customer/my_account.php?my_order'>My Account</a>";
                
                         }

                    ?></li> 
                     
                   <li>
                   <a href="cart.php"><i class="fa fa-shopping-cart"></i>Goto Cart</a></li>
                    
                   <li>
                    <?php

                    if (!isset($_SESSION['customer_email'])){
                    echo "<a href='checkout.php'>Login</a>";

                         } else{
                    
                    echo "<a href='logout.php'>Logout</a>";
                
                         }

                    ?>


                   </li>
             </ul>
       </div>
</ul>



</nav></div></header>

<!-- header section End  -->

<section class="content" id="content">
  <div class="container">
    <div class="col-md-12">
      <ul class="breadcrumb">
     
        <li><span>vendor Registration</span></li>
        

      </ul>

    </div>
</div></section>  
    
  <div class="c-9">
    <div class="rx">
      <div class="box-header">
        <center>
          <h2>Register A New Account</h2>
          
        </center>
      </div>
      <div>
        <form action="vendor_registration.php" method="post" enctype="multipart/form-data">
          <div class="roup">
            <label>Vendor Name</label>
            <input type="text" name="v_name" required="" class="form-control">
          </div>
          <div class="roup">
            <label>Vendor Email</label>
            <input type="text" name="v_email" class="form-control" required="">
            
          </div>
          <div class="roup">
            <label>Vendor Password</label>
            <input type="password" name="v_password" class="form-control" required="">
            
          </div>
          <div class="roup">
            <label>Shop</label>
            <input type="text" name="v_country" class="form-control" required="">
            
          </div>
         
        <div class="roup">
            <label>City</label>
            <input type="text" name="v_city" class="form-control" required="">
            
          </div>
          <div class="roup">
            <label>Contact Number</label>
            <input type="text" name="v_contact" class="form-control" required="">
            
          </div>
          <div class="roup">
            <label>Address</label>
            <input type="text" name="v_address" class="form-control" required="">
            
          </div>
          <div class="roup">
            <label>Image</label>
            <input type="file" name="v_image" class="form-control" required="">
            
          </div>
          <div class="text-center">
            <button type="submit" name="submit" class="btn btn-primary">
              
              <i class="fa fa-user-md"></i> Register
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
  

     <!-- footer section starts  -->
   <?php
      include("includes/footer.php");  
      ?>
<!-- footer section   -->

</body></html>

<?php 

if (isset($_POST['submit'])) {
    $v_name = $_POST['v_name'];
    $v_email = $_POST['v_email'];
    $v_password = $_POST['v_password'];
    $v_country = $_POST['v_shop']; // I noticed you have used v_country, it may be v_shop here
    $v_city = $_POST['v_city'];
    $v_contact = $_POST['v_contact'];
    $v_address = $_POST['v_address'];
    $v_image = $_FILES['v_image']['name'];
    $v_tmp_image = $_FILES['v_image']['tmp_name'];
    $v_ip = getUserIp();

    move_uploaded_file($v_tmp_image, "vendor/vendor_images/$v_image");
    $insert_vendor = "insert into vendors(vendor_name, vendor_email, vendor_pass, vendor_shop, vendor_city, vendor_contact, vendor_address, vendor_image, vendor_ip) values('$v_name','$v_email','$v_password','$v_shop','$v_city','$v_contact','$v_address','$v_image','$v_ip')";
    $run_vendor = mysqli_query($con, $insert_vendor);

    if ($run_vendor) {
        // Registration successful, redirect to login page using JavaScript
        echo "<script>alert('You have been registered successfully')</script>";
        echo "<script>window.open('vendor/vendor_login.php','_self')</script>";
        exit();
    } else {
        echo "<script>alert('Registration failed. Please try again.')</script>";
        echo "<script>window.open('vendor_registration.php','_self')</script>";
        exit();
    }
}


?>