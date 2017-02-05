<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Daniel Rumpade - Senior Full Stack Developer</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">

  <!-- Favicon-->
  <link rel="shortcut icon" href="images/favicon.png" >

  <!-- Stylesheets -->
  <link rel="stylesheet" href="assets/css/normalize.css">
  <link rel="stylesheet" href="assets/font/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/libs/materialize/css/materialize.min.css" media="screen,projection" />
  <link rel="stylesheet" href="assets/css/bootstrap.css" media="screen,projection" />

  <link rel="stylesheet" href="assets/css/animate.min.css" media="screen,projection" />
  <link rel="stylesheet" href="assets/libs/sweetalert/sweet-alert.css" media="screen,projection" />

  <link rel="stylesheet" href="assets/libs/owl-carousel/owl.carousel.css" media="screen,projection" />
  <link rel="stylesheet" href="assets/libs/owl-carousel/owl.transitions.css" media="screen,projection" />
  <link rel="stylesheet" href="assets/libs/owl-carousel/owl.theme.css" media="screen,projection" />

  <link rel="stylesheet" href="assets/css/main.css">
  <link rel="stylesheet" href="assets/css/responsive.css">

  <!-- Choose your default colors -->
  <link rel="stylesheet" href="assets/css/colors/color1.css">
  <!-- <link rel="stylesheet" href="assets/css/colors/color2.css"> -->
  <!-- <link rel="stylesheet" href="assets/css/colors/color3.css"> -->
  <!-- <link rel="stylesheet" href="assets/css/colors/color4.css"> -->
  <!-- <link rel="stylesheet" href="assets/css/colors/color5.css"> -->
  <!-- <link rel="stylesheet" href="assets/css/colors/color6.css"> -->
  <!-- <link rel="stylesheet" href="assets/css/colors/color7.css"> -->
  <!-- <link rel="stylesheet" href="assets/css/colors/color8.css"> -->


  <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
  <![endif]-->
</head>

