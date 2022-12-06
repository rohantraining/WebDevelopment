<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>book</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style_1.css">

</head>
<body>
   
<!-- header section starts  -->

<section class="header">

   <a href="home.php" class="logo">travel.</a>

   <nav class="navbar">
      <a href="logged_in.php">home</a>
      <a href="logged_in.php #about">about</a>
      <a href="logged_in.php #packages">packages</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<div class="heading" style="background:url(images/rishikesh.jpg) no-repeat">
   <h1 style="color:#fb8cff">Rishikesh Trek</h1>
</div>

<!-- booking section starts  -->

<section class="booking">

   <h1 class="heading-title">book your trip!</h1>

   <form action="data_Rishikesh.php" method="post" class="book-form">

      <div class="flex">
         <div class="inputBox">
            <span>name :</span>
            <input type="text" placeholder="enter your name" name="name" required>
         </div>
         <div class="inputBox">
            <span>email :</span>
            <input type="email" placeholder="enter your email" name="email" required>
         </div>
         <div class="inputBox">
            <span>phone :</span>
            <input type="text" placeholder="enter your number" name="phone" maxlength="10" required>
         </div>
         <div class="inputBox">
            <span>address :</span>
            <input type="text" placeholder="enter your address" name="address" required>
         </div>
         <div class="inputBox">
            <span>where to :</span>
            <input type="text" value="Rishikesh Trek" name="location" required>
         </div>
         <div class="inputBox">
            <span>how many :</span>
            <input type="number" min="1" max="8" placeholder="number of guests" name="guests" required>
         </div>
         <div class="inputBox">
            <span>arrivals :</span>
            <input type="date" name="arrivals" required>
         </div>
         <div class="inputBox">
            <span>leaving :</span>
            <input type="date" name="leaving" required>
         </div>
      </div>

      <input type="submit" value="submit" class="btn" name="send" >


   </form>



</section>




<!-- booking section ends -->



















<!-- footer section starts  -->

<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>quick links</h3>
         <a href="logged_in.php">home</a>
         <a href="logged_in.php #about"> about</a>
         <a href="logged_in.php #packages"> package</a>
         <a href="book_Rishikesh.php #booking"> book</a>
      </div>

      <!-- <div class="box">
         <h3>extra links</h3>
         <a href="#">  ask questions</a>
         <a href="#">  about us</a>
         <a href="#">  privacy policy</a>
         <a href="#">  terms of use</a>
      </div> -->

      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +91 8928213663 </a>
         <a href="#"> <i class="fas fa-phone"></i> +91 8097803929 </a>
         <a href="mailto:tourstravel806@gmail.com"> <i class="fas fa-envelope"></i> tourstravel806@gmail.com </a>
         <a href="https://www.google.com/maps/place/SIES+Graduate+School+of+Technology/@19.042813,73.0208893,17z/data=!4m5!3m4!1s0x3be7c3db5e2c85cd:0xef26c52d7d73816e!8m2!3d19.042813!4d73.023078" target="blank"> <i class="fas fa-map"></i> SIES GST Navi Mumbai, india - 4001706 </a>
      </div>

      <div class="box">
         <h3>follow us</h3>
         <a href="https://www.facebook.com/profile.php?id=100087673113037" target="blank"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="https://mobile.twitter.com/travelc37333199" target="blank"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="https://www.instagram.com/tourstravel806/" target="blank"> <i class="fab fa-instagram"></i> instagram </a>
         
      </div>

   </div>

   <div class="credit"> created by <span>Group 16</span> | all rights reserved! </div>

</section>

<!-- footer section ends -->









<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>