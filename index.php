<?php get_header(); ?>
    <!-- Main -->
    <main class="main page__container">
        <!-- Articles -->
        <section class="articles bg-color_gray">
            <div class="articles__body container">
                <h1 class="articles__title title title_big title_color_dark">
                    Актуальные статьи
                </h1>
                <div class="articles__grid">
                <?php 
					$posts = get_posts([
						'numberposts' => 0,
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
                    <?php the_posts_pagination(
						$args = array(
						'show_all'     => false, // показаны все страницы участвующие в пагинации
						'end_size'     => 1,     // количество страниц на концах
						'mid_size'     => 1,     // количество страниц вокруг текущей
						'prev_next'    => true,  // выводить ли боковые ссылки "предыдущая/следующая страница".
						'prev_text'    => __('«'),
						'next_text'    => __('»'),
						'add_args'     => false, // Массив аргументов (переменных запроса), которые нужно добавить к ссылкам.
						'add_fragment' => '',     // Текст который добавиться ко всем ссылкам.
						'screen_reader_text' => __( 'Posts navigation' ),
					)); ?>
                </div>
            </div>
        </section>
    </main>
<?php get_footer(); ?>