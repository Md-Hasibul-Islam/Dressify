<?php

@include 'config.php';

session_start();

if(isset($_POST['add_to_wishlist'])){

	$message[] = 'Please, login to add to wishlist!';
}

if(isset($_POST['add_to_cart'])){

	$message[] = 'Please, login to add to cart!';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Dressify - Home Page</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <link rel="shortcut icon" type="image/png" href="./images/dressify.png"/>

</head>
<body>
   
<?php include 'index_header.php'; ?>

<div class="home-bg">

   <section class="home">

      <div class="content">
         <span>Don't panic, dressify is here</span>
         <h3>Reach For Diversify You With Best Outfits</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto natus culpa officia quasi, accusantium explicabo?</p>
         <a href="index_about.php" class="btn">about us</a>
      </div>

   </section>

</div>

<section class="home-category">

   <h1 class="title">Shop By Category</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/cat-1.1.png" alt="">
         <h3>Men</h3>
         <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem, quaerat.</p>
         <a href="index_category.php?category=Men" class="btn">Men</a>
      </div>

      <div class="box">
         <img src="images/cat-2.1.png" alt="">
         <h3>Women</h3>
         <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem, quaerat.</p>
         <a href="index_category.php?category=Women" class="btn">Women</a>
      </div>

      <div class="box">
         <img src="images/cat-3.1.png" alt="">
         <h3>Kid</h3>
         <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem, quaerat.</p>
         <a href="index_category.php?category=Kid" class="btn">Kid</a>
      </div>

      <div class="box">
         <img src="images/cat-4.1.png" alt="">
         <h3>Sale</h3>
         <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem, quaerat.</p>
         <a href="index_category.php?category=Sale" class="btn">Sale</a>
      </div>

   </div>

</section>

<section class="products">

   <h1 class="title">Latest Products</h1>

   <div class="box-container">

   <?php
      $select_products = $conn->prepare("SELECT * FROM `products` LIMIT 6");
      $select_products->execute();
      if($select_products->rowCount() > 0){
         while($fetch_products = $select_products->fetch(PDO::FETCH_ASSOC)){ 
   ?>
   <form action="" class="box" method="POST">
      <div class="price">Tk <span><?= $fetch_products['price']; ?></span>/-</div>
      <a href="index_view_page.php?pid=<?= $fetch_products['id']; ?>" class="fas fa-eye"></a>
      <img src="uploaded_img/<?= $fetch_products['image']; ?>" alt="">
      <div class="name"><?= $fetch_products['name']; ?></div>
      <input type="hidden" name="pid" value="<?= $fetch_products['id']; ?>">
      <input type="hidden" name="p_name" value="<?= $fetch_products['name']; ?>">
      <input type="hidden" name="p_price" value="<?= $fetch_products['price']; ?>">
      <input type="hidden" name="p_image" value="<?= $fetch_products['image']; ?>">
      <input type="number" min="1" value="1" name="p_qty" class="qty">
      <input type="submit" value="Add To Wishlist" class="option-btn" name="add_to_wishlist">
      <input type="submit" value="Add To Cart" class="btn" name="add_to_cart">
   </form>
   <?php
      }
   }else{
      echo '<p class="empty">No products added yet!</p>';
   }
   ?>

   </div>

</section>







<?php include 'index_footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>