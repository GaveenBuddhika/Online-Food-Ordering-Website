<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<div class="heading">
   <h3>about us</h3>
   <p><a href="home.php">Home</a> <span> / About</span></p>
</div>


<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/about-img.svg" alt="">
      </div>

      <div class="content">
         <h3>Why choose us?</h3>
         <p>We take pride in our culinary craftsmanship, with chefs dedicated to creating mouthwatering dishes using the finest, freshest ingredients. Here fast doesn't mean sacrificing quality or service – our commitment to delivering quick, efficient service with a friendly smile ensures your order is our priority, ready before you know it.</p>
         <a href="menu.php" class="btn">our menu</a>
      </div>

   </div>

</section>

<section class="steps">

   <h1 class="title">simple steps</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/step-1.png" alt="">
         <h3>choose order</h3>
         <p>Embrace a taste adventure with our signature 'Chef's Choice' order.</p>
      </div>

      <div class="box">
         <img src="images/step-2.png" alt="">
         <h3>fast delivery</h3>
         <p>Experience the ultimate in convenience with our lightning-fast delivery service.</p>
      </div>

      <div class="box">
         <img src="images/step-3.png" alt="">
         <h3>enjoy food</h3>
         <p>"Savor the joy of every bite.</p>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">Customer Reviews</h1>

   <div class="swiper reviews-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <img src="images/pic-1.png" alt="">
            <p>"What sets කday apart is their attention to detail. The ingredients are always fresh, and you can taste the difference. The menu variety is impressive, offering something for everyone. The speed of service doesn't compromise on quality – it's the best of both worlds."</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Rusiru Jonty</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-2.png" alt="">
            <p>"I can't get enough of කday! The burgers are addictive, and the fries are the perfect side. The portion sizes are generous, offering great value for the price."</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Ashan Pappa</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-3.png" alt="">
            <p>"Tried කday for the first time, and I'm hooked! The flavors in their menu are fantastic, and the freshness of the ingredients really stands out. The online ordering system is super convenient, and my order was ready in no time."</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Oshada Kiriya</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-4.png" alt="">
            <p>"Incredibly impressed with the service at කday. The staff was not only fast but also attentive to special requests. The chicken sandwich exceeded my expectations – juicy and flavorful."</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Kavindu Pubba</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-5.png" alt="">
            <p>"Absolutely love [Restaurant Name]! The burgers are consistently delicious, and the fries are perfectly crispy every time. The speed of service is impressive, making it my go-to spot for a quick and satisfying meal."</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Yasiru Chutiya</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-6.png" alt="">
            <p>"The customizable options are a great touch, allowing me to create my ideal burger. Friendly staff, affordable prices, and consistently high-quality food make this place a winner!"</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Shashmitha Kukka</h3>
         </div>

      </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   grabCursor: true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
      slidesPerView: 1,
      },
      700: {
      slidesPerView: 2,
      },
      1024: {
      slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>