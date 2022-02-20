<div id="footer">  <!--Footer section Start-->
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">  <!--col-md-3 col-sm-6 Start-->
                <h4>Pages</h4>
                <ul>
                    <li><a href="cart.php">Shopping Cart</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                    <li><a href="shop.php">Shop</a></li>
                    <li><a href="chechout.php">My Account</a></li>
                </ul>
                <hr>
                <h4>User Section</h4>
                <ul>
                    <li><a href="checkout.php">Login</a></li>
                    <li><a href="customer_registration.php">Register</a></li>
                </ul>
                <hr class="hidden-md hidden-lg hidden-sm">
             
            </div>  <!--col-md-3 col-sm-6 End-->
        <div class="col-md-3 col-md-6">  <!--col-md-3 col-sm-6 Start-->
            <h4>Top Product Categories</h4>
            <ul>
                <?php
                $get_p_cats="select * from product_category";
                $run_p_cats=mysqli_query($con,$get_p_cats);
                while ($row_p_cat=mysqli_fetch_array($run_p_cats)) {
                    $p_cat_id=$row_p_cat['p_cat_id'];
                    $p_cat_title=$row_p_cat['p_cat_title'];
                    echo "<li><a href='shop.php?p_cat=$p_cat_id'> $p_cat_title</a></li>";
                }
                ?>
            </ul>    
            <hr class="hidden-md hidden-lg">
            
        </div>  <!--col-md-3 col-sm-6 End-->
            
        <div class="col-md-3 col-md-6">  <!--col-md-3 col-sm-6 Start-->
            <h4>where to find us</h4>
            <p>
                <strong>ShoppyMall.com</strong>
                <br>Wastu Prashar
                <br>PSIT Kanpur
                <br>Uttar pradesh
                <br>prashar.wastu3535@gmail.com
                <br>+91 7073830167
            </p>
            <a href="contact.php">Goto to contact us page</a>
            <hr class="hidden-md hidden-lg">
        </div>  <!--col-md-3 col-sm-6 End-->
            
        <div class="col-md-3 col-md-6">  <!--col-md-3 col-sm-6 Start-->
            <h4>Get the News</h4>
            <p class="text-muted">
                Subscribe here for getting news company
            
            </p>
            <form action="" method="post">
                <div class="input-group">
                <input type="text" name="email" class="form-control">
                    <span class="input-group-btn">
                        <input type="submit" class="btn btn-default" value="subscribe">
                    
                    </span>        
                </div>
            </form>
            
            <hr>
            <h4>Stay In Touch</h4>
            <p class="social">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-google-plus"></i></a>
                <a href="#"><i class="fa fa-envelope"></i></a>
            
            </p>
            
        </div>  <!--col-md-3 col-sm-6 End-->
            
        </div>
    
    </div>

</div>  <!--Footer section End-->

<div id="copyright">   <!--Copyright section Start-->
    <div class="container">
        <div class="col-md-6">
            <p class="pull-left">
                &copy; 2019 Wastu Prashar
            
            </p>
        </div>
    <div class="col-md-6">
        <p class="pull-right">
            Tamplate By: <a href="www.ShoppyMall.com">ShoppyMall.com</a>
        
        </p>    
        
    </div>
    </div>


</div>  <!--Copyright section End-->