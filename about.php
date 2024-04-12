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


* {
  font-family: Nunito, sans-serif;
}

.responsive-container-block {
  min-height: 75px;
  height: fit-content;
  width: 100%;
  padding-top: 10px;
  padding-right: 10px;
  padding-bottom: 10px;
  padding-left: 10px;
  display: flex;
  flex-wrap: wrap;
  margin-top: 0px;
  margin-right: auto;
  margin-bottom: 0px;
  margin-left: auto;
  justify-content: flex-start;
}

a {
  text-decoration-line: none;
  text-decoration-thickness: initial;
  text-decoration-style: initial;
  text-decoration-color: initial;
}

.text-blk {
  margin-top: 0px;
  margin-right: 0px;
  margin-bottom: 0px;
  margin-left: 0px;
  padding-top: 10px;
  padding-right: 10px;
  padding-bottom: 10px;
  padding-left: 10px;
  line-height: 25px;
}

.responsive-container-block.bigContainer {
  padding-top: 10px;
  padding-right: 30px;
  padding-bottom: 10px;
  padding-left: 30px;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  padding: 10px 50px 10px 50px;
}

.mainImg {
  color: black;
  width: 100%;
  height: auto;
  border-top-left-radius: 10px;
  border-top-right-radius: 10px;
  border-bottom-right-radius: 10px;
  border-bottom-left-radius: 10px;
}

.text-blk.headingText {
  font-size: 22px;
  font-weight: 700;
  line-height: 30px;
  color: rgb(176, 98, 255);
  padding-top: 0px;
  padding-right: 10px;
  padding-bottom: 0px;
  padding-left: 0px;
  margin-top: 0px;
  margin-right: 0px;
  margin-bottom: 5px;
  margin-left: 0px;
}

.allText {
  padding-top: 0px;
  padding-right: 0px;
  padding-bottom: 0px;
  padding-left: 0px;
  width: 40%;
  margin-top: 0px;
  margin-right: 0px;
  margin-bottom: 0px;
  margin-left: 0px;
}

.text-blk.subHeadingText {
  color: rgb(102, 102, 102);
  font-size: 26px;
  line-height: 32px;
  font-weight: 700;
  margin-top: 0px;
  margin-right: 0px;
  margin-bottom: 15px;
  margin-left: 0px;
  padding-top: 0px;
  padding-right: 10px;
  padding-bottom: 0px;
  padding-left: 0px;
}

.text-blk.description {
  font-size: 18px;
  line-height: 26px;
  color: rgb(102, 102, 102);
  margin-top: 0px;
  margin-right: 0px;
  margin-bottom: 50px;
  margin-left: 0px;
  font-weight: 400;
  padding-top: 0px;
  padding-right: 10px;
  padding-bottom: 0px;
  padding-left: 0px;
}

.explore {
  font-size: 16px;
  line-height: 28px;
  color: rgb(102, 102, 102);
  border-top-width: 2px;
  border-right-width: 2px;
  border-bottom-width: 2px;
  border-left-width: 2px;
  border-top-style: solid;
  border-right-style: solid;
  border-bottom-style: solid;
  border-left-style: solid;
  border-top-color: rgb(102, 102, 102);
  border-right-color: rgb(102, 102, 102);
  border-bottom-color: rgb(102, 102, 102);
  border-left-color: rgb(102, 102, 102);
  border-image-source: initial;
  border-image-slice: initial;
  border-image-width: initial;
  border-image-outset: initial;
  border-image-repeat: initial;
  cursor: pointer;
  background-color: white;
  margin-top: 0px;
  margin-right: 0px;
  margin-bottom: 0px;
  margin-left: 0px;
  padding-top: 8px;
  padding-right: 40px;
  padding-bottom: 8px;
  padding-left: 40px;
}

.explore:hover {
  background-image: initial;
  background-position-x: initial;
  background-position-y: initial;
  background-size: initial;
  background-repeat-x: initial;
  background-repeat-y: initial;
  background-attachment: initial;
  background-origin: initial;
  background-clip: initial;
  background-color: rgb(176, 98, 255);
  color: white;
  border-top-width: initial;
  border-right-width: initial;
  border-bottom-width: initial;
  border-left-width: initial;
  border-top-style: none;
  border-right-style: none;
  border-bottom-style: none;
  border-left-style: none;
  border-top-color: initial;
  border-right-color: initial;
  border-bottom-color: initial;
  border-left-color: initial;
  border-image-source: initial;
  border-image-slice: initial;
  border-image-width: initial;
  border-image-outset: initial;
  border-image-repeat: initial;
}

