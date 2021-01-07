<?php

/* Template Name: goods-detail */


wp_reset_postdata();
$id = $_GET['goods_id']; // 552

//var_dump($id); die();

$args = array(
    'p'         => $id, // ID of a page, post, or custom type
    'post_type' => 'goods'
);
$the_query = new WP_Query($args);



get_header();
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php
                if ( $the_query->have_posts() ) :
                while ( $the_query->have_posts() ) : $the_query->the_post();
            ?>

            <div class="alert alert-success" role="alert" style="text-align: center">
                <h1 class="alert-heading"> <?php echo the_field('name',get_the_ID()); ?> </h1>
                <hr>  <!--Рисуем горизонтальную линию-->
                <img class="" style="width: 200px;height: auto" src="<?php the_field('photo',get_the_ID());?>" alt="<?php the_field('name',get_the_ID());?>">
                <hr>
                <p class="alert-heading">Цена <?php echo the_field('price',get_the_ID()); ?> руб.</p>
                <p class="card-title">Рекомендуемый возраст <?php the_field('age',get_the_ID());?></p>
                <p class="card-title">Количество игроков <?php the_field('num_gamers',get_the_ID());?></p>
                <p class="card-title">Продолжительность игры <?php the_field('time_game',get_the_ID());?></p>
                <hr>
                <h6 class="alert-heading" style="text-align: left"><?php echo the_field('description',get_the_ID()); ?> </h6>

<!--Не получается кнопку установить-->
<!--                <a href="<?php echo get_post_permalink() ?>" class="btn service-read" style="position: absolute; bottom: 30px;left:35px"><?php esc_html_e( 'обратно к списку всех товаров', 'ace-corporate' ); ?></a>-->
            </div>

            <?php
                endwhile;
                endif;
            ?>

        </div>
    </div>
</div>

<?php
   get_footer();
?>
