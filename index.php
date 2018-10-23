<?php
	$defineVariablesPhp = "defineVariables.php";

	require $defineVariablesPhp;
	require $dbConnectPhp;
?>

<?php
	$msg = NULL;
	if(isset($_GET[$getMsg]))
	{
		$getMsgVal = $_GET[$getMsg];
		$showMsgModal = true;
	}
?>

<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=divice-width, initial-scale=1.0">
		<title>Nishi Agarwal</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/customIndex.css">
	</head>
	<body>
		<div class="container">
			<?php require("header.php"); ?>
			<hr>
			<section>
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li>
					</ol>

					<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">
						<div class="item active">
						  <img src="Images/Boat.jpg" alt="">
						</div>

						<div class="item">
						  <img src="Images/Peagon.jpg" alt="">
						</div>

						<div class="item">
						  <img src="Images/Wall.jpg" alt="">
						</div>
					</div>

					<!-- Left and right controls -->
					<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</section>
			<hr>
			<section>
				<div>
					<h2 class="text-align-centre"><span class="dull-black-color">MOMENTS FADE</span></h2>
				</div>
				<div class="text-align-centre">
					<span class="dull-black-color">Treasure Your Travels Today</span>
				</div>
			</section>
			<hr>
			<section>
				<div class="header-hoz-gallary">
					<h3 class="text-align-centre"><span class="dull-black-color">BRING HOME CALIFORNIA</span></h3>
				</div>
				<div class="row img-div">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
						<a href="">
							<img src="Images/Artists_Palette.jpg">
						</a>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
						<a href="">
							<img src="Images/Peacock.jpg">
						</a>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
						<a href="">
							<img src="Images/ScenaryCycle.jpg">
						</a>
					</div>
				</div>
			</section>
			<hr>
			<section>
				<div class="header-hoz-gallary">
					<h3 class="text-align-centre"><span class="dull-black-color">REMEMBER NAPA</span></h3>
				</div>
				<div class="row img-div">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
						<a href="">
							<img src="Images/Baby.jpg">
						</a>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
						<a href="">
							<img src="Images/Lady.jpg">
						</a>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
						<a href="">
							<img src="Images/Man.jpg">
						</a>
					</div>
				</div>
			</section>
			<hr>
			<?php require("footer.php"); ?>
		</div>

		<!-- Modals Start-->
		<?php require("modal.php"); ?>
		<!-- Modals end -->

		<!-- JavaScript -->
		<!--<script type="text/javascript" src="js/jquery-3.2.0.min.js"></script> -->
		<script defer type="text/javascript" src="js/jquery-3.1.0.min.js"></script>
		<script defer type="text/javascript" src="js/bootstrap.min.js"></script>
	</body>
</html>


<?php 
	if($showMsgModal)
	  echo '<script> $("#msgModal").modal("show");</script>';
?>
