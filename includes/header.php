<section class=" w3l-header-4 header-sticky">
    <header class="absolute-top">
        <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <h1><a class="navbar-brand" href="index.php"> <!--<span class="fa fa-line-chart" aria-hidden="true"></span> -->
            JD and Johnson's intl
            </a></h1>
            <button class="navbar-toggler bg-gradient collapsed" type="button" data-toggle="collapse"
                data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="fa icon-expand fa-bars"></span>
        <span class="fa icon-close fa-times"></span>
            </button>
      
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li> 
                   
                 
                    <div class="dropdown show">
  <a class="btn btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Properties
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="car-rental.php">Car Rental</a>
    <a class="dropdown-item" href="services.php">Land for Sale</a>
    
  </div>
</div>
<div class="dropdown show">
  <a class="btn btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Services
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="supplies.php">supplies and services</a>
    <a class="dropdown-item" href="sales and marketing.php">sales and marketing activities </a>
    <a class="dropdown-item" href="consultancy.php">Training and consultancy</a>
    <a class="dropdown-item" href="ict.php">ICT</a>
    <a class="dropdown-item" href="insurance.php">pension & insurance</a>
  </div>
</div>

                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                     
                     <?php if (strlen($_SESSION['bpmsuid']==0)) {?>
                    <li class="nav-item">
                        <a class="nav-link" href="admin/index.php">Admin</a>
                    </li>
                     <li class="nav-item">
                        <a class="nav-link" href="signup.php">Signup</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li><?php }?>
                    <?php if (strlen($_SESSION['bpmsuid']>0)) {?>
                    <li class="nav-item">
                        <a class="nav-link" href="book-appointment.php">Book Land visit</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="booking-history.php">Booking History</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="invoice-history.php">Invoice History</a>
                    </li>
                                        <li class="nav-item">
                        <a class="nav-link" href="profile.php">Profile</a>
                    </li>
                                        <li class="nav-item">
                        <a class="nav-link" href="change-password.php">Setting</a>
                    </li>
                     <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                  <?php }?>
                </ul>
                
            </div>
        </div>

        </nav>
    </div>
      </header>
</section>