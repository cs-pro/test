<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>CSPro-HOME</title>
<link href="css/multiColumnTemplate.css" rel="stylesheet" type="text/css">
<link href="css/animate.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="wow animated fadeIn container">
  <header>
    <div class="wow animated bounceInLeft primary_header">
      <h1 class="title">CSPro.com</h1>
      <div class="content">
        <!-- notification message -->
      
        <?php if (isset($_SESSION['success'])) : ?>
          <div class="error success" >
            <h3>
              <?php 
                echo $_SESSION['success']; 
                unset($_SESSION['success']);
              ?>
            </h3>
          </div>
          <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    <p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
  <?php endif ?>
</div>
    </div>
    <nav class="wow animated bounceInRight secondary_header" id="menu">
      <ul>
        
        <li>HOME</li>
        <li>CATEGORY</li>
        <li>SERVICES</li>
        <li>ABOUT</li>
        <li>CONTACT</li>
        <li><a href="Login.html" id="link#1">LOGIN</a></li>
      </ul>
    </nav>
  </header>
  <div class="wow animated fadeInUpBig sld">
  <link href="themes/1/js-image-slider.css" rel="stylesheet" type="text/css" />
    <script src="themes/1/js-image-slider.js" type="text/javascript"></script>
    <link href="generic.css" rel="stylesheet" type="text/css" />
    <div id="sliderFrame">
        <div id="slider">
		
	<!-- 	Append this section to change the images -->
            <a href="http://www.bahri.edu.sd" target="_blank">  <!--This image is having a link on it.Use <a href="www.link.com" /a> -->
                <img src="images/cs photoshop.jpg" alt="Goto Bahri University" class="bhr" />
            </a>
			
            <img src="images/957237-programming-wallpaper (1).png" alt="Learn the code" />
            <img src="images/a5D1Z4A.png" alt="This is who we are." />
            <img src="images/developers_wallpaper-wallpaper-1366x768.jpg" alt="Easy Step to Web Programming." />
            <img src="images/stock-photo-conceptual-image-of-a-hacker-on-matrix-background-of-falling-green-computer-code-digits-239504656.jpg" alt="Hacking tools" />
       
	   </div>
        <div id="htmlcaption" style="display: none;">
            
        </div>
    </div>
    </div>

    <div class="div2">
       
    </div>
    <marquee>The Home of Computer Science</marquee>
   <section>
    <h2 class="noDisplay">Main Content</h2>
    <article class="wow animated bounceIn left_article">
      <h3>Welcome</h3><h5>New to java?<br/> This is a web site meant for learning purposes so don't miss a chance once it is completed--->we care about you!
        because we are good in what we do so be my guest; because I am going to support you with all of my knowledge as soon
        as you are ready to learn and you are pretty serious, so lets get into java. But firstly lets have a look at one of
		projects that i made as a standalone user so just <a id="lnk" href="#">click here</a></h5>   
    </article>
    <aside class="wow animated bounceInRight right_article"><img src="images/icon16x16.png" alt="" width="400" height="200" class="placeholder"/> </aside>
  </section>
  <div class="row">
    <div class="columns">
      <p class="wow animated bounceIn thumbnail_align"> <img src="images/updated.jpg" alt="About hacking" class="thumbnail"/> </p>
      <h4>All About Coding</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
    </div>
    <div class="columns">
      <p class="wow animated bounceIn thumbnail_align"> <img src="images/IMG_20160820_015907.jpg" alt="Developer" class="thumbnail"/> </p>
      <h4>Developer's Message</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
    </div>
    <div class="columns">
      <p class="wow animated bounceIn thumbnail_align"> <img src="images/Didyouknow.jpg" alt="did you know" class="thumbnail"/> </p>
      <h4>Did you know?</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
    </div>
    <div class="columns">
      <p class="wow animated bounceIn thumbnail_align"> <img src="images/developers_wallpaper-wallpaper-1366x768.jpg" alt="Todays Top" class="thumbnail"/> </p>
      <h4>Todays Top</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
    </div>
  </div>
  <div class="row blockDisplay">
    <div class="column_half left_half">
      <h2 class="wow animated bounceInLeft column_title">
	<ul>
		<li><a href="#">All About Hacking</a></li>
		<li><a href="#">Developers Message</a></li>
		<li><a href="#">Did You Know?</a></li>
		<li><a href="#">Todays Top</a></li>
	</ul>	
   </h2>
    </div>
    <div class="column_half right_half">
      <h2 class="wow animated bounceInRight column_title">
      	<ul>
		<li><a href="#">All About Hacking</a></li>
		<li><a href="#">Developers Message</a></li>
		<li><a href="#">Did You Know?</a></li>
		<li><a href="#">Todays Top</a></li>
	</ul>	
      </h2>
    </div>
  </div>
  <div class="social">
    <p class="wow animated bounceIn social_icon"><img src="images/bkg_06.jpg" width="100" alt="" class="thumbnail"/></p>
    <p class="wow animated bounceIn social_icon"><img src="images/bkg_06.jpg" width="100" alt="" class="thumbnail"/></p>
    <p class="wow animated bounceIn social_icon"><img src="images/bkg_06.jpg" width="100" alt="" class="thumbnail"/></p>
    <p class="wow animated bounceIn social_icon"><img src="images/bkg_06.jpg" width="100" alt="" class="thumbnail"/></p>
  </div>
  <footer class="secondary_header footer">
    <div class="copyright">&copy;2017 - <strong>MYSITE</strong></div>
  </footer>
</div>
</body>
<script src="js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
</html>