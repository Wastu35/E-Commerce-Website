<?php
    include("includes/db.php");
    include("functions/functions.php");
?>

<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link rel="stylesheet" href="styles/style.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> -->
    
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>

<body>
    <div id="top">  <!--Top Bar Start-->
        <div class="container"><!--Container Start-->
            <div class="col-md-6 offer"> <!--col-md-6 offer Start-->
                <a href="#" class="btn btn-success btn-sm">
                    
                    Welcome Guest
                    
                </a>
                <a href="#">Shopping Chart Total Price: INR 100, Total Items 2</a>
                
            </div> <!--col-md-6 offer End-->
            <div class="col-md-6">
                <ul class="menu">
                    <li>
                        <a href="../customer_registration.php">Register</a>
                    </li>
                    <li>
                        <a href="../checkout.php">My Account</a>
                    </li>
                    <li>
                        <a href="../cart.php">Goto cart</a>
                    </li>
                    <li>
                        <a href="../login.php">Login</a>
                    </li>
                
                </ul>
            
            </div>
            
        </div> <!--Container End-->
    </div>  <!--Top Bar End-->
    <div class="navbar navbar-default" id="navbar"> <!--navbar navbar-default Start-->
        <div class="container">
            <div class="navbar-header"> <!--navbar header Start-->
                <a class="navbar-brand home" href="index.php">
                    <img src="images/logo.jpg" alt="e-commerce" class="hidden-xs" height="100px" width="100px">
                    <img src="images/logo.png" alt="e-commerce" class="visible-xs">
                </a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                    <span class="sr-only">Toggle Navigation</span>
                    <i class="fa fa-align-justify"></i>
                </button>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">
                    <span class="sr-only"></span>
                    <i class="fa fa-search"></i>
                </button>
            </div> <!--navbar header End-->
            
            <div class="navbar-collapse collapse" id="navigation">  <!--navbar-collapse collapse Start-->
                <div class="padding-nav"> <!--paddding nav Start-->
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="../index.php">Home</a>
                        </li>
                        <li>
                            <a href="../shop.php">Shop</a>
                        </li>
                        <li  class="active">
                            <a href="my_account.php">My Account</a>
                        </li>
                        <li>
                            <a href="../cart.php">Shopping cart</a>
                        </li>
                        <li>
                            <a href="../about.php">About Us</a>
                        </li>
                        <li>
                            <a href="../services.php">Services</a>
                        </li>
                        <li>
                            <a href="../contactus.php">Contact Us</a>
                        </li>
                    </ul>
                
                </div>  <!--paddding nav End-->
                <a href="cart.php" class="btn btn-primary navbar-btn right">
                    <i class="fa fa-shopping-cart"></i>
                    <span>4 items In Cart</span>
                </a>
                <div class="navbar-collapse collapse right">  <!--navbar-collapse collapse-right Start-->
                    <button class="btn navbar-btn btn-primary" type="button" data-toggle="collapse" data-target="#search">
                        <span class="sr-only">Toggle Search</span>
                        <i class="fa fa-search"></i>
                    </button>
                </div> <!--navbar-collapse collapse-right End-->
                
                <div class="collapse clearfix" id="search">
                    
                    <form class="navbar-form" method="get" action="result.php">
                        <div class="input-group">
                            <input type="text" name="user_query" placeholder="Search" class="form-control" required="">
                    <span class="input-group-btn">
                            <button type="submit" value="Search" name="search" class="btn btn-primary">
                                <i class="fa fa-search"></i>
                            </button>
                    </span>
                        </div>
                            
                    </form>
                </div>
            </div>  <!--navbar-collapse collapse End-->
        
        </div>
    
    </div>  <!--navbar navbar-default End-->

<div id="content">
    <div class="container">  <!--container Start-->
        <div class="col-md-12">  <!--col-md-12 Start-->
            <ul class="breadcrumb">
                <li><a href="home.php">Home</a></li>
                <li>
                    My Account
                </li>
            </ul>
        
        </div>  <!--col-md-12 End-->
        
        <div class="col-md-3">  <!--col-md-3 Start-->
            <?php
                include("includes/sidebar.php");
            ?>
        
        </div>  <!--col-md-3 End-->

        <div class="col-md-9">
            <div class="box">
                <h1 align="center">Please confirm your payment</h1>
                <form action="confirm.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>invoice Number</label>
                        <input type="text" class="form-control" name="invoice_number" required="">
                    </div>
                    
                    <div class="form-group">
                        <label>Amount</label>
                        <input type="text" class="form-control" name="amount" required="">
                    </div>
                    
                    <div class="form-group">
                        <label>Select Payment Mode</label>
                        <select class="form-control" name="payment-mode">
                            <option>Bank Transfer</option>
                            <option>Paypal</option>
                            <option>PayuMoney</option>
                            <option>Paytm</option>
                        </select>
                     </div>
                    
                    <div class="form-group">
                        <label>Transaction Number</label>
                        <input type="text" class="form-control" name="trfr_number" required="">
                    </div>
                    
                    <div class="form-group">
                        <label>Payment Date</label>
                        <input type="date" class="form-control" name="date" required="">
                    </div>
                    
                    <div class="text-center">
                        <button type="submit" name="confirm_payment" class="btn btn-primary btn-lg">
                            Confirm Payment
                        </button>
                    </div>
                </form>
            </div>
        </div>
        
        
        
        
        
    </div>  <!--container End-->
    
</div>  <!--container End-->
    
    
    
 <!--Footer Start-->
            <?php
                include("includes/footer.php");
        
            ?>
        
        <!--Footer Start-->
    
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    
</body>
</html>