<?php 
require('cms/includes/config.php'); 
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <!-- Define Charset -->
  <meta charset="utf-8">

  <!-- Meta Tags -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta name="author" content="DJ Luda">
  <meta name="description" content="We are Colorado's professional DJs. Serving
  Denver and Colorado Springs areas. Contact us to book your event.">
  <meta name="keywords" content="DJ, Colorado Springs, Denver, weddings, parties,
  corporate, events">


  <title>Colorado Springs Professional DJ</title>

  <!-- Bootstrap Core CSS -->
  <link href="css/bootstrap.css" rel="stylesheet" type="text/css">

  <!-- Custom CSS -->
  <link href="css/groovy.css" rel="stylesheet" type="text/css">
  <link href="css/reset.css" rel="stylesheet" type="text/css">

  <!-- Fonts -->
  <link href='http://fonts.googleapis.com/css?family=Rajdhani:300,400,500,600,700' rel='stylesheet' type='text/css'>

  <!-- Fontawesome.github.io -->
  <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->

  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-66915465-1', 'auto');
  ga('send', 'pageview');

  </script>

</head>

<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

  <!-- Navigation -->
  <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-header page-scroll">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand page-scroll" href="#page-top"><span class="logo-top">House of Groove DJ</span></a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse navbar-right navbar-ex1-collapse">
        <ul class="nav navbar-nav">
          <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
          <li class="hidden">
            <a class="page-scroll" href="#page-top"></a>
          </li>
          <li>
            <a class="page-scroll" href="#about">About</a>
          </li>
          <li>
            <a class="page-scroll" href="#services">Services</a>
          </li>
          <li>
            <a class="page-scroll" href="#testimonials">Testimonials</a>
          </li>
          <li>
            <a class="page-scroll" href="#contact">Contact</a>
          </li>
          <li>
            <a class="page-scroll" href="#social">Social</a>
          </li>
        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
  </nav>

  <!-- Intro Section -->
  <section id="intro" class="intro-section">
    <div class="intro-body">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <img src="img/hoglogo.png" class="img-responsive center-block" alt="Responsive image" />
            <a href="#about" class="btn btn-circle page-scroll" >
              <i class="fa fa-angle-double-down animated"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- About Section -->
  <section id="about" class="about-section">
    <div class="about-body">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 hog-welcome">
            <h1>Welcome</h1>
            <?php
            $about = mysql_query("SELECT * FROM pages WHERE pageID='2'");

            $about_section = mysql_fetch_object($about);

            echo '<p>' . $about_section->pageCont . '</p>';
            ?>
          </div>
          <div class="col-lg-6">
            <img src="img/dj-luda.jpg"/>
          </div>
        </div>
        <div class="row hog-grid">
          <div class="col-md-4 col-sm-6">
            <img src="img/hog-dance.jpg" />
          </div>
          <div class="col-md-4 col-sm-6">
            <img src="img/hog-kiss.jpg" />
          </div>
          <div class="col-md-4">
            <img src="img/hog-luda.jpg" />
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Services Section -->
  <section id="services" class="services-section">
    <div class="services-body">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h1>Services</h1>
          </div>
          <div class="col-lg-12 text-justify">
            <?php
            $services = mysql_query("SELECT * FROM pages WHERE pageID='2'");

            $services_section = mysql_fetch_object($services);

            echo '<p>' . $services_section->pageCont . '</p>';
            ?>
          </div>
        </div>
        <div class="row services-list">
          <div class="col-md-3 col-sm-6 col-xs-6">
            <img src="icons/wedding-rings-diamond-64.png" alt="Weddings" />
            <p>Weddings</p>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-6">
            <img src="icons/martini-64.png" alt="Parties" />
            <p>Private Parties</p>
          </div>
          <div class="clearfix visible-sm-block"></div>
          <div class="col-md-3 col-sm-6 col-xs-6">
            <img src="icons/prom-64.png" alt="Proms" />
            <p>Proms</p>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-6">
            <img src="icons/suit-64.png" alt="Corporate Events" />
            <p>Corporate Events</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Testimonials section -->
  <section class="testimonials-section no-padding" id="testimonials">
    <div class="testimonials-body">
      <div class="container-fluid">
        <div class="row no-gutter">
          <div class="col-lg-12">
            <h1>Testimonials</h1>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a href="#testimonialModal1" class="testimonial-box" data-toggle="modal">
              <img src="img/ashlea-ryan-thumb.jpg" class="img-responsive" alt="">
              <div class="testimonial-box-caption">
                <div class="testimonial-box-caption-content">
                  <div class="couple text-faded">
                    <p>Ashlea & Ryan</p>
                  </div>
                  <div class="wedding-date">
                    <p>September 2014</p>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a href="#testimonialModal2" class="testimonial-box" data-toggle="modal">
              <img src="img/samantha-kevin-thumb.jpg" class="img-responsive" alt="">
              <div class="testimonial-box-caption">
                <div class="testimonial-box-caption-content">
                  <div class="couple text-faded">
                    <p>Samantha & Kevin</p>
                  </div>
                  <div class="wedding-date">
                    <p>June 2014</p>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a href="#testimonialModal3" class="testimonial-box" data-toggle="modal">
              <img src="img/christy-victor-thumb.jpg" class="img-responsive" alt="">
              <div class="testimonial-box-caption">
                <div class="testimonial-box-caption-content">
                  <div class="couple text-faded">
                    <p>Christy & Victor</p>
                  </div>
                  <div class="wedding-date">
                    <p>June 2013</p>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a href="#testimonialModal4" class="testimonial-box" data-toggle="modal">
              <img src="img/tina-laszlo-thumb.jpg" class="img-responsive" alt="">
              <div class="testimonial-box-caption">
                <div class="testimonial-box-caption-content">
                  <div class="couple text-faded">
                    <p>Krisztina & Laszlo</p>
                  </div>
                  <div class="wedding-date">
                    <p>March 2012</p>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a href="#testimonialModal5" class="testimonial-box" data-toggle="modal">
              <img src="img/wes-viky-thumb.jpg" class="img-responsive" alt="">
              <div class="testimonial-box-caption">
                <div class="testimonial-box-caption-content">
                  <div class="couple text-faded">
                    <p>Wes & Viktoria</p>
                  </div>
                  <div class="wedding-date">
                    <p>August 2011</p>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a href="#testimonialModal6" class="testimonial-box" data-toggle="modal">
              <img src="img/nikol-bryan-thumb.jpg" class="img-responsive" alt="">
              <div class="testimonial-box-caption">
                <div class="testimonial-box-caption-content">
                  <div class="couple text-faded">
                    <p>Nikol & Bryan</p>
                  </div>
                  <div class="wedding-date">
                    <p>May 2010</p>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section id="contact" class="contact-section">
    <div class="contact-body">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h1>Contact Us</h1>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
            <form name="sentMessage" id="contactForm" novalidate>
              <div class="row control-group">
                <div class="form-group col-xs-12 floating-label-form-group controls text-left">
                  <label>Name</label>
                  <input type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Please enter your name.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="row control-group">
                <div class="form-group col-xs-12 floating-label-form-group controls text-left">
                  <label>Email Address</label>
                  <input type="email" class="form-control" placeholder="Email Adress" id="email" required data-validation-required-message="Please enter your email address.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="row control-group">
                <div class="form-group col-xs-12 floating-label-form-group controls text-left">
                  <label>Phone Number</label>
                  <input type="tel" class="form-control" placeholder="Phone Number" id="phone" required data-validation-required-message="Please enter your phone number.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="row control-group">
                <div class="form-group col-xs-12 floating-label-form-group controls text-left">
                  <label>Message</label>
                  <textarea rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter a message."></textarea>
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <br>
              <div id="success"></div>
              <div class="row">
                <div class="form-group col-xs-12">
                  <button type="submit" class="btn btn-danger btn-lg btn-lg">Send</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

  </section>

  <!-- Social Section -->
  <section id="social" class="social-section">
    <div class="social-body">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h1>719-937-65DJ</h1>
            <?php
              $social = mysql_query("SELECT * FROM pages WHERE pageID='4'");

              $social_section = mysql_fetch_object($social);

              echo '<p class="hog-brand">' . $social_section->pageCont . '</p>';
            ?>
            <a href="https://www.facebook.com/houseofgrooveprodj" class="btn btn-default btn-lg" target="_blank">
              <i class="fa fa-facebook-square fa-fw"></i><span class="network-name">Follow us on Facebook</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- footer -->
  <footer>
    <div class="container text-center">
      <p>
        Copyright &copy; House of Groove DJ 2015 <span><a href="http://www.betwinsouls.com">Powered by jQN.io</a></span>
      </p>
    </div>
  </footer>

  <!-- Testimonials Modals -->
  <div class="testimonial-modal modal fade" id="testimonialModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
      <div class="close-modal" data-dismiss="modal">
        <div class="lr">
          <div class="rl">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
            <div class="modal-body">
              <h2>Ashlea & Ryan</h2>
              <hr class="star-primary">
              <img src="img/ashlea-ryan.jpg" class="img-responsive img-centered" alt="">
              <p>
                I recommend House of Groove if you're looking for a DJ.
                They did our wedding on September 20th and did a fantastic job!
                We had a blast! They were organized and helped the night go smoothly...
                Even when I was a bit scatter brained lol, we had a great time!
              </p>
              <ul class="list-inline item-details">
                <li>
                  <strong>
                    September 2014
                  </strong>
                </li>
              </ul>
              <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="testimonial-modal modal fade" id="testimonialModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
      <div class="close-modal" data-dismiss="modal">
        <div class="lr">
          <div class="rl">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
            <div class="modal-body">
              <h2>Samantha & Kevin</h2>
              <hr class="star-primary">
              <img src="img/samantha-kevin.jpg" class="img-responsive img-centered" alt="">
              <p>
                We had Ludwig of House of Groove do our wedding and it was amazing.
                He even made a mash up of songs for our first dance.
                I highly recommend using them for your wedding or other big functions.
              </p>                            <ul class="list-inline item-details">
                <li>
                  <strong>
                    June 2014
                  </strong>
                </li>
              </ul>
              <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="testimonial-modal modal fade" id="testimonialModal3" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
      <div class="close-modal" data-dismiss="modal">
        <div class="lr">
          <div class="rl">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
            <div class="modal-body">
              <h2>Christy & Victor</h2>
              <hr class="star-primary">
              <img src="img/christy-victor-thumb.jpg" class="img-responsive img-centered" alt="">
              <p>
                Luda and Serge went above and beyond our expectations.
                They were very professional, organized and personable.
                The light stage and sound quality was amazing!
                We were so happy our guests danced all night!!!
                He was open to all recommendations and his style of mixing genres was perfect.
                We highly recommend the House of Groove DJing services to any engaged couples
                in Colorado Springs! We love you, Luda!!!
              </p>
              <ul class="list-inline item-details">
                <li>
                  <strong>
                    June 2013
                  </strong>
                </li>
              </ul>
              <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="testimonial-modal modal fade" id="testimonialModal4" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
      <div class="close-modal" data-dismiss="modal">
        <div class="lr">
          <div class="rl">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
            <div class="modal-body">
              <h2>Krisztina & Laszlo</h2>
              <hr class="star-primary">
              <img src="img/tina-laszlo.jpg" class="img-responsive img-centered" alt="">
              <p>
                Our special day couldn't have been more perfect thanks to Ludwig and Serg!
                We knew we had made the right decision to hire House of Groove Entertainment
                from the very first moment. DJ Luda met us several times before the big day to
                discuss all the details and get to know our likes and dislikes. He always listened
                to our dreams with his utmost attention and was just as excited as we were to make
                our wedding unforgettable.
              </p>
              <ul class="list-inline item-details">
                <li>
                  <strong>
                    March 2012
                  </strong>
                </li>
              </ul>
              <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="testimonial-modal modal fade" id="testimonialModal5" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
      <div class="close-modal" data-dismiss="modal">
        <div class="lr">
          <div class="rl">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
            <div class="modal-body">
              <h2>Wes & Viktoria</h2>
              <hr class="star-primary">
              <img src="img/wes-viky.jpg" class="img-responsive img-centered" alt="">
              <p>
                We were fortunate to have both Luda and Serg as our DJs in our Wedding Party.
                They both were very professional, punctual, friendly and helpful! They played the
                best songs to keep the party going, and listened to all of our requests.
                I would highly recommend them to everybody who's about to have any kind of party and want
                professionalism, DJ's with great personalities and a FUN night!! Wes and Viktoria stull + family.
              </p>
              <ul class="list-inline item-details">
                <li>
                  <strong>
                    August 2011
                  </strong>
                </li>
              </ul>
              <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="testimonial-modal modal fade" id="testimonialModal6" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
      <div class="close-modal" data-dismiss="modal">
        <div class="lr">
          <div class="rl">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
            <div class="modal-body">
              <h2>Nikol & Bryan</h2>
              <hr class="star-primary">
              <img src="img/nikol-bryan.jpg" class="img-responsive img-centered" alt="">
              <p>
                We We got married May 22nd, 2010 and Luda was our DJ. He was very punctual,
                and dressed nicely for our formal event. He was also easy to work with.
                He was unobtrusive, and was willing to do as much or as little emceeing
                as we wanted. We were able to provide him with a specially mixed version
                of our 1st dance song, and he had a great selection of family-friendly tunes
                he used to keep people on the dance floor all night. We couldn't have been happier
                with our choice, and would highly recommend using DJ Luda to anyone who has an event to plan.
                <br/>
                Thank you, House of Groove!
              </p>
              <ul class="list-inline item-details">
                <li>
                  <strong>
                    May 2010
                  </strong>
                </li>
              </ul>
              <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- End Modal content-->

  <!-- jQuery Version 1.11.0 -->
  <script type="text/javascript" src="js/jquery-1.11.0.js"></script>

  <!-- Bootstrap Core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>

  <!-- Scrolling Nav JavaScript -->
  <script type="text/javascript" src="js/jquery.easing.min.js"></script>
  <script type="text/javascript" src="js/scrolling-nav.js"></script>

  <!-- Contact Form JavaScript -->
  <script type="text/javascript" src="js/jqBootstrapValidation.js"></script>
  <script type="text/javascript" src="js/contact-me.js"></script>

  <!-- Custom Theme JavaScript -->
  <script type="text/javascript" src="js/floatlabel.js"></script>
  <script type="text/javascript" src="js/groovy.js"></script>

</body>

</html>
