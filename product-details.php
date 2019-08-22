<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<meta name="description" content="">
		<meta name="author" content="">
	    <meta name="keywords" content="MediaCenter, Template, eCommerce">
	    <meta name="robots" content="all">
	    <title>Product Details</title>
	    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
	    <link rel="stylesheet" href="assets/css/main.css">
	    <link rel="stylesheet" href="assets/css/green.css">
	    <link rel="stylesheet" href="assets/css/owl.carousel.css">
		<link rel="stylesheet" href="assets/css/owl.transitions.css">
		<link href="assets/css/lightbox.css" rel="stylesheet">
		<link rel="stylesheet" href="assets/css/animate.min.css">
		<link rel="stylesheet" href="assets/css/rateit.css">
		<link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
		<link rel="stylesheet" href="assets/css/config.css">

		<link href="assets/css/green.css" rel="alternate stylesheet" title="Green color">
		<link href="assets/css/blue.css" rel="alternate stylesheet" title="Blue color">
		<link href="assets/css/red.css" rel="alternate stylesheet" title="Red color">
		<link href="assets/css/orange.css" rel="alternate stylesheet" title="Orange color">
		<link href="assets/css/dark-green.css" rel="alternate stylesheet" title="Darkgreen color">
		<link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <!-- Fonts --> 
		<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
		<link rel="shortcut icon" href="assets/images/favicon.ico">
	</head>
    <body class="cnt-home">
	
    <header class="header-style-1">
    
        <!-- ============================================== TOP MENU ============================================== -->
    <?php include('includes/top-header.php');?>
    <!-- ============================================== TOP MENU : END ============================================== -->
    <?php include('includes/main-header.php');?>
        <!-- ============================================== NAVBAR ============================================== -->
    <?php include('includes/menu-bar.php');?>
    <!-- ============================================== NAVBAR : END ============================================== -->
    
    </header>
    
    <!-- ============================================== HEADER : END ============================================== -->
    <div class="breadcrumb">
        <div class="container">
            <div class="breadcrumb-inner">
                <?php
                $ret=mysqli_query($con,"select category.categoryName as catname,subCategory.subcategory as subcatname,products.productName as pname from products join category on category.id=products.category join subcategory on subcategory.id=products.subCategory where products.id='$pid'");
                while ($rw=mysqli_fetch_array($ret)) {

                ?>
                <ul class="list-inline list-unstyled">
                    <li><a href="index.php">Home</a></li>
                    <li><?php echo htmlentities($rw['catname']);?></a></li>
                    <li><?php echo htmlentities($rw['subcatname']);?></li>
                    <li class='active'><?php echo htmlentities($rw['pname']);?></li>
                </ul>
                <?php }?>
            </div><!-- /.breadcrumb-inner -->
        </div><!-- /.container -->
    </div><!-- /.breadcrumb -->
    <div class="body-content outer-top-xs">
	    <div class='container'>
		    <div class='row single-product outer-bottom-sm '>
			    <div class='col-md-3 sidebar'>
				    <div class="sidebar-module-container">
<!-- ==============================================CATEGORY============================================== -->
                        <div class="sidebar-widget outer-bottom-xs wow fadeInUp">
                            <h3 class="section-title">Category</h3>
                                <div class="sidebar-widget-body m-t-10">
                                    <div class="accordion">
                                        <?php $sql=mysqli_query($con,"select id,categoryName  from category");while($row=mysqli_fetch_array($sql)){?>
                                        <div class="accordion-group">
                                            <div class="accordion-heading">
                                                <a href="category.php?cid=<?php echo $row['id'];?>"  class="accordion-toggle collapsed">
                                                <?php echo $row['categoryName'];?>
                                                </a>
                                            </div>
	                                    </div>
                                                <?php } ?>
	                                </div>
	                            </div>
                        </div>
	<!-- ============================================== CATEGORY : END ============================================== -->