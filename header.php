<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no"/>
        <?php wp_head(); ?>
    </head>
    <body class="page bg-color_dark-gray"<?php body_class() ?>>
        <!-- Header -->
        <header class="header header_position_sticky bg-color_primary">
            <div class="header__body container">
                <a href="<?php echo home_url(); ?>" class="logo header__logo">
                    <?php $custom_logo__url = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' ); ?>
                    <img src="<?php echo $custom_logo__url[0]; ?>" alt="Логотип" class="logo__img">
                </a>
                <div class="header__menu">
                    <?php
                        wp_nav_menu([
                            'theme_location'  => 'header-menu',
                            'container'       => 'nav',
                            'container_class' => 'menu',
                            'menu_class'      => '',
                            'items_wrap'      => '<ul class="%2$s menu__list">%3$s</ul>'
                        ]);
                    ?>
                </div>
                <div class="burger-menu header__burger-menu">
                    <span class="burger-menu__line"></span>
                </div>
                <a href="tel: +1 786 760 07 77" class="contact-phone header__contact-phone g-tag-phone-btn">
                    <span class="contact-phone__icon">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.07538 8.49885L8.07541 8.49888L8.07963 8.49488L9.04745 7.57922C9.47015 7.1793 10.1251 7.15867 10.5722 7.5312C10.634 7.58274 10.6903 7.64064 10.74 7.70394L12.874 10.4199C12.9025 10.4562 12.9284 10.4946 12.9513 10.5348C13.2272 11.0176 13.0284 11.633 12.5222 11.8631L11.976 12.1114C11.6952 12.239 11.4485 12.431 11.2559 12.6718C10.7532 13.3001 10.6853 14.1717 11.0845 14.8704L11.3277 15.2959C11.4118 15.4431 11.5097 15.582 11.62 15.7108L12.1533 16.3329C12.5642 16.8123 13.0145 17.2564 13.4995 17.6606L14.0613 18.1287L14.0756 18.1406L14.0908 18.1515L15.5588 19.2001L15.5751 19.2117L15.5922 19.222C16.4081 19.7115 17.4646 19.4739 17.9924 18.6822L18.9419 17.2581C18.9569 17.2356 18.9741 17.2146 18.9932 17.1955C19.1391 17.0496 19.3705 17.0346 19.534 17.1604L21.6141 18.7605L22.6567 19.6727C22.9443 19.9244 23.1093 20.2879 23.1093 20.6701C23.1093 21.1457 22.8544 21.5848 22.4415 21.8208L21.3468 22.4463C20.8183 22.7483 20.2202 22.9072 19.6114 22.9072L19.4712 22.9072C18.9454 22.9072 18.4246 22.8042 17.9384 22.6039L16.3902 21.9665C15.6297 21.6533 14.902 21.2658 14.2177 20.8096L13.4293 20.284L13.1037 19.9946C12.1059 19.1076 11.1953 18.1272 10.3843 17.0667L9.81895 16.3274C9.23536 15.5643 8.74007 14.7375 8.34253 13.8629L8.09941 13.328C7.98783 13.0826 7.89553 12.8288 7.82336 12.5689L7.3762 10.9592C7.13 10.0728 7.39986 9.12324 8.07538 8.49885Z" stroke="white"/>
                            <circle cx="15" cy="15" r="14.5" stroke="white"/>
                        </svg>
                    </span>
                    <span class="contact-phone__number" onclick="gtag_report_conversion('+1 786 760 07 77')">
                        +1 786 760 07 77
                    </span>
                </a>
            </div>
        </header>