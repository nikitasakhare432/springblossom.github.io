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
  
 
</head>
<body>

<!-- header section starts  -->

<header>

<div class="header-1">

    <a href="index.php" class="logo" > <img src="./website/product_images/logo.jpg" alt="Logo image" class="hidden-xs">  </a>
                               
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
<a id="pr" href="#"> Shopping Cart Total Price: ₹ <?php totalPrice(); ?>, Total Items <?php item(); ?></a>
</div>
  
</div>

<div class="header-2">
   

<nav class="navbar"> 


     <ul >
        <li>
            
            <li><a class="active" href="index.php">HOME</a></li>
             
            <li><a href="trimer.php">SHOP</a></li>
            <li><a href="#arrival">VALENTINE</a></li>
            <li><a href="#parlor">GIFTS</a></li>
            <li><a href="#garment">BIRTHDAY</a></li>
            <li><a href="#use">OTHERS</a></li>
            <li><a href="#deal">PLANTS</a></li>
            <li><a href="contactus.php">CONTACT</a></li>
            <li><a href="about.php">ABOUT</a></li>
 
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
                    
                    echo "<a href='customer/my_account.php?my_order'>My Account</a>";
                
                         }

                    ?>
                   </li> 

                   <li>
                   <a href="cart.php"><i class="fa fa-shopping-cart"></i>Goto Cart</a></li>
                    
                   <li>
                     <?php

                    if (!isset($_SESSION['customer_email'])){
                    echo "<a href='checkout.php'>Login</a>";

                         } else{
                    
                    echo "<a href='logout.php'>Logout</a>";
                
                         }

                    ?></li>
             </ul>
       </div>
</ul>
    
    
           
    
       
    
<!-- header section ends -->

<!-- home section starts  -->
<section class="home" id="home">

<h1 class="heading"> <span>Spring n' Blossom</span> </h1>

<div class="slideshow-container">
<!-- dynamic hairstyle images section starts  -->

<?php
$get_slider="select * from slider LIMIT 0,1";
$run_slider= mysqli_query($con,$get_slider);
while ($row= mysqli_fetch_array($run_slider)) {
  $slider_name= $row['slider_name'];
  $slider_image= $row['slider_image'];
   $slider_url= $row['slider_url'];

  echo "<div class='mySlides fade'>
  <a href='$slider_url'><img src='admin_area/slider_images/$slider_image'  width='1200' height='400'></a>

</div>
  ";
}

    ?>
<?php
$get_slider="select * from slider LIMIT 1,10";
$run_slider= mysqli_query($con,$get_slider);
while ($row= mysqli_fetch_array($run_slider)) {
  $slider_name= $row['slider_name'];
  $slider_image= $row['slider_image'];
   $slider_url= $row['slider_url'];
  echo "<div class='mySlides fade '>
  <a href='$slider_url'><img src='admin_area/slider_images/$slider_image' width='1400' height='400'></a>
        </div>";
}

    ?>


<!-- dynamic hairstyle images section End  -->

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<div  style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
  <span class="dot" onclick="currentSlide(4)"></span> 
  <span class="dot" onclick="currentSlide(5)"></span> 
  

</div>



</section>




<!-- home section ends -->
<!-- new this week section start -->
<!-- hot start -->

<div class="hot">    
    <div class="box">
        <div class="container">
            <div class="col-md-121">
                <h2>Latest this Week</h2>
           
          <!-- dynamic latest this week images section start  -->
          <div class=" col-sm-4" >
          <div class="row">
                   <?php

                   getPro();


                     ?>
 </div>
</div><!-- hot End -->
 </div>
         </div>
    </div>
</div>
          <!-- dynamic latest this week images section End  -->


                   
      


<!-- new this week section End -->


<!--saloon product section starts  -->

<!-- Trimer Start  -->
<section class="arrival" id="arrival">

<h1 class="heading"> <span>VALENTINE SPECIAL</span> </h1>

<div class="box-container">

    <div class="box">
        <div class="image">
           <a href="trimer.php?p_cat=22"> <img src="website/product_images/rose.jpeg"  alt="" width="250"></a>
        </div>
        <div class="info">
            <a href="trimer.php?p_cat=22"><h3>Red Rose Bouquet</h3></a>
            
        </div>
        <div class="overlay">
          
        </div>
    </div>
