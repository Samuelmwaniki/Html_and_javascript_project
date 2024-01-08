<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
 
     ?>
<!doctype html>
<html lang="en">
  <head>
   
    <title>DjJohnson INTL | Home Page</title>

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

<div class="w3l-hero-headers-9">
  <div class="css-slider">
    <input id="slide-1" type="radio" name="slides" checked>
    <section class="slide slide-one">
      <div class="container">
        <div class="banner-text">
          <h4>Find A Perfect</h4> 
          <h3>Home To Live<br>
          With Your Family</h3>

            <a href="book-appointment.php" class="btn logo-button top-margin">Get An Appointment to view our prperty</a>
        </div>
      </div>
      
    </section>
    <input id="slide-2" type="radio" name="slides">
    <section class="slide slide-two">
      <div class="container">
        <div class="banner-text">
        <h4>Find A Perfect</h4> 
          <h3>Home To Live<br>
          With Your Family</h3>
          <a href="book-appointment.php" class="btn logo-button top-margin">Get An Appointment to view our prperty</a>
        </div>
      </div>
      <!-- <nav>
        <label for="slide-2" class="prev">&#10094;</label>
        <label for="slide-1" class="next">&#10095;</label>
      </nav> -->
    </section>
    <header>
      <label for="slide-1" id="slide-1"></label>
      <label for="slide-2" id="slide-2"></label>
    </header>
  </div>
</div> 
  <!-- Call to Action Start -->
  <div class="container-xxl py-5">
            <div class="container">
                <div class="bg-light rounded p-3">
                    <div class="bg-white rounded p-4" style="border: 1px dashed rgba(0, 185, 142, .3)">
                        <div class="row g-5 align-items-center">
                            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                                <img class="img-fluid rounded w-100" src="assets/images/ceo.jpeg"  alt="">
                            </div>
                            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                                <div class="mb-4">
                                    <h1 class="mb-3">Contact With Our Certified Agent</h1>
                                    <p>To facilitate your journey into acquiring land property,or cars;
                                         we invite you to connect with our certified real estate agent, DJ Johnson.
                                          With a wealth of experience and expertise in the local real estate market,Dj Johnson
                                           is dedicated to guiding you through every step of the process, ensuring a seamless and 
                                           informed transaction.<br></br><br>



To initiate a conversation with our certified agent and embark on the journey to acquiring this exceptional land property,
 simply reach out via<b>Email</b> or <b>Phone Number.</b><br/><br>
  
 Make your move towards a brighter future with the expertise of our dedicated real estate professional.</p>
                                </div>
                                <a href="contact.php" class="btn btn-primary py-3 px-4 me-2"><i class="fa fa-phone-alt me-2"></i>Make A Call</a>
                                <a href="book-appointment.php" class="btn btn-dark py-3 px-4"><i class="fa fa-calendar-alt me-2"></i>Get Appoinment</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Call to Action End -->
</section>

<section class="w3l-teams-15">
	<div class="team-single-main ">
		<div class="container">
		
				<div class="column2 image-text">
					<h3 class="team-head ">Come experience the secrets of Owning a property</h3>
					<p class="para  text ">
          Welcome to Dj johnsons market international, your Gateway to exceptional living!! We are more than just real estate professionals, we aref dedicated partners in finding the perfect home and turning your property aspirations into reality.</p>
						<a href="book-appointment.php" class="btn logo-button top-margin mt-4">Get An Appointment</a>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="w3l-specification-6">
    <div class="specification-layout ">
        <div class="container">
            <div class=" row">
                <div class="col-lg-6 back-image">
                <iframe width="420" height="345" src="https://www.youtube.com/embed/tgbNymZ7vqY">
</iframe>
                </div>
                <div class="col-lg-6 about-right-faq align-self">
                    <h3 class="title-big"><a href="about.html">The highly recommendend firm for your home solutions </a></h3>
                    <p class="mt-3 para"> Their array properties and land include villas , lands for rent, lands for sale, 
                      cars to hire, cars for sale, expert advises, free land visists, building advise, car choice free consultation, 
                      and more.</p>
                        <div class="hair-cut">
                            <div >
                    <ul class="w3l-right-book">
                        <li><span class="fa fa-check" aria-hidden="true"></span><a href="about.html">lands for rent</a></li>
                        <li><span class="fa fa-check" aria-hidden="true"></span><a href="about.html">lands for sale</a></li>
                        <li><span class="fa fa-check" aria-hidden="true"></span><a href="about.html">villas</a></li>
                        <li><span class="fa fa-check" aria-hidden="true"></span><a href="about.html">Apartments</a></li>
                        <li><span class="fa fa-check" aria-hidden="true"></span><a href="about.html">cars for sale</a></li>
                    </ul>
                </div>
                    <div  class="image-right">
                        <ul class="w3l-right-book">
                            <li><span class="fa fa-check" aria-hidden="true"></span><a href="about.html">cars to hire</a></li>
                            <li><span class="fa fa-check" aria-hidden="true"></span><a href="about.php">expert advises</a></li>
                            <li><span class="fa fa-check" aria-hidden="true"></span><a href="about.html">diverse listings</a></li>
                            <li><span class="fa fa-check" aria-hidden="true"></span><a href="about.html">free land visists</a></li>
                            <li><span class="fa fa-check" aria-hidden="true"></span><a href="about.html">building advise</a></li>
                        </ul>
                </div>
            </div>
        </div>
</section>
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