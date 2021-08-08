<?php
include("path.php");
include(ROOT_PATH . "/app/controllers/contact.php");
include(ROOT_PATH . "/app/controllers/appointment.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="jacreator">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel='icon' href='assets/images/' type='image/x-icon'/ >

    <title>Dventure</title>

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/custom-style.css?v=1">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <?php include('pageloader.php')?>
    <!-- ***** Preloader End ***** -->


    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.php" class="logo">
                            <!-- <img src="assets/images/kit32.png"> -->
                            <span>DVenture</span>
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#welcome" class="menu-item">Home</a></li>
                            <li class="scroll-to-section"><a href="#about" class="menu-item">About</a></li>
                            <li class="scroll-to-section"><a href="#testimonials" class="menu-item">Testimonials</a>
                            </li>
                            <!-- <li class="submenu">
                                <a href="javascript:;">Drop Down</a>
                                <ul>
                                    <li><a href="" class="menu-item">About Us</a></li>
                                    <li><a href="" class="menu-item">Features</a></li>
                                    <li><a href="" class="menu-item">FAQ's</a></li>
                                    <li><a href="" class="menu-item">Blog</a></li>
                                </ul>
                            </li> -->
                            <li class="scroll-to-section"><a href="#contact-us" class="menu-item">Contact Us</a></li>
                            <li class="pull-right scroll-to-section"><a href="#appointment">Book An Appointment</a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->


    <!-- ***** Welcome Area Start ***** -->
    <div class="welcome-area" id="welcome">

        <!-- ***** Header Text Start ***** -->
        <div class="header-text">
            <div class="container">
                <div class="row">
                    <div class="left-text col-lg-6 col-md-12 col-sm-12 col-xs-12"
                        data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                        <h1>Dial Ventures is all about <em>Security</em> and <em>Health</em></h1>
                        <p>Dial Ventures Limited is an International Training and Consultancy 
                            firm which prides itself on delivering quality and flexible
                             solutions to all forms of security training needs. </p> 
                        <a href="#appointment" class="main-button-slider">Book An Appointment</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- ***** Header Text End ***** -->
    </div>
    <!-- ***** Welcome Area End ***** -->

    <!-- ***** Features Big Item Start ***** -->
    <section class="section" id="about">
        <div class="container">
            <div class="col-lg-8 offset-lg-2">
                <div class="center-heading">
                    <h2>What We Kown <em>About Us</em></h2>
                    <p>Here is our core valuse that drive us daily and help us to make sure we do and keep doing our best to keep clients and ourselfs safe at all times </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12"
                    data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <div class="features-item" style="background-color: #FEF0ED">
                        <div class="features-icon">
                            <h2>01</h2>
                            <img src="assets/images/data_analytics.png" alt="">
                            <h4>Security Services</h4>
                            <p>Curabitur pulvinar vel odio sed sagittis. Nam maximus ex diam, 
                            nec consectetur diam.</p>
                            <!-- <a href="#testimonials" class="main-button">
                                Read More
                            </a> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12"
                    data-scroll-reveal="enter bottom move 30px over 0.6s after 0.4s">
                    <div class="features-item">
                        <div class="features-icon">
                            <h2>02</h2>
                            <img src="assets/images/web_developer.png" alt="">
                            <h4>Security Training</h4>
                            <p >Curabitur pulvinar vel odio sed sagittis. 
                            Nam maximus ex diam, nec consectetur diam.</p>
                            <!-- <a href="#testimonials" class="main-button">
                                Discover More
                            </a> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12"
                    data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                    <div class="features-item" style="background-color: #FEF0ED">
                        <div class="features-icon">
                            <h2>03</h2>
                            <img src="assets/images/mobile_application.png" alt="">
                            <h4>Health Services</h4>
                            <p >Curabitur pulvinar vel odio sed sagittis. 
                            Nam maximus ex diam, nec consectetur diam.</p>
                            <!-- <a href="#testimonials" class="main-button">
                                More Detail
                            </a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Big Item End ***** -->

    <div class="left-image-decor"></div>

    <!-- ***** Features Big Item Start ***** -->
    <section class="section" id="promotion">
        <div class="container">
            <div class="row">
                <div class="left-image col-lg-5 col-md-12 col-sm-12 mobile-bottom-fix"
                    data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <!-- <img src="" class="rounded img-fluid d-block mx-auto" alt="App"> -->
                    <ul>
                        <li data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                            <div class="text">
                                <h4>Our Mission</h4>
                                <p>To take health care training to a greater level,
                                     where all our trainees would always stand out in 
                                     their respective work environment.</p>
                            </div>
                        </li>
                        <br><br>
                        <li data-scroll-reveal="enter right move 30px over 0.6s after 0.5s">
                            <div class="text">
                                <h4>Our Impact</h4>
                                <p>We have a social responsibility to give to the local community,
                                     it also consists of corporate giving, diversity and inclusion,
                                      most importantly, sustainability.</p>
                            </div>
                        </li>
                        <br><br>
                        <li data-scroll-reveal="enter right move 30px over 0.6s after 0.6s">
                            <div class="text">
                                <h4>Our Ethics</h4>
                                <p>Dial Ventures strife to provide services within the
                                     acceptable ethics and compliance of 
                                     the health care services. Honesty is paramount to us. 
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="right-text offset-lg-1 col-lg-6 col-md-12 col-sm-12 mobile-bottom-fix">
                    <ul>
                        <li data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                            <img src="assets/images/about-icon-01.png" alt="">
                            <div class="text">
                                <h4>SIA Approved Security Training</h4>
                                <p>A well organised course ranging from Door Supervision to CCTV Training.
                                And over the years we have found gaps and have learned excellently
                                 how to close them. </p>
                            </div>
                        </li>
                        <li data-scroll-reveal="enter right move 30px over 0.6s after 0.5s">
                            <img src="assets/images/about-icon-02.png" alt="">
                            <div class="text">
                                <h4>Mental Health Care Training</h4>
                                <p>Well selected course handled by professionals 
                                    with minmum of five years to give you a hand held
                                    guide through your journey.</p>
                            </div>
                        </li>
                        <li data-scroll-reveal="enter right move 30px over 0.6s after 0.6s">
                            <img src="assets/images/about-icon-03.png" alt="">
                            <div class="text">
                                <h4>Mandatory First Aid Training</h4>
                                <p>We sure will show you how to safe your love once in times of trouble
                                    and periods where the unwanted happens. so we can do your part before 
                                    help arrives
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Big Item End ***** -->

    <div class="right-image-decor"></div>

    <!-- ***** Testimonials Starts ***** -->
    <section class="section" id="testimonials">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="center-heading">
                        <h2>What They Think <em>About Us</em></h2>
                        <p>We have Served and we sure Will keep serving...
                             making sure we are current, accurate and trust worthy</p>
                    </div>
                </div>
                <div class="col-lg-10 col-md-12 col-sm-12 mobile-bottom-fix-big"
                    data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <div class="owl-carousel owl-theme">
                        <div class="item service-item">
                            <div class="author">
                                <i><img src="assets/images/testimonial-author-1.png" alt="Author One"></i>
                            </div>
                            <div class="testimonial-content">
                                <ul class="stars">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <h4>Jonathan Smart</h4>
                                <p>“Nullam hendrerit, elit a semper pharetra, ipsum nibh tristique tortor, in tempus
                                    urna elit in mauris.”</p>
                                <span>Besta CTO</span>
                            </div>
                        </div>
                        <div class="item service-item">
                            <div class="author">
                                <i><img src="assets/images/testimonial-author-1.png" alt="Second Author"></i>
                            </div>
                            <div class="testimonial-content">
                                <ul class="stars">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <h4>Martino Tino</h4>
                                <p>“Morbi non mi luctus felis molestie scelerisque. In ac libero viverra, placerat est
                                    interdum, rhoncus leo.”</p>
                                <span>Web Analyst</span>
                            </div>
                        </div>
                        <div class="item service-item">
                            <div class="author">
                                <i><img src="assets/images/testimonial-author-1.png" alt="Author Third"></i>
                            </div>
                            <div class="testimonial-content">
                                <ul class="stars">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <h4>George Tasa</h4>
                                <p>“Fusce rutrum in dolor sit amet lobortis. Ut at vehicula justo. Donec quam dolor,
                                    congue a fringilla sed, maximus et urna.”</p>
                                <span>System Admin</span>
                            </div>
                        </div>
                        <div class="item service-item">
                            <div class="author">
                                <i><img src="assets/images/testimonial-author-1.png" alt="Fourth Author"></i>
                            </div>
                            <div class="testimonial-content">
                                <ul class="stars">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <h4>Sir James</h4>
                                <p>"Fusce rutrum in dolor sit amet lobortis. Ut at vehicula justo. Donec quam dolor,
                                    congue a fringilla sed, maximus et urna."</p>
                                <span>New Villager</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Testimonials Ends ***** -->

    <!-- ***** Project Starts ***** -->
    <div class="left-image-decor"></div>

    <!-- ***** Features Big Item Start ***** -->
    <section class="section" id="appointment" style="padding-top: 100px">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="center-heading">
                        <h2>Book An Appointment <em>With Us</em></h2>
                        <p>Get to know more about us and have a one free consaultation with us... 
                            We offer consultancy services which can assist your company 
                            to develop and meet the needs of the changing world. 
                            We have vast experience in training </p>
                    </div>
                </div>
                <div class="left-image col-lg-5 col-md-12 col-sm-12 mobile-bottom-fix-big"
                    data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <img src="assets/images/co-working-removebg.png" class="rounded img-fluid d-block mx-auto" alt="App">
                </div>
                <div class="right-text offset-lg-1 col-lg-6 col-md-12 col-sm-12 mobile-bottom-fix">
                    <!-- ***** Contact Form Start ***** -->
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <?php if (isset($_GET['appointmentRes'])): ?>
                            <h3>Thank You <?php echo ucwords($_GET['appointmentRes']); ?><br></h3>
                            <p>Check Your Mail for further communication.</p>
                        <?php else: ?>
                        <div class="contact-form">
                            <form id="contact" method="post">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <fieldset>
                                            <input name="name" type="text" id="name" placeholder="Full Name" required
                                                style="background-color: rgba(250,250,250,0.3);">
                                        </fieldset>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <fieldset>
                                            <input name="email" type="text" id="email" placeholder="E-Mail Address"
                                                required style="background-color: rgba(250,250,250,0.3);">
                                        </fieldset>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <fieldset>
                                            <input name="phoneNumber" type="text" id="name" placeholder="Phone Number" required
                                                style="background-color: rgba(250,250,250,0.3);">
                                        </fieldset>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <fieldset>
                                            <input name="purpose" type="text" id="name" placeholder="Appointment Purpose"
                                                required="" style="background-color: rgba(250,250,250,0.3);">
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <textarea name="message" rows="3" id="message" placeholder="brief description of the appointment"
                                                required="" style="background-color: rgba(250,250,250,0.3);"></textarea>
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <button type="submit" id="form-submit" name="meet" class="main-button">Get An Invite</button>
                                        </fieldset>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <?php endif ?>
                    </div>
                    <!-- ***** Contact Form End ***** -->
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Project Ends ***** -->


    <!-- ***** Footer Start ***** -->
    <footer id="contact-us">
        <div class="container">
            <div class="footer-content">
                <div class="row">
                    <!-- ***** Contact Form Start ***** -->
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="contact-form">
                            <?php if (isset($_GET['contactRes'])): ?>
                                <h3>Thank You <?php echo ucwords($_GET['contactRes']); ?><br></h3>
                            <p>For Reaching us @Dventures.</p>
                            <?php else: ?>
                                <form id="contact" method="post">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12">
                                            <fieldset>
                                                <input name="name" type="text" id="name" placeholder="Full Name" required=""
                                                    style="background-color: rgba(250,250,250,0.3);">
                                            </fieldset>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <fieldset>
                                                <input name="email" type="text" id="email" placeholder="E-Mail Address"
                                                    required="" style="background-color: rgba(250,250,250,0.3);">
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-12">
                                            <fieldset>
                                                <textarea name="message" rows="6" id="message" placeholder="Your Message"
                                                    required="" style="background-color: rgba(250,250,250,0.3);"></textarea>
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-12">
                                            <fieldset>
                                                <button type="submit" id="form-submit" class="main-button" name="contact">Send Message Now</button>
                                            </fieldset>
                                        </div>
                                    </div>
                            </form>
                            <?php endif ?>
                            
                        </div>
                    </div>
                    <!-- ***** Contact Form End ***** -->
                    <div class="right-content col-lg-6 col-md-12 col-sm-12">
                        <h2>Our Location</h2>
                        <p>
                            <i class="fa fa-map-marker" aria-hidden="true"></i> Wilson Park Monsall Road Newton Heat Manchester M40 8WN
                            <hr>
                            <i class="fa fa-phone" aria-hidden="true"></i> +44 7404 155651
                            <hr>
                            <i class="fa fa-envelope" aria-hidden="true"></i> info@dialventures.co.uk
                            <hr>
                        </p>
                        <ul class="social">
                            <li><a href="https://fb.com/templatemo"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="sub-footer">
                        <p>Copyright &copy; <?php echo date("Y")?>

                        | Designed by <a rel="nofollow" href="https://www.linkedin.com/in/jacreator/">Jacreator</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script>

    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

</body>
</html>