<!DOCTYPE html>
<HTML lang="en">
<head>
  <!-- META TAGS -->	
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/> <!--320--> 	<!-- prevents users from zooming in --> 
	<meta name="author" content="Jose Manriquez">
	<meta name = "description" content="This web app is an application designed for BBBS to find places and events for their matches.">
	<meta name="keywords" content="BBBS, hack,hackathon, hack4austin, big, brothers, sisters, kids, places, locations, events, cheap, free, place, food, fun, children, child">
	
	<title>BBBS: Events For Kids</title>

  <!-- STYLES -->
	<link rel="icon" href="//www.bbbs.org/atf/cf/%7B8778d05c-7ccb-4dee-9d6e-70f27c016cc9%7D/ANIMATED_FAVICON.GIF" type="image/x-icon"><link rel="shortcut icon" href="//www.bbbs.org/atf/cf/%7B8778d05c-7ccb-4dee-9d6e-70f27c016cc9%7D/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css"> <!--Bootstrap -->
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet"> <!-- Awesome Icons -->
	<link href="css/flat-ui.css" rel="stylesheet"> <!-- Flat UI design -->
	<link rel="stylesheet" href="css/loading.css" type="text/css"> <!-- Loading bar -->
	<link rel="stylesheet" href="css/main-style.css"> <!-- Custom CSS styles-->
		<!--[if lte IE 7]><link rel="css/old-centering.css /><![endif]-->

	
	<style>
		/* iphone */
		@media only screen and (min-device-width : 320px) and (max-device-width : 480px) {
			img { max-width: 100%; }
		}

		/* ipad */
		@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) {
			img { max-width: 100%; }
		}
	</style>

	
</head>
<body ><div class="outer">
		<div class="middle">
			<div class="inner">
				<img src="images/bbbs-logo.png" alt="BBBS Logo" style="padding: 10px 0px 10px 0px;" />
				<div id="app-name"class="row" style="background-color: #AA99DD; width: 70%; margin: 0 auto;border-radius: 20px;">
					Events for Kids
				</div>
				
				<p id="loading-text">
					Looking for Events<br>
					Please Wait
				</p>	
				
				<!--loading dots -->
				<div class="loader">
					<span></span>
					<span></span>
					<span></span>
				</div>
				
				<!-- option 2 <i class="fa fa-refresh fa-spin fa-lg fa-2x"></i> 
					 option 3 <div class="wobblebar" style="width: 100%;"> 	Loading... 	</div>
				-->

			</div>
		</div>
	</div>


</body>
</html>