<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>book</title>

    <!-- swiper css link -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="style1.css">

</head>
<body>
    <!-- header section starts -->
    <section class="header">
      <a href="home.php" class="logo">Caffeine Rush</a>

      <nav class="navbar">
        <a href="home.php">home</a>
        <a href="about.php">about</a>
        <a href="package.php">menu</a>
        <a href="book.php">book</a>
      </nav>
      <div id="menu-btn" class="fas fa-bars"></div>

    </section>
    <!-- header section ends -->

    <div class="heading" style="background: url(foto/book.jpg) no-repeat">
        <h1>see more</h1>
    </div>

    <!-- book section strats -->
    <section class="booking">

      <h1 class="heading-tittle">choose your coffee</h1>
      
      <form action="book_form.php" method="post" class="book-form">

        <div class="flex">
          <div class="inputBox">
            <span>name :</span>
            <input type="text" placeholder="enter your name" name="name">
          </div>
          <div class="inputBox">
            <span>menu :</span>
            <input type="text" placeholder="enter the name of your order" name="menu">
          </div>
          <div class="inputBox">
            <span>email :</span>
            <input type="email" placeholder="enter your email" name="email">
          </div>
          <div class="inputBox">
            <span>amount :</span>
            <input type="number" placeholder="enter your order quantity" name="amount">
          </div>
          <div class="inputBox">
            <span>address :</span>
            <input type="text" placeholder="enter the delivery address" name="address">
          </div>
          <div class="inputBox">
            <span>price :</span>
            <input type="text" placeholder="enter your purchase" name="price">
          </div>
        </div>

        <input type="submit" value="submit" class="btn" name="send">

      </form>
    </section>
    <!-- book section ends -->

    <!-- footer starts -->
    <section class="footer">
      <div class="box-container">
      <div class="box">
          <h3>quick links</h3>
          <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
          <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
          <a href="package.php"> <i class="fas fa-angle-right"></i> menu</a>
          <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
        </div>

        <div class="box">
          <h3>follow us</h3>
          <a href="https://www.facebook.com/"> <i class="fab fa-facebook"></i> facebook</a>
          <a href="https://twitter.com/?lang=en"> <i class="fab fa-twitter"></i> twitter</a>
          <a href="https://www.instagram.com/rcheflx?igshid=OGQ5ZDc2ODk2ZA=="> <i class="fab fa-instagram"></i> instagram</a>
          <a href="https://www.linkedin.com/in/richa-s-66808524b?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app "> <i class="fab fa-linkedin"></i> linkedin</a>
        </div>

        <div class="box">
          <h3>contact info</h3>
          <a href="https://wa.me/+6282331001048"> <i class="fas fa-phone"></i> +62 823-3100-1048 </a>
          <a href="https://g.co/kgs/uihPMh"> <i class="fas fa-envelope"></i> rikasflx@gmail.com </a>
          <a href="https://g.co/kgs/nogTco "> <i class="fas fa-map"></i> sumurboto, semarang - 50269 </a>
        </div>

        <div class="box">
          <h3>extra links</h3>
          <a href="https://wa.me/+6282331001048"> <i class="fas fa-angle-right"></i> ask question</a>
          <a href="about.php"> <i class="fas fa-angle-right"></i> about us</a>
        </div>

      </div>

      <div class="credit"> created by <span>Richa</span> | all rights reserved! </div>

    </section>
    <!-- footer ends -->

<!-- swiper js link  -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <!-- custom js file link  -->
  <script src="script.js"></script>
</body>
</html>