.responsive-container-block.Container {
  margin-top: 80px;
  margin-right: auto;
  margin-bottom: 50px;
  margin-left: auto;
  justify-content: center;
  align-items: center;
  max-width: 1320px;
  padding-top: 10px;
  padding-right: 10px;
  padding-bottom: 10px;
  padding-left: 10px;
}

.responsive-container-block.Container.bottomContainer {
  flex-direction: row-reverse;
  margin-top: 80px;
  margin-right: auto;
  margin-bottom: 50px;
  margin-left: auto;
  position: static;
}

.allText.aboveText {
  margin-top: 0px;
  margin-right: 0px;
  margin-bottom: 0px;
  margin-left: 40px;
}

.allText.bottomText {
  margin-top: 0px;
  margin-right: 40px;
  margin-bottom: 0px;
  margin-left: 0px;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  padding-top: 0px;
  padding-right: 15px;
  padding-bottom: 0px;
  padding-left: 0px;
}

.purpleBox {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  max-width: 430px;
  background-color: rgb(176, 98, 255);
  padding-top: 20px;
  padding-right: 20px;
  padding-bottom: 20px;
  padding-left: 20px;
  border-top-left-radius: 10px;
  border-top-right-radius: 10px;
  border-bottom-right-radius: 10px;
  border-bottom-left-radius: 10px;
  position: absolute;
  bottom: -35px;
  left: -8%;
}

.purpleText {
  font-size: 18px;
  line-height: 26px;
  color: white;
  margin-top: 0px;
  margin-right: 0px;
  margin-bottom: 10px;
  margin-left: 0px;
}

.ultimateImg {
  width: 30%;
  position: relative;
}

@media (max-width: 1024px) {
  .responsive-container-block.Container {
    max-width: 850px;
  }

  .mainImg {
    width: 55%;
    height: auto;
  }

  .allText {
    width: 40%;
    margin-top: 0px;
    margin-right: 0px;
    margin-bottom: 0px;
    margin-left: 20px;
  }

  .responsive-container-block.bigContainer {
    padding-top: 10px;
    padding-right: 10px;
    padding-bottom: 10px;
    padding-left: 10px;
  }

  .responsive-container-block.Container.bottomContainer {
    margin-top: 80px;
    margin-right: auto;
    margin-bottom: 50px;
    margin-left: auto;
  }

  .responsive-container-block.Container {
    max-width: 830px;
  }

  .allText.aboveText {
    margin-top: 30px;
    margin-right: 0px;
    margin-bottom: 0px;
    margin-left: 40px;
  }

  .allText.bottomText {
    margin-top: 30px;
    margin-right: 40px;
    margin-bottom: 0px;
    margin-left: 0px;
    text-align: left;
  }

  .text-blk.headingText {
    text-align: center;
  }

  .allText.aboveText {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    margin-top: 30px;
    margin-right: 0px;
    margin-bottom: 0px;
    margin-left: 0px;
  }

  .text-blk.subHeadingText {
    text-align: left;
    font-size: 26px;
    line-height: 32px;
  }

  .text-blk.description {
    text-align: left;
    line-height: 24px;
  }

  .explore {
    margin-top: 0px;
    margin-right: 0px;
    margin-bottom: 0px;
    margin-left: 0px;
  }

  .responsive-container-block.bigContainer {
    padding-top: 10px;
    padding-right: 30px;
    padding-bottom: 10px;
    padding-left: 30px;
  }

  .responsive-container-block.Container {
    justify-content: space-evenly;
  }

  .purpleBox {
    bottom: 10%;
  }

  .responsive-container-block.Container.bottomContainer {
    padding-top: 10px;
    padding-right: 0px;
    padding-bottom: 10px;
    padding-left: 0px;
    max-width: 930px;
  }

  .allText.bottomText {
    width: 40%;
  }

  .purpleBox {
    bottom: auto;
    left: -10%;
    top: 70%;
  }

  .mainImg {
    width: 100%;
  }

  .text-blk.headingText {
    text-align: left;
  }
}

