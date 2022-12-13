<?php
/* Template Name: about */  
 get_header();
 
  ?>
  <!-- search  -->
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

