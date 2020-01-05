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
    <link rel="stylesheet" href="css/slider.css">

    </head>
    
    <script type="text/javascript">
        $("#slider-loader").load("slider.html");
    </script>


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
                        <h1 class="mb-5 p font-weight-bold display-4">ALP Google Analytics Project</h1>
                        <h2 class="mb-4 font-weight-bold">Introduction</h2>
                        <p class="mb-4 text-dark"> The 80/20 rule has proven true for many businesses -- only a small percentage of customers produce most of the revenue. As such, marketing teams are challenged to make appropriate investments in promotional strategies. In this competition, I am challenged to analyze a Google Merchandise Store (also known as GStore, where Google swag is sold) customer dataset to predict revenue per customer.</p>
                        
                        <h2 class="mb-4 font-weight-bold">Data Summary</h2>
                        <p class="mb-4 text-dark">Two data was given – “train” dataset that is used to train the model, and “test” dataset that is waiting to be predicted. In both dataset there are 12 columns in total, and 4 of them are JSON columns.</p>
                        
                        <!-- Table to be added -->
                        <img src="images/dataset.jpeg" style="width:100%">

                        <p class="mb-4 text-dark"> After flattening the 4 JSON columns, there are in total 55 variables in train dataset. </p>

                        <h2 class="mb-4 font-weight-bold">Data Cleaning and Feature Engineering</h2>

                        <p class="mb-4 text-dark"> I used three methods to clean data and engineer features in this project – dummize, delete, substitute and create variables.

                        <ul class="mb-4 text-dark">
                            <li>I <mark>dummy-coded</mark> following variables: channelgrouping, browser, OperatingSystem, isMobile, deviceCategory, continent, subcontinent, country, region, metro, city, bounces, newVisits, campaign, source, medium, isTrueDirect. After being handled, these variables either became one or multiple variables that take value 0 or 1. For example, “newVisits” became a binary variable which took value 0 or 1, and “channelgrouping” variable become another 8 variables named Direct, Organic Search, Referral, Social, Paid Search, Affiliates and Others whose observations are either 0 or 1 to indicate if this visit came in via these marketing channels.</li>
                            <li>I <mark>deleted</mark> variables that has more than 90% null value, and they are: SocialEngagementType, visited, browserVersion, browserSize, operatingSystemVersion, mobileDeviceBranding, mobileDeviceModel, mobileInputSelector, mobileDeviceInfo, mobileDeviceMarketingName, flashVersion, language, screenColors, screenResolution, cityID, networkDomain, latitude, longitude, networkLocation, keyword, referralPath, adContent-adwordsClickInfo.isVideoAd</li>
                            <li>I <mark>substituted</mark> null value with other values, for page view I filled missing value with median value 1, and I replaced NA with 0 in transaction revenue.</li>
                            <li>I <mark>created</mark> a new variable qrt based on Date indicating visiting quarter, and hour variable based on visitStartTime to get hour information of each visit.</li>
                        </ul>

                        </p>

                        <p class="mb-4 text-dark">After data cleaning, there are 140 variables in total in the dataset.</p>

                        <h2 class="mb-4 font-weight-bold">Visualization </h2>

                        <p class="mb-4 text-dark"> With clean dataset, let’s find out some patterns in the data using some tableau visualizations.</p>

                        <div id="slider-loader">
                                <!-- slider.html added by js -->
                        </div>
                        
                        
       
                        <h2 class="mb-4 font-weight-bold">Modelling</h2>

                        <h4 class="mb-4 font-weight-bold">Marketing Attribution Modeling with Sharpley value</h4>
                        <p class="mb-4 text-dark">In order to understand visitor’s behavior, Sharpley value approach was used to find out 8 channels’ marginal contribution to conversion. 
                            In game theory, the Shapley value is a solution concept of fairly distributing both gains and costs to several actors working in coalition. 
                            The Shapley value applies primarily in situations when the contributions of each actor are unequal, but they work in cooperation with each other to obtain the payoff. 
                            I followed the tutorial offered by <a href="http://datafeedtoolbox.com/attribution-theory-the-two-best-models-for-algorithmic-marketing-attribution-implemented-in-apache-spark-and-r/">Trevor Paulsen at The Data Feed Toolbox</a> and here is the results:</p>
                        
                        <div class="table-responsive">          
                        <table class="table text-dark">
                            <thead>
                            <tr>
                                <th>Channels</th>
                                <th>Orders</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Referral</td>
                                <td>2656</td>
                            </tr>
                            </tbody>
                            <tbody>
                            <tr>
                                <td>Organic Search</td>
                                <td>1556</td>
                            </tr>
                            </tbody>
                            <tbody>
                            <tr>
                                <td>Direct</td>
                                <td>1141</td>
                            </tr>
                            </tbody>
                            <tbody>
                            <tr>
                                <td>Paid Search</td>
                                <td>261</td>
                            </tr>
                            </tbody>
                            <tbody>
                            <tr>
                                <td>Display</td>
                                <td>104</td>
                            </tr>
                            </tbody>
                            <tbody>
                            <tr>
                                <td>Social</td>
                                <td>27</td>
                            </tr>
                            </tbody>
                            <tbody>
                            <tr>
                                <td>Affiliate</td>
                                <td><mark>-13</mark></td>
                            </tr>
                            </tbody>
                        </table>
                        </div>

                        <p class="mb-4 text-dark">Referral has the highest marginal contribution to the conversion, followed by Organic Search. However, Affiliate channel has a minus Sharpley value which means it has negative effect on conversion.</p> 
                        
                        <h4 class="mb-4 font-weight-bold">Transaction Revenue Prediction Model</h4>
                        
                        <p class="mb-4 text-dark">In this project, the team decided to use two-stage modeling – logistics regression model as the first step to predict the probability of purchasing, and generalized linear model as the second step to predict the purchase amount. However, considering there were only 2% of the visits made purchase and the rest 98% did not, data imbalance was a huge problem waiting to be solved. Thus, first of all, we need to do resampling to generate a balanced training dataset. </p>
                        
                        <ul class="mb-4 text-dark">
                            <li>
                                <p class="font-weight-bold">Under-sampling with imblearn package<p>
                                <p class="font-weight-normal"> Under-sampling means to sample less observations from the majority class which is not purchased in this case.  
                                    As we can see, before under-sampling, there were more than 44K 0 exists, while there were only 5733 instances of 1. </p>
                            
                                <img src="images/Code_1.PNG" style="width:100%">
                                <p class="font-weight-normal">After under-sampling, there were same amount of 0 and 1 labels in the dataset. </p>      
                                <img src="images/Code_2.PNG" style="width:100%">
                                <p class="font-weight-normal">Now that we have a balanced dataset, we are ready to do train-test split and proceed to modeling phase. </p>   
                            </li>
                            <li>
                                <p class="font-weight-bold">Logistics regression model<p>
                                <p class="font-weight-normal">Logistic regression is a statistical model that in its basic form uses a logistic function to model 
                                    a binary dependent variable, in our case is Purchased (1) and Not purchase (0). As mentioned, there were 140 variables in clean 
                                    dataset, therefore, in order to prevent the model from overfitting also improve predicting power, we need to select appropriate 
                                    features for logistics regression model. Here I will use L1 Regularization – Lasso Regression to do feature selection.
                                    The package I used to do this task in Python was sklearn.SelectFromModel. I followed the tutorial offered by 
                                    <a href="https://towardsdatascience.com/feature-selection-using-regularisation-a3678b71e499">Akash Dubey at Towards Data Science</a>. 
                                    After adjusting parameter C to 0.01 which indicated the scale of variable removed, the number of selected features was 22. 
                                    After filtering out features that were highly correlated, 14 variables were chosen eventually for predicting purchase probability, 
                                    and they were: subContinent_Northern America, visitNumber, visitStartTime, pageviews, newVisits, Social, qrt2, Chrome, desktop, 
                                    region_NewYork, region_Others, city_SanFrancisco, source_others, medium_others
                                    With above features, the logistics model yielded a recall score of 0.757, F1 score of 0.800, and AUC of 0.81. Followed was its ROC curve:
                                </p>
                            
                                <img src="images/plot_3.PNG" style="width:100%">
                                <img src="images/summery_4.PNG" style="width:100%">
                                <p class="font-weight-normal"> Other than logistics regression, I also tried random forest and K-nearest-neighbor to do the classification, 
                                    but the results were not as good: </p>      
                                
                                <img src="images/Code_5.PNG" style="width:100%">
                                <img src="images/Code_6.PNG" style="width:100%">
                                <p class="font-weight-normal"> Therefore, logistics regression model was chosen to be the final classification model.</p>
                            </li>
                            <li>
                                <p class="font-weight-bold">Generalized Linear Regression Model<p>
                                <p class="font-weight-normal">As the second step, Generalized Linear Regression Model was used to predict purchase amount for each 
                                    individual visit. Note that in this step, only the observations that have transaction revenue larger than one will be used to 
                                    train the model.  </p>
                                <p class="font-weight-normal">Generalized Linear Regression Model (GLM) refers to conventional linear regression models for a 
                                        continuous response variable given continuous and/or categorical predictors. In this case, response variable, also known as 
                                        dependent variable, is transaction revenue which varies from 0 to 8,508,873,258.
                                </p>
                            
                                <img src="images/plot_7.png" style="width:100%">
                                <p class="font-weight-normal"> Original transaction revenue values do not follow normal distribution, so firstly, transformation must 
                                    be done to the data so that they follow the assumption of regression model. Here we will take the log form of transaction revenue.</p>   
                                <img src="images/plot_8.png" style="width:100%">   
                                <p class="font-weight-normal"> After transforming, compared to the previous distribution, the dependent variable almost fit into a normal 
                                    distribution, which complied with the assumption of linear regression. </p>   
                                <p class="font-weight-normal"> Secondly, stepwise selection was used for feature selection for GLM model. Stepwise regression is a way to 
                                    build a model by adding or removing predictor variables, usually via a series of F-tests or T-tests. The variables to be added or removed 
                                    are chosen based on the test statistics of the estimated coefficients. The forward stepwise regression approach uses a sequence of steps 
                                    to allow features to enter or leave the regression model one-at-a-time. Often this procedure converges to a subset of features.</p>
                                <p class="font-weight-normal">After using step() function in R and tried backward, forward and both three directions, judging by AIC 
                                    value and root mean square error (RMSE), forward selection had the best prediction performance on the validation dataset, which 
                                    gave 1.13 RMSE value and AIC of 585.05. After deleting collinear variables, the feature selected were: newVisits, desktop, Direct, 
                                    visitNumber, pageviews, metro_NY, OS_Linux, Chrome, OS_ChromeOS, country_Kenya, country_Venezuela, source_youtube, source_others, 
                                    qrt1, Social, OS_Android, OS_Macintosh, country_Armenia, continent_Asia, country_Australia, subContinent_Northern.Europe, metro_CA, 
                                    IE, country_China.
                                </p> 
                                <p class="font-weight-normal">A GLM model was built upon the features mentioned above and it successfully predicted the 
                                    purchase amount for each individual visit. 
                                </p>   
                            </li>
                        </ul>


                        <h2 class="mb-4 font-weight-bold">Putting Two Models’ Prediction Together</h2>   
                        <p class="mb-4 text-dark">Since logistics regression model successfully predicted the probability of purchasing, 
                            and GLM predicted the log formed of purchasing amount, what need to be now is, 
                            <ol class="mb-4 text-dark">
                                <li>to take exponential value of 
                                    predicted log(transactionRevenue) to bring them back to natural number, </li>
                                <li>to aggregate visit-level data into 
                                    user-level data with aggregate function SUM</li>
                                <li>to multiply each user’s revenue with their purchasing probability.</li>
                            </ol>
                        </p>

                        <!-- This is how you add code -->
                        <pre class="pre-scrollable">
