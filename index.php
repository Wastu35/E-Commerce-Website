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
                <a href="cart.php">Shopping Chart Total Price: INR <?php totalPrice(); ?>, Total Items <?php item(); ?></a>
                
            </div> <!--col-md-6 offer End-->
            <div class="col-md-6">
                <ul class="menu">
                    <li>
                        <a href="customer_registration.php">Register</a>
                    </li>
                    <li>
                        <a href="customer/my_account.php">My Account</a>
                    </li>
                    <li>
                        <a href="cart.php">Goto cart</a>
                    </li>
                    <li>
                        <a href="login.php">Login</a>
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
                        <li class="active">
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="shop.php">Shop</a>
                        </li>
                        <li>
                            <a href="customer/my_account.php">My Account</a>
                        </li>
                        <li>
                            <a href="cart.php">Shopping cart</a>
                        </li>
                        <li>
                            <a href="about.php">About Us</a>
                        </li>
                        <li>
                            <a href="services.php">Services</a>
                        </li>
                        <li>
                            <a href="contactus.php">Contact Us</a>
                        </li>
                    </ul>
                
                </div>  <!--paddding nav End-->
                <a href="cart.php" class="btn btn-primary navbar-btn right">
                    <i class="fa fa-shopping-cart"></i>
                    <span><?php item(); ?> items In Cart</span>
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
    
<div class="container" id="slider">  <!--Container Start-->
    <div class="col-md-12"> <!--col-md-12 Start-->
        <div class="carousel slide" id="myCarousel" data-ride="carousel"> <!--carousel slide Start-->
            <ol class="carousel-indicators">
                <li data-target="myCarousel" data-slide-to="0" class="action"></li>
                <li data-target="myCarousel" data-slide-to="1"></li>
                <li data-target="myCarousel" data-slide-to="2"></li>
                <li data-target="myCarousel" data-slide-to="3"></li>
            
            </ol>
            
            <div class="carousel-inner"> <!--carousel-inner Start-->
                
                <?php
                    $get_slider= "select * from slider LIMIT 0,1";
                    $run_slider= mysqli_query($con,$get_slider);
                    while($row=mysqli_fetch_array($run_slider)){
                        $slider_name=$row['slider_name'];
                        $slider_image=$row['slider_image'];
                        
                        echo "<div class='item active'>
                        <img src='admin_area/slider_images/$slider_image'>
                        </div>
                        ";
                    }
                ?>
                
                <?php
                $get_slider="select * from slider LIMIT 1,3";
                $run_slider=mysqli_query($con,$get_slider);
                while ($row=mysqli_fetch_array($run_slider)){
                    $slider_name=$row['slider_name'];
                    $slider_image=$row['slider_image'];
                    echo "
                        <div class='item'>
                        <img src='admin_area/slider_images/$slider_image'>
                        </div>
                    
                    "
                    ;
                }
                    
                ?>
                
                
            </div>  <!--carousel-inner End-->
            
            <a href="#myCarousel" class="left carousel-control" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
                
            </a>
        
            <a href="#myCarousel" class="right carousel-control" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
                
            </a>
            
            
        </div> <!--carousel slide End-->
    
    </div> <!--col-md-12 End-->
        
</div> <!--Container End-->
    
<div id="advantage"> <!--advantage Start-->
    <div class="container">  <!--container Start-->
        <div class="same-height-row">  <!--same-height-row Start-->
            <div class="col-sm-4">  <!--col-sm-4 Start-->
                <div class="box same-height">  <!--box same-height Start-->
                    <div class="icon">  
                            <i class="fa fa-heart"></i>
                        
                    </div>
                    <h3><a href="#">BEST PRICES 11</a></h3>
                        <p>You can check on all others sites sahggkL;LJ;Gabout the prices and then compare with us.</p>
                
                </div>  <!--box same-height End-->
            
            </div>  <!--col-sm-4 End-->
            
            
            <div class="col-sm-4">  <!--col-sm-4 Start-->
                <div class="box same-height">  <!--box same-height Start-->
                    <div class="icon">  
                            <i class="fa fa-heart"></i>
                        
                    </div>
                    <h3><a href="#">BEST PRICES 22</a></h3>
                        <p>You can check on JHjktuoiweyehdhnsjxsdisdnwuofh iudsm all others sites about the prices and then compare with us.</p>
                
                </div>  <!--box same-height End-->
            
            </div>  <!--col-sm-4 End-->
            
            
            <div class="col-sm-4">  <!--col-sm-4 Start-->
                <div class="box same-height">  <!--box same-height Start-->
                    <div class="icon">  
                            <i class="fa fa-heart"></i>
                        
                    </div>
                    <h3><a href="#">BEST PRICES 33</a></h3>
                        <p>You can jagljkH  QJSNIWQEDMWOQEGF    G en compare with us.</p>
                
                </div>  <!--box same-height End-->
            
            </div>  <!--col-sm-4 End-->
        
        </div>  <!--same-height-row End-->
    
    </div>  <!--container End-->
    
</div>  <!--advantage End-->

    

<div id="hotbox">  <!--hotbox Start-->
    <div class="box">  <!--box Start-->
        <div class="container">  <!--container Start-->
            <div class="col-md-12">  <!--col-md-12 Start-->
                <h2>LATEST THIS WEEK</h2>
            
            </div>  <!--col-md-12 End-->
         
        </div>  <!--container End-->
    
    </div>  <!--box End-->
    
</div>  <!--hotbox End-->
    
    
<div id="content" class="container">
    <div class="row">
        <?php
            getPro();
        ?>
    </div>
</div>
        <!--Footer Start-->
            <?php
                include("includes/footer.php");
        
            ?>
        
        <!--Footer End-->
    
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    
</body>
</html>



