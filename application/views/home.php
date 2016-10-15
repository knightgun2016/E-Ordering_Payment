<html lang="en">
<head>
	<title>Codeigniter 3</title>

	<!-- <meta> -->
	  	<meta charset="UTF-8" />  
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
       
	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="assets/css/bootstrap/3.3.7/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/login/style.css">
	<link rel="stylesheet" href="assets/css/login/animate-custom.css">
	 <link rel="shortcut icon" href="assets/css/login/favicon.ico"> 

	<script src="assets/js/jquery/2.1.3/jquery.min.js"></script>
	<script src="assets/js/bootstrap/3.3.7/bootstrap.min.js"></script>
	
	<!-- Angular JS -->
	<script src="assets/js/angular/1.3.2/angular.min.js"></script>  
	<script src="assets/js/angular/1.3.2/angular-route.min.js"></script>

	<!-- MY App -->
	<script src="app/packages/dirPagination.js"></script>
	<script src="app/routes.js"></script>
	<script src="app/services/myServices.js"></script>
	<script src="app/helper/myHelper.js"></script>

	<!-- App Controller -->
	<script src="app/controllers/ItemController.js"></script>

</head>
<body ng-app="main-App">
	<!-- Header -->
	<div class="header">
		<div class="header-top">
			<div class="row">
				<div class="col-sm-3">
					<div class="logo">
						<h1> <a href="#/">PNC Prints</a></h1>
					</div>
				</div>
				<div class="col-sm-7">
					<div class="input-group">
						<div class="input-group-btn search-panel">
							<button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
								<span id="search_concept">All</span> <span class="caret"></span>
							</button>
							<ul class="dropdown-menu" role="menu">
								<li><a href="#contains">Men's T-shirt Premium</a></li>
							    <li><a href="#its_equal">Women</a></li>
							    <li><a href="#greather_than">Kids</a></li>
							    <li><a href="#less_than">Example 4</a></li>
							    <li class="divider"></li>
							    <li><a href="#all">All</a></li>
							</ul>
						</div>
						<input type="hidden" name="search_param" value="all" id="search_param">          
					    <input type="text" class="form-control " placeholder="Search">
					    <span class="input-group-btn">
						   	<button class="btn btn-default" type="button">
						       	<span>Go!</span>
						    </button>
						</span>   
					</div>				
			  	</div>
			  	<div class="col-sm-1">
					<a href="#/login" id="login">Login</a>
				</div>
			</div>	
		</div>
	</div>
	<ng-view></ng-view>
	<!-- Footer -->

</body>
</html>