@media (max-width: 768px) {
  .allText {
    width: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding-top: 0px;
    padding-right: 0px;
    padding-bottom: 0px;
    padding-left: 0px;
  }

  .responsive-container-block.Container {
    flex-direction: column;
    height: auto;
  }

  .text-blk.headingText {
    text-align: center;
  }

  .text-blk.subHeadingText {
    text-align: center;
    font-size: 24px;
  }

  .text-blk.description {
    text-align: center;
    font-size: 18px;
  }

  .allText {
    margin-top: 40px;
    margin-right: 0px;
    margin-bottom: 0px;
    margin-left: 0px;
  }

  .allText.aboveText {
    margin-top: 40px;
    margin-right: 0px;
    margin-bottom: 0px;
    margin-left: 0px;
  }

  .responsive-container-block.Container {
    margin-top: 80px;
    margin-right: auto;
    margin-bottom: 50px;
    margin-left: auto;
  }

  .responsive-container-block.Container.bottomContainer {
    margin-top: 50px;
    margin-right: auto;
    margin-bottom: 50px;
    margin-left: auto;
  }

  .allText.bottomText {
    margin-top: 40px;
    margin-right: 0px;
    margin-bottom: 0px;
    margin-left: 0px;
  }

  .mainImg {
    width: 100%;
    margin-top: 0px;
    margin-right: 0px;
    margin-bottom: -70px;
    margin-left: 0px;
  }

  .responsive-container-block.Container.bottomContainer {
    flex-direction: column;
  }

  .ultimateImg {
    width: 100%;
  }

  .purpleBox {
    position: static;
  }

  .allText.bottomText {
    width: 100%;
    align-items: flex-start;
  }

  .text-blk.headingText {
    text-align: left;
  }

  .text-blk.subHeadingText {
    text-align: left;
  }

  .text-blk.description {
    text-align: left;
  }

  .ultimateImg {
    position: static;
  }

  .mainImg {
    margin-top: 0px;
    margin-right: 0px;
    margin-bottom: 0px;
    margin-left: 0px;
  }

  .ultimateImg {
    position: relative;
  }

  .purpleBox {
    margin-top: 0px;
    margin-right: 0px;
    margin-bottom: 0px;
    margin-left: 0px;
    position: absolute;
    left: 0px;
    top: 80%;
  }

  .allText.bottomText {
    margin-top: 100px;
    margin-right: 0px;
    margin-bottom: 0px;
    margin-left: 0px;
  }
}

@media (max-width: 500px) {
  .responsive-container-block.Container {
    padding-top: 10px;
    padding-right: 0px;
    padding-bottom: 10px;
    padding-left: 0px;
    width: 100%;
    max-width: 100%;
  }

  .mainImg {
    width: 80%;
  }

  .responsive-container-block.bigContainer {
    padding-top: 10px;
    padding-right: 25px;
    padding-bottom: 10px;
    padding-left: 25px;
  }

  .text-blk.subHeadingText {
    font-size: 24px;
    padding-top: 0px;
    padding-right: 0px;
    padding-bottom: 0px;
    padding-left: 0px;
    line-height: 28px;
  }

  .text-blk.description {
    font-size: 16px;
    padding-top: 0px;
    padding-right: 0px;
    padding-bottom: 0px;
    padding-left: 0px;
    line-height: 22px;
  }

  .allText {
    padding-top: 0px;
    padding-right: 0px;
    padding-bottom: 0px;
    padding-left: 0px;
    width: 100%;
  }

  .allText.bottomText {
    margin-top: 50px;
    margin-right: 0px;
    margin-bottom: 0px;
    margin-left: 0px;
    padding: 0 0 0 0;
    margin: 30px 0 0 0;
  }

  .ultimateImg {
    position: static;
  }

  .purpleBox {
    position: static;
  }

  .stars {
    width: 55%;
  }

  .allText.bottomText {
    margin-top: 75px;
    margin-right: 0px;
    margin-bottom: 0px;
    margin-left: 0px;
  }

  .responsive-container-block.bigContainer {
    padding-top: 10px;
    padding-right: 20px;
    padding-bottom: 10px;
    padding-left: 20px;
  }

  .purpleText {
    font-size: 16px;
    line-height: 22px;
  }

  .explore {
    padding: 6px 35px 6px 35px;
    font-size: 15px;
  }
}

.box {
        border: 1px solid black; /* Add border to each box */
        padding: 10px; /* Add padding for better spacing */
        margin-bottom: 20px; /* Add margin between boxes */
    }
.reviews .box-container{
   max-width: 1200px;
   margin:0 auto;
   display: grid;
   grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
   gap:1.5rem;
   align-items: flex-start;
   justify-content: center;
}

.reviews .box-container .box{
   padding:2rem;
   text-align: center;
   background-color: var(--white);
   box-shadow: var(--box-shadow);
   border:var(--border);
   border-radius: .5rem;
}

.reviews .box-container .box img{
   height: 10rem;
   width: 10rem;
   border-radius: 50%;
}

