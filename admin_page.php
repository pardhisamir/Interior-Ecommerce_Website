<?php

@include 'config.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
  
   <link rel="stylesheet" href="css/admin_style.css">
   <link rel="stylesheet" href="css/component.css">

</head>
<body>
   
<?php include 'admin_header.php'; ?>
<div class="home-bg">
<section class="home">

   <h1 class="title">dashboard</h1>

   
</section>
</div>












<script src="script.js"></script>

</body>
</html>