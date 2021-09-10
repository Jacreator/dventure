<?php
include("path.php");
include ROOT_PATH . "/app/controllers/contact.php";
include ROOT_PATH . "/app/controllers/appointment.php";
?>

<!-- ***** head Start ***** -->
<?php include('./includes/head.php') ?>
<!-- ***** head End ***** -->

<body>

    <!-- ***** Preloader Start ***** -->
    <?php include('./includes/pageloader.php') ?>
    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->
    <?php include("./includes/header.php") ?>
    <!-- ***** Header Area End ***** -->


    <!-- ***** Welcome Area Start ***** -->
    <div class="welcome-area" id="welcome">

        <!-- ***** Header Text Start ***** -->
        <div class="header-text">
            <div class="container">
                <div class="row">
                    <div class="left-text col-lg-6 col-md-12 col-sm-12 col-xs-12" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                        <h1>Dial Ventures is all about <em>Security</em> and <em>Health</em></h1>
                        <p>Dial Ventures Limited is an International Training and Consultancy
                            firm which prides itself on delivering quality and flexible
                            solutions to all forms of security training needs. </p>
                        <a href="#appointment" class="main-button-slider">Book An Appointment</a><br><br><br>
                        <a href="./gallery.php" class="main-button-slider">Our Gallery</a>
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
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <div class="features-item" style="background-color: #FEF0ED">
                        <div class="features-icon">
                            <h2>01</h2>
                            <img src="assets/images/serives.png" alt="">
                            <h4>Security Services</h4>
                            <p>Curabitur pulvinar vel odio sed sagittis. Nam maximus ex diam,
                                nec consectetur diam.</p>
                            <!-- <a href="#testimonials" class="main-button">
                                Read More
                            </a> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12" data-scroll-reveal="enter bottom move 30px over 0.6s after 0.4s">
                    <div class="features-item">
                        <div class="features-icon">
                            <h2>02</h2>
                            <img src="assets/images/web_developer.png" alt="">
                            <h4>Security Training</h4>
                            <p>Curabitur pulvinar vel odio sed sagittis.
                                Nam maximus ex diam, nec consectetur diam.</p>
                            <!-- <a href="#testimonials" class="main-button">
                                Discover More
                            </a> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                    <div class="features-item" style="background-color: #FEF0ED">
                        <div class="features-icon">
                            <h2>03</h2>
                            <img src="assets/images/health_3.png" alt="">
                            <h4>Health Services</h4>
                            <p>Curabitur pulvinar vel odio sed sagittis.
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
                <div class="left-image col-lg-5 col-md-12 col-sm-12 mobile-bottom-fix" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
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
                <div class="left-image col-lg-5 col-md-12 col-sm-12 mobile-bottom-fix-big" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <img src="assets/images/co-working-removebg.png" class="rounded img-fluid d-block mx-auto" alt="App">
                </div>
                <div class="right-text offset-lg-1 col-lg-6 col-md-12 col-sm-12 mobile-bottom-fix">
                    <!-- ***** Contact Form Start ***** -->
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <?php if (isset($_GET['appointmentRes'])) : ?>
                            <h3>Thank You <?php echo ucwords($_GET['appointmentRes']); ?><br></h3>
                            <p>Check Your Mail for further communication.</p>
                        <?php else : ?>
                            <div class="contact-form">
                                <form id="contact" method="post">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12">
                                            <fieldset>
                                                <input name="name" type="text" id="name" placeholder="Full Name" required style="background-color: rgba(250,250,250,0.3);">
                                            </fieldset>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <fieldset>
                                                <input name="email" type="text" id="email" placeholder="E-Mail Address" required style="background-color: rgba(250,250,250,0.3);">
                                            </fieldset>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <fieldset>
                                                <input name="phoneNumber" type="text" id="name" placeholder="Phone Number" required style="background-color: rgba(250,250,250,0.3);">
                                            </fieldset>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <fieldset>
                                                <input name="purpose" type="text" id="name" placeholder="Appointment Purpose" required="" style="background-color: rgba(250,250,250,0.3);">
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-12">
                                            <fieldset>
                                                <textarea name="message" rows="3" id="message" placeholder="brief description of the appointment" required="" style="background-color: rgba(250,250,250,0.3);"></textarea>
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


    <!-- ***** footer Start ***** -->
    <?php include('./includes/footer.php') ?>
    <!-- ***** footer End ***** -->

</body>

</html>