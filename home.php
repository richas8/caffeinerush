<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

    <!-- swiper css link -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- custom css file link -->
    <link rel="stylesheet" href="style1.css">

</head>
<body>
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

    <!-- home section starts -->
    <section class="home">

      <div class="swiper home-slider">

        <div class="swiper-wrapper">

          <div class="swiper-slide slide" style="background: url(foto/backround.jpg) no-repeat">
            <div class="content">
              <span>grind your own beans</span>
              <h3>Explore</h3>
              <a href="package.php" class="btn">discover more</a>
            </div>
          </div>

          <div class="swiper-slide slide" style="background: url(foto/backround12.jpg) no-repeat">
            <div class="content">
              <span>grind your own beans</span>
              <h3>discover</h3>
              <a href="package.php" class="btn">discover more</a>
            </div>
          </div>

          <div class="swiper-slide slide" style="background: url(foto/backround11.jpg) no-repeat">
            <div class="content">
              <span>grind your own beans</span>
              <h3>new experience</h3>
              <a href="package.php" class="btn">discover more</a>
            </div>
          </div>

        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

      </div>

    </section>

    <!-- home section ends -->

    <!-- service section starts -->
    <section class="service">
      <h3 class ="heading-tittle">Types of Coffee Beans</h3>

      <div class="box-container">

        <div class="box">
          <img src="foto/robusta.jpg" alt="">
          <h3>Robusta</h3>
          <p>used for espresso drinks</p>
          <p>strong, bitter flavor</p>
          <p>lower price tag</p>
        </div>

        <div class="box">
          <img src="foto/arabica.jpg" alt="">
          <h3>Arabica</h3>
          <p>most common type of coffee bean</p>
          <p>sweet, smooth flavor</p>
          <p>requires careful pruning leading to higher price tag</p>
        </div>
      
        <div class="box">
          <img src="foto/liberica.jpg" alt="">
          <h3>Liberica</h3>
          <p>used for kapeng barako or instant coffee</p>
          <p>bold, smooky flavor</p>
          <p>rare and mostly found in indonesia or philippines</p>
        </div>

        <div class="box">
          <img src="foto/excelsa.jpg" alt="">
          <h3>Excelsa</h3>
          <p>used for instant coffee</p>
          <p>tart, fruity flavor</p>
          <p>found in shoutheast asia</p>
        </div>

      </div>

    </section>
    <!-- service section ends -->

    <!-- home about section starts -->
    <section class="home-about">

      <div class="image">
        <img src="foto/backround2.jpg" alt="">
      </div>

      <div class="content">
        <h3>about us</h3>
        <p>A Warm Haven:
          Step into Caffeine Rush, and you'll find more than just a coffee shop you'll discover a warm and inviting space. With every sip, our cozy ambiance invites you to slow down, savor the moment, and connect with the essence of good company and great coffee.
          
          </p>
          <a href="about.php" class="btn">read more</a>
      </div>
    </section>

    <!-- home about section ends -->

    <!-- home package section starts -->
    <section class="home-packages">

      <h1 class="heading-tittle"> top menu</h1>

      <div class="box-container">

        <div class="box">
          <div class="image">
            <img src="foto/espresso.jpg" alt="">
          </div>
          <div class="content">
            <h3>Espresso</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
            <a href="book.php" class="btn">book now</a>
          </div>
        </div>

        <div class="box">
          <div class="image">
            <img src="foto/latte.jpg" alt="">
          </div>
          <div class="content">
            <h3>Caffee Latte</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
            <a href="book.php" class="btn">book now</a>
          </div>
        </div>

        <div class="box">
          <div class="image">
            <img src="foto/affogato.jpg" alt="">
          </div>
          <div class="content">
            <h3>Affogato</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
            <a href="book.php" class="btn">book now</a>
          </div>
        </div>

      </div>

      <div class="load-more"> <a href="package.php" class="btn">load more</a> </div>
    </section>
    <!-- home package section ends -->

    <!-- home offer section starts -->
    <section class="home-offer">
      <div class="content">
        <h3>Wake Up Your Senses at Caffeine Rush 🌟</h3>
        <p>Indulge in the Perfect Brew Experience! Craving a cup of pure bliss? Look no further! Caffeine Rush is your haven for exceptional coffee.</p>
          <a href="book.php" class="btn">book now</a>
      </div>
    </section>
    <!-- home offer section ends -->

    

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

  <!-- link js -->
  <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

  <!-- custom js file link  -->
  <script src="script.js"></script>

</body>
</html>



