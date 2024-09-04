<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

// if(!isset($user_id)){
//    header('location:login.php');
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>about us</h3>
   <p> <a href="home.php">Home</a> / About </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/about-img.jpg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>Choosing Thebookcafe can allow you to purchase the best selling books which are being written by some of the most popular authors. Apart from the numerous advantages of choosing us, some of the most important ones are being mentioned below:-</p>
         <ul>
            <li><p>Facility to choose from a wide range of books on different subjects.<p></li>
            <li><p>Facility to choose from books written by both novice as well as established authors.<p></li>
            <li><p>100% original books.<p></li>
            <li><p>Books available at affordable prices.<p></li>
            <li><p>Cash on Delivery facility available.<p></li>
            <li><p>Free Home Delivery facility available.<p></li>
            <li><p>100% Secure and Safe Shopping.<p></li>
            </ul>

         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">Client's reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/pic-1.png" alt="">
         <h3>Lauren Diaz</h3>
         <h1>The best option out there!</h1>
         <p>Always amazing. Great to support local shops and beingbookish.com make it very easy. Quick delivery. Love shopping with them and wouldn’t go anywhere else.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         
      </div>

      <div class="box">
         <img src="images/pic-2.png" alt="">
         <h3>BarBara Saeed</h3>
         <h1>Always Brilliant service!</h1>
         <p>Always brilliant service - so happy to have found you and to buy from proper bookshops despite being miles away from any!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
      </div>

      <div class="box">
         <img src="images/pic-3.png" alt="">
         <h3>Will Danzo</h3>
         <h1>Regular Customer!</h1>
         <p>Managed to purchase the 3 books I was looking for. Delivery, which I was able to change to collection from my local Post Office, was very quick. Would certainly consider buying from yourselves again.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
      </div>

      <div class="box">
         <img src="images/pic-4.png" alt="">
         <h3>Ramsey</h3>
         <h1>Tech Geek!</h1>
         <p>Was looking for online book store for a long time, then I found this site and I have a very great option on this site. Thank You</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
      </div>

      <div class="box">
         <img src="images/pic-5.png" alt="">
         <h3>Nickunj</h3>
         <h1>Regular Customer!</h1>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt ad, quo labore fugiat nam accusamus quia. Ducimus repudiandae dolore placeat.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
      </div>

      <div class="box">
         <img src="images/pic-6.png" alt="">
         <h3>Scarlet Johnson</h3>
         <h1>Regular Customer!</h1>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt ad, quo labore fugiat nam accusamus quia. Ducimus repudiandae dolore placeat.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
      </div>

   </div>

</section>

<section class="authors">

   <h1 class="title">Some great authors</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/NeilGaiman.jpg" alt="">
         <!--<div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>-->
         <h3>Neil Gaiman</h3>
      </div>

      <div class="box">
         <img src="images/JKRowling.jpg" alt="">
         <!--<div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>-->
         <h3>JK Rowling</h3>
      </div>

      <div class="box">
         <img src="images/VeronicaRoth.jpg" alt="">
         <!--<div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>-->
         <h3>Veronica Roth</h3>
      </div>

      <div class="box">
         <img src="images/David_Mitchell.jpg" alt="">
         <!--<div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>-->
         <h3>David Mitchell</h3>
      </div>

      <div class="box">
         <img src="images/VeronicaRoth.jpg" alt="">
         <!--<div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>-->
         <h3>Veronica Roth</h3>
      </div>

      <div class="box">
         <img src="images/JohnGreen.jpg" alt="">
         <!--<div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>-->
         <h3>John Green</h3>
      </div>

   </div>

</section>







<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>