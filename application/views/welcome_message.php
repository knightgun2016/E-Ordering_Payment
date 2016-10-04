<!DOCTYPE html>
<html>
<head>
	<title>PNC Prints </title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Youth Fashion Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<!-- -->
	<script type="text/javascript" src="assets/js/jquery/1.12.0/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/wow.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap/3.3.6/bootstrap.min.js"></script>
	<script src="assets/js/angular.js"></script>  
	<script src="assets/js/angular.min.js"></script>  
	<script src="assets/js/angular-sanitize.js"></script> 
	<script src="assets/js/angular-route.min.js"></script>
	<script src="assets/js/angular-animate.js"></script>
	<script src="assets/js/ui-bootstrap-tpls-2.1.3.js"></script>

	<link rel="stylesheet" href="assets/css/bootstrap.min.css"> 
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap/3.3.6/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/animate.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link href="assets/css/raleway.css" rel="stylesheet" type="text/css">
	<!-- MY App -->
	<script src="app/packages/dirPagination.js"></script>
	<script src="app/routes.js"></script>
	<script src="app/services/myServices.js"></script>
	<script src="app/helper/myHelper.js"></script>

	<!-- App Controller -->
	<script src="app/controllers/ItemController.js"></script>
	<script src="app/controllers/AccountController.js"></script>
	<script src="app/controllers/SignUpController.js"></script>
  	<script>
 		new WOW().init();
	</script>
</head>
<body ng-app="main-App">
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
			  	<div class="col-sm-1" ng-controller="AccountController as $ctrl">
			  		 <script type="text/ng-template" id="myModalContent.html">
        			
					        <div class="modal-header" style="padding:35px 50px;">
					         <!--  <button type="button" class="close" data-dismiss="modal">&times;</button> -->
					          <h4><span class="glyphicon glyphicon-lock"></span> Sign In to PNC Prints</h4>
					        </div>
					        <div class="modal-body" style="padding:40px 50px;">
					          <form role="form">
					            <div class="form-group">
					              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
					              <input type="text" class="form-control" id="usrname" placeholder="Enter email">
					            </div>
					            <div class="form-group">
					              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
					              <input type="text" class="form-control" id="psw" placeholder="Enter password">
					            </div>
					            <div class="checkbox">
					              <label><input type="checkbox" value="" checked>Remember me</label>
					            </div>
					              <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off" ng-click="$ctrl.ok()"></span> Login</button>
					               <p>Forgot <a href="#">Password?</a></p>
					          </form>
					        </div>
					        <div class="modal-footer">
					          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal" ng-click="$ctrl.cancel()"><span class="glyphicon glyphicon-remove" ></span> Cancel</button>
					          <p>Not a member? <a href="#">Sign Up</a></p>
					         
					        </div>
					      </div>
					      
					    </div>
					  </div>
					</div>
				        
   					</script>
			  		
			  		<div class="sign_in">
			  			<div class="container">
			  				<a ng-click="$ctrl.open()" id="login" class="btn btn-default">
			  					<i class="glyphicon glyphicon-user"> </i> Login
			  				</a>
						</div>
						<script>
							$("[data-toggle=click]").popover({
                  				html: true, 
                				content: function() {
                        			return $('#popover-content').html();
                    			}
              				});
						</script>
			  		</div>
				</div>
			  	<div class="col-sm-1">
			  		<div class="cart">
			  			<a href="#/" class="btn btn-default" id="cart"><i class="glyphicon glyphicon-shopping-cart">Cart</i> </button></a>
			  			<!-- <p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p> -->
			  		</div>
			  		
			   	</div>
			</div>	
		</div>
		</div>
					<nav class="navbar navbar-inverse">
							  <div class="container-fluid">
							    
							    <ul class="nav navbar-nav">
							      <li class="active"><a href="#">Shop</a></li>
							      <li><a href="#">Create</a></li>
							      <li><a href="#">Help</a></li> 
							    </ul>
							   
							  </div>
							</nav>
			
				<script type="text/javascript">
				var bannersnack_embed = {"hash":"bxcj4j39r","width":1000,"height":90,"t":1473625530,"userId":25313186,"type":"html5"};
				</script>
				<script type="text/javascript" src="//cdn.bannersnack.com/iframe/embed.js"></script>
				<ng-view></ng-view>
	<!--footer-->
	<div class="footer">
		<div class="container">
			<div class="footer-top">
				<div class="col-md-6 top-footer">
					<h3>Follow Us On</h3>
					<div class="social-icons">
						<ul class="social">
							<li><a href="#"><i></i></a> </li>
							<li><a href="#"><i class="facebook"></i></a></li>	
							<li><a href="#"><i class="google"></i> </a></li>
							<li><a href="#"><i class="linked"></i> </a></li>						
						</ul>
							<div class="clearfix"></div>
					 </div>
				</div>
				<div class="col-md-6 top-footer1">
					<h3>Newsletter</h3>
						<form action="#" method="post">
							<input type="text" name="email" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
							<input type="submit" value="SUBSCRIBE">
						</form>
				</div>
				<div class="clearfix"> </div>	
			</div>	
		</div>
		<div class="footer-bottom">
			<div class="container">
				<div class="col-md-3 footer-bottom-cate">
					<h6>Categories</h6>
					<ul>
						<li><a href="products.html">Curabitur sapien</a></li>
						<li><a href="single.html">Dignissim purus</a></li>
						<li><a href="men.html">Tempus pretium</a></li>
						<li><a href="products.html">Dignissim neque</a></li>
						<li><a href="single.html">Ornared id aliquet</a></li>
					</ul>
				</div>
				<div class="col-md-3 footer-bottom-cate">
					<h6>Feature Projects</h6>
					<ul>
						<li><a href="products.html">Dignissim purus</a></li>
						<li><a href="men.html">Curabitur sapien</a></li>
						<li><a href="single.html">Tempus pretium</a></li>
						<li><a href="men.html">Dignissim neque</a></li>
						<li><a href="products.html">Ornared id aliquet</a></li>
					</ul>
				</div>
				<div class="col-md-3 footer-bottom-cate">
					<h6>Top Brands</h6>
						<ul>
							<li><a href="products.html">Tempus pretium</a></li>
							<li><a href="single.html">Curabitur sapien</a></li>
							<li><a href="men.html">Dignissim purus</a></li>
							<li><a href="single.html">Dignissim neque</a></li>
							<li><a href="men.html">Ornared id aliquet</a></li>
						</ul>
				</div>
				<div class="col-md-3 footer-bottom-cate cate-bottom">
					<h6>Our Address</h6>
					<ul>
						<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Address : 12th Avenue, 5th block, <span>Sydney.</span></li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>Email : <a href="mailto:info@example.com">info@example.com</a></li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>Phone : +1234 567 567</li>
					</ul>
				</div>
				<div class="clearfix"> </div>
				<p class="footer-class"> © 2016 Youth Fashion . All Rights Reserved | Design by <a href="#/" target="_blank">W3layouts</a> </p>
			</div>
		</div>
	</div>
</body>
</html>
