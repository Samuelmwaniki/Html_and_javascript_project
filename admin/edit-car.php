<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['bpmsaid']==0)) {
  header('location:logout.php');
  } else{

if(isset($_POST['submit']))
  {
    $Cname=$_POST['Cname'];
    $CModel=$_POST['Cmodel'];
    $Cavailability=$_POST['Cavailability'];
	$Cfuel=$_POST['Cfuel'];
	$Cvalue=$_POST['Cvalue'];

   
 $eid=$_GET['editid'];
     
    $query=mysqli_query($con, "update  tblcar set name='$Cname',model='$Cmodel',availabilty='$Cavailability',fuel='$Cfuel',value='$Cvalue' where ID='$eid' ");
    if ($query) {
  
    echo "<script>alert('car has been Updated.');</script>";
  }
  else
    {
      
      echo "<script>alert('Something Went Wrong. Please try again.');</script>";
    }

  
}
  ?>
<!DOCTYPE HTML>
<html>
<head>
<title>JD & Johnsons INTL  | Update cars</title>

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
 <!-- js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<!--webfonts-->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!--//webfonts--> 
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<!-- Metis Menu -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">
<!--//Metis Menu -->
</head> 
<body class="cbp-spmenu-push">
	<div class="main-content">
		<!--left-fixed -navigation-->
		 <?php include_once('includes/sidebar.php');?>
		<!--left-fixed -navigation-->
		<!-- header-starts -->
	 <?php include_once('includes/header.php');?>
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					<h3 class="title1">Update Cars</h3>
					<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
						<div class="form-title">
							<h4>Update INTL cars:</h4>
						</div>
						<div class="form-body">
							<form method="post">
								
  <?php
 $cid=$_GET['editid'];
$ret=mysqli_query($con,"select * from  tblcars where ID='$cid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?> 

  
<div class="form-group"> <label for="exampleInputEmail1">Car Name</label> <input type="text" class="form-control" id="Cname" name="Cname" placeholder=" Name" value="" required="true"> </div>
							 <div class="form-group"> <label for="exampleInputEmail1">Car model</label> <textarea type="text" class="form-control" id="Cmodel" name="Cmodel" placeholder="model" value="" required="true"></textarea> </div>
							  <div class="form-group"> <label for="exampleInputPassword1">Car availability</label> <input type="number" id="availability" name="Cavailability" class="form-control" placeholder="availability" value="" required="true"> </div>
							  <div class="form-group"> <label for="exampleInputEmail1">Car Fuel</label> <input type="text" class="form-control" id="Cfuel" name="Cfuel" placeholder="fuel type" value="" required="true"> </div>
							  
							 <div class="form-group"> <label for="exampleInputPassword1">value</label> <input type="number" id="value" name="value" class="form-control" placeholder="value" value="<?php  echo $row['value'];?>" required="true"> </div>
                             <div class="form-group"> <label for="exampleInputPassword1">Image</label>  <img src="images/<?php echo $row['image']?>" width="120">
               <a href="update-images.php?lid=<?php echo $row['ID'];?>">Update Image</a> </div>
							 <?php } ?>
							  <button type="submit" name="submit" class="btn btn-default">Update</button> </form> 
						</div>
						
					</div>
				
				
			</div>
		</div>
		 <?php include_once('includes/footer.php');?>
	</div>
	<!-- Classie -->
		<script src="js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			
			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
	<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.js"> </script>
</body>
</html>
<?php } ?>