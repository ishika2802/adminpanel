<!DOCTYPE html>
<head>
<title>Main Page</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<!-- calendar -->
<link rel="stylesheet" href="css/monthly.css">
<!-- //calendar -->
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>
<script src="js/raphael-min.js"></script>
<script src="js/morris.js"></script>
</head>
<body>
<section id="container">
<!--header start-->
<header class="header fixed-top clearfix">

<!--logo start-->
<?php
include'./parts/logo.php';
?>
<!--logo end-->

<div class="nav notify-row" id="top_menu">
    
</div>
<div class="top-nav clearfix">
    <!--search & user info start-->
    <?php
    include'./parts/searchandinfo.php';
    ?>
        <!-- user login dropdown end -->
    <!--search & user info end-->
</div>
</header>
<!--header end-->
<!--sidebar start-->
    <?php
    include'./parts/sidebar.php';
    ?>
<!--sidebar end-->

<!--main content start-->
<section id="main-content">
	<section class="wrapper">
    <div class="panel-heading">
      <div class="panel-body">
        <h4><center>Form Data</center></h4>
      </div>
    </div>
    <?php
    include'./fetch_data.php';
    ?>
<br><br>
    
      <!-- footer -->
		  <div class="footer">
			<div class="wthree-copyright">
			  <p><center>© 2021 Admin Dashboard | Developed by Ishika Patel</center></p>
			</div>
		  </div>
  <!-- / footer -->
</section>

<!--main content end-->
</section>
  </body>
</html>