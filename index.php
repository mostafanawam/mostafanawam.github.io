<!DOCTYPE html>
<html lang="en">

<head>
    <style media="screen">
        span {
            font-weight: bolder;
        }
    </style>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Mostafa Nawam</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <!-- google pie charts-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <script>
        function sendmail(){
           var msg=$('#message').val();
            var phone=$('#phone').val();
            var mail=$('#email').val();
           var name= $('#name').val();

        if (msg=='' || phone=='' || name=='' || mail=='') {  
            if(msg==''){
                $('#alertmsg').html('Please fill message');
            }
            else $('#alertmsg').html('');
            if(phone==''){
                $('#alertphone').html('Please your fill your phone');
            }
            else $('#alertphone').html('');
            if(name==''){
                $('#alertname').html('Please fill your name');
            }
           else $('#alertname').html('');
            if(mail==''){
               $('#alertemail').html('Please fill your email');
            }
            else  $('#alertemail').html('');
        }else{/* if all is filled send email*/
            
        }
                
             
        }
    </script>
</head>
<?php
if (isset($_POST['btn'])) {
    # code...

                $to = "mostafanawam44@gmail.com";
                $subject = "This is subject";
                
                $message = "<b>This is HTML message.</b>";
                $message .= "<h1>This is headline.</h1>";
                
                $header = "From:mostafanawam44@gmail.com \r\n";
                //$header .= "Cc:afgh@somedomain.com \r\n";
                $header .= "MIME-Version: 1.0\r\n";
                $header .= "Content-type: text/html\r\n";
                
                $retval = mail ($to,$subject,$message,$header);
                
                if( $retval == true ) {
                    echo "Message sent successfully...";
                }else {
                    echo "Message could not be sent...";
                }
            }