<body>

  <!-- Preloader --> 
    <div id="preloader">
      <div class="loader">
            <svg class="circle-loader" height="50" width="50">
              <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="6" stroke-miterlimit="10" />
            </svg>
        </div>    
    </div><!--preloader end-->

  <!-- Main Container -->
  <main id="app" class="main-section">
    <!-- header navigation start -->
    <header id="navigation" class="root-sec white nav">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="nav-inner">
              <nav class="primary-nav">
                <div class="clearfix nav-wrapper">
                  <a href="#home" class="left brand-logo menu-smooth-scroll" data-section="#home"><img src="images/logo.png" alt="">
                  </a>
                  <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
                  <ul class="inline-menu side-nav" id="mobile-demo">

                  <!-- Mini Profile // only visible in Tab and Mobile -->
                    <li class="mobile-profile">
                     <div class="profile-inner">
                        <div class="pp-container">
                            <img src="images/person.jpg" alt="">
                        </div>
                        <h3>Daniel Rumpade</h3>
                        <h5>Senior Full Stack Developer</h5>
                      </div>
                    </li><!-- mini profile end-->


                    <li><a href="#about" data-section="#about" class="menu-smooth-scroll"><i class="fa fa-user fa-fw"></i>About Me</a>
                    </li>
                    <li><a href="#resume" data-section="#resume" class="menu-smooth-scroll"><i class="fa fa-file-text fa-fw"></i>Resume</a>
                    </li>
                    <li><a href="#portfolio" data-section="#portfolio" class="menu-smooth-scroll"><i class="fa fa-briefcase fa-fw"></i>Portfolio</a>
                    </li>
                    <li><a href="#testimonial" data-section="#testimonial" class="menu-smooth-scroll"><i class="fa fa-comments fa-fw"></i>Testimonial</a>
                    </li>
                    <li><a href="#contact" data-section="#contact" class="menu-smooth-scroll"><i class="fa fa-paper-plane fa-fw"></i>Contact</a>
                    </li>
                  </ul>

                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
      <!-- .container end -->
    </header>
    <!-- #header  navigation end -->

    <!-- Home Section start -->
    <section id="home" class="scroll-section root-sec grey lighten-5 home-wrap">
      <div class="sec-overlay">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <div class="home-inner">
                  <div class="center-align home-content">
                    <h1 class="home-title">HI! I'm <span>Daniel Rumpade</span></h1>
                    <h2 class="home-subtitle">Full stack Developer from Amsterdam, Netherlands</h2>
                    <a href="#contact" class="hire-me-btn btn waves-effect waves-light btn-large brand-bg white-text regular-text">Hire Me <i class="mdi-content-send left"></i>
                    </a>
                  </div>
              </div>
            </div>
          </div>
        </div>
        <!-- .container end -->
        <div class="section-call-to-area">
          <div class="container">
            <div class="row">
              <a href="#about" class="btn-floating btn-large button-middle call-to-about section-call-to-btn animated btn-up btn-hidden" data-section="#about">
                <i class="mdi-navigation-expand-more"></i>
              </a>
            </div>
          </div>
          <!-- .container end -->
        </div>
      </div>
    </section>
    <!-- #home Section end -->

    <!-- About Section start -->
    <section id="about" class="scroll-section root-sec padd-tb-60 grey lighten-5 about-wrap">
      <div class="container">
        <div class="row">
          <div class="clearfix about-inner">

            <div class="col-sm-12 col-md-4">
              <div class="person-about">
                <h3 class="about-subtitle">My Story</h3>
                <p>
                I’m a full stack web developer, with 8 years of experience in developing various range of web applications such as Rental system, Travel Booking system, Healthcare system, Administrative dashboard, Shopping cart, Restaurant ordering system. <br>
                I’m really passionate, self-motivated and detail-oriented.
                </p>
                <a class="waves-effect waves-light btn-large brand-bg white-text" href="assets/daniel.pdf" target="_blank"><i class="mdi-content-archive left"></i> Download Resume</a>
              </div>
            </div>
            <!-- about me description -->

            <div class="col-sm-6 col-md-4">
              <div class="person-img wow fadeIn">
                <img class="z-depth-1" src="images/person.jpg" alt="">
              </div>
            </div>
            <!-- about me image -->

            <div class="col-sm-6 col-md-4">
              <div class="person-info">
                <h3 class="about-subtitle">Personal Information</h3>
                <h5><span>Name :</span> Daniel Rumpade</h5>
                <h5><span>Age :</span> 31 Years</h5>
                <h5><span>Email :</span> danru15@yandex.com</h5>
                <h5><span>Address :</span> Amsterdam, Netherlands</h5>
              </div>

              <div class="about-social"  style="display: none">
                <ul>
                  <li>
                    <a href="#" class="btn-floating waves-effect waves-light white"><i class="fa fa-facebook"></i></a>
                  </li>
                  <li>
                    <a href="#" class="btn-floating waves-effect waves-light white"><i class="fa fa-twitter"></i></a>
                  </li>
                  <li>
                    <a href="#" class="btn-floating waves-effect waves-light white"><i class="fa fa-google-plus"></i></a>
                   </li>
                  <li>
                    <a href="#" class="btn-floating waves-effect waves-light white"><i class="fa fa-linkedin"></i></a>
                  </li>
                  <li>
                    <a href="#" class="btn-floating waves-effect waves-light white"><i class="fa fa-pinterest"></i></a>
                  </li>
                </ul>
              </div>
            </div>
            <!-- about me info -->

          </div>
        </div>
      </div>
      <!-- .container end -->
    </section>
    <!-- #about Section end -->

    <!-- Resume Section start -->
    <section id="resume" class="scroll-section ">
      <section id="skill" class="root-sec white skill-wrap">
      <div class="sec-overlay">
        <div class="container">
          <div class="row">
            <div class="clearfix skill-inner">
              <div class="col-sm-12 col-md-3">
                <div class="skill-left">
                  <h2 class="title">Skills</h2>
                  <p class="regular-text">

                  </p>
                </div>
              </div>

              <!-- skills container -->
              <div class="col-sm-12 col-md-6 col-md-offset-1">
                <div class="skill-right">
                  <div id="skillSlider" class="clearfix skill-graph">

                    <!-- single skill -->
                    <div class="single-skill">
                      <div class="after-li">
                        <div class="singel-hr">
                          <div class="singel-hr-inner" data-height="100%">
                            <div class="skill-visiable">
                              <span class="skill-title">HTML5</span>
                              <div class="hr-wrap">
                                <div class="hrc"></div>
                              </div>
                            </div>
                          </div>
                          <span class="skill-count">100%</span>
                        </div>
                      </div>
                    </div>
                    <!-- /single skill-->

                    <!-- single skill -->
                    <div class="single-skill">
                      <div class="after-li">
                        <div class="singel-hr">
                          <div class="singel-hr-inner" data-height="100%">
                            <div class="skill-visiable">
                              <span class="skill-title">CSS3</span>
                              <div class="hr-wrap">
                                <div class="hrc"></div>
                              </div>
                            </div>
                          </div>
                          <span class="skill-count">100%</span>
                        </div>
                      </div>
                    </div>
                    <!-- /single skill-->

                    <!-- single skill -->
                    <div class="single-skill">
                      <div class="after-li">
                        <div class="singel-hr">
                          <div class="singel-hr-inner" data-height="100%">
                            <div class="skill-visiable">
                              <span class="skill-title">Javascript</span>
                              <div class="hr-wrap">

                                <div class="hrc"></div>
                              </div>
                            </div>
                          </div>
                          <span class="skill-count">100%</span>
                        </div>
                      </div>
                    </div>
                    <!-- /single skill-->

                    <!-- single skill -->
                    <div class="single-skill">
                      <div class="after-li">
                        <div class="singel-hr">
                          <div class="singel-hr-inner" data-height="100%">
                            <div class="skill-visiable">
                              <span class="skill-title">AngularJS</span>
                              <div class="hr-wrap">
                                <div class="hrc"></div>
                              </div>
                            </div>
                          </div>
                          <span class="skill-count">100%</span>
                        </div>
                      </div>
                    </div>
                    <!-- /single skill-->

                    <!-- single skill -->
                    <div class="single-skill">
                      <div class="after-li">
                        <div class="singel-hr">
                          <div class="singel-hr-inner" data-height="100%">
                            <div class="skill-visiable">
                              <span class="skill-title">React.js</span>
                              <div class="hr-wrap">
                                <div class="hrc"></div>
                              </div>
                            </div>
                          </div>
                          <span class="skill-count">100%</span>
                        </div>
                      </div>
                    </div>
                    <!-- /single skill-->

                    <!-- single skill -->
                    <div class="single-skill">
                      <div class="after-li">
                        <div class="singel-hr">
                          <div class="singel-hr-inner" data-height="95%">
                            <div class="skill-visiable">
                              <span class="skill-title">Node.js</span>
                              <div class="hr-wrap">
                                <div class="hrc"></div>
                              </div>
                            </div>
                          </div>
                          <span class="skill-count">95%</span>
                        </div>
                      </div>
                    </div>
                    <!-- /single skill-->

                    <!-- single skill -->
                    <div class="single-skill">
                      <div class="after-li">
                        <div class="singel-hr">
                          <div class="singel-hr-inner" data-height="100%">
                            <div class="skill-visiable">
                              <span class="skill-title">Chart Graphics</span>
                              <div class="hr-wrap">

                                <div class="hrc"></div>
                              </div>
                            </div>
                          </div>
                          <span class="skill-count">100%</span>
                        </div>
                      </div>
                    </div>
                    <!-- /single skill-->

                    <!-- single skill -->
                    <div class="single-skill">
                      <div class="after-li">
                        <div class="singel-hr">
                          <div class="singel-hr-inner" data-height="90%">
                            <div class="skill-visiable">
                              <span class="skill-title">Wordpress</span>
                              <div class="hr-wrap">
                                <div class="hrc"></div>
                              </div>
                            </div>
                          </div>
                          <span class="skill-count">90%</span>
                        </div>
                      </div>
                    </div>
                    <!-- /single skill-->

                    <!-- single skill -->
                    <div class="single-skill">
                      <div class="after-li">
                        <div class="singel-hr">
                          <div class="singel-hr-inner" data-height="90%">
                            <div class="skill-visiable">
                              <span class="skill-title">Laravel</span>
                              <div class="hr-wrap">
                                <div class="hrc"></div>
                              </div>
                            </div>
                          </div>
                          <span class="skill-count">90%</span>
                        </div>
                      </div>
                    </div>
                    <!-- /single skill-->

                    <!-- single skill -->
                    <div class="single-skill">
                      <div class="after-li">
                        <div class="singel-hr">
                          <div class="singel-hr-inner" data-height="100%">
                            <div class="skill-visiable">
                              <span class="skill-title">UI/UX Design</span>
                              <div class="hr-wrap">

                                <div class="hrc"></div>
                              </div>
                            </div>
                          </div>
                          <span class="skill-count">100%</span>
                        </div>
                      </div>
                    </div>
                    <!-- /single skill-->

                    <!-- single skill -->
                    <div class="single-skill">
                      <div class="after-li">
                        <div class="singel-hr">
                          <div class="singel-hr-inner" data-height="100%">
                            <div class="skill-visiable">
                              <span class="skill-title">SQL &amp; NoSQL</span>
                              <div class="hr-wrap">
                                <div class="hrc"></div>
                              </div>
                            </div>
                          </div>
                          <span class="skill-count">100%</span>
                        </div>
                      </div>
                    </div>
                    <!-- /single skill-->

                    <!-- single skill -->
                  </div>
                </div>
              </div>
              <!-- /skills container -->
            </div>
          </div>
          <div class="btn-wrapp skl-ctrl">
            <a class="btn-floating waves-effect waves-light btn-large brand-bg white-text go go-left"><i class="mdi-navigation-chevron-left "></i></a>
            <a class="btn-floating waves-effect waves-light btn-large brand-bg white-text go go-right"><i class="mdi-navigation-chevron-right "></i></a>
          </div>
        </div>
      </div>
        <!-- .container end -->
      </section>

      <section id="experience" class="root-sec padd-tb-120 brand-bg experience-wrap">
        <div class="container">
          <div class="row">
            <div class="experience-inner">
              <div class="col-sm-12 col-md-10 card-box-wrap">
                <div class="row">
                  <div class="clearfix section-head experience-text">
                    <div class="col-sm-12">
                      <h2 class="title">EMPLOYMENT HISTORY</h2>
                      <p class="regular-text">For 10 years, I have worked as a PHP developer, and have built many websites.</p>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="overflow-hidden">
                      <div class="row">
                        <div id="experienceSlider" class="clearfix card-element-wrapper">
                          <div class="col-sm-4 cold-xs-12 single-card-box wow fadeInUpSmall" data-wow-duration=".7s">
                            <div class="card">
                              <div class="card-image waves-effect waves-block waves-light">
                                <h2 class="left-align card-title-top">October 2011 - July 2012</h2>
                                <div class="valign-wrapper card-img-wrap">
                                  <img class="activator" src="./images/exp1.jpg" alt="">
                                </div>
                              </div>
                              <div class="card-content">
                                <span class="card-title activator brand-text">Software Developer<i class="mdi-navigation-more-vert right"></i></span>
                                <p>AVG Technologies</p>
                                <p>PHP, HTML, CSS</p>
                              </div>
                              <div class="card-reveal">
                                <div class="rev-title-wrap">
                                  <span class="card-title activator brand-text">PHP Developer<i class="mdi-navigation-close right"></i></span>
                                  <p>AVG Technologies</p>
                                </div>
                                <p class="rev-content">
                                  - Built WordPress themes.<br><br> - Maintained WordPress sites.<br><br> - Developed a web shop based on WordPress.<br><br> - Managed hosting for about twenty sites.<br><br> - Maintained Joomla sites.<br>
                                </p>
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-4 cold-xs-12 single-card-box wow fadeInUpSmall" data-wow-delay=".2s" data-wow-duration=".7s">
                            <div class="card">
                              <div class="card-image waves-effect waves-block waves-light">
                                <h2 class="left-align card-title-top">August 2012 - May 2014</h2>
                                <div class="valign-wrapper card-img-wrap">
                                  <img class="activator" src="./images/exp2.jpg" alt="">
                                </div>
                              </div>
                              <div class="card-content">
                                <span class="card-title activator brand-text">MEAN stack Developer<i class="mdi-navigation-more-vert right"></i></span>
                                <p>Manus VR</p>
                                <p>AngularJS, Node.js, Express.js, MongoDB</p>
                              </div>
                              <div class="card-reveal">
                                <div class="rev-title-wrap">
                                  <span class="card-title activator brand-text">MEAN stack Developer<i class="mdi-navigation-close right"></i></span>
                                  <p>Manus VR</p>
                                </div>
                                <p class="rev-content">
                                  - Worked closely with the product team as a MEAN stack developer to build new features for the desktop and mobile site. <br><br>
                                  - Gained unique experience working on a large-scale software project with hundreds of contributors. Learned extensively about release engineering, including testing and deployment, as well as common web security vulnerabilities.<br><br>
                                  - Built the necessary features for the public launch in their back-end Node.js/Express.js startup. <br><br>
                                  - Developed a server-side Node.js RESTful API application. <br><br>
                                  - Built the initial AngularJS concepts and components for app. <br>
                                </p>
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-4 cold-xs-12 single-card-box wow fadeInUpSmall" data-wow-delay=".4s" data-wow-duration=".7s">
                            <div class="card">
                              <div class="card-image waves-effect waves-block waves-light">
                                <h2 class="left-align card-title-top">June 2014 - October 2016</h2>
                                <div class="valign-wrapper card-img-wrap">
                                  <img class="activator" src="./images/exp3.jpg" alt="">
                                </div>
                              </div>
                              <div class="card-content">
                                <span class="card-title activator brand-text">Webmaster<i class="mdi-navigation-more-vert right"></i></span>
                                <p>Impraise</p>
                                <p>AngularJS, React.js, D3.js, Highchart, Chart.js</p>
                              </div>
                              <div class="card-reveal">
                                <div class="rev-title-wrap">
                                  <span class="card-title activator brand-text">Project Manager<i class="mdi-navigation-close right"></i></span>
                                  <p>Impraise</p>
                                </div>
                                <p class="rev-content">
                                  - Architected and led development in a team to build a Spotify-like application for a Series-A funded startup using Node.js, Electron/Chromium, and React.js. <br><br>
                                  - Built a bidirectional shipping integration API with Ruby on Rails for a very large affiliate network corporation.<br><br>
                                  - Managed an outsourced, overseas engineering team using Agile practices.<br><br>
                                  - Built a large front-end for a tax compliance platform with AngularJS and Bootstrap.<br><br>
                                  - Consulted for an early-stage startup and worked in a team to develop a single-page application using ReactJS, Flux, SASS, and ES6.<br>
                                </p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="education" class="root-sec grey lighten-5 padd-tb-120 education-wrap">
        <div class="container">
          <div class="row">
            <div class="education-inner">
              <div class="col-sm-12 col-md-10 card-box-wrap">
                <div class="row">
                  <div class="clearfix section-head education-text">
                    <div class="col-sm-12">
                      <h2 class="title">education</h2>
                      <p class="regular-text"></p>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="overflow-hidden">
                      <div class="row">
                        <div id="educationSlider" class="clearfix card-element-wrapper">

                        <!-- single education -->
                          <div class="col-sm-4 single-card-box wow fadeInUpSmall" data-wow-duration=".7s">
                            <div class="card">
                              <div class="card-image waves-effect waves-block waves-light">
                                <h2 class="left-align card-title-top">2005 - 2009</h2>
                                <div class="card-img-wrap">
                                  <img class="activator" src="./images/edu.jpg" alt="">
                                </div>
                              </div>
                              <div class="card-content">
                                <span class="card-title activator brand-text">Bachelor of Computer Engineering<i class="mdi-navigation-more-vert right"></i></span>
                                <p>VRIJE UNIVERSITY AMSTERDAM</p>
                              </div>
                              <!-- Reveal content-->
                            </div>
                          </div> <!-- single education end -->

                          <!-- single education -->
                          <div class="col-sm-4 single-card-box wow fadeInUpSmall" data-wow-delay=".2s" data-wow-duration=".7s">
                            <div class="card">
                              <div class="card-image waves-effect waves-block waves-light">
                                <h2 class="left-align card-title-top">2009 - 2011</h2>
                                <div class="card-img-wrap">
                                  <img class="activator" src="./images/edu.jpg" alt="">
                                </div>
                              </div>
                              <div class="card-content">
                                <span class="card-title activator brand-text">Master of Computer Science<i class="mdi-navigation-more-vert right"></i></span>
                                <p>VRIJE UNIVERSITY AMSTERDAM</p>
                              </div>
                            </div>
                          </div> <!-- single education -->

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </section>
    <!-- #resume Section end -->

    <!-- Portfolio Section start -->
    <section id="portfolio" class="scroll-section root-sec white portfolio-wrap">
      <div class="padd-tb-120 brand-bg portfolio-top">
        <div class="portfolio-inner">
          <div class="container">
            <div class="row">
              <div class="col-sm-12">
                <h2 class="title">PORTFOLIO</h2>
                <ul class="inline-menu clearfix portfolio-category" id="portfolio-msnry-sort">
                  <li class="active"><a href="#" data-target="*">All</a>
                  </li>
                  <li><a href="#" data-target=".category-1">AngularJS</a>
                  </li>
                  <li><a href="#" data-target=".category-2">React.js</a>
                  </li>
                  <li><a href="#" data-target=".category-3">Ecommerce</a>
                  </li>
                  <li><a href="#" data-target=".category-4">WordPress</a>
                  </li>
                  <li><a href="#" data-target=".category-5">ASP.NET</a>
                  </li>                  
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- .container end -->
      </div>
      <div id="portfolioModal" class="modal white">
        <div class="model-img"></div>
        <div class="modal-content">
          <h2 class="title">Lorem ipsum dolor sit fugit dolore.</h2>
          <p class="m-content">A portfolio is a collection of documents and writing that you assemble in order to demonstrate that you have the appropriate prior.</p>
        </div>

        <div class="modal-footer">
          <a href="http://tinyurl.com/jdymnat" target="_blank" class="waves-effect btn-flat brand-text modal-action">Visit Website</a>
          <a href="#" class="waves-effect btn-flat brand-text modal-action modal-close">cancel</a>
        </div>
      </div>

      <div class="portfolio-bottom">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <ul class="clearfix protfolio-item" id="protfolio-msnry">
              
              <!-- Single Portfolio-->
                <li class="single-port-item category-2">
                  <a href="#portfolioModal" class="waves-effect waves-block waves-light modal-trigger" data-image-source="./images/projects/node6-1.png" data-title="Coker Expo" data-content="This was built with React.js and Node.js." data-demo-link="https://www.cokerexpo.co.uk"> <!-- Portfolio pop-up content-->
                    <div class="protfolio-image">
                      <img src="./images/projects/node6-1.png" alt="portfolio"> <!-- portfolio thumbnail-->
                      <div class="protfolio-content waves-effect waves-block waves-light">
                        <div class="protfolio-content__inner">
                          <h2 class="p-title">Coker Expo</h2>
                        </div>
                      </div>
                      <div class="p-overlay"></div>
                    </div>
                  </a>
                </li>
                <!--/ single portfolio -->

                <!-- Single Portfolio-->
                <li class="single-port-item category-2 category-3">
                  <a href="#portfolioModal" class="waves-effect waves-block waves-light modal-trigger" data-image-source="./images/projects/dressup_cont.png" data-title="Shop Dresses, Clothing and Shoes" data-content="I have built this shopping site with Shopify and React.js." data-demo-link="http://shopdressup.com">
                    <div class="protfolio-image">
                      <img src="./images/projects/sh111.png" alt="portfolio">
                      <div class="protfolio-content waves-effect waves-block waves-light">
                        <div class="protfolio-content__inner">
                          <h2 class="p-title">Dress Shop</h2>
                        </div>
                      </div>
                      <div class="p-overlay"></div>
                    </div>
                  </a>
                </li>
                <!--/ single portfolio -->

                <!-- Single Portfolio-->
                <li class="single-port-item category-1 category-5">
                  <a href="#portfolioModal" class="waves-effect waves-block waves-light modal-trigger" data-image-source="./images/projects/ang1_cont.png" data-title="McCain USA FoodService" data-content="This restaurant website was built with AngularJS, Bootstrap and ASP.NET." data-demo-link="http://www.mccainusafoodservice.com">
                    <div class="protfolio-image">
                      <img src="./images/projects/ang1_thumb.png" alt="portfolio">
                      <div class="protfolio-content waves-effect waves-block waves-light">
                        <div class="protfolio-content__inner">
                          <h2 class="p-title">FoodService</h2>
                        </div>
                      </div>
                      <div class="p-overlay"></div>
                    </div>
                  </a>
                </li>
                <!--/ single portfolio -->

                <!-- Single Portfolio-->
                <li class="single-port-item category-3">
                  <a href="#portfolioModal" class="waves-effect waves-block waves-light modal-trigger" data-image-source="./images/projects/shopify6_cont.png" data-title="Anti Aging Skin Care" data-content="This was built with Shopify and Bootstrap." data-demo-link="https://www.antiagingcompany.com">
                    <div class="protfolio-image">
                      <img src="./images/projects/shopify6_thumb.png" alt="portfolio">
                      <div class="protfolio-content waves-effect waves-block waves-light">
                        <div class="protfolio-content__inner">
                          <h2 class="p-title">Skin Care</h2>
                        </div>
                      </div>
                      <div class="p-overlay"></div>
                    </div>
                  </a>
                </li>
                <!--/ single portfolio -->

                <!-- Single Portfolio-->
                <li class="single-port-item category-5">
                  <a href="#portfolioModal" class="waves-effect waves-block waves-light modal-trigger" data-image-source="./images/projects/8-3.png" data-title="Ways we work" data-content="This was built with PHP, HTML5, CSS3 and Bootstrap." data-demo-link="http://wayswework.io">
                    <div class="protfolio-image">
                      <img src="./images/projects/8-1.png" alt="portfolio">
                      <div class="protfolio-content waves-effect waves-block waves-light">
                        <div class="protfolio-content__inner">
                          <h2 class="p-title">Ways we work</h2>
                        </div>
                      </div>
                      <div class="p-overlay"></div>
                    </div>
                  </a>
                </li>
                <!--/ single portfolio -->

                <!-- Single Portfolio-->
                <li class="single-port-item category-1 category-4">
                  <a href="#portfolioModal" class="waves-effect waves-block waves-light modal-trigger" data-image-source="./images/projects/wp5_cont.png" data-title="Hotel Booking Website" data-content="This was built with WordPress, React.js, bootstrap and Yoast SEO plugin for SEO." data-demo-link="http://coppersmithhotel.com.au">
                    <div class="protfolio-image">
                      <img src="./images/projects/wp5_thumb.png" alt="portfolio">
                      <div class="protfolio-content waves-effect waves-block waves-light">
                        <div class="protfolio-content__inner">
                          <h2 class="p-title">Booking</h2>
                        </div>
                      </div>
                      <div class="p-overlay"></div>
                    </div>
                  </a>
                </li>
                <!--/ single portfolio -->

                <!-- Single Portfolio-->
                <li class="single-port-item category-2 category-4">
                  <a href="#portfolioModal" class="waves-effect waves-block waves-light modal-trigger" data-image-source="./images/projects/wp9.png" data-title="Partner with Alturas Capital" data-content="This was built with WordPress, React.js, bootstrap and Yoast SEO plugin for SEO." data-demo-link="http://www.alturas.com">
                    <div class="protfolio-image">
                      <img src="./images/projects/wp9.png" alt="portfolio">
                      <div class="protfolio-content waves-effect waves-block waves-light">
                        <div class="protfolio-content__inner">
                          <h2 class="p-title">Alturas</h2>
                        </div>
                      </div>
                      <div class="p-overlay"></div>
                    </div>
                  </a>
                </li>
                <!--/ single portfolio -->

                <!-- Single Portfolio-->
                <li class="single-port-item category-4">
                  <a href="#portfolioModal" class="waves-effect waves-block waves-light modal-trigger" data-image-source="./images/projects/wp4_cont.png" data-title="US Express Freight System" data-content="This was built with WordPress, React.js, bootstrap and Yoast SEO plugin for SEO." data-demo-link="https://www.usexpressfreight.com">
                    <div class="protfolio-image">
                      <img src="./images/projects/wp4_thumb.png" alt="portfolio">
                      <div class="protfolio-content waves-effect waves-block waves-light">
                        <div class="protfolio-content__inner">
                          <h2 class="p-title">US Express</h2>
                        </div>
                      </div>
                      <div class="p-overlay"></div>
                    </div>
                  </a>
                </li>
                <!--/ single portfolio -->

                <!-- Single Portfolio-->
                <li class="single-port-item category-1 category-3">
                  <a href="#portfolioModal" class="waves-effect waves-block waves-light modal-trigger" data-image-source="./images/projects/ang2_cont.jpg" data-title="REFERLOCAL" data-content="This was built with AngularJS and Angular Material." data-demo-link="https://deals.referlocal.com">
                    <div class="protfolio-image">
                      <img src="./images/projects/ang2.jpg" alt="portfolio">
                      <div class="protfolio-content waves-effect waves-block waves-light">
                        <div class="protfolio-content__inner">
                          <h2 class="p-title">REFERLOCAL</h2>
                        </div>
                      </div>
                      <div class="p-overlay"></div>
                    </div>
                  </a>
                </li>
                <!--/ single portfolio -->

              </ul>
              <!-- portfolio load more button-->
              <a id="portfolio-item-loader" class="btn-floating btn-large waves-effect waves-light brand-bg hidden"><i class="mdi-content-add"></i></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- #portfolio Section end -->

    <!-- Testimonial Section end -->
    <section id="testimonial" class="scroll-section root-sec brand-bg padd-tb-120 testimonial-wrap">
      <div class="container">
        <div class="row">
          <div class="testimonial-inner">
            <div class="col-sm-12 col-md-10 card-box-wrap">
              <div class="row">
                <div class="clearfix section-head testimonial-text">
                  <div class="col-sm-12">
                    <h2 class="title">testimonial</h2>
                    <p class="regular-text">I have worked with many clients from US, Canada and Australia. <br> Here are some testimonials that they have given for me.</p>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="overflow-hidden">
                    <div class="row">
                      <div id="testimonialSlider" class="clearfix card-element-wrapper">
                        <div class="col-sm-6 single-card-box wow fadeInUpSmall" data-wow-duration=".7s">
                          <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                              <div class="card-img-wrap">
                                <img class="activator" src="images/cl1.jpg" alt="">
                                <p class="saying-about">Daniel is a real pro!  Not only was his work product superb but his communications was above and beyond.  he was in touch constantly , made sure I had what I needed and made any changes immediately. Additionally he created a spreadsheet that enabled us to track the progress of the assignment and keep us both on track. He is highly skilled, resourceful and full of helpful suggestions and tips.</p>
                              </div>
                            </div>
                            <div class="card-content">
                              <span class="card-title activator brand-text">Ryan Bruce</span>
                            </div>
                          </div>
                        </div> <!-- ./single testimonial box -->
                        <div class="col-sm-6 single-card-box wow fadeInUpSmall" data-wow-delay=".2s" data-wow-duration=".7s">
                          <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                              <div class="card-img-wrap">
                                <img class="activator" src="images/cl2.jpg" alt="">
                                <p class="saying-about">Daniel was the only person who within the first meeting made me feel very confident and comfortable that he understood and could produce what we envisioned. It’s been a terrific experience working with him. I have never had to ask twice for answers and when delivered, he always made sense! The finished product is far superior than I imagined!</p>
                              </div>
                            </div>
                            <div class="card-content">
                              <span class="card-title activator brand-text">Robin Ciarlo</span>
                            </div>
                          </div>
                        </div> <!-- ./single testimonial box -->
                        <div class="col-sm-6 single-card-box">
                          <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                              <div class="card-img-wrap">
                                <img class="activator" src="images/cl3.png" alt="">
                                <p class="saying-about">I highly recommend Daniel as a web developer that is competent, talented and professional. He successfully took on my point of view of my project. His straightforward programming not only produced an exact replica, but created a more efficient, intuitive, and complete management system that has cut my admin time so dramatically I can now handle 5 clients in the time it previously took me to handle 1 client.</p>
                              </div>
                            </div>
                            <div class="card-content">
                              <span class="card-title activator brand-text">Eric Taylor</span>
                            </div>
                          </div>
                        </div> <!-- ./single testimonial box -->
                        <div class="col-sm-6 single-card-box">
                          <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                              <div class="card-img-wrap">
                                <img class="activator" src="images/cl4.jpg" alt="">
                                <p class="saying-about">He is willing to help in every way, developing a professional and beautiful website which showcases our company very well. His ability to develop creative solutions to the functionality and user experience of our site made for a fantastic end result. I was impressed all around with his skills, customer service and attention to detail every step of the way.</p>
                              </div>
                            </div>
                            <div class="card-content">
                              <span class="card-title activator brand-text">Andrew Smith</span>
                            </div>
                          </div>
                        </div> <!-- ./single testimonial box -->
                      </div> <!-- #testimonialSlider end -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="btn-wrapp tmo-ctrl">
              <a class="btn-floating waves-effect waves-light btn-large white go go-left"><i class="mdi-navigation-chevron-left brand-text"></i></a>
              <a class="btn-floating waves-effect waves-light btn-large white go go-right"><i class="mdi-navigation-chevron-right brand-text"></i></a>
            </div>
          </div>
        </div>
      </div> <!-- ./container end -->
    </section>
    <!-- #testimonial Section end -->

    <!-- Funfacts Section end -->
    <section id="funfacts" class="root-sec grey lighten-5 funfact-wrap">
    <div class="sec-inner padd-tb-120">
      <div class="container">
        <div class="row">
          <div class="funfact-inner">
            <div class="col-sm-4 funfact-box">
              <div class="center-align card-panel white">
                <div class="feature-box-outer">
                  <div class="funfact-box-inner">
                    <div class="clearfix ">
                      <i class="mdi-editor-insert-emoticon"></i>
                      <span class="num countNumb">47</span>
                    </div>
                    <div class="context">Happy clients</div>
                  </div>
                </div>
              </div>
            </div> <!-- ./single fun fact box -->
            <div class="col-sm-4 funfact-box">
              <div class="center-align card-panel white">
                <div class="feature-box-outer">
                  <div class="funfact-box-inner">
                    <div class="clearfix ">
                      <i class="mdi-action-wallet-travel"></i>
                      <span class="num countNumb">120</span>
                    </div>
                    <div class="context">Project Completed</div>
                  </div>
                </div>
              </div>
            </div> <!-- ./single fun fact box -->
            <div class="col-sm-4 funfact-box">
              <div class="center-align card-panel white">
                <div class="feature-box-outer">
                  <div class="funfact-box-inner">
                    <div class="clearfix ">
                      <i class="mdi-action-wallet-giftcard"></i>
                      <span class="num countNumb">4</span>
                    </div>
                    <div class="context">Award Won</div>
                  </div>
                </div>
              </div>
            </div> <!-- ./single fun fact box -->
          </div>
        </div>

      </div>  <!-- .container end -->
    </div>
    </section>
    <!-- #funfacts Section end -->

    <!-- Contact Section end -->
    <section id="contact" class="scroll-section root-sec brand-bg padd-tb-120 contact-wrap">
      <div class="container">
        <div class="row">
          <div class="contact-inner">
            <div class="col-sm-12 card-box-wrap">
              <div class="row">
                <div class="clearfix section-head contact-text">
                  <div class="col-sm-12">
                    <h2 class="title">Contact</h2>
                    <p class="regular-text">Nieuwe Achtergracht 100 WT, Amsterdam</p>
                    <ul class="clearfix contact-info">
                      <li><a href="">Email: danru15@yandex.com</a>
                      </li>
                      <li><a href="">Skype: danru15</a>
                      </li>
                    </ul>
                  </div>
                </div> <!-- contact text end -->

                <div class="clearfix contact-form">

                <!-- Map Start -->
                  <div class="col-sm-7">
                    <div class="map-wrapper">
                      <div id="map"></div>
                    </div>
                  </div> <!-- Map end -->

                <!-- Contact Form start -->
                  <div class="col-sm-5">
                    <div class="clearfix card-panel grey lighten-5 cform-wrapper">
                      <form action="inc/sendEmail.php" id="contactForm" novalidate>
                        <div class="input-field">
                          <input id="contact_name" type="text" name="contactName" class="validate input-box">
                          <label for="contact_name" class="input-label">Name</label>
                        </div>
                        <div class="input-field">
                          <input id="email" type="email" name="contactEmail" class="validate input-box">
                          <label for="email" class="input-label">Email</label>
                        </div>
                        <div class="input-field">
                          <input id="subject" type="text" name="contactSubject" class="validate input-box">
                          <label for="subject" class="input-label">Subject</label>
                        </div>
                        <div class="input-field textarea-input">
                          <textarea id="textarea1" name="contactMessage" class="validate materialize-textarea" style="height: 22px;"></textarea>
                          <label for="textarea1" class="input-label">Message</label>
                        </div>
                        <div class="input-field submit-wrap clearfix">
                          <button type="submit" class="left waves-effect btn-flat brand-text submit-btn">send message</button>
                          <div class="right form-loader-area">
                            <svg class="circular size-20" height="20" width="20">
                              <circle class="path" cx="10" cy="10" r="7" fill="none" stroke-width="3" stroke-miterlimit="10" />
                            </svg>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div> <!-- ./contact form end -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> <!-- ./container end -->
      <div class="section-call-to-area">
        <div class="container">
          <div class="row">
            <a href="#home" class="btn-floating btn-large button-middle call-to-home section-call-to-btn animated btn-up btn-hidden" data-section="#home">
              <i class="mdi-navigation-expand-less"></i>
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- #contact Section end -->

    <!-- Footer Section end -->
    <footer id="footer" class="root-sec white root-sec footer-wrap">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="clearfix footer-inner">
              <ul class="left social-icons" style="display: none">
                <li><a href="#" class="tooltips tooltipped facebook" data-position="top" data-delay="50" data-tooltip="Facebook"><i class="fa fa-facebook"></i></a>
                </li>
                <li><a href="#" class="tooltips tooltipped linkedin" data-position="top" data-delay="50" data-tooltip="Linkdin"><i class="fa fa-linkedin"></i></a>
                </li>
                <li><a href="#" class="tooltips tooltipped twitter" data-position="top" data-delay="50" data-tooltip="Twitter"><i class="fa fa-twitter"></i></a>
                </li>
                <li><a href="#" class="tooltips tooltipped google-plus" data-position="top" data-delay="50" data-tooltip="Google Plus"><i class="fa fa-google-plus"></i></a>
                </li>
                <li><a href="#" class="tooltips tooltipped dribbble" data-position="top" data-delay="50" data-tooltip="Dribbble"><i class="fa fa-dribbble"></i></a>
                </li>
                <li><a href="#" class="tooltips tooltipped behance" data-position="top" data-delay="50" data-tooltip="Behance"><i class="fa fa-behance"></i></a>
                </li>
              </ul> <!-- ./social icons end -->
              <div class="right copyright">
                <p></p>
              </div>
            </div>
          </div>
        </div>
      </div> <!-- ./container end-->
    </footer>
    <!-- #footer end -->

  </main>
  <!-- Main Container end-->


  <!-- JavaScripts -->
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="assets/js/jquery.easing.1.3.js"></script>
  <script src="assets/js/detectmobilebrowser.js"></script>
  <script src="assets/js/isotope.pkgd.min.js"></script>
  <script src="assets/js/wow.min.js"></script>
  <script src="assets/js/waypoints.js"></script>
  <script src="assets/js/jquery.counterup.min.js"></script>
  <script src="assets/js/jquery.nicescroll.min.js"></script>
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3&sensor=true"></script>
  <script src="assets/js/gmaps.js"></script>
  <script src="assets/libs/owl-carousel/owl.carousel.min.js"></script>
  <script src="assets/libs/materialize/js/materialize.min.js"></script>
  <script src="assets/libs/jwplayer/jwplayer.js"></script>
  <script src="assets/libs/sweetalert/sweet-alert.min.js"></script>
  <script src="assets/js/common.js"></script>
  <script src="assets/js/main.js"></script>
</body>

</html>