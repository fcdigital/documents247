<?php wp_footer(); ?>
        <script>
            var title = $(document).attr('title');
            $('input[name="text-212"]').val(' | ' + title);
            console.log(title);
        </script>
        <!-- Footer -->
        <footer class="footer page__container" id="contacts">
            <!-- Footer Top -->
            <div class="footer__holder bg-color_gray">
                <div class="footer__top-part container">
                    <h2 class="footer__title title title_big title_color_dark">
                        Контактная информация
                    </h2>
                    <div class="footer__info">
                        <div class="footer__photo">
                            <img src="<?php echo STANDART_DIR; ?>img/footer/phone-footer.png" alt="Изображение телефона" class="footer__img">
                        </div>
                        <address class="footer__address">
                            <div class="footer__contacts">
                                <h4 class="footer__name-office title-second">
                                    Офис в США
                                </h4>
                                <div class="footer__text text text_color_dark">
                                    2999 NE 191st ST, STE 907, Aventura FL, 33180
                                </div>
                                <a href="tel:+1 786 760 07 77" class="footer__link g-tag-phone-btn">
                                    <span class="footer__number text text_color_primary" onclick="gtag_report_conversion('+1 786 760 07 77')">+1 786 760 07 77</span> <span class="footer__text text text_color_dark">(Viber / WhatsApp / Telegram)</span>
                                </a>
                                <div class="footer__text text text_color_dark">
                                    Skype: documentsfcg
                                </div>
                                <a href="email:info@document247.ru" class="footer__link text text_color_primary">
                                    info@document247.ru
                                </a>
                            </div>
                            <div class="footer__contacts">
                                <h4 class="footer__name-office title-second">
                                    Офис в России
                                </h4>
                                <div class="footer__text text text_color_dark">
                                    Москва, улица Бауманская, дом 7, оф. 213
                                </div>
                                <a href="tel:+7 901 725 49 24" class="footer__link g-tag-phone-btn">
                                    <span class="footer__number text text_color_primary" onclick="gtag_report_conversion('+7 901 725 49 24')">+7 901 725 49 24</span> <span class="footer__text text text_color_dark">(Viber / WhatsApp / Telegram)</span>
                                </a>
                                <a href="tel:+7 (499) 450 60 50" class="footer__link">
                                    <span class="footer__number text text_color_primary" onclick="gtag_report_conversion('+7 (499) 450 60 50')">+7 (499) 450 60 50</span>
                                </a>
                                <div class="footer__text text text_color_dark">
                                    Skype: documentsfcg
                                </div>
                                <a href="email:info@document247.ru" class="footer__link text text_color_primary">
                                    info@document247.ru
                                </a>
                            </div>
                        </address>
                    </div>
                </div>
            </div>
            <!-- Footer Bottom -->
            <div class="footer__holder bg-color_primary">
                <div class="footer__bottom-part container">
                    <div class="footer__aside">
                        <h3 class="footer__heading title title_big title_color_white">
                            Читайте нас в соцсетях
                        </h3>
                        <div class="footer__socials">
                            <a href="https://t.me/document24_7" class="footer__icon" target="_blank">
                                <img src="<?php echo STANDART_DIR; ?>img/footer/icon-03.png" alt="" class="footer__pic" >
                            </a>
                            <a href="https://vk.com/documents247" class="footer__icon" target="_blank">
                                <img src="<?php echo STANDART_DIR; ?>img/footer/icon-04.png" alt="" class="footer__pic" >
                            </a>
                            <a href="viber://chat?number=17867600777" class="footer__icon" target="_blank">
                                <img src="<?php echo STANDART_DIR; ?>img/footer/vb.png" alt="" class="footer__pic" >
                            </a>
                            <a href="https://wa.me/17867600777" class="footer__icon" target="_blank">
                                <img src="<?php echo STANDART_DIR; ?>img/footer/wa.png" alt="" class="footer__pic" >
                            </a>
                            <a href="https://www.facebook.com/Documents24" class="footer__icon" target="_blank">
                                <img src="<?php echo STANDART_DIR; ?>img/footer/icon-02.png" alt="" class="footer__pic" >
                            </a>
                        </div>
                        <?php
                            wp_nav_menu([
                                'theme_location'  => 'footer-menu',
                                'container'       => 'nav',
                                'container_class' => 'menu footer__menu',
                                'menu_class'      => '',
                                'items_wrap'      => '<ul class="%2$s menu__list">%3$s</ul>'
                            ]);
                        ?>
                        <a href="<?php echo home_url(); ?>" class="logo footer__logo">
                            <?php $custom_logo__url = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' ); ?>
                            <img src="<?php echo $custom_logo__url[0]; ?>" alt="Логотип" class="logo__img">
                        </a>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>