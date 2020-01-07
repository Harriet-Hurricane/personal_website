<!DOCTYPE html>
<html lang="en">

<head>
    <title>Google Analytics Customer Revenue Prediction</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta property='og:image' content='images/Customer-Success-Revenue.jpg' />

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">


    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<script type="text/javascript"> 
    function load_blog(project) {
        $("#project-memo").load("blog.php", {
            'project': project
        });
    }       
    function load_memo(project) {
        $("#project-memo").load("memo.php", {
            'project': project
        });
    }    
    window.onload = function() {
            load_blog('a');
        };
     
</script>

<?php
    $id = $_GET['id'];
    if(1 === preg_match('~[0-9]~', $id))
    {
        echo "<script> window.onload = function() {
            load_memo('".$id."');
        };</script>";
    }
    else if(1 === preg_match('~[a-z]~', $id))
    {   
        echo "<script> window.onload = function() {
            load_blog('".$id."');
        };</script>";
    }	
    ?>  

<body>
    <div id="colorlib-page">
        <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
        <aside id="colorlib-aside" role="complementary" class="js-fullheight text-center">
            <h1 id="colorlib-logo"><a href="index.html">Yihan Peng<span>.</span></a></h1>
            <nav id="colorlib-main-menu" role="navigation">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="resume.html">Résumé</a></li>
                    <hr width="50%">
                    <li class="colorlib-active"><a href="projects.html">Projects</a></li>
                    <li><a href="visualizer.html">Data Visualization</a></li>
                    <hr width="50%">
                    <li><a href="videocreation.html">Video Creation</a></li>
                    <li><a href="Pictures.html">Pictures</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </nav>

            <div class="colorlib-footer">
                <p class="small">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;
                    <script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                    <ul>
                        <li><a href="#"><i class="icon-facebook"></i></a></li>
                        <li><a href="#"><i class="icon-twitter"></i></a></li>
                        <li><a href="#"><i class="icon-instagram"></i></a></li>
                        <li><a href="#"><i class="icon-linkedin"></i></a></li>
                    </ul>
            </div>
        </aside>
        <!-- END COLORLIB-ASIDE -->
        <div id="colorlib-main">
            <section class="ftco-section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10">
                            <!-- Project memo -->
                            <div id="project-memo" class="row">
                                <!-- Filled by js function call to jquery using Ajax to test.php -->
                            </div>
                            <!-- END-->
                        </div>
                        <div class="col-lg-2 sidebar ftco-animate">
                            <div class="sidebar-box ftco-animate">
                                <h3 class="sidebar-heading">Projects</h3>
                                <ul class="categories">                               
                                    <li><a href="#" onclick="load_blog('a')">ALP Google Analytics Project</a></li>
                                    <li><a href="#" onclick="load_memo('6')">Customer Journey Segmentation</a></li>
                                    <li><a href="#" onclick="load_memo('1')">Pricing Decision</a></li>
                                    <li><a href="#" onclick="load_memo('2')">Printed Ad Optimization</a></li>
                                    <li><a href="#" onclick="load_memo('3')">Sales Promotion Effectiveness</a></li>
                                    <li><a href="#" onclick="load_memo('4')">Global Market Segmentation</a></li>
                                    <li><a href="#" onclick="load_memo('5')">Conjoint Analysis and Market Share Prediction</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- END COL -->
                    </div>
                </div>
            </section>
            <footer class="ftco-footer ftco-bg-dark ftco-section">
                <div class="container px-md-5">
                    <div class="row mb-5">
                        <div class="col-md">
                            <div class="ftco-footer-widget mb-12">
                                <h2 class="ftco-heading-2">Have a Questions?</h2>
                                <div class="block-23 mb-3">
                                    <ul>
                                        <li><a href="#"><span class="icon icon-envelope"></span><span class="text">yihan.peng@rhsmith.umd.edu</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">

                            <p>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;
                                <script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- END COLORLIB-MAIN -->
    </div>
    <!-- END COLORLIB-PAGE -->

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>

    

</body>

</html>