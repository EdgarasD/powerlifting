<?php get_header(); ?>
<body>
<?php get_template_part ('templates/top-menu', 'page'); ?>
<section class="banner">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-bloc img_ban" src="<?php echo ASSETS_URL?>images/ne.jpg" alt="First slide" crop>

                    </div>

                    <div class="carousel-item">
                        <img class="d-block img_ban" src="<?php echo ASSETS_URL?>images/newban1.jpg" alt="Second slide">
                        <!-- <div class="carousel-caption d-md-block">
                            <h5>A Brand for Furniture</h5>
                            <p>a furniture and interiors agency</p>
                            <a href="about.html" class="btn1">
                                ABOUT
                            </a>
                            <a href="#" class="btn2">
                                GO SHOP
                            </a>
                        </div> -->
                    </div>

                    <div class="carousel-item">
                        <img class="d-block img_ban" src="<?php echo ASSETS_URL?>images/banner3.jpg" alt="Third slide">
                        <!-- <div class="carousel-caption d-md-block">
                            <h5>Get the Best Furniture</h5>
                            <p>a furniture and interiors agency</p>
                            <a href="about.html" class="btn1">
                                ABOUT
                            </a>
                            <a href="#" class="btn2">
                                GO SHOP
                            </a>
                        </div> -->
                    </div>

                </div>
                <a class="carousel-control-prev prev1 left" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="fa fa-angle-left" aria-hidden="true">

                    </span>

                </a>
                <a class="carousel-control-next next1 right" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="fa fa-angle-right" aria-hidden="true">

                    </span>

                </a>
            </div>
        </section>


<?php get_template_part ('templates/news', 'page'); ?>

<?php get_template_part ('templates/board', 'page'); ?>
<?php get_template_part ('templates/sponsors', 'page'); ?>
<?php get_footer(); ?>
