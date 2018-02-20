<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Techit Demo - Remove Later</title>

        <?php
        error_reporting(E_ALL & ~E_DEPRECATED & ~E_NOTICE);

        $servername = "eu-cdbr-west-02.cleardb.net";
        $username = "b9b1e39f450202";
        $password = "84133783";
        $dbname = "heroku_1171fdf694dbc66";
        $conn = new mysqli($servername, $username, $password, $dbname);

        if (isset($_POST['submit'])) {
            $fullname = $_POST['fullname'];
            $email = $_POST['email'];
            $mobile = $_POST['mobile'];
            $message = $_POST['feedback'];
            $sql = "INSERT INTO `feedback` (fullname , email, mobile , feedback) VALUES ('$fullname', '$email', '$mobile', '$feedback')";
            if ($conn->query($sql) === TRUE) {
                echo "<script>alert('Thanks for your response')</script>";
            } else {
                echo "<script>alert('Error while saving your data');</script>";
            }

            $conn->close();
        }

        ?>
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/animate.min.css" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'>
        <link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="container-fluid heads">

            <div id="myNavbar" class="navbar navbar-default navbar-fixed-top" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="#" class="navbar-brand">TECHit <i class="fa fa-angle-double-right"></i></a>
                    </div>
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#header">Home</a></li>
                            <li><a href="#services">Services</a></li>
                            <li><a href="#pricing">Pricing</a></li>
                            <li><a href="#partners">Partners</a></li>
                            <li><a href="#contact">Contact us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--- End of Navigation -->


            <!--- Start of header -->
            <div id="header" class="header">
                <div class="container">
                    <center>
                        <div class="starwell wow zoomIn">
                            <h1>TECHit<i class="fa fa-angle-double-right"></i></h1>

                        </div>
                        <h3 class="demo wow zoomIn" data-wow-delay="0.8s"> We bring your tech dreams to life</h3>
                    </center>
                    <center><a href="register.php">
                            <button class="btn btn-lg  btn-primary wow zoomIn" data-wow-delay="0.4s"> Get A Software
                                Developer
                            </button>
                        </a>
                        <a href="register.php">
                            <button class="btn btn-lg  btn-success wow zoomIn" data-wow-delay="0.4s">Get A Data
                                Analyst
                            </button>
                        </a></center>
                </div>

            </div>


            <!-- End of header-->


        </div>


        <!--- start of services-->

        <div id="services" class="services">
            <div class="container">

                <h2> Our Services</h2>
                <hr>
                <p>We offer a wide variety of Information technology services. </p>

                <div class="row">
                    <div class="col-lg-3 col-md-3 wow fadeInDown">
                        <i class="fa fa-desktop" aria-hidden="true"></i>
                        <h4>UI/UX </h4>
                        <hr>
                        <p>Our developers are here to help you improve the user experience on your websites. </p>
                    </div>
                    <div class="col-lg-3 col-md-3 wow fadeInDown" data-wow-delay="0.3s">
                        <i class="fa fa-mobile" aria-hidden="true"></i>
                        <h4>Mobile App Development</h4>
                        <hr>
                        <p>Our Andriod and IOS developers are one of a kind.</p>
                    </div>
                    <div class="col-lg-3 col-md-3 wow fadeInDown" data-wow-delay="0.6s">
                        <i class="fa fa-database" aria-hidden="true"></i>
                        <h4>Database Administration</h4>
                        <hr>
                        <p>Manage your data using the most innovative techniques and technologies. </p>
                    </div>
                    <div class="col-lg-3 col-md-3 wow fadeInDown" data-wow-delay="0.9s">
                        <i class="fa fa-bar-chart" aria-hidden="true"></i>
                        <h4>Data Analytics</h4>
                        <hr>
                        <p>Our data analysts are here to help you make the best business decisions. </p>
                    </div>
                </div>
            </div>
        </div>


        <!--- End Services -->

        <!-- Start of Pricing-->
        <div id="pricing" class="pricing">
            <div class="container">
                <div class="row">
                    <h2>Pricing</h2>
                    <hr>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry. </p>
                    <div class="col-lg-3 col-md-3">
                        <div class="packages wow fadeInLeft " data-wow-delay="0.4s">
                            <h4>Basic</h4>
                            <h1>N5,000</h1>
                            <b>Monthly</b>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry </p>
                            <hr>

                            <li>2GB Storage Space</li>
                            <li>Maintenance</li>

                            <a href="register.php">
                                <button class="btn btn-success">Get Started</button>
                            </a>
                        </div>

                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="packages wow fadeInLeft  ">
                            <h4>Compact</h4>
                            <h1>N9,000 </h1>
                            <b>Monthly</b>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry</p>
                            <hr>
                            <li>10GB Storage Space</li>
                            <li>Maintenance</li>

                            <a href="register.php">
                                <button class="btn btn-success">Get Started</button>
                            </a>
                        </div>

                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="packages wow fadeInRight">
                            <h4>Compactplus</h4>
                            <h1>N16,000</h1>
                            <b>Monthly</b>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry</p>
                            <hr>
                            <li>25GB Storage Space</li>
                            <li>Maintenance</li>

                            <a href="register.php">
                                <button class="btn btn-success">Get Started</button>
                            </a>
                        </div>

                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="packages wow fadeInRight" data-wow-delay="0.4s">
                            <h4>Premium</h4>
                            <h1>N21,000</h1>
                            <b>Monthly</b>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry</p>
                            <hr>
                            <li>50GB Storage Space</li>
                            <li>Maintenance</li>
                            <a href="register.php">
                                <button class="btn btn-success">Get Started</button>
                            </a>
                        </div>

                    </div>

                </div>
            </div>
        </div>


        <!-- Start of Partners-->
        <div id="partners" class="partners">
            <div class="container">
                <div class="row">
                    <h2 class="wow fadeInUp">Our Partners</h2>
                    <hr>
                    <p>We are trusted by numerous multinational companies</p>
                    <div class="col-md-3 wow fadeInDown">
                        <img src="images/logo1.png" alt="partner1"/>

                    </div>
                    <div class="col-md-3  wow fadeInDown" data-wow-delay="0.3s">
                        <img src="images/logo2.png" alt="partner2"/>
                    </div>

                    <div class="col-md-3  wow fadeInDown" data-wow-delay="0.3s">
                        <img src="images/logo3.png" alt="partner3"/>
                    </div>
                    <div class="col-md-3  wow fadeInDown" data-wow-delay="0.3s">
                        <img src="images/logo4.jpe" alt="partner4"/>
                    </div>

                </div>
            </div>

        </div>

        <!--Start of Contact-->

        <div id="contact" class="contact">
            <div class="container">
                <div class="row">
                    <h2 class="wow fadeInUp">Contact Us</h2>
                    <hr>
                    <p class="wow fadeInLeft" data-wow-delay="0.4s">Please leave a message and stay in touch.
                        <br>
                        You can also follow us on our social media platforms
                        <br>
                        <i class="fa fa-facebook social" aria-hidden="true"></i>
                        <i class="fa fa-twitter social" aria-hidden="true"></i>
                        <i class="fa fa-instagram social" aria-hidden="true"></i>

                    </p>


                    <form id="contactform" action="index.php" method="post">
                        <div class="col-lg-6 col-md-6">
                            <div class="input-group input-group-lg wow fadeInUp" data-wow-delay="0.8s">
                                <span class="input-group-addon" id="sizing-addon-1"><i class="fa fa-user"
                                                                                       aria-hidden="true"></i></span>
                                <input type="text" class="form-control" aria-describedby="sizing-addon-1"
                                       name="fullname" placeholder="Your name" aria-required="required">
                            </div>

                            <div class="input-group input-group-lg wow fadeInUp" data-wow-delay="1.2s">
                                <span class="input-group-addon" id="sizing-addon-1"><i class="fa fa-envelope"
                                                                                       aria-hidden="true"></i> </span>
                                <input type="text" class="form-control" aria-describedby="sizing-addon-1" name="email"
                                       placeholder="email" required="required">
                            </div>

                            <div class="input-group input-group-lg wow fadeInUp" data-wow-delay="1.6s">
                                <span class="input-group-addon" id="sizing-addon-1"><i class="fa fa-phone"
                                                                                       aria-hidden="true"></i> </span>
                                <input type="number" class="form-control" aria-describedby="sizing-addon-1"
                                       name="mobile" placeholder="phonenumber" required="required">
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="2.0s">
                            <div class="input-group">
                                <textarea id="messagefield" cols="80" rows="6" class="form-control" name="feedback"
                                          placeholder="Your message....."> </textarea>
                                <a href="index.php">
                                    <button class="btn btn-primary btn-lg wow fadeInUp" data-wow-delay="2.4s"
                                            name="submit"> Submit Your message
                                    </button>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- end contact-->


        <!-- start of footer-->

        <div id="footer" class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <h4> Contact Us</h4>
                        <p><i class="fa fa-home" aria-hidden="true"></i> Maryland Lagos, Nigeria </p>
                        <p><i class="fa fa-envelope" aria-hidden="true"></i> yetunde95@yahoo.com</p>
                        <p><i class="fa fa-phone" aria-hidden="true"></i> +23485697508</p>
                        <p><i class="fa fa-globe" aria-hidden="true"></i> wwww.mediahouse.com </p>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <h4> More information</h4>
                        <p><i class="fa fa-square-o" aria-hidden="true"></i> About us</p>
                        <p><i class="fa fa-square-o" aria-hidden="true"></i> Our terms & conditions</p>

                    </div>

                    <div class="col-lg-4 col-md-4">
                        <h4>Please stay in touch and follow us on:</h4>
                        <i class="social fa fa-facebook" aria-hidden="true"></i>
                        <i class="social fa fa-linkedin" aria-hidden="true"></i>
                        <i class="social fa fa-twitter" aria-hidden="true"></i>
                        <i class="social fa fa-pinterest-p" aria-hidden="true"></i>
                        <i class="social fa fa-github" aria-hidden="true"></i>
                        <i class="social fa fa-youtube" aria-hidden="true"></i>

                    </div>
                </div>
            </div>
        </div>


        <!--- end of footer-->


        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/wow.min.js"></script>
        <script>
            new WOW().init();
        </script>


        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <script src="js/script1.js"></script>
    </body>
</html>