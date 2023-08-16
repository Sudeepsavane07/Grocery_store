<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<section class="about">

   <div class="row">

      <div class="box">
         <img src="images/about-img-1.png" alt="">
         <h3>why choose us?</h3>
         <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam, a quod, quis alias eius dignissimos pariatur laborum dolorem ad ullam iure, consequatur autem animi illo odit! Atque quia minima voluptatibus.</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

      <div class="box">
         <img src="images/about-img-2.png" alt="">
         <h3>what we provide?</h3>
         <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam, a quod, quis alias eius dignissimos pariatur laborum dolorem ad ullam iure, consequatur autem animi illo odit! Atque quia minima voluptatibus.</p>
         <a href="shop.php" class="btn">our shop</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">clients reivews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/pic-1.png" alt="">
         <p>Good shop for grocery items not for any other products. Never think of buying Mobile or Electronics products from Jiomart. Poor products and custmer serv ice is very bad. No one seems to bother about quality. Refund for anything forget.

.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Joe</h3>
      </div>

      <div class="box">
         <img src="images/pic-2.png" alt="">
         <p>Insta Mart is best for online shopping I bought a inst fiber from insta Mart it works really awesome and i like it .

Thank you insta mart

.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Sonam</h3>
      </div>

      <div class="box">
         <img src="images/pic-3.png" alt="">
         <p>Excellent service! Speedy delivery, good quality items, good customer service.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Sanket</h3>
      </div>

      <div class="box">
         <img src="images/pic-4.png" alt="">
         <p>This is one of the best experience we ever had ! Professional premium service,products were beautifully and securely packed and lil suprise.. who doesn't love it ? 🥰 I am so grateful and I'll be loyal customer..</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Priya</h3>
      </div>

      <div class="box">
         <img src="images/pic-5.png" alt="">
         <p>I was very happy that my orders were delivered perfectly. They also sent some extra food as gifts. Very polite and good manners. They covered every product that could leak or break with air sponges in a very durable way.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>john</h3>
      </div>

      <div class="box">
         <img src="images/pic-6.png" alt="">
         <p>The response for the order was very fast and it went out for delivery on the same day.unfortunately the delivery company took two days to deliver and there was perishable items in the order .</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Monika</h3>
      </div>

   </div>

</section>









<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>