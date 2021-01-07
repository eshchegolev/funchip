<?php

/* Template Name: goods-list */


wp_reset_postdata();
$args = array(
    'showposts' => -1,
    'post_type' => 'goods',
);
$query = new WP_Query($args);


get_header();
?>

<div class="container">

    <div class="row">
        <h2 class="section-title text-center">Товары</h2>
        <?php
            while ($query->have_posts()) :$query->the_post();
        ?>

        <div class="col-md-3">
            <div class="card">
                <!-- Название -->
                <div class="card-body">
                    <h4 class="card-title"> <?php the_field('name',get_the_ID());?> </h4>
                </div>
                <!-- Изображение -->
                <img class="card-img-top" style="height:250px" src="<?php the_field('photo',get_the_ID());?>" alt="<?php the_field('name',get_the_ID());?>">
                <!-- Цена -->
                <div class="card-body">
                    <h6 class="card-title">Цена <?php the_field('price',get_the_ID());?> руб.</h6>
                    <h6 class="card-title">
                        <?php the_field('age',get_the_ID());?>;
                        <?php the_field('num_gamers',get_the_ID());?>;
                        <?php the_field('time_game',get_the_ID());?>
                    </h6>
                    <h6 class="card-text" style="text-align: left">  <?php the_field('snippet',get_the_ID());?> </h6>
                    <a href="/detail/?goods_id=<?php echo get_the_ID() ?> " class="card-link">Подробнее...</a>

                </div>
            </div>
        </div>
    <?php
        endwhile;
    ?>
    </div>
</div>

<?php
   get_footer();
?>
