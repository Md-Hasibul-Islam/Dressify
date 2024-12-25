<?php

@include 'config.php';

session_start();

if(isset($_POST['send'])){

   $message[] = 'Please, login to send message!';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Dressify - Contact</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <link rel="shortcut icon" type="image/png" href="./images/dressify.png"/>

</head>
<body>
   
<?php include 'index_header.php'; ?>

<section class="contact">

   <h1 class="title">Get In Touch</h1>

   <form action="" method="POST">
      <input type="text" name="name" class="box" required placeholder="Enter your name">
      <input type="email" name="email" class="box" required placeholder="Enter your email">
      <input type="number" name="number" min="0" class="box" required placeholder="Enter your number">
      <textarea name="msg" class="box" required placeholder="Enter your message" cols="30" rows="10"></textarea>
      <input type="submit" value="Send Message" class="btn" name="send">
   </form>

</section>








<?php include 'index_footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>