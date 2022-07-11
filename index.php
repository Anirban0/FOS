<?php 
// session_destroy();
?>
<!DOCTYPE html>
<html lang="zxx">

<head> 
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ogani | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/product_st.css" type="text/css">
    
    
    <!-- Model include -->

    <script data-require="jquery@3.1.1" data-semver="3.1.1" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    
    <script src="js/script.js"></script>
    

</head>

<body>
    <!-- Page Preloder -->
    <!-- <div id="preloder">
        <div class="loader"></div>
    </div> -->

    <!-- Humberger Begin -->
    <?php require 'comps/nav.php' ?>
    
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <!-- <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>All departments</span>
                        </div>
                        <ul>
                            <li><a href="#">Fresh Meat</a></li>
                            <li><a href="#">Vegetables</a></li>
                            <li><a href="#">Fruit & Nut Gifts</a></li>
                            <li><a href="#">Fresh Berries</a></li>
                            <li><a href="#">Ocean Foods</a></li>
                            <li><a href="#">Butter & Eggs</a></li>
                            <li><a href="#">Fastfood</a></li>
                            <li><a href="#">Fresh Onion</a></li>
                            <li><a href="#">Papayaya & Crisps</a></li>
                            <li><a href="#">Oatmeal</a></li>
                            <li><a href="#">Fresh Bananas</a></li>
                        </ul>
                    </div> -->
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="index.php" method="POST">
                                <!-- <div class="hero__search__categories">
                                    All Categories
                                    <span class="arrow_carrot-down"></span>
                                </div> -->
                                <input type="text" placeholder="What do yo u need?" name="search">
                                <button type="submit" class="site-btn">SEARCH</button>
                            </form>
                        <!-- </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>+65 11.188.888</h5>
                                <span>support 24/7 time</span>
                            </div>
                        </div> -->
                    </div>
                    <!-- <div class="hero__item set-bg" data-setbg="img/hero/banner.jpg">
                        <div class="hero__text">
                            <span>FRUIT FRESH</span>
                            <h2>Vegetable <br />100% Organic</h2>
                            <p>Free Pickup and Delivery Available</p>
                            <a href="#" class="primary-btn">SHOP NOW</a>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </section>  
    <?php

    if(isset($_SESSION['cart_added_alert']))
{
    if($_SESSION['cart_added_alert']==true)
    {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success</strong> Item added to cart successfully.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
        $_SESSION['cart_added_alert']=false;
    }
}
if(isset($_SESSION['cart_already_added_alert']))
{
    if($_SESSION['cart_already_added_alert']==true)
    {
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>OOPS</strong> Item already added to cart.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>';
            $_SESSION['cart_already_added_alert']=false;
    }
    

}
?>
    <!-- Hero Section End -->

    <!-- Categories Section Begin -->
    <!-- <section class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/cat-1.jpg">
                            <h5><a href="#">Fresh Fruit</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/cat-2.jpg">
                            <h5><a href="#">Dried Fruit</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/cat-3.jpg">
                            <h5><a href="#">Vegetables</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/cat-4.jpg">
                            <h5><a href="#">drink fruits</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/cat-5.jpg">
                            <h5><a href="#">drink fruits</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Categories Section End -->

    <!-- Featured Section Begin -->
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Products</h2>
                    </div>
                    <!-- <div class="featured__controls">
                        <ul>
                            <li class="active" data-filter="*">All</li>
                            <li data-filter=".oranges">Oranges</li>
                            <li data-filter=".fresh-meat">Fresh Meat</li>
                            <li data-filter=".vegetables">Vegetables</li>
                            <li data-filter=".fastfood">Fastfood</li>
                        </ul>
                    </div> -->
                </div>
            </div>
            <div class="row featured__filter">
            
                <?php

                function Display_card($id,$name,$price,$img){
                    echo '<div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                    <form action="manage_cart.php" method="POST">
                        <div class="featured__item">
                            <div class="featured__item__pic set-bg" data-setbg="img/featured/'.$img.'">
                                <ul class="featured__item__pic__hover">
                                   <button type="submit" name ="Add_To_Cart" class="btn btn-info">Add to Cart</button>
                                    <input type="hidden" name="Item_Name" value="'.$name.'">
                                    <input type="hidden" name="Item_Price" value='.$price.'>
                                    <input type="hidden" name="Item_Id" value='.$id.'>
                                        
                                </ul>
                                
                                
                                
                            </div>
                            <div class="featured__item__text">
                                <h6><a href="#">'.$name.'</a></h6>
                                <h5>Rs.'.$price.'</h5>
                                <div class="quantity buttons_added">
	                                    <input type="button" value="-" class="minus">
                                            <input type="number" step="1" min="1" max="" name="Quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode="">
                                        <input type="button" value="+" class="plus">
                                        </div>   
                        </div>
                        </div>
                    </form>
                    </div>';
                }

                if(isset($_POST['search']))
                {
                    include "dbcon.php";
                    $search = $_POST['search'];
                    $show_items = mysqli_query($con, "SELECT * FROM `items` where item_name like '%$search%'");
            while($row = mysqli_fetch_assoc($show_items))
            {
               
                $item_id = $row['item_id'];
                $item_name = $row['item_name'];
                $item_price = $row['item_price'];
                $item_desc = $row['item_desc'];
                $image = $row['image'];
                Display_card($item_id,$item_name,$item_price,$image);
            }

                }
                else
                {

                    require 'dbcon.php';
                    $sql="select * from items;";
                    $result= mysqli_query($con,$sql);
                    while($row= mysqli_fetch_assoc($result))
                    {
                        $id = $row['item_id'];
                        $name = $row['item_name'];
                        $price = $row['item_price'];
                        $img = $row['image'];
                        Display_card($id,$name,$price,$img);
                    }
                    
                }
                ?>
                
            </div>
            
        </div>
    </section>

    <!-- Featured Section End -->

    <!-- Banner End -->

    <!-- Latest Product Section Begin -->

    <!-- Latest Product Section End -->


    <!-- Footer Section Begin -->
    <?php require 'footer.php' ?>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>

</body>
</html>