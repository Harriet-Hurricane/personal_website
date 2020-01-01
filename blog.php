<!DOCTYPE html>
<html class="no-js"> <!--<![endif]-->
	<head>
    <!-- 
	//////////////////////////////////////////////////////

	Hurricane Website
	DESIGNED & DEVELOPED by Mayavan
		
	Website: 		http://yihanpeng.com/
	Email: 			mayavan95@gmail.com

	//////////////////////////////////////////////////////
	-->
    <title>Yihan Peng</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

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
	<body>
	
	<?php	
	session_start();
	// get filters	
    $project = $_POST['project'];

    /* *************************
     *       README FIRST
     * *************************
     * 
     * Our website supports bootstrap 3 and 4 hence you can use the formating options available in https://www.w3schools.com/bootstrap/bootstrap_ref_css_text.asp
     * In order to add a formatting option to your element, just add the tag like this to class = "add_here .text-center" and so on
     * 
     * You can also add tables and code blocks and other things with bootstrap. You can find more info on this in the above link.
     * 
     * I have given some examples for you to understand the different elements you can use in the blog. If you have any trouble let me know.
     */

    // ALP Google Analytics Project
	if($project=="a")
	{
        ?>
        <section class="ftco-section">
            <div class="container">               
                <div class="col-md-12">
                    <div class="blog-entry ftco-animate">
                        <!-- Here is how you add different Headings --> 
                        <h1 class="mb-4">ALP Google Analytics Project H1</h1>
                        <h2 class="mb-4">ALP Google Analytics Project H2</h2>
                        <h3 class="mb-4">ALP Google Analytics Projec H3</h3>
                        <h4 class="mb-4">ALP Google Analytics Project H4</h4>

                        <!-- This is how you add code -->
                        <pre class="pre-scrollable">
                        Text in a pre element
                        is displayed in a fixed-width
                        font, and it preserves
                        both      spaces and
                        line breaks.</pre>
                        
                        <!-- Here is how you add Images Note: Images used here should be added to the images folder --> 
                        <a href="#" class="img img-2" style="background-image: url(images/image_1.jpg);"></a>
                        
                        <!-- Here is some examples of text formating -->
                        <div class="text text-2 pt-2 mt-3">
                            <span class="category mb-3 d-block"><a href="#"> Linear, semi-log, log-log
                                    regression models </a></span>
                    
                            <p class="mb-4 small">Excellent to include <mark>store dummies that capture
                                    unobserved differences</mark> between stores in terms of sales, and a
                                <mark>psychological price dummy</mark>which has a significant effect; Quantitative interpretation of the coefficients are detailed and communicative to non-technical; optimal price is good.
                            </p>
                        </div>

                        <!-- Here is example of table -->
                        <div class="table-responsive">          
                        <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Firstname</th>
                                <th>Lastname</th>
                                <th>Age</th>
                                <th>City</th>
                                <th>Country</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>Anna</td>
                                <td>Pitt</td>
                                <td>35</td>
                                <td>New York</td>
                                <td>USA</td>
                            </tr>
                            </tbody>
                        </table>
                        </div>

                    </div>
                </div>  
            </div>
        </section>

        <?php
    }
    // Customer Journey Segmentation
	else if($project=="b")
	{
		?>

        <p> Hello testing 2</p>

        <?php
    }		
	
    
?>

   <!-- loader -->
   <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" /></svg></div>


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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>

	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>

	<!-- Custom JS -->
	<script src="js/custom.js"></script>

	</body>
</html>

