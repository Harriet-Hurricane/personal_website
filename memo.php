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

    
	if($project=="1")
	{
		
		echo "<meta property='og:image' content='images/image_1.jpg' />"
		echo "<iframe class=\"scribd_iframe_embed\" title=\"Project 1\" src=\"https://www.scribd.com/embeds/396198288/content?start_page=1&view_mode=scroll&show_recommendations=false&access_key=key-Ad5Fj6R79UKcEpSZ0rLb\" data-auto-height=\"true\" data-aspect-ratio=\"null\" scrolling=\"no\" width=\"100%\" height=\"900\" frameborder=\"0\"></iframe>";
	}
	else if($project=="2")
	{
		echo "<iframe class=\"scribd_iframe_embed\" title=\"Project 2\" src=\"https://www.scribd.com/embeds/396198286/content?start_page=1&view_mode=scroll&show_recommendations=false&access_key=key-ZXHVCFANulbzGKE0cAba\" data-auto-height=\"true\" data-aspect-ratio=\"null\" scrolling=\"no\" width=\"100%\" height=\"900\" frameborder=\"0\"></iframe>";
	}		
	else if($project=="3")
	{
		echo "<iframe class=\"scribd_iframe_embed\" title=\"Project 3\" src=\"https://www.scribd.com/embeds/396198289/content?start_page=1&view_mode=scroll&show_recommendations=false&access_key=key-Gftfo97s4W2dOK7zM8UI\" data-auto-height=\"true\" data-aspect-ratio=\"null\" scrolling=\"no\" width=\"100%\" height=\"900\" frameborder=\"0\"></iframe>";
	}
	else if($project=="4")
	{
		echo "<iframe class=\"scribd_iframe_embed\" title=\"Project 4\" src=\"https://www.scribd.com/embeds/396198284/content?start_page=1&view_mode=scroll&show_recommendations=false&access_key=key-MLOCmfykXSjVKQVDBn9w\" data-auto-height=\"true\" data-aspect-ratio=\"null\" scrolling=\"no\" width=\"100%\" height=\"900\" frameborder=\"0\"></iframe>";
    }
    else if($project=="5")
	{
		echo "<iframe class=\"scribd_iframe_embed\" title=\"Project 5\" src=\"https://www.scribd.com/embeds/396198287/content?start_page=1&view_mode=scroll&show_recommendations=false&access_key=key-zvo4uKoQoTeIqUVsEWgN\" data-auto-height=\"true\" data-aspect-ratio=\"null\" scrolling=\"no\" width=\"100%\" height=\"900\" frameborder=\"0\"></iframe>";
	}
	else if($project=="6")
	{
		echo "<iframe class=\"scribd_iframe_embed\" title=\"Customer Journey Report-final\" src=\"https://www.scribd.com/embeds/441809855/content?start_page=1&view_mode=scroll&access_key=key-0dQfvxjlQ0ciYwfbV37V\" data-auto-height=\"true\" data-aspect-ratio=\"null\" scrolling=\"no\" width=\"100%\" height=\"900\" frameborder=\"0\"></iframe>";
	}

    
?>

	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>

	
	<!-- MAIN JS -->
	<script src="js/main.js"></script>

	<!-- Custom JS -->
	<script src="js/custom.js"></script>

	</body>
</html>

