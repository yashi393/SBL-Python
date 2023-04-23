<?php
session_start();
if(isset($_SESSION['user'])){
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Careerguidance</title>
</head>

<body>
  <!-- Header -->
  <section id="header">
    <div class="header container">
      <div class="nav-bar">
        <div class="brand">
          <a href="#hero">
            <h1><span>I</span>nsight</h1>
          </a>
        </div>
        <div class="nav-list">
          <div class="hamburger">
            <div class="bar"></div>
          </div>
          <ul>
            <li><a href="index.php" data-after="Home">Home</a></li>
            <li><a href="#about" data-after="About_Us">About Us</a></li>
            <li><a href="#services" data-after="Get_Started">Get Started</a></li>
            <li><a href="login.php" data-after="Sign_In">Sign In</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- End Header -->


  <!-- Hero Section  -->
  <section id="hero">
    <div class="hero container">
      <div>
        <h1>INSIGHT <span></span></h1>
        <h1>Clutter to <span></span></h1>
        <h1>clarity <span></span></h1>
        <a href="#projects" type="button" class="cta">Get Started</a>
      </div>
      <div class="right">
        <img src="./img/Career progress-amico.png" alt="">
      </div>
    </div>
  </section>
  <!-- End Hero Section  -->

  <!-- servives Section -->
  <section id="services">
    <div class="services container">
      <div class="service-top">
        <h1 class="section-title">Wh<span>y</span>Us</h1>
        <p>Discover which field you will enjoy and 
          begin your career journey on the right note
        </p>
      </div>
      <div class="service-bottom">
        <div class="service-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/50/000000/alzheimer.png" /></div>
          <h2>Self-knowledge</h2>
          <p>It helps you to know yourself-your strengths, weaknesses, aptitude, perception, passion,
            interests and ambitions which should be taken into account while selecting a career.
             The career assessment test helps you in gaining this self-knowledge.</p>
        </div>
        <div class="service-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/50/000000/bullish.png" /></div>
          <h2>Accomplish goals</h2>
          <p>Growth prospects will be far better, as you will be motivated and happy with what
            you're pursuing.
          </p>
        </div>
        <div class="service-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/50/000000/mind-map.png" /></div>
          <h2>Awareness</h2>
          <p>Finding the right career involves some crucial milestones that everybody has to 
            meet. The most important goal of career assessment is to know about various career 
            options in-depth</p>
        </div>
       <div class="service-item">
        <div class="icon"><img src="https://img.icons8.com/bubbles/50/000000/light-on.png" /></div>
        <h2>Clarity</h2>
        <p>Once you are clear about your career choice, you will also have clarity
          on your next steps.
        </p>
      </div>
    </div>
    </div>
  </section>
  <!-- End Service Section -->

  <!-- Projects Section -->
  <section id="projects">
    <div class="projects container">
      <div class="projects-header">
        <h1 class="section-title">Get<span>Started</span></h1>
      </div>
      <div class="all-projects">
        <div class="project-item">
          <div class="project-info">
            <h1>Take a test</h1>
            <p>Discover Yourself And Your Ideal Careers</p>
            <a href="http://127.0.0.1:5000/" type="button" class="cta">Lets begin</a>
          </div>
          <div class="project-img">
            <img src="./img/Online test-amico.png" alt="img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
            <h1>Research fields</h1>
            <p>Everything you need to know about career fields</p>
            <a href="research.html" type="button" class="cta">Get to know</a>
          </div>
          <div class="project-img">
            <img src="./img/Bookmarks-amico.png" alt="img">
          </div>
        </div>
    </div>
  </section>
  <!-- End Projects Section -->
<!-- Contact Section -->
<section id="contact">
  <div class="contact container">
    <div>
      <h1 class="section-title">How it <span>works</span></h1>
    </div>
    <div class="contact-items">
      <div class="contact-item">
        <div class="icon"><img src="https://img.icons8.com/bubbles/50/000000/process.png" /></div>
        <div class="contact-info">
          <h1>Take a free test</h1>
          <h2>Take a 10min quiz of 25 questions</h2>
          <h2></h2>
        </div>
      </div>
      <div class="contact-item">
        <div class="icon"><img src="https://img.icons8.com/bubbles/50/000000/process.png" /></div>
        <div class="contact-info">
          <h1>Get result</h1>
          <h2>Get the best career choice for you</h2>
          <h2></h2>
        </div>
      </div>
      <div class="contact-item">
        <div class="icon"><img src="https://img.icons8.com/bubbles/50/000000/process.png" /></div>
        <div class="contact-info">
          <h1>Gain knowledge</h1>
          <h2>Know your career choice in-depth</h2>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Contact Section -->

  <!-- About Us Section -->
  <section id="about">
    <div class="about container">
      <div class="col-left">
        <div class="about-img">
          <img src="./img/About us page-amico.png" alt="img">
        </div>
      </div>
      <div class="col-right">
        <h1 class="section-title">About <span>Us</span></h1>
        <h2>We Aim </h2>
        <p>To make students aware the increasing number of career options</p>
          <p>To provide right guidance to the students by recommending the appropriate career</p> 
          <p>To give brief insights to the students about the recommended career option
          </p>
        <a href="#" class="cta">Home</a>
      </div>
    </div>
  </section>
  <!-- End About Section -->

  

  <!-- Footer -->
  <section id="footer">
    <div class="footer container">
      <div class="brand">
        <h1><span>I</span>nsight<span>
      </div>
      <h2>Clutter to clarity</h2>
      <div class="social-icon">
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/50/000000/instagram-new--v2.png" /></a>
        </div>
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/50/000000/twitter-squared.png" /></a>
        </div>
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/50/000000/linkedin.png" /></a>
        </div>
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/50/000000/facebook.png" /></a>
        </div>
      </div>
    </div>
  </section>
  <!-- End Footer -->
  <script src="./app.js"></script>
</body>
<?php
} else {
    ?>
<h1>PLease enter the correct details</h1>
<button onclick="window.location.href='http://localhost/insight/login.php';">
      RETRY LOGIN
<?php
}
?>
</body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

 
</html>

</html>