## Predict individual purchase in test dataset, and take exponential value
testcl$logtr_prediction <- predict(reg_fore, testcl)
testcl$trpd <- exp(testcl$logtr_prediction)

## Read prediction for purchase probability and only keep fullvisitorid and prediction
propd <- read.csv("test_dummycodedfinal.csv", header = T)
propd <-propd[,c("fullVisitorId","fitted.result2")]

## Aggregate visit-level data into user-level data with aggregate function SUM
distinct_propd <- aggregate(fitted.result2 ~ fullVisitorId, data=propd, sum)
distinct_trpd <- aggregate(trpd ~ fullVisitorId, data=testcl, sum)

## Merge two dataset on fullvisitorid
finalpd <- merge(distinct_propd,distinct_trpd,by="fullVisitorId")

## Multiply quantity with probility
finalpd$prediction <- (finalpd$fitted.result2)*(finalpd$trpd)
                        </pre>
                        <p class="mb-4 text-dark">There, now we have the final prediction. Ta-dah!</p> 

                        <h2 class="mb-4 font-weight-bold">Conclusions and Recommendations</h2>
                        <p class="mb-4 text-dark">In conclusion, Google Analytics data can be used to predict each visit’s potential 
                            purchasing probability and amount. The deployment of logistics regression model and generalized linear model 
                            can be good approaches to bring the data to the next level.</p> 
                            
                        <p class="mb-4 text-dark">First, google store is suggested to craft different 
                            marketing messages and landing page design for new and returning visitors, in order to further improve new visitors’ 
                            engagement with the website. 
                        </p>
                        <p class="mb-4 text-dark">Second, more media spending should be allocated to Referral channel. Referral has good conversion 
                            rate and highest marginal contribution to conversion, therefore, if referral could get more investment, google store might 
                            benefit from higher-quality traffic and increasing sales.</p> 
                        <p class="mb-4 text-dark">Third, investment on Affiliate channels needs to be reconsidered. Affiliate channel suffered from low 
                            conversion rate and has negative contribution to conversion, which is a huge issue and the reasons behind need to be further investigated.</p> 
                        <p class="mb-4 text-dark">Fourth, other than main revenue-generating cities like New York, San Francisco, Los Angeles and so on, one city 
                            demonstrate its potential – Ann Arbor. Google store is suggested to find out more opportunities in this city and if possible initiate 
                            region-specific campaign to further boost revenue.  </p>        

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
                        <p class="mb-4 text-dark"> Yet to be updated. </p> 
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
    <script src="js/slider.js"></script>

	</body>
</html>

