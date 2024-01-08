<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
  ?>
<!doctype html>
<html lang="en">
  <head>
    

    <title>DjJohnson INTL | pension and insurance </title>

    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:400,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
  </head>
  <body id="home">
<?php include_once('includes/header.php');?>

<script src="assets/js/jquery-3.3.1.min.js"></script> <!-- Common jquery plugin -->
<!--bootstrap working-->
<script src="assets/js/bootstrap.min.js"></script>
<!-- //bootstrap working-->
<!-- disable body scroll which navbar is in active -->
<script>
$(function () {
  $('.navbar-toggler').click(function () {
    $('body').toggleClass('noscroll');
  })
});
</script>
<!-- disable body scroll which navbar is in active -->

<!-- breadcrumbs -->
<section class="w3l-inner-banner-main">
    <div class="about-inner services ">
        <div class="container">   
            <div class="main-titles-head text-center">
            <h3 class="header-name ">
            pension and insurance
            </h3>
        </div>
</div>
</div>
<div class="breadcrumbs-sub">
<div class="container">   
<ul class="breadcrumbs-custom-path">
    <li class="right-side propClone"><a href="index.php" class="">Home <span class="fa fa-angle-right" aria-hidden="true"></span></a> <p></li>
    <li class="active ">pension and insurance</li>
</ul>
</div>
</div>
    </div>
