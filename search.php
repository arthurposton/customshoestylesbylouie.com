<!DOCTYPE html>
<html lang="en">
     <head>
     <title>Search</title>
     <meta charset="utf-8">
     <meta name = "format-detection" content = "telephone=no" />
     <link rel="icon" href="images/favicon.ico">
     <link rel="shortcut icon" href="images/favicon.ico" />
     <link rel="stylesheet" href="css/style.css">
     <link rel="stylesheet" href="search/search.css">
     <script src="js/jquery.js"></script>
     <script src="js/jquery-migrate-1.1.1.js"></script>
     <script src="js/script.js"></script> 
     <script src="js/jquery.ui.totop.js"></script>
     <script src="search/search.js"></script> 
     <script src="js/superfish.js"></script>
     <script src="js/jquery.equalheights.js"></script>
     <script src="js/jquery.mobilemenu.js"></script>
     <script src="js/jquery.easing.1.3.js"></script>


     <script>
 $(document).ready(function(){
      $().UItoTop({ easingType: 'easeOutQuart' });
    });   
     </script>
     <!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
         </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <link rel="stylesheet" media="screen" href="css/ie.css">


    <![endif]-->
     </head>
     <body>
<!--==============================header=================================-->
     <header>

      <div class="container_24">
          <div class="head-box2">
            <h1><a class="logo" href="index.html"><img src="images/logo.png"  alt="Motive Your bussines partner"></a></h1>
            <div class="head-box1">call us toll free <span>+1 800 456 78 90</span></div>
            <div class="clear"></div>
            </div>
            <div class="grid_24">
            <div class="head-box3">
            <nav>
                <ul class="sf-menu">
                    <li><a href="index.html">home</a></li>
                    <li><a href="index-1.html">company</a>
                      <ul>
                            <li><a href="#">Welcome Message</a></li>
                            <li><a href="#">Company Profile</a>
                              <ul>
                                    <li><a href="#">Our Capabilities</a></li>
                                    <li><a href="#">Advantages</a></li>
                                    <li><a href="#">Work Team</a></li>
                                    <li><a href="#">Partnership</a></li>
                                    <li><a href="#">Support</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Our History</a></li>
                            <li><a href="#">Testimonials</a></li>
                        </ul>
                    </li>
                    <li><a href="index-2.html">services</a></li>
                    <li><a href="index-3.html">solutions</a></li>
                    <li class=""><a class="" href="index-4.html">projects</a></li>
                    <li><a href="index-5.html">contacts</a></li>
                </ul>
                <div class="clear"></div>
            </nav>
            <ul class="soc-links">
                <li><a class="soc-link1" href="#"></a></li>
                <li><a class="soc-link2" href="#"></a></li>
                <li><a class="soc-link3" href="#"></a></li>
            </ul>
            <div class="clear"></div>
            </div>
            <div class="head-box4">
              <ul class="list1">
                    <li><a href="#">Support</a></li>
                    <li><a href="#">FAQs</a></li>
                    <li><a href="#">Sitemap</a></li>
                    <li><a href="#">Help</a></li>
                </ul>                
                <form id="search" action="search.php" method="GET">
                      <input type="text" name="s">                           
            <a onClick="document.getElementById('search').submit()" class="search-button"></a>
                     <div class="clear"></div>
                            </form>
                       <span class="text5">search</span>     
                <div class="clear"></div>
            </div>
            
          
      </div> </div>
    </header>
    
  <!--==============================content================================-->
    <section id="content">
            <div class="container_24">
    <div class="grid_24">
         <h2>Search result:</h2>
			   <div id="search-results"></div>
       </div>
    </div>
            </section>
    
  <!--==============================footer=================================-->
    <footer>
        <div class="container_24">
          <div class="wrapper">
           <article class="grid_24">
           <div class="wrapper p8">
            <article class="grid_3 alpha prefix_1">
              <h4>Quick Links</h4>
                <ul class="list3">
                    <li><a href="#">Praesent vestibulu </a></li>
                    <li><a href="#">Molestie </a></li>
                    <li><a href="#">Aenean nonummy</a></li>
                    <li><a href="#">Hendrerit mauris </a></li>
                    <li class="last1"><a href="#">phasellus </a></li>
                </ul>
            </article>
            <article class="grid_3 prefix_1">
              <h4>Popular</h4>
                <ul class="list3">
                    <li><a href="#">Praesent vestibulu </a></li>
                    <li><a href="#">Molestie </a></li>
                    <li><a href="#">Aenean nonummy</a></li>
                    <li><a href="#">Hendrerit mauris </a></li>
                    <li class="last1"><a href="#">phasellus </a></li>
                </ul>
            </article>
            <article class="grid_3 prefix_1">
              <h4>Solutions</h4>
                <ul class="list3">
                    <li><a href="#">Praesent vestibulu </a></li>
                    <li><a href="#">Molestie </a></li>
                    <li><a href="#">Aenean nonummy</a></li>
                    <li><a href="#">Hendrerit mauris </a></li>
                    <li class="last1"><a href="#">phasellus </a></li>
                </ul>
            </article>
            <article class="grid_8 ff_right">
              <span class="foot-text">Motive</span>
               <div class="foot-page1"> &copy; &nbsp;2013 &nbsp;  All Rights Reserved &nbsp; <span>|</span> &nbsp;  <a href="index-6.html">Privacy Policy</a><div class="clear"></div></div>
            </article>
            </div>
            </article>
            </div>
        </div>
        
            </footer>
            <!-- Coded by Ged-->
</body>
</html>
        