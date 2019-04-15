<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/nivo-lightbox.css">
	<link rel="stylesheet" href="css/nivo_themes/default/default.css">
	<link rel="stylesheet" href="css/style.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,500' rel='stylesheet' type='text/css'>
    </head>
    <body>
     <section class="preloader">
	<div class="sk-spinner sk-spinner-pulse"></div>
</section>

<!-- navigation section -->
<section class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
			</button>
			<a href="#" class="navbar-brand">FOODSHALA</a>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="index1.php" class="smoothScroll">HOME</a></li>
                                
				

                                <li><a href="logout.php" class="smoothScroll">Log out</a></li>
			</ul>
                </div>
        </div>
</section>
        <section id="gallery" class="parallax-section">
	<div class="container">
		<div class="row">
			<div class="col-md-offset-2 col-md-8 col-sm-12 text-center">
				<h1 class="heading">Food Gallery</h1>
				<hr>
			</div>
			<div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.3s">
				<a href="images/food8.jpg" data-lightbox-gallery="zenda-gallery"><img src="images/food8.jpg" alt="gallery img"></a>
				<div>
					<h3>Smoked Brisket Pizza</h3>
                                        <a href="confirm.php" target="_blank">
                                        <button type="submit"   class="btn btn-primary btn-block" >Order</button>
                                        </a>
				</div>
				<a href="images/food9.jpg" data-lightbox-gallery="zenda-gallery"><img src="images/food9.jpg" alt="gallery img"></a>
				<div>
					<h3>Chicken and Waffles</h3>
                                        <a href="confirm.php" target="_blank">
					<input type="submit" value="Order" class="btn btn-primary btn-block">
                                        </a>
				</div>
			</div>
			<div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.6s">
				<a href="images/foodc.jpg" data-lightbox-gallery="zenda-gallery"><img src="images/foodc.jpg" alt="gallery img"></a>
				<div>
					<h3>Vegan food</h3>
                                        <a href="confirm.php" target="_blank">
					<input type="submit" value="Order" class="btn btn-primary btn-block">
                                        </a>
				</div>
			</div>
			<div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.9s">
				<a href="images/fooda.jpg" data-lightbox-gallery="zenda-gallery"><img src="images/fooda.jpg" alt="gallery img"></a>
				<div>
					<h3>Potobello Falafel Buger</h3>
                                        <a href="confirm.php" target="_blank">
					<input type="submit" value="Order" class="btn btn-primary btn-block">
                                        </a>
				</div>
				<a href="images/foodb.jpg" data-lightbox-gallery="zenda-gallery"><img src="images/foodb.jpg" alt="gallery img"></a>
				<div>
					<h3>Chicken burger</h3>
                                        <a href="confirm.php" target="_blank">
					<input type="submit" value="Order" class="btn btn-primary btn-block">
                                        </a>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="menu" class="parallax-section">
	<div class="container">
		<div class="row">
			<div class="col-md-offset-2 col-md-8 col-sm-12 text-center">
				<h1 class="heading">Special Menu</h1>
				<hr>
			</div>
			<div class="col-md-6 col-sm-6">
				<h4>Smoked Brisket Pizza ................ <span>$20.50</span></h4>
				
			</div>
			<div class="col-md-6 col-sm-6">
				<h4>Chicken and waffles ........................... <span>$30.50</span></h4>
				
			</div>
			<div class="col-md-6 col-sm-6">
				<h4>Vegan food........................ <span>$40.75</span></h4>
				
			</div>
			<div class="col-md-6 col-sm-6">
				<h4>Potobello Falafel Buger .......................... <span>$55.00</span></h4>
				
			</div>
			<div class="col-md-6 col-sm-6">
				<h4>Chicken burger ...................... <span>$65.00</span></h4>
				
			</div>
			<div class="col-md-6 col-sm-6">
				<h4>Orange-Rosemary Shrimp ........................ <span>$70.50</span></h4>
				<h5>Shrimp / Rosemary / Orange</h5>
			</div>
			<div class="col-md-6 col-sm-6">
				<h4>Lemon-Rosemary Prawn ................... <span>$110.75</span></h4>
				<h5>Chicken / Rosemary / Lemon</h5>
			</div>
			<div class="col-md-6 col-sm-6">
				<h4>Lemon-Rosemary Seafood ..................... <span>$220.50</span></h4>
				<h5>Seafood / Rosemary / Lemon</h5>
			</div>
		</div>
	</div>
</section>
        <script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.parallax.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/nivo-lightbox.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/custom.js"></script>
    </body>
</html>
