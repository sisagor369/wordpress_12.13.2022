<?php get_header(); ?>
    <div class="serarch p-7">
        <div class="container">
            <div class="row">
            <div class="col-sm-8"></div>
            <div class="col-sm-4">
            <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" value="<?= get_search_query(); ?> " name="s">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
            </div>
            </div>
        </div>
    </div>
    <!-- Hero part start-->
    <section class="container hero">
        <div class="row hero_top text-center">
            <?php dynamic_sidebar('herotop'); ?>
        </div>
        <div class="row hero_bottom mt-5">
            <div class="col-sm-4 mt-5 text-center">
            <div class="card" style="width: 18rem;">
                    <?php 
                    dynamic_sidebar('hbimg2')
                    ?>
                    <!-- <img src="" class="card-img-top dashicons-desktop dadi" alt="..."> -->
                    <div class="card-body">
                        <?php dynamic_sidebar('hbbody2') ?>
                    </div>
                    </div>
            </div>
            <div class="col-sm-4 mt-5 text-center">
            <div class="card" style="width: 18rem;">
                    <?php 
                    dynamic_sidebar('hbimg3')
                    ?>
                    <!-- <img src="" class="card-img-top dashicons-desktop dadi" alt="..."> -->
                    <div class="card-body">
                        <?php dynamic_sidebar('hbbody3') ?>
                    </div>
                    </div>
            </div>
            <div class="col-sm-4 mt-5 text-center">
            <div class="card" style="width: 18rem;">
                    <?php 
                    dynamic_sidebar('hbimg')
                    ?>
                    <!-- <img src="" class="card-img-top dashicons-desktop dadi" alt="..."> -->
                    <div class="card-body">
                        <?php dynamic_sidebar('hbbody') ?>
                    </div>
                    </div>
            </div>
        </div>
    </section>
    <!-- Hero part end-->
    <!-- Photo part start  -->
    <section class="container photo mt-5 text-center">
        <div class="row photo_top">
            <div class="col-sm-5">
                -------------------------------------------------------------->>>
            </div>
            <div class="col-sm-2"><h4 style='color:green;'>Recent Photos</h4>
            <p>Some latest project pictures</p>
            <br><br>
        </div>
            <div class="col-sm-5">
               <<<--------------------------------------------------------------
               
            </div>
        </div>
        <div class="row photo_bottom">
            <div class="col-sm-3">
                    <div class="card" style="width: 16rem;">
                        <?php dynamic_sidebar('pimg-1');?>
                        <div class="card-body">
                            <?php dynamic_sidebar('pbody-1');?>
                        </div>
                    </div>
            </div>
            <div class="col-sm-3">
            <div class="card" style="width: 16rem;">
                        <?php dynamic_sidebar('pimg-2');?>
                        <div class="card-body">
                            <?php dynamic_sidebar('pbody-2');?>
                        </div>
                    </div>
            </div>
            <div class="col-sm-3">
            <div class="card" style="width: 16rem;">
                        <?php dynamic_sidebar('pimg-3');?>
                        <div class="card-body">
                            <?php dynamic_sidebar('pbody-3');?>
                        </div>
                    </div>
            </div>
            <div class="col-sm-3">
            <div class="card" style="width: 16rem;">
                        <?php dynamic_sidebar('pimg-4');?>
                        <div class="card-body">
                            <?php dynamic_sidebar('pbody-4');?>
                        </div>
                    </div>
            </div>
        </div>
    </section>
    <!-- Photo part end -->
    <!-- News part start  -->
    <section class="container news  mt-5 mb-5">
        <div class="row news_top">
        <div class="row photo_top text-center">
            <div class="col-sm-4">
                ----------------------------------------------->>>
            </div>
            <div class="col-sm-3"><h4 style='color:green;'>NEWS & EVENTS</h4>
            <p>CLICK HERE TO VIEW ALL</p>
            <br><br>
        </div>
            <div class="col-sm-5">
               <<<------------------------------------------------
               
            </div>
        </div>
        </div>
        <div class="row news_bottom">
            <!--nb start  -->
        <div id="carouselExampleControls" class="carousel slide bg-danger p-10" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <?php 
            $x=0;
            while(have_posts()){ the_post();
            $x++;
             ?>
            <div class="carousel-item <?= ($x==1)? 'active' : '' ?>">
                <?php the_title(); ?>
            <!-- <img src="..." class="d-block w-100" alt="..."> -->
            </div>
            <?php } ?>
        </div>
        </div>    
        <!--nb end  -->
        </div>
    </section>
    <!-- News part end -->
   <!-- <section class="footer">
    <div class="container">
        <div class="row bg-dark">
        <div class="col-sm-6 contact_us text-center">
                <?php dynamic_sidebar('contact_us'); ?>
        </div>
        <div class="col-sm-6 importantlinks text-center">
        <?php dynamic_sidebar('imprnt_links'); ?>
        </div>
        </div>
    </div>
   </section> -->
   
<?php get_footer(); ?>
<?php wp_footer(); ?>
</body>
</html>