?>
<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg   fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">Mostafa Nawam</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ml-1"></i>
                </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ml-auto">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about" id=act1>  About</a></li>
                    <li class="nav-item"><a class="nav-link  js-scroll-trigger" href="#services" id=act2> Services</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#portfolio" id=act3> Projects</a></li>
                    <!--  <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#team">Team</a></li>-->
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact"> Contact Us</a></li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- Masthead-->
    <header class="masthead">
        <div class="container">

            <div class="text-center">
                <img width="220rem" height="190rem" src="assets/images/2.png" alt="">
            </div>

            <br>

            <div class="masthead-subheading">Welcome To My Website!</div>
            <div class="masthead-heading text-uppercase"> I'm Mostafa Nawam</div>
            <a download class="btninfo btn-xl" target="_blank" href="https://drive.google.com/file/d/11ug0ZFLW6JTYt4HYW3arYvcDoWiOxK7a/view?usp=sharing">Check CV</a>
        </div>
    </header>


    <!-- About-->
    <section class="page-section" id="about" style="background-color:rgb(22, 25, 34);">
        <div class="container">


            <div class="text-center">
                <h2 id=title1 class="section-heading text-uppercase">About</h2>
                <h3 id=title12 class="section-subheading">My road to success.</h3>
            </div>




            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="img">
                        <img width="100%" height="400" src="assets/images/logo.jpeg" />
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">

                    <p style="padding-top:10px;">Computer science student at Lebanese University familiar with several programming languages.Talented programmer with experience developing websites and manage templates.Also, bringing exceptional skills in designing, coding, testing,
                        and implementing customizations to exceed customer expectations. </p>
                    <pre><span>Full Name</span>    :  Mostafa Nawam</pre>
                    <pre><span>Age</span>          :  21</pre>
                    <pre><span>Phone </span>       :  00961 81602936</pre>
                    <pre><span>Email </span  >       :  mostafanawam44@gmail.com</pre>
                    <pre><span>Adress</span>       :  Lebanon, Saida, Qayaa</pre>
                    <a class="btn btnabout js-scroll-trigger" href="#contact">Contact Me</a>
                    <a class="btn btnabout js-scroll-trigger" href="#portfolio">My Work</a>
                </div>
            </div>






            <!-- Skills -->

            <br>
            <h3 class="text-center" style="color:#FFD700;">My Skills</h3>
            <br>



            <div class="row">

                <div class="col-lg-6 col-md-6 col-sm-12 " style="width:100%;">
                    <div id="piechart"></div>
                </div>



                <div class="col-lg-6 col-md-6 col-sm-12" style="width:100%;">
                    <div id="piechart2"></div>
                </div>

            </div>

        </div>
        <!-- end container-->
    </section>
    <!-- end section-->

    <!-- =====================================
        ==== End About -->
    <!-- =====================================


        <!-- Services-->
    <section class="page-section" id="services" style="background-color:rgb(25, 29, 40);">
        <div class="container">

            <div class="test1">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Services</h2>
                    <h3 class="section-subheading">This is what I prefer to do.</h3>
                </div>
            </div>



            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-laptop-house fa-stack-1x fa-inverse"></i>
                        </span>
                    <h4 class="my-3 txtserv">Web Developing</h4>
                    <p class="text-muted">Best technology to manage your website</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                        </span>
                    <h4 class="my-3 txtserv">Responsive Designs</h4>
                    <p class="text-muted">Our new Designs compatible with laptops, mobile devices, pc and respond fully with all browsers. </p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-tablet fa-stack-1x fa-inverse"></i>
                        </span>
                    <h4 class="my-3 txtserv">Mobile Application</h4>
                    <p class="text-muted">The best choice for making your company worldwide</p>
                </div>
            </div>
        </div>
    </section>

    <!-- projetcs Grid-->

    <section class="page-section" id="portfolio" style="background-color:#161922;">
        <div class="container">

            <div class="test1">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">My Projects</h2>
                    <h3 class="section-subheading ">Some of my work.</h3>
                </div>
            </div>



            <div class="row">
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="portfolio-item">
                        <!--  <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>-->
                        <img class="img-fluid" src="assets/images/proj1.jpg" alt="" />
                        <!--</a>-->
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Bouza Center</div>
                            <div class="portfolio-caption-subheading text-muted">
                                <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                                    <button class="btn btnproj  btn-md">Show</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="portfolio-item">

                        <img class="img-fluid" src="assets/images/proj032.png" alt="" />

                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">University System</div>
                            <div class="portfolio-caption-subheading  text-muted">
                                <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
                                    <button class="btn btnproj  btn-md">Show</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="portfolio-item">

                        <img class="img-fluid" src="assets/images/proj04.png" alt="" />

                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Masjid Colony</div>
                            <div class="portfolio-caption-subheading text-muted">
                                <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
                                    <button class="btn btnproj btn-md">show</button></a>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="portfolio-item">

                        <img class="img-fluid" src="assets/images/proj3.png" alt="" />

                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">BoyScouts</div>
                            <div class="portfolio-caption-subheading text-muted">
                                <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
                                    <button class="btn btnproj btn-md">show</button></a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="portfolio-item">

                        <img class="img-fluid" src="assets/images/4.png" alt="" />

                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Mostafa Nawam</div>
                            <div class="portfolio-caption-subheading  text-muted">
                                <a class="js-scroll-trigger" href="#page-top">
                                    <button class="btn btnproj  btn-md">Show</button></a>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>



    <!-- Contact-->
    <section class="page-section" id="contact" style="background-color:rgb(25, 29, 40);">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Contact Us</h2>
                <h3 class="section-subheading ">For all enquiries, please email me using the form below.</h3>
            </div>
            <form id="contactForm" name="sentMessage" novalidate="novalidate" method="POST"> 
                <div class="row align-items-stretch mb-5">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="form-control" id="name" type="text" placeholder="Your Name *" required="required" data-validation-required-message="Please enter your name." />
                            <p class="help-block text-danger" id='alertname'></p>
                        </div>
                        <div class="form-group">
                            <input class="form-control" id="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address." />
                            <p class="help-block text-danger" id='alertemail'></p>
                        </div>
                        <div class="form-group mb-md-0">
                            <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required="required" data-validation-required-message="Please enter your phone number." />
                            <p class="help-block text-danger" id='alertphone'></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form-group-textarea mb-md-0">
                            <textarea class="form-control" id="message" placeholder="Your Message *" required="required" data-validation-required-message="Please enter a message."></textarea>
                            <p class="help-block text-danger" id='alertmsg'></p>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <div id="success"></div>
                    <button class="btn btnsend btn-xl text-uppercase" name="btn" id="sendMessageButton" type="submit" onclick="sendmail()">Send Message</button>
                </div>
            </form>
        </div>
    </section>
    <!-- Footer-->
    <footer class="footer py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 text-lg-left txtcopy">Copyright 2021 © Designed by Mostafa Nawam </div>
                <div class="col-lg-4 my-3 my-lg-0">
                    <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/mostafanawam/"><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/mostafa.nawam.3"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="mailto:mostafanawam44@gmail.com"><i class="fa fa-envelope"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="https://wa.me/0096181602936"><i class="fab fa-whatsapp"></i></a>
                </div>
                <div class="col-lg-4 text-lg-right">
                    <!--<a class="mr-3" href="#!">Privacy Policy</a>-->
                    <!--<a href="#!">Terms of Use</a>-->
                </div>
            </div>
        </div>
    </footer>


    <!-- Bootstrap core JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <!-- Contact form JS-->
    <script src="assets/mail/jqBootstrapValidation.js"></script>
    <script src="assets/mail/contact_me.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

<!-- Portfolio Modals-->
<!-- modal 1-->
<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
            <div class="container">
                <h2 class="text-uppercase text-center">Bouza Center</h2>
                <p class="item-intro text-muted">Your icecream to your door.</p>
                <div class="row">
                    <div class="col-lg-4">
                        <img class="img-fluid  mx-auto" src="assets/modal1/cart.png" alt="" />
                    </div>
                    <div class="col-lg-4">
                        <img class="img-fluid  mx-auto" src="assets/modal1/admin.png" alt="" />
                    </div>
                    <div class="col-lg-4">
                        <img class="img-fluid  mx-auto" src="assets/modal1/shop.png" alt="" />
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="modal-body">
                            <!-- Project Details Go Here-->
                            <p>Bouza center is an online shop where you can order your icecream online and pay on delivery. With an admin page that manage the items,prices and the stock.</p>
                            <p> The implantation of the system was done using PHP</p>

                            <ul class="list-inline">
                                <li>Date: August 2020</li>
                                <li>Client: Internship</li>
                                <li>Category: Shop</li>
                            </ul>
                            <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Close Project
                                    </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- modal 2-->