</section>
<div class="container">
 <link rel="stylesheet" href="style.css">

				<div class="page">
					<div class="container">
						<h3 class="entry-title">Choose your own insurance plan</h3>
						<p>to be updated</p>


						<div class="filter-links filterable-nav">
							<select class="mobile-filter">
								<option value="*">Show all</option>
								<option value=".skyscraper">medical</option>
								<option value=".shopping-center">life</option>
								<option value=".apartment">school fees</option>
							</select>
							<strong>Select Category: </strong>
							<a href="#" class="current wow fadeInRight" data-filter="*">Show all</a>
							<a href="#" class="wow fadeInRight" data-wow-delay=".2s" data-filter=".skyscraper">medical</a>
							<a href="#" class="wow fadeInRight" data-wow-delay=".4s" data-filter=".shopping-center">life</a>
							<a href="#" class="wow fadeInRight" data-wow-delay=".6s" data-filter=".apartment">schoolfees</a>
						</div>

						<div class="filterable-items">
							<div class="insurance-item filterable-item shopping-center">
								<div class="insurance-content">
									<div class="insurance-icon"><i class="icon-sofa"></i></div>
									<h3 class="insurance-title">medical</h3>
									<p>to be updated</p>
									<a href="#" class="button">See details</a>
								</div>
							</div>
						

							<div class="insurance-item filterable-item skyscraper">
								<div class="insurance-content">
									<div class="insurance-icon"><i class="icon-pool"></i></div>
									<h3 class="insurance-title">life </h3>
									<p>to be updated</p>
									<a href="#" class="button">See details</a>
								</div>
							</div>

							<div class="insurance-item filterable-item apartment">
								<div class="insurance-content">
									<div class="insurance-icon"><i class="icon-nurse"></i></div>
									<h3 class="insurance-title"> junior Medical </h3>
									<p> to be updated.</p>
									<a href="#" class="button">See details</a>
								</div>
							</div>

							<div class="insurance-item filterable-item shopping-center">
								<div class="insurance-content">
									<div class="insurance-icon"><i class="icon-weigher"></i></div>
									<h3 class="insurance-title">Financial Balance</h3>
									<p>to be updated.</p>
									<a href="#" class="button">See details</a>
								</div>
							</div>

							<div class="insurance-item filterable-item apartment">
								<div class="insurance-content">
									<div class="insurance-icon"><i class="icon-car"></i></div>
									<h3 class="insurance-title">Car Protect</h3>
									<p>to be updated.</p>
									<a href="#" class="button">See details</a>
								</div>
							</div>

							<div class="insurance-item filterable-item skyscraper">
								<div class="insurance-content">
									<div class="insurance-icon"><i class="icon-shirt"></i></div>
									<h3 class="insurance-title">Bussiness Insurance</h3>
									<p>to be updated.</p>
									<a href="#" class="button">See details</a>
								</div>
							</div>
						</div>

						<div class="pagination">
							<span class="current">1</span>
							<a href="#">2</a>
							<a href="#">3</a>
						</div>
					</div>
				</div> <!-- .page -->
			</main>

		<!--	<div class="site-footer">
				<div class="widget-area">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-4 col-md-2">
								<div class="widget">
									<h3 class="widget-title">Contact</h3>
									<address> Company Name INC. 523 Burt Street, Omaha
									</address>
									<a href="#">Phone: +1 823 424 9134</a>
									<a href="mailto:info@company.com">info@company.com</a>
								</div>
							</div>
							<div class="col-xs-12 col-sm-4 col-md-2">
								<div class="widget">
									<h3 class="widget-title">Company</h3>
									<ul class="no-bullet">
										<li><a href="#">About us</a></li>
										<li><a href="#">Infoline</a></li>
										<li><a href="#">Team</a></li>
										<li><a href="#">Join us</a></li>
										<li><a href="#">Cooperation</a></li>
									</ul>
								</div>
							</div>
							<div class="col-xs-12 col-sm-4 col-md-2">
								<div class="widget">
									<h3 class="widget-title">Products</h3>
									<ul class="no-bullet">
										<li><a href="#">Life insurance</a></li>
										<li><a href="#">Home insurance</a></li>
										<li><a href="#">Car insurance</a></li>
										<li><a href="#">Business insurance</a></li>
										<li><a href="#">Investment insurance</a></li>
									</ul>
								</div>
							</div>
							<!--<div class="col-xs-12 col-sm-4 col-md-2">
								<div class="widget">
									<h3 class="widget-title">Our Solutions</h3>
									<ul class="no-bullet">
										<li><a href="#">Presentation</a></li>
										<li><a href="#">Testimonials</a></li>
										<li><a href="#">Examples</a></li>
										<li><a href="#">Our experts</a></li>
										<li><a href="#">Resources</a></li>
									</ul>
								</div>
							</div>
							<div class="col-xs-12 col-sm-4 col-md-2">
								<div class="widget">
									<h3 class="widget-title">Press Room</h3>
									<ul class="no-bullet">
									<li><a href="#">Advertisement</a></li>
									<li><a href="#">Interviews</a></li>
									<li><a href="#">Hot news</a></li>
									<li><a href="#">Photos</a></li>
									<li><a href="#">Marketing</a></li>
									</ul>
								</div>
							</div>
							<div class="col-xs-12 col-sm-4 col-md-2">
								<div class="widget">
									<h3 class="widget-title">Resources</h3>
									<ul class="no-bullet">
										<li><a href="#">Sed imperdiet magna</a></li>
										<li><a href="#">Pellentesque molestie</a></li>
										<li><a href="#">Nulla luctus cursus</a></li>
										<li><a href="#">Ligula vel lacinia</a></li>
										<li><a href="#">Mauris scelerisque</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>

--><div class="bottom-footer">
					<div class="container">
						<nav class="footer-navigation">
						
						</nav>

						<div class="colophon"></div>
					</div>
				</div>
			</div>
		</div>

		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
		
	</body>

</html>
<?php include_once('includes/footer.php');?>
<!-- move top -->
<button onclick="topFunction()" id="movetop" title="Go to top">
	<span class="fa fa-long-arrow-up"></span>
</button>
<script>
	// When the user scrolls down 20px from the top of the document, show the button
	window.onscroll = function () {
		scrollFunction()
	};

	function scrollFunction() {
		if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
			document.getElementById("movetop").style.display = "block";
		} else {
			document.getElementById("movetop").style.display = "none";
		}
	}

	// When the user clicks on the button, scroll to the top of the document
	function topFunction() {
		document.body.scrollTop = 0;
		document.documentElement.scrollTop = 0;
	}
</script>
<!-- /move top -->
</body>

</html>