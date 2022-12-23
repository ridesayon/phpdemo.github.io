<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1.0">
      <meta name="apple-mobile-web-app-capable" content="yes">
      <!-- site metas -->
      <title>techzone</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!--title icon-->
      <link rel="shortcut icon" href="./images/pictures/techzonelogo1.png">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <link rel="shortcut icon" href="#">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"></div>
      </div>
      <!-- end loader -->
      <div id="mySidepanel" class="sidepanel">
         <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
         <a href="index.html">Home</a>
         <a href="#about">About</a>
         <a href="#we_Do">We Do</a>
         <a href="#team">Our Team</a>
         <a href="#testimonial">Testimonial</a>
         <a href="#contact">Contact Us</a>
      </div>
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                     <div class="sea_icon d_none ">
                        
                     </div>
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="index.html"><img src="./images/pictures/techzonelogo1.png" alt="#" /></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                     <div class="right_bottun">
                        <button class="openbtn" id="category_button" onclick="openNav()"><img id="category_button" onclick="cat()"  src="./images/pictures/categories.png" height="50px" width="50px" style="filter: invert(100%) sepia(99%) saturate(2%) hue-rotate(10deg) brightness(110%) contrast(100%);"/> </button> 
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header inner -->
      <!-- end header -->
      <!-- banner -->
      <section class="banner_main">
         <div id="banner1" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#banner1" data-slide-to="0" class="active"></li>
               <li data-target="#banner1" data-slide-to="1"></li>
               <li data-target="#banner1" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <div class="carousel-caption">
                        <div class="text-bg">
                           <h1>TECHZONE</h1>
                           <span>computers</span>
                           <a class="read_more" href="#about">About Us</a>
                           <ul class="social_team">
                              <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                              <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                              <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                              <li><a href="https://www.instagram.com/techzone_computers.ke/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="carousel-caption">
                        <div class="text-bg">
                           <h1>home of </h1>
                           <span>solutions</span>
                           <a class="read_more" href="#about">About Us</a>
                           <ul class="social_team">
                              <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                              <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                              <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                              <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="carousel-caption">
                        <div class="text-bg">
                           <h1>BRING IT</h1>
                           <span>WE FIX IT</span>
                           <a class="read_more" href="#about">About Us</a>
                           <ul class="social_team">
                              <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                              <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                              <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                              <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#banner1" role="button" data-slide="prev">
            <i class="fa fa-arrow-left" aria-hidden="true"></i>
            </a>
            <a class="carousel-control-next" href="#banner1" role="button" data-slide="next">
            <i class="fa fa-arrow-right" aria-hidden="true"></i>
            </a>
         </div>
      </section>
      <!-- end banner -->
      <!-- about section -->
      <div id="about" class="about">
         <div class="container">
            <div class="row ">
               <div class="col-md-5">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="titlepage">
                           <h2>About</h2>
                           <p> TECHZONE is one of nairobi's  computer repair and sales store. 
                              We sell and service Apple and iMac computers, desktops and laptops, PC and MacBook’s iPhones and iPads and much more. 
                              Our goal is to provide 110% customer satisfaction .
                               </p>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="about_img">
                           <figure><img src="./images/laptop/softwarelap.jpg" alt="#"/></figure>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-7">
                  <div class="about_right">
                     <figure><img src="images/laptop/laprepair.jpg.jfif" alt="#"/></figure>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- about section -->
      <!-- website section -->
      <div class="software">
         <div class="container-fluid">
            <div class="row d_flex">
               <div class="col-md-6">
                  <div class="titlepage">
                     <h2>TECHZONE WEB</h2>
                     <p>WE also have our own online shop.<br>  we sell brand new laptops ,refurbrished laptops  and many more <br> click here to check out our website</p>
                     <a class="read_more" href="../home2.php">Click here</a>
                  </div>
               </div>
               <div class="col-md-6 padding_right2">
                  <div class="software_img">
                     <figure><img src="images/laptop/weblap.jpg.jfif" alt="#"/></figure>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- software section -->
      <!-- We Do section -->
      <div id="we_Do" class="we_do">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>What We Do</h2>
                     <p>Welcome to techzone,we sell brand new and refurbished laptops,desktops,we also do the following repairs;- </p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-4">
                  <div id="hover_color" class="we_box">
                     <span>1</span>
                     <h3> <img src="./images/about_pics/motherboard3.gif" height="50px"> motherboard repair and replacement</h3>
                     <p> </p>
                  </div>
               </div>
               <div class="col-md-4">
                  <div id="hover_color" class="we_box">
                     <span>2</span>
                     <h3> <img src="./images/about_pics/ram.png"> Ram upgrades and replacemen</h3>
                     <p> </p>
                  </div>
               </div>
               <div class="col-md-4">
                  <div id="hover_color" class="we_box">
                     <span>3</span>
                     <h3> <img src="./images/about_pics/hardisk.jpg "  height="10%"> <br> hardisk upgrades and replacement</h3>
                     <p></p>
                  </div>
               </div>
               <div class="col-md-4">
                  <div id="hover_color" class="we_box">
                     <span>4</span>
                     <h3> <img src="./images/about_pics/hinge.jfif" alt=""><br> hinge repairs and replacement</h3>
                     <p></p>
                  </div>
               </div>
               <div class="col-md-4">
                  <div id="hover_color" class="we_box">
                     <span>5</span>
                     <h3><img src="./images/about_pics/Battery charge.jfif" alt=""><br>battery replacement</h3>
                     <p></p>
                  </div>
               </div>
               <div class="col-md-4">
                  <div id="hover_color" class="we_box">
                     <span>6</span>
                     <h3><img src="./images/gif/keyboard.gif" alt=""><br> keyboard button replacement</h3>
                     <p></p>
                  </div>
               </div>
               <div class="col-md-12">
                  <a class="read_more" href="#">and many more</a>
               </div>
            </div>
         </div>
      </div>
      <!-- end We Do section -->
      <!-- Our  team section -->
      <div id="team" class="team">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Our Team</h2>
                     <p>
                        WE are a dedicated hardworking team that is ready to tackle any laptop problem brought to us.
                        We ensure that you that you will get the best customer experience possible.  
                     </p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-4">
                  <div class="team_box">
                     <figure><img src="./images/PROFILEPICS/IMG-20221125-WA0001.jpg" alt="#"/></figure>
                     <div class="social_box">
                        <ul class="social_team">
                           <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                           <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                           <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                           <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                        <h3>Derrick</h3>
                        <p>System analyst and founder of techzone</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="team_box">
                     <figure><img src="./images/PROFILEPICS/IMG-20221125-WA0000.jpg" alt="#"/></figure>
                     <div class="social_box">
                        <ul class="social_team">
                           <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                           <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                           <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                           <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                        <h3>Eugine</h3>
                        <p>hardware specialist and co founder of techzone computers</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="team_box">
                     <figure><img src="images/pictures/businessman.png" alt="#"/></figure>
                     <div class="social_box">
                        <ul class="social_team">
                           <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                           <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                           <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                           <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                        <h3>Melvin</h3>
                        <p>Software developer and web developer</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end Our  team section -->
      <!-- contact section -->
      <div id="contact" class="contact">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Request  A  Call  Back</h2>
                     <p>call or mail us for more information</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="con_bg">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-md-6">
                     <form id="request" class="main_form" action="./php/contact_us.php">
                        <div class="row">
                          
                              <ul class="location_form">
                                 <li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i></a>
                                    (+254) 795056604 (+254) 789622129
                                 </li>
                                 <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a>waswi009@gmail.com</li>
                              </ul>
                           </div>
                           <div class="col-md-12">
                              <ul class="social_icon">
                                 <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                 <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                 <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                              </ul>
                           </div>
                        </div>
                     </form>
                  </div>
                  <div class="col-md-6 padding_right2">
                     <div class="map" id="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.8144397878345!2d36.821282499999995!3d-1.2853198000000066!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f118173cfabdf%3A0x2c146f4ba89cd012!2sTechzone%20computers!5e0!3m2!1sen!2ske!4v1668508247069!5m2!1sen!2ske" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end contact section -->
      <!-- testimonial section -->
      <div id="testimonial" class="testimonial">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Testimonials</h2>
                     <p>wee are working towards giving you the best customer experience </p>
                  </div>
               </div>
            </div>
           
         </div>
      </div>
      <!-- end testimonial section -->
      <!--  footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                  
                  <div class="col-md-4">
                     <div class="fid_box">
                        <h3>Find us  </h3>
                        <ul class="location_icon">
                           <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i></a><br> @Phoenix House 2nd floor room 4 <br>along kenyatta avenue</li>
                           <li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i></a><br>
                              (+254) 789622129<br> (+254) 795056604
                           </li>
                           <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a><br> waswi009@gmail.com</li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="fid_box">
                        <h3>News letter</h3>
                        <form class="news_form">
                           <input class="letter_form" placeholder=" Email" type="text" name="Email">
                           <button class="sumbit">Subscribe</button>
                        </form>
                        <ul class="social_icon">
                           <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                           <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                           <li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                           <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <p>© 2022 All Rights Reserved. Design by<a href="#"> TECHZONE COMPUTERS</a></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!--category button script-->
      <script>
         function cat(){
            document.getElementById("category_button").style.filter="invert(48%) sepia(91%) saturate(1592%) hue-rotate(181deg) brightness(100%) contrast(83%);"
         }
      </script>
      <script>
         function openNav() {
           document.getElementById("mySidepanel").style.width = "250px";
         }
         
         function closeNav() {
           document.getElementById("mySidepanel").style.width = "0";
         }
      </script>
      <script>
         // This example adds a marker to indicate the position of Bondi Beach in Sydney,
         // Australia.
         
      </script>
      <!-- google map js -->
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
      <!-- end google map js --> 
   </body>
</html>

