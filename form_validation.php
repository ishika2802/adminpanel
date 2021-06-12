
<!DOCTYPE html>
<head>
<title>Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css'/>
<link href="css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>
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
		<div class="form-w3layouts">
            <!-- page start-->
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Enter details in form
                        </header>
                        <div class="panel-body">
                            <form role="form" class="form-horizontal" method="POST" action="datainsert.php">
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">First Name</label>
                                    <div class="col-lg-6">
                                        <input type="text" name="fname" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Last Name</label>
                                    <div class="col-lg-6">
                                        <input type="text" name="lname" class="form-control" required>
                                     </div>
                                </div>

                                <div class="form-group ">
                                        <label class="control-label col-lg-3">Email</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" type="email" id="cname" name="email" required>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label class="control-label col-lg-3">Date Of Birth</label>
                                        <div class="col-lg-6">
                                            <input class="form-control" id="cemail" type="date" name="dob" required>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="curl" class="control-label col-lg-3">Degree</label>
                                        <div class="col-lg-6">
                                            <input class="form-control" id="curl" type="text" name="degree" required> 
                                        </div>
                                    </div>
                        
                                    <div class="form-group ">
                                        <label for="curl" class="control-label col-lg-3">Joining Year</label>
                                        <div class="col-lg-6">
                                            <input class="form-control" id="curl" type="date" name="joinyear" required>
                                        </div>
                                    </div>
                                <div class="form-group">
                                    <div class="col-lg-offset-3 col-lg-6">
                                        <button class="btn btn-primary" type="submit">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </section>
                </div>
            </div>                             
            <!-- page end-->
        </div>
</section>


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
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>
</body>
</html>
