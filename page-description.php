<?php /* Template Name: Страница Услуги */?>
<?php get_header(); ?>
    <!-- Main -->
    <main class="main page__container">
        <?php if (have_posts()) : while (have_posts()) : the_post() ?>
        <!-- Description -->
        <section class="description bg-color_white">
            <div class="description__body container">
                <article class="description__article">
                    <aside class="description__aside">
                        <figure class="description__figure">
                            <img src="<?php if ( has_post_thumbnail()) { $full_image_url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full'); echo ''.$full_image_url[0] . '';} ?>" alt="" class="description__img">
                        </figure>
                    </aside>
                    <div class="description__content">
                        <header class="description__header">
                            <h1 class="description__title title title_medium title_color_primary">
                                <?php the_title(); ?>
                            </h1>
                        </header>
                        <div class="description__text text text_color_dark">
                            <?php the_content(); ?>
                            <?php endwhile; ?>
                            <?php else : ?>
                                <p>Упс... Что то пошло не так!</p>
                                <p>Обратитесь к программисту.</p>
                            <?php endif; ?>
                            <?php wp_reset_query(); ?>
                        </div>
                        <footer class="description__footer">
                            <div class="description__actions">
                                <a href="javascript:;" class="button button_primary is-modal">
                                    Оставить заявку
                                </a>
                            </div>
                        </footer>
                    </div>
                </article>
            </div>
        </section>
        <!-- Description -->
        <section class="description bg-color_white <?php if( get_field('toggle-hide_block') == true ) { echo '';} else { echo 'hide';} ?>">
            <div class="description__body container">
                <article class="description__article">
                    <div class="description__content description__content_full-wide">
                        <div class="description__text text text_color_dark">
                            <?php the_field('text-block'); ?>
                        </div>
                        <footer class="description__footer">
                            <div class="description__actions">
                                <a href="#" class="button button_primary is-modal">
                                    Оставить заявку
                                </a>
                            </div>
                        </footer>
                    </div>
                </article>
            </div>
        </section>
        <!-- Services -->
        <section class="services bg-color_white">
            <div class="services__body container">
                <h2 class="services__title title title_big title_color_dark">
                    Наши услуги:
                </h2>
                <div class="services__grid">
                <?php

                    $services_description = get_field('services-description');

                    if( $services_description ): ?>

                    <?php foreach( $services_description as $post): ?>
                        <?php setup_postdata($post); ?>
                            <div class="services__column">
                                <article class="card-services">
                                    <header class="card-services__header">
                                        <h3 class="card-services__title title title_medium title_color_primary">
                                            <?php the_title(); ?>
                                        </h3>
                                    </header>
                                    <aside class="card-services__aside">
                                        <figure class="card-services__figure">
                                            <img src="<?php if ( has_post_thumbnail()) { $full_image_url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full'); echo ''.$full_image_url[0] . '';} ?>" alt="" class="card-services__img">
                                        </figure>
                                        <a href="<?php the_permalink(); ?>" class="card-services__more text text_color_white">
                                            Узнать подробнее
                                        </a>
                                    </aside>
                                    <footer class="card-services__footer">
                                        <div class="card-services__actions">
                                            <a href="javascript:;" class="button button_primary is-modal">
                                                Оставить заявку
                                            </a>
                                        </div>
                                    </footer>
                                </article>
                            </div>
                        <?php endforeach; ?>
                    <?php endif;?>
                <?php wp_reset_postdata(); ?>
                </div>
            </div>
        </section>
        <!-- Articles -->
        <section class="articles bg-color_gray">
            <div class="articles__body container">
                <h2 class="articles__title title title_big title_color_dark">
                    Актуальные статьи
                </h2>
                <div class="articles__grid">
                <?php 
					$posts = get_posts([
						'numberposts' => 3,
						'category'    => 0,
						'orderby'     => 'date',
						'order'       => 'DESC',
						'include'     => array(),
						'exclude'     => array(),
						'meta_key'    => '',
						'meta_value'  =>'',
						'post_type'   => 'post',
						'nopaging'    => false,
						'paged' => get_query_var('paged'),
						'suppress_filters' => true // подавление работы фильтров изменения SQL запроса
					]); ?>
					<?php foreach( $posts as $post ) : ?>
					    <?php setup_postdata($post); ?>
                        <div class="articles__column">
                            <article class="post-card">
                                <aside class="post-card__aside">
                                    <a href="<?php the_permalink(); ?>" class="post-card__link">
                                        <figure class="post-card__figure">
                                            <?php
                                                $default_attr = [
                                                    'class'	=> "post-card__img"
                                                ];
                                                
                                                echo get_the_post_thumbnail( $post->ID, 'thumbnail', $default_attr ) ?>
                                        </figure>
                                    </a>
                                </aside>
                                <header class="post-card__header">
                                    <a href="<?php the_permalink(); ?>" class="post-card__link">
                                        <h3 class="post-card__title title-second">
                                            <?php the_title(); ?>
                                        </h3>
                                    </a>
                                </header>
                                <div class="post-card__body">
                                    <p class="post-card__excerpt text text_color_dark">
                                        <?php the_excerpt( ); ?>
                                    </p>
                                </div>
                                <footer class="post-card__footer">
                                    <a href="<?php the_permalink(); ?>" class="post-card__more text text_color_primary">
                                        Читать подробнее...
                                    </a>
                                    <div class="post-card__date">
                                        <?php echo get_the_date(); ?>
                                    </div>
                                </footer>
                            </article>
                        </div>
                    <?php endforeach; ?>
					<?php wp_reset_postdata();?>
                </div>
                <div class="articles__actions">
                    <a href="<?php echo get_page_link( 19 ); ?>" class="button button_primary">
                        Читать больше
                    </a>
                </div>
            </div>
        </section>
    </main>
<?php get_footer(); ?>