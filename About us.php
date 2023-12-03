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
   <link rel="stylesheet" href="css/component.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<section class="about">

   <div class="row">

      <div class="box">
         <img src="images/about.jpg" alt="">
         <h3>why choose us?</h3>
         <p>Home décor plays a crucial role in terms of how the owners feel about their place,  home décor & furniture are important to a house because it provides a balanced view of the interior space. </p>
         <a href="login.php" class="btn">join us</a>
      </div>

      <div class="box">
         <img src="images/about2.jpg" alt="">
         <h3>what we provide?</h3>
         <p>Best Quality Products, chairs, armchairs, bunk beds, sofa cum beds, and king (or queen) sized beds are also situated in specific rooms so they can be used according to their function.</p>
         <a href="Product.php" class="btn">our Products</a>
      </div>

   </div>

</section>
<br><br><br><br><br><br><br><br><br><br><br>

<section class="reviews">

   <h1 class="title">clients reivews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/rinku2.jpg" alt="">
         <p>You have consistently provided the highest quality furniture, accompanied by better customer service. we can recommend this company to other.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Ritu Sharma</h3>
      </div>

      <div class="box">
         <img src="images/SP1.jpg" alt="">
         <p>We want you to know that all your efforts are well appreciated and we are looking forward to continue more business relationship.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Samir</h3>
      </div>

      <div class="box">
         <img src="images/lp3.jpg" alt="">
         <p> hope you will continue to provide such excellent service to us. In addition, we whole heartedly recommend your products .</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Lakshmi</h3>
      </div>

      

   </div>

</section>









<?php include 'footer.php'; ?>

<script src="script.js"></script>

</body>
</html>