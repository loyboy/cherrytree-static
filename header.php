<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>CherryTree</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">
  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/magnific-popup/magnific-popup.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

</head>

<body id="body">

  

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
          <a href="index.php">
            <img src="img/favicon.png" width='40'>
            <a href="index.php" class="scrollto">Cherry<span>Tree</span> Market</a><br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>Online Local Food</span>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="#body"><img src="img/logo.png" alt="" title="" /></a>-->
          </a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
        <?php if($_SERVER['REQUEST_URI'] === "/index.php"){  ?>
          <li class="menu-active"><a href="index.php">Home</a></li>
        <?php } else { ?> 
          <li><a href="index.php">Home</a></li>
        <?php } ?> 
        <?php if($_SERVER['REQUEST_URI'] === "/terms.php"){  ?>
          <li class="menu-active"><a href="terms.php">T&C</a></li>
        <?php } else { ?>
            <li><a href="terms.php">T&C</a></li>
        <?php } ?>
        <?php if($_SERVER['REQUEST_URI'] === "/terms.php"){  ?>
          <li><a href="faqs.php">FAQ</a></li>
          <?php } else { ?>  
          <li class="menu-active"><a href="faqs.php">FAQ</a></li>
          <?php } ?>
          <li><a href="https://www.cherrytreemarket.com/app/sign-up" target="_blank">Login or Sign Up</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
 
  <main id="main">