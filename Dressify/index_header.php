<?php

if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}

?>

<header class="header">

   <div class="flex">

      <a href="index.php" class="logo"><img src="images/dressify-logo.png" alt="logo" style="width:60%;Height:60%;margin-top:5px;"><!-- Dressify<span>.</span> --></a>

      <nav class="navbar">
         <a href="index.php">Home</a>
         <a href="index_shop.php">Shop</a>
         <a href="index_orders.php">Orders</a>
         <a href="index_about.php">About</a>
         <a href="index_contact.php">Contact</a>
      </nav>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="user-btn" class="fas fa-user"></div>
         <a href="index_search_page.php" class="fas fa-search"></a>
         <a href="login.php"><i class="fas fa-heart"></i><span></span></a>
         <a href="login.php"><i class="fas fa-shopping-cart"></i><span></span></a>
      </div>

      <div class="profile">
         <img src="uploaded_img/visitor.png" alt="">
         <p>Visitor</p>
         <a href="login.php" class="delete-btn">Login</a>
         <a href="register.php" class="btn">Register</a>        
      </div>

   </div>

</header>