<!-- Trimer End  -->
    
    <div class="box">
        <div class="image">
           <a href="trimer.php?p_cat=23">  <img src="website/product_images/pink rose.jpeg" alt="" width="250"></a>
        </div>
        <div class="info">
          <a href="trimer.php?p_cat=23">  <h3>Enchanting Pink Rose</h3></a>
           
        </div>
        <div class="overlay">
        
        </div>
    </div>

    <div class="box">
        <div class="image">
           <a href="trimer.php?p_cat=24"> <img src="website/product_images/rose1.jpg" alt=""  width="250"></a>
        </div>
        <div class="info">
            <a href="trimer.php?p_cat=24"> <h3>Rose Splendor Bouquet</h3></a>
           
        </div>
        <div class="overlay">
    </div>
</div>

    <div class="box">
        <div class="image">
            <a href="trimer.php?p_cat=25"><img src="website/product_images/white rose.jpeg" alt="" width="200"></a>
        </div>
        <div class="info">
            <a href="trimer.php?p_cat=25"><h3>White Rose Bouquet</h3></a>
        
        </div>
        <div class="overlay">
    </div>
    </div>

     <div class="box">
        <div class="image">
           <a href="trimer.php?p_cat=26"> <img src="website/product_images/rose4.jpg"  alt="" width="250"></a>
        </div>
        <div class="info">
            <a href="trimer.php?p_cat=26"><h3>Rose Radiance Bouquet</h3></a>
            
        </div>
        <div class="overlay">
          
        </div>
    </div>

     <div class="box">
        <div class="image">
           <a href="trimer.php?p_cat=27"> <img src="website/product_images/rose3.jpg"  alt="" width="250"></a>
        </div>
        <div class="info">
            <a href="trimer.php?p_cat=27"><h3>Rose Majesty Bouquet</h3></a>
            
        </div>
        <div class="overlay">
          
        </div>
    </div>

     <div class="box">
        <div class="image">
           <a href="trimer.php?p_cat=28"> <img src="website/product_images/tulip.jpeg"  alt="" width="200"></a>
        </div>
        <div class="info">
            <a href="trimer.php?p_cat=28"><h3>Tulip Enchantment Bouquet</h3></a>
            
        </div>
        <div class="overlay">
          
        </div>
    </div>

     <div class="box">
        <div class="image">
           <a href="trimer.php?p_cat=29"> <img src="website/product_images/iris.jpeg"  alt="" width="250"></a>
        </div>
        <div class="info">
            <a href="trimer.php?p_cat=29"><h3>Enchanting Iris</h3></a>
            
        </div>
        <div class="overlay">
          
        </div>
    </div>

     <div class="box">
        <div class="image">
           <a href="trimer.php?p_cat=30"> <img src="website/product_images/mixed rose.jpeg"  alt="" width="250"></a>
        </div>
        <div class="info">
            <a href="trimer.php?p_cat=30"><h3>Rose Madley Bouquet</h3></a>
            
        </div>
        <div class="overlay">
          
        </div>
    </div>

     

     
    <div class="box">
        <div class="image">
           <a href="trimer.php?p_cat=36"> <img src="website/product_images/rose4.jpg"  alt=""width="250"></a>
        </div>
        <div class="info">
            <a href="trimer.php?p_cat=36"><h3>ROSE 8</h3></a>
            
        </div>
        <div class="overlay">
          
        </div>
    </div>

     <div class="box">
        <div class="image">
           <a href="trimer.php?p_cat=37"> <img src="website/product_images/iris.jpeg"  alt="" width="250"></a>
        </div>
        <div class="info">
            <a href="trimer.php?p_cat=37"><h3>IRIS </h3></a>
            
        </div>
        <div class="overlay">
          
        </div>
    </div>

    </div>
</section>

<!-- saloon products section ends -->
<!-- parlor products section starts -->

<section class="parlor" id="parlor">

<h1 class="heading"> <span>GIFTS FOR YOU</span> </h1>

<div class="box-container">

    <div class="box">
        <div class="image">
           <a href="trimer.php?p_cat=38"> <img src="website/product_images/gift1.jpg"  alt="" width="250"></a>
        </div>
        <div class="info">
            <a href="trimer.php?p_cat=38"><h3>Lip Care</h3></a>
            
        </div>
        <div class="overlay">
          
        </div>
    </div>
<!-- Trimer End  -->
    
    <div class="box">
        <div class="image">
           <a href="trimer.php?p_cat=39">  <img src="website/product_images/gift3.jpg" alt="" width="250"></a>
        </div>
        <div class="info">
          <a href="trimer.php?p_cat=39">  <h3>GIFT 1</h3></a>
           
        </div>
        <div class="overlay">
        
        </div>
    </div>

    <div class="box">
        <div class="image">
           <a href="trimer.php?p_cat=40"> <img src="website/product_images/gift2.webp" alt="" width="250"></a>
        </div>
        <div class="info">
            <a href="trimer.php?p_cat=40"> <h3>GIFT 2 </h3></a>
           
        </div>
        <div class="overlay">
    </div>
