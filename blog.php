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
<<<<<<< HEAD
                        <h1 class="mb-4">ALP Google Analytics Project</h1>
                        <h2 class="mb-4">Introduction</h2>
                        <p> The 80/20 rule has proven true for many businesses -- only a small percentage of customers produce most of the revenue. As such, marketing teams are challenged to make appropriate investments in promotional strategies. In this competition, I am challenged to analyze a Google Merchandise Store (also known as GStore, where Google swag is sold) customer dataset to predict revenue per customer.</p>
                        
                        <h2 class="mb-4">Data Summary</h2>
                        Two data was given – “train” dataset that is used to train the model, and “test” dataset that is waiting to be predicted. In both dataset there are 12 columns in total, and 4 of them are JSON columns.
                        
                        <!-- Table to be added -->

                        <p> After flattening the 4 JSON columns, there are in total 55 variables in train dataset. </p>

                        <h2 class="mb-4">Data Cleaning and Feature Engineering</h2>

                        <p> I used three methods to clean data and engineer features in this project – dummize, delete, substitute and create variables. </p>

                        <ul>
                            <li>I <mark>dummy-coded</mark> following variables: channelgrouping, browser, OperatingSystem, isMobile, deviceCategory, continent, subcontinent, country, region, metro, city, bounces, newVisits, campaign, source, medium, isTrueDirect. After being handled, these variables either became one or multiple variables that take value 0 or 1. For example, “newVisits” became a binary variable which took value 0 or 1, and “channelgrouping” variable become another 8 variables named Direct, Organic Search, Referral, Social, Paid Search, Affiliates and Others whose observations are either 0 or 1 to indicate if this visit came in via these marketing channels.</li>
                            <li>I <mark>deleted</mark> variables that has more than 90% null value, and they are: SocialEngagementType, visited, browserVersion, browserSize, operatingSystemVersion, mobileDeviceBranding, mobileDeviceModel, mobileInputSelector, mobileDeviceInfo, mobileDeviceMarketingName, flashVersion, language, screenColors, screenResolution, cityID, networkDomain, latitude, longitude, networkLocation, keyword, referralPath, adContent-adwordsClickInfo.isVideoAd</li>
                            <li>I <mark>substituted</mark> null value with other values, for page view I filled missing value with median value 1, and I replaced NA with 0 in transaction revenue.</li>
                            <li>I <mark>created</mark> a new variable qrt based on Date indicating visiting quarter, and hour variable based on visitStartTime to get hour information of each visit.</li>
                        </ul>

                        <p>After data cleaning, there are 140 variables in total in the dataset.</p>

                        <h2 class="mb-4">Visualization </h2>

                        <p> With clean dataset, let’s find out some patterns in the data using some tableau visualizations.</p>

                        <a href="images/audience.png" class="img" style="background-image: url(images/audience.png);"></a>

                        <p> As shown in above dashboard, 

                        <ol>
                            <li>Most of the visitors are new visitors, and they are 2.5 times more than returning visitors</li>
                            <li>Returning visitors have higher average page view, hits, visit number than new visitors. This bar chart demonstrates a reasonable situation where almost 80% of the visits is from new visitors, while the 20% returning visitors has higher engagement and stickiness to the store.</li>
                        </ol>
                        
                        </p>

                        <a href="images/channel_performance_matrix.png" class="img" style="background-image: url(images/channel_performance_matrix.png);"></a>

                        <p>From above graph, it’s clear that organic search acquired the most traffic, however the transaction revenue generated was less than other channels, which leads to its mediocre conversion rate; Referral channel has the highest transaction revenue and conversion rate.</p>

                        <a href="images/Most Visited Time.png" class="img" style="background-image: url(images/most_visited_time.png);"></a>
                        <p>Most visited hour of the day was 18:00, most visited weekday was Tuesday and most visited month was November 2016.</p>

                        <a href="#" class="img img-2" style="background-image: url(images/traffic_by_bod.png);"></a>
                        <p>Chrome browser was the top traffic and revenue lead, so was desktop device; However, in terms of operation system, even though windows acquired the most traffic, more transaction revenue were generated by Android, IOS and Linux. </p>
                        
                        <a href="#" class="img img-2" style="background-image: url(images/transaction_revenue_by_geo_location.png);"></a>
                        
                        <p>Most of the revenue was generated in the United State. On the west coast, top 1 revenue region was San Francisco which contributed $19.50 billion, followed by Los Angeles which contributed $7.02 billion and Seattle with $4.67 billion. On the east coast, New York generated $39.14 billion, followed by Chicagos $15.12 billion and Ann Arbors $4.30 billion.</p>
                        
                        <h2 class="mb-4">Modelling</h2>
                        <p></p>
                        <p></p>
=======
                        <h1 class="mb-5 p font-weight-bold display-4">Google Analytics Customer Revenue Prediction</h1>

                        <p class="mb-4 text-dark">The 80/20 rule has proven true for many businesses -- only a small percentage of customers produce most of the revenue. 
                            As such, marketing teams are challenged to make appropriate investments in promotional strategies. In this competition, I am challenged 
                            to analyze a Google Merchandise Store (also known as GStore, where Google swag is sold) customer dataset to predict revenue per customer.
                            </p>

                        <h2 class="mb-4">What data do I have?</h2>
                        <h2 class="mb-4">What do I do to deal with the data?</h2>
                        <h2 class="mb-4">How do I select features?</h2>
                        <h2 class="mb-4">How do I build the models?</h2>
                        <h2 class="mb-4">How well did the model perform?</h2>
>>>>>>> 9bb40475318349b0acd81760b7e05e21765a9fa7

                        <h3 class="mb-4">ALP Google Analytics Projec H3</h3>
                        <h4 class="mb-4">ALP Google Analytics Project H4</h4>

                        <ul>
                            <li>Coffee</li>
                            <li>Tea</li>
                            <li>Milk</li>
                        </ul>

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
        <section class="ftco-section">
            <div class="container">               
                <div class="col-md-12">
                    <div class="blog-entry ftco-animate">
                        <!-- Here is how you add different Headings --> 
                        <h1 class="mb-4">Customer Journey Segmentation</h1>

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

