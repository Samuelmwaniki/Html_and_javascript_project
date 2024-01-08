<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
  ?>
<!doctype html>
<html lang="en">
  <head>
    

    <title>DjJohnson INTL | car rental </title>

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
                Our Service
            </h3>
        </div>
</div>
</div>
<div class="breadcrumbs-sub">
<div class="container">   
<ul class="breadcrumbs-custom-path">
    <li class="right-side propClone"><a href="index.php" class="">Home <span class="fa fa-angle-right" aria-hidden="true"></span></a> <p></li>
    <li class="active ">Services</li>
</ul>
</div>
</div>
    </div>
</section>
<!-- breadcrumbs //-->
<section class="w3l-recent-work-hobbies" > 
    <div class="recent-work ">
        <div class="container">
            <div class="row about-about">

    <?php
                
                $ret=mysqli_query($con,"select * from  tblcars");
                $cnt=1;
                while ($row=mysqli_fetch_array($ret)) {
                
                ?>
                                <div class="col-lg-4 col-md-6 col-sm-6 propClone">
                                <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">ON Sell</div>
                                 <a href="car-rental.php"><img src="admin/images/<?php echo $row['image']?>" alt="product" height="200" width="400" class="img-responsive about-me"></a>
                                    <div class="about-grids ">
                                        <hr>
                                        <h5 class="para"><p style ="bold;color:blue;">Name:</p><?php  echo $row['CarName'];?></h5><br>
                                       <hr> <h5 class="para "><p style ="color:blue;">Model:</p><br><?php  echo $row['CarModel'];?> </h5><br>
                                        <hr><h5 class="para " ><p style="color: Blue;"> Availability:</p> <?php  echo $row['CarAvailability'];?> </h5><br>
                                         <hr><h5 class="para "><p style="color: Blue;"> Fuel:</p><?php  echo $row['CarFuel'];?></h5><br></br>
                                        <hr> <h5 class="para" ><p style="color:Blue;">Value:</p><?php  echo $row['CarValue'];?></h5><br></br>
                                        <a href="book-appointment.php" class="btn logo-button top-margin">Request Callback</a>
                                           
                                    </div>
                                </div>
                                <br></br><?php 
                $cnt=$cnt+1;
                }?>
                            
                            </div>
                        </div>
                    </div>
                </section>




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