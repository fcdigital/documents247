
<?php get_header(); ?>
    <!-- Main -->
    <main class="main page__container">
        <!-- Post -->
        <?php the_post(); ?>
        <section class="post bg-color_white">
            <article class="post__article container bg-color_white">
                <header class="post__header">
                    <figure class="post__figure">
                        <img src="<?php if ( has_post_thumbnail()) { $full_image_url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full'); echo ''.$full_image_url[0] . '';} ?>" alt="" class="post__img">
                    </figure>
                    <div class="post__heading">
                        <?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb( '<div id="breadcrumbs" class="breadcrumbs text text_color_white-gray">','</div>' );}?>
                        <h1 class="post__title title title_big title_color_white">
                            <?php the_title(); ?>
                        </h1>
                        <div class="post__meta text text_color_white-gray">
                            <span class="post__date">
                                <?php the_date('j F Y', $before, ' в '); the_time('G:i'); ?>
                            </span>
                            <span class="post__category">
                                Рубрика: <?php the_category(', ', 'single'); ?>
                            </span>
                            <span class="post__author">
                                Автор: <?php the_author(); ?>
                            </span>
                        </div>
                    </div>
                </header>
                <div class="post__body">
                    <div class="post__content">
                        <?php the_content(); ?>
                    </div>
                </div>
            </article>
        </section>
        <!-- Articles -->
        <section class="articles bg-color_gray">
            <div class="articles__body container">
                <h2 class="articles__title title title_big title_color_dark">
                    Вам также может быть интересно
                </h2>
                <div class="articles__grid">
                <?php
					$post_objects = get_field('selection-post');
					if( $post_objects ): ?>
					<?php foreach( $post_objects as $post): ?>
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
                                    <?php the_excerpt(); ?>
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
                <?php endif;?>
				<?php wp_reset_postdata(); ?>
                </div>
            </div>
        </section>
    </main>
<?php get_footer(); ?>  