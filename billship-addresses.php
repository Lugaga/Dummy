<?php
session_start();
//error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['login'])==0)
    {   
header('location:index.php');
}
else{
	// code for billing address updation
	if(isset($_POST['update']))
	{
		$baddress=$_POST['billingaddress'];
		$bstate=$_POST['bilingstate'];
		$bcity=$_POST['billingcity'];
		$bpincode=$_POST['billingpincode'];
		$query=mysqli_query($con,"update users set billingAddress='$baddress',billingState='$bstate',billingCity='$bcity',billingPincode='$bpincode' where id='".$_SESSION['id']."'");
		if($query)
		{
echo "<script>alert('Billing Address has been updated');</script>";
		}
	}


// code for Shipping address updation
	if(isset($_POST['shipupdate']))
	{
		$saddress=$_POST['shippingaddress'];
		$sstate=$_POST['shippingstate'];
		$scity=$_POST['shippingcity'];
		$spincode=$_POST['shippingpincode'];
		$query=mysqli_query($con,"update users set shippingAddress='$saddress',shippingState='$sstate',shippingCity='$scity',shippingPincode='$spincode' where id='".$_SESSION['id']."'");
		if($query)
		{
echo "<script>alert('Shipping Address has been updated');</script>";
		}
    }
    
    ?>
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <!-- Meta -->
            <meta charset="utf-8">
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
            <meta name="description" content="">
            <meta name="author" content="">
            <meta name="keywords" content="MediaCenter, Template, eCommerce">
            <meta name="robots" content="all">
    
            <title>My Account</title>
    
            <!-- Bootstrap Core CSS -->
            <link rel="stylesheet" href="assets/css/bootstrap.min.css">
            
            <!-- Customizable CSS -->
            <link rel="stylesheet" href="assets/css/main.css">
            <link rel="stylesheet" href="assets/css/green.css">
            <link rel="stylesheet" href="assets/css/owl.carousel.css">
            <link rel="stylesheet" href="assets/css/owl.transitions.css">
            <!--<link rel="stylesheet" href="assets/css/owl.theme.css">-->
            <link href="assets/css/lightbox.css" rel="stylesheet">
            <link rel="stylesheet" href="assets/css/animate.min.css">
            <link rel="stylesheet" href="assets/css/rateit.css">
            <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
    