<div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
            <div class="container">
                <h2 class="text-uppercase text-center">University Management System</h2>
                <p class="item-intro text-muted">Best way to stay online.</p>
                <div class="row">
                    <div class="col-lg-4">
                        <img class="img-fluid  mx-auto" src="assets/modal2/modal1.png" alt="" />
                    </div>
                    <div class="col-lg-4">
                        <img class="img-fluid  mx-auto" src="assets/modal2/modal2.png" alt="" />
                    </div>
                    <div class="col-lg-4">
                        <img class="img-fluid  mx-auto" src="assets/modal2/modal3.png" alt="" />
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="modal-body">
                            <!-- Project Details Go Here-->
                            <p>
                                The university management system is developed to override the problems prevailing in the practicing manual system, this software is supported to eliminate and in some cases reduce the hardships faced by this existing system.
                                <br> Moreover, this system is designed for the particular need of the company to carry out operations smoothly and effectively.
                                The implantation of the system was done using Laravel framework.</p>

                            <ul class="list-inline">
                                <li>Date: May 2021</li>
                                <li>Client: Final Year Project</li>
                                <li>Category: Management System</li>
                            </ul>
                            <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Close Project
                                    </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- modal 3-->
<div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
            <div class="container">
                <h2 class="text-uppercase text-center">Masjid Salam Colony</h2>
                <p class="item-intro text-muted">.</p>
                <div class="row">
                    <div class="col-lg-4">
                        <img class="img-fluid  mx-auto" src="assets/modal3/list.png" alt="" />
                    </div>
                    <div class="col-lg-4">
                        <img class="img-fluid  mx-auto" src="assets/modal3/coach.png" alt="" />
                    </div>
                    <div class="col-lg-4">
                        <img class="img-fluid  mx-auto" src="assets/modal3/add.png" alt="" />
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="modal-body">
                            <!-- Project Details Go Here-->
                            <p>This website is used to manage the colony. Where you can add new members,send daily reports.
                                <br> The implantation of the system was done using PHP.
                            </p>

                            <ul class="list-inline">
                                <li>Date: July 2021</li>
                                <li>Client: Masjid Salam</li>
                                <li>Category: Colony Report</li>
                            </ul>
                            <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Close Project
                                    </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- modal 4-->
<div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="modal-body">
                            <!-- Project Details Go Here-->
                            <h2 class="text-uppercase">BoyScouts</h2>
                            <p class="item-intro text-muted">"There is no teaching to compare with example."</p>
                            <img class="img-fluid d-block mx-auto" src="assets/images/proj3.png" alt="" />
                            <p>This website is simple test for the boyscouts.
                                <br> The implantation of the system was done using PHP.
                            </p>
                            <ul class="list-inline">
                                <li>Date: January 2019</li>
                                <li>Client: Scout</li>
                                <li>Category: Online Test</li>
                            </ul>
                            <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Close Project
                                    </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- modal 5-->
<div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="modal-body">
                            <!-- Project Details Go Here-->
                            <h2 class="text-uppercase">Mostafa Nawam</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/01-full.jpg" alt="" />
                            <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate,
                                maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                            <ul class="list-inline">
                                <li>Date: January 2050</li>
                                <li>Client: Threads</li>
                                <li>Category: Illustration</li>
                            </ul>
                            <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Close Project
                                    </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


</html>
<script type="text/javascript">
    google.charts.load('current', {
        'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

        var data = google.visualization.arrayToDataTable([
            ['skills', 'language'],
            ['html', 1],
            ['css', 1],
            ['bootstrap', 1],
            ['javascript',1],
            ['jquery', 1],
            ['Ajax', 1]
        ]);
        var colors = ["#3366cc", "#dc3912", "#ff9900"];
        var options = {
            title: 'Frontend',
            colors: ['#FFD700', '#161922'],
            pieSliceBorderColor: 'white',
            backgroundColor: 'none',
            legend: {
                position: 'labeled',
                textStyle: {
                    color: 'gray'
                }
            },
            titleTextStyle: {
                color: '#FFD700',
                fontSize: 20
            }
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);
    }
</script>
<script type="text/javascript">
    google.charts.load('current', {
        'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

        var data = google.visualization.arrayToDataTable([
            ['skills', 'language'],
         
            ['PHP', 5],
            ['Laravel', 5],

        ]);

        var options = {
            title: 'Backend',
            colors: ['#FFD700', '#161922', 'rgb(25, 29, 40)'],
            pieSliceBorderColor: 'white',
            backgroundColor: 'none',
            legend: {
                position: 'labeled',
                textStyle: {
                    color: 'gray'
                }
            },
            titleTextStyle: {
                color: '#FFD700',
                fontSize: 20
            }
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart2'));
        chart.draw(data, options);
    }
</script>