</div>

    <div class="box">
        <div class="image">
            <a href="trimer.php?p_cat=41"><img src="website/product_images/gift6.jpg" alt=""width="250"></a>
        </div>
        <div class="info">
            <a href="trimer.php?p_cat=41"><h3>GIFT 3</h3></a>
        
        </div>
        <div class="overlay">
    </div>
    </div>


     <div class="box">
        <div class="image">
           <a href="trimer.php?p_cat=44"> <img src="website/product_images/gift1.jpg"  alt=""width="250"></a>
        </div>
        <div class="info">
            <a href="trimer.php?p_cat=44"><h3>GIFT 4</h3></a>
            
        </div>
        <div class="overlay">
          
        </div>
    </div>


    </div>
</section>
<!-- parlor products section ends -->
<!-- garment products section start -->
<section class="garment" id="garment">

<h1 class="heading"> <span>BIRTHDAY</span> </h1>

<div class="box-container">

    <div class="box">
        <div class="image">
           <a href="trimer.php?p_cat=45"> <img src="website/product_images/birthday1.jpeg"  alt="" width="250"></a>
        </div>
        <div class="info">
            <a href="trimer.php?p_cat=45"><h3>BIRTHDAY 1</h3></a>
            
        </div>
        <div class="overlay">
          
        </div>
    </div>
<!-- Trimer End  -->
    
    <div class="box">
        <div class="image">
           <a href="trimer.php?p_cat=46">  <img src="website/product_images/birthday2.jpeg" alt="" width="250"></a>
        </div>
        <div class="info">
          <a href="trimer.php?p_cat=46">  <h3>BIRTHDAY 2</h3></a>
           
        </div>
        <div class="overlay">
        
        </div>
    </div>

    <div class="box">
        <div class="image">
           <a href="trimer.php?p_cat=47"> <img src="website/product_images/birthday3.jpeg" alt="" width="250"></a>
        </div>
        <div class="info">
            <a href="trimer.php?p_cat=47"> <h3>BIRTHDAY 3</h3></a>
           
        </div>
        <div class="overlay">
    </div>
</div>

    <div class="box">
        <div class="image">
            <a href="trimer.php?p_cat=48"><img src="website/product_images/birthday4.jpeg" alt="" width="250"></a>
        </div>
        <div class="info">
            <a href="trimer.php?p_cat=48"><h3>BIRTHDAY 4</h3></a>
        
        </div>
        <div class="overlay">
    </div>
    </div>


    </div>
</section>
<!--garment section ends-->
<section class="use" id="use">

<h1 class="heading"> <span>SPECIAL ITEMS</span> </h1>

<div class="box-container">

    <div class="box">
        <div class="image">
           <a href="trimer.php?p_cat=49"> <img src="website/product_images/other2.avif"  alt="" width="250"></a>
        </div>
        <div class="info">
            <a href="trimer.php?p_cat=49"><h3>ITEM 1</h3></a>
            
        </div>
        <div class="overlay">
          
        </div>
    </div>
<!-- Trimer End  -->
    
    <div class="box">
        <div class="image">
           <a href="trimer.php?p_cat=50">  <img src="website/product_images/other3.avif" alt="" width="250"></a>
        </div>
        <div class="info">
          <a href="trimer.php?p_cat=50">  <h3>ITEM 2</h3></a>
           
        </div>
        <div class="overlay">
        
        </div>
    </div>

    <div class="box">
        <div class="image">
           <a href="trimer.php?p_cat=51"> <img src="website/product_images/other1.avif" alt="" width="250"></a>
        </div>
        <div class="info">
            <a href="trimer.php?p_cat=51"> <h3>ITEM 2</h3></a>
           
        </div>
        <div class="overlay">
    </div>
