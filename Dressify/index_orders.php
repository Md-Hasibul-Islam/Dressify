<?php

@include 'config.php';

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Dressify - Orders</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <link rel="shortcut icon" type="image/png" href="./images/dressify.png"/>

</head>
<body>
   
<?php include 'index_header.php'; ?>

<section class="placed-orders">

   <h1 class="title">Placed Orders</h1>

   <div class="box-container">

   <?php

      echo '<p class="empty" style="margin-left:320px;">No orders placed yet. Please, login to place orders!</p>';
   
   ?>

   </div>

</section>









<?php include 'index_footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>