.reviews .box-container .box p{
   padding:1rem 0;
   font-size: 1.5rem;
   color:var(--light-color);
   line-height: 2;
}

.reviews .box-container .box .stars{
   display: inline-block;
   background: var(--light-bg);
   border-radius: .5rem;
   padding:1rem 1.5rem;
   border:var(--border);
}

.reviews .box-container .box .stars i{
   color:var(--orange);
   font-size: 1.7rem;
   margin:0 .3rem;
}

.reviews .box-container .box h3{
   font-size: 2rem;
   color:var(--black);
   margin-top: 1rem;
}

  </style>
 
</head>
<body>

<!-- header section starts  -->

<header>

<div class="header-1">

    <a href="index.php" class="logo" > <img src="website/product_images/logo.jpg" alt="Logo image" class="hidden-xs">  </a>
                               
<div class="col-md-6 offer">
    <a href="#" class="btn btn-sucess btn-sm">
        <?php

        if (!isset($_SESSION['customer_email'])){
        echo "Welcome Guest";
      }else{
      echo "Welcome: " .$_SESSION['customer_email'] . "";
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
            <li><a class="active" href="about.php">ABOUT</a></li>
          
 
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
                   <a  href="customer_registration.php"><i class="fa fa-user-plus"></i>Register</a></li>
                   <li>
                   <li>
                   <a  href="vendor_registration.php"><i class=""></i>Vendors</a></li>
                   <li>
                   <?php

                    if (!isset($_SESSION['customer_email'])){
                    echo "<a href='checkout.php'>My Account</a>";

                         } else{
                    
                    echo "<a href='customer/my_account.php?my_order' class='active'>My Account</a>";
                
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
     
        <li><span>About</span></li>
        

      </ul>

    </div>
</div></section>  
    
 
     <div class="about" style="padding:128px 16px" id="">

<div class="responsive-container-block bigContainer">

  <div class="responsive-container-block Container bottomContainer">
    <div class="ultimateImg">
      <img class="mainImg" src="website/product_images/rose4.jpg" >
      <div class="purpleBox">
        <p class="purpleText">
         We Create Lovely Floral Arrangements With Only The Freshest Flowers
        </p>
        <img class="stars" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/mp5.svg">
      </div>
    </div>
    <div class="allText bottomText">
      <p class="text-blk headingText">
        About Us
      </p>
      <p class="text-blk subHeadingText">
        Bloom 'n Blossom
      </p>
      <p class="text-blk description">
        We are committed to offering only the finest and most beautiful floral arrangements and gifts, backed by service that is friendly, helpful and prompt.
      <br>Our florists have original, creative and fun ideas about how to make any gift occasion something special for both you and the recipient, whoever they may be and for whatever purpose your gift is for.
      </p>
      <a href="saloon.php" class="explore">
        View Flowers .
      </a>
    </div>
  </div>
</div>


<section class="content" id="content">
  <div class="container">
    <div class="col-md-12">
      <ul class="breadcrumb">
     
        <li><span>Customer Review</span></li>
        

      </ul>

    </div>
</div></section> 



<section class="reviews" id="reviews">

    <h1 class="title" style="text-align:center; font-size:30px; padding:10px;">client's reviews</h1>

    <div class="box-container">

        <div class="box">
            <img src="website/product_images/iris.jpeg" alt="">
            <p>"It was good and delivery was"<br>
It was good and delivery was also good</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Priya Sakhare</h3>
        </div>

        <div class="box">
            <img src="website/product_images/rose1.jpg" alt="">
            <p>"Flowers fresh and Beautiful "<br>
           Service is also nice. Thanks and she's happy.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Uday Dhage</h3>
        </div>

        <div class="box">
            <img src="website/product_images/iris.jpeg" alt="">
            <p>thanku very much it was really my first experience ur service is really good thankusomuch ?</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>prisika</h3>
        </div>

        <div class="box">
            <img src="website/product_images/pic-2.png" alt="">
            <p>Love it</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>jeevan</h3>
        </div>

        <div class="box">
            <img src="website/product_images/pic-1.png" alt="">
            <p>flowers are fresh</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>flora</h3>
        </div>

        <div class="box">
            <img src="website/product_images/other7.avif" alt="">
            <p>Varieties of flowers and qualities of gifts were excellent</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>lover</h3>
        </div>

    </div>

</section>


  
     <!-- footer section starts  -->
   <?php
      include("includes/footer.php");  
      ?>
<!-- footer section   -->

</body></html>