</div>

    <div class="box">
        <div class="image">
            <a href="trimer.php?p_cat=52"><img src="website/product_images/other4.avif" alt="" width="250"></a>
        </div>
        <div class="info">
            <a href="trimer.php?p_cat=52"><h3>ITEM 3</h3></a>
        
        </div>
        <div class="overlay">
    </div>
    </div>

     <div class="box">
        <div class="image">
           <a href="trimer.php?p_cat=53"> <img src="website/product_images/other5.avif"  alt="" width="250"></a>
        </div>
        <div class="info">
            <a href="trimer.php?p_cat=53"><h3>ITEM 4</h3></a>
            
        </div>
        <div class="overlay">
          
        </div>
    </div>

     

     

     <div class="box">
        <div class="image">
           <a href="trimer.php?p_cat=56"> <img src="website/product_images/other6.avif"  alt="" width="250"></a>
        </div>
        <div class="info">
            <a href="trimer.php?p_cat=56"><h3>ITEM 5</h3></a>
            
        </div>
        <div class="overlay">
          
        </div>
    </div>

     <div class="box">
        <div class="image">
           <a href="trimer.php?p_cat=57"> <img src="website/product_images/other7.avif"  alt="" width="250"></a>
        </div>
        <div class="info">
            <a href="trimer.php?p_cat=57"><h3>ITEM 6</h3></a>
            
        </div>
        <div class="overlay">
          
        </div>
    </div>

     <div class="box">
        <div class="image">
           <a href="trimer.php?p_cat=58"> <img src="website/product_images/other1.avif"  alt="" width="250"></a>
        </div>
        <div class="info">
            <a href="trimer.php?p_cat=58"><h3>ITEM 7</h3></a>
            
        </div>
        <div class="overlay">
          
        </div>
    </div>

     

     <div class="box">
        <div class="image">
           <a href="trimer.php?p_cat=60"> <img src="website/product_images/other3.avif"  alt="" width="250"></a>
        </div>
        <div class="info">
            <a href="trimer.php?p_cat=60"><h3>item</h3></a>
            
        </div>
        <div class="overlay">
          
        </div>
    </div>

     

     
    
</section>


<!-- gallery section ends -->

<!-- deal section starts  -->

<section class="deal" id="deal">

<h1 class="heading"> <span> BEST DEALS </span> </h1>


<div class="icons-container">

<?php

$get_boxes="select * from boxes_section";
$run_box=mysqli_query($con,$get_boxes);
while ($row=mysqli_fetch_array($run_box)) {
    $box_id=$row['box_id'];
    $box_title=$row['box_title'];
    $box_desc=$row['box_desc'];
    $box_icon=$row['box_icon'];
    


  ?>

    <div class="icons">
        <i class="<?php echo $box_icon; ?>"></i>
        <h3><?php echo $box_title ?></h3>
        <p><?php echo $box_desc ?></p>

    </div>

    
    <?php } ?>
</div>

</section>

<!-- deal section ends -->

<!-- newsletter section starts  -->

<section class="newsletter" id="newsletter">

    <h1>Newsletter</h1>
    <p>Get In Touch For Latest Discounts And Updates</p>
    <form action="contactus.php" method="post">

                  
                        <input type="text" placeholder="Enter Your Name" ><br>
                   
                    
        <input type="email" placeholder="Enter Your Email">

                        <textarea type="txt" placeholder="Enter Your Message"></textarea>
                  
        <input type="submit" class="btn" >
    </form>

</section>

<!-- newsletter section ends -->

<!-- footer section starts  -->



<!-- footer section starts  -->



  <footer class="footer" id="footer">
     <div class="cuntainer">
        <div class="wolf">
           
            <div class="footer-ol">
                <h4>company</h4>
                <ul>
                    <li><a href="about.php">about us</a></li><br><br>
                    <li><a href="#">our services</a></li><br><br>
                    <li><a href="#">privacy policy</a></li><br><br>
                    <li><a href="#">affiliate program</a></li><br><br>
                </ul>
            </div>
            <div class="footer-ol">
                <h4>get help</h4>
                <ul>
                    <li><a href="#">FAQ</a></li><br><br>
                    <li><a href="#">Review</a></li><br><br>
                    <li><a href="#">returns</a></li><br><br>
                    <li><a href="#">order status</a></li><br><br>
                    <li><a href="#">payment options</a></li><br><br>
                </ul>
            </div>
            <div class="footer-ol">
                <h4>online shop</h4>
                <ul>
                    <li><a href="#">Valentine special</a></li><br><br>
                    <li><a href="#">Birthday</a></li><br><br>
                    <li><a href="#">Gifts</a></li><br><br>
                    <li><a href="#">Others</a></li><br><br>
                </ul>
            </div>
            <div class="footer-ol">
                <h4>follow us</h4>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook-f fa-x" style="color: #3b5998;"></i></a>
                    <a href="#"><i class="fab fa-twitter fa-x" style="color: #0084b4;"></i></a>
                    <a href="#"><i class="fab fa-instagram fa-x" style="color:   #E1306C;"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in fa-x" style="color:  #0077B5 ;"></i></a>

                </div>
            </div>
            <div class="pal">
                
            </div>
            <p class="credit">Copyright &copy; <span>2015-2024</span> | all rights reserved. | <span>Designed By GWS Tutor</span></p>
        </div>
     </div>
  </footer>

<!-- footer section ends -->
<!-- footer section ends -->

  </nav></div></header>  


<!-- jquery cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- owl carousel js file cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<!-- custom js file link  -->
<script src="main/js.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>  
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";

}
</script>



</body>
</html>

