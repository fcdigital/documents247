<?php /* Template Name: Домашняя страница */?>
<?php get_header(); ?>
    <!-- Main -->
    <main class="main page__container">
        <!-- General-screen -->
        <section class="general-screen bg-color_primary">
            <div class="general-screen__body container">
                <div class="general-screen__text">
                    <h1 class="general-screen__heading">
                        <span class="general-screen__title title title_big title_color_white">Документы 24/7 -</span>
                        <span class="general-screen__title title title_weight_light title_big title_color_white">Документы без границ!</span>
                    </h1>
                    <p class="general-screen__descr text text_color_white">
                        Подготовка и сбор документации &mdash; сложное и ответственное мероприятие. Наши специалисты хорошо разбираются в процедуре оформления документов США и РФ. Компания «Документы 24/7» поможет с оформлением и легализацией Ваших документов и доставит их в любую точку мира.
                    </p>
                    <div class="general-screen__btn">
                        <a href="javascript:;" class="button button_white is-modal">Оставить заявку</a>
                    </div>
                    
                </div>
            </div>
            <div class="general-screen__image"></div>
        </section>
        <!-- Services -->
        <section class="services bg-color_white" id="services">
            <div class="services__body container">
                <h2 class="services__title title title_big title_color_dark">
                    Наши услуги:
                </h2>
                <div class="services__grid">
                <?php

                    $services_page = get_field('services-page');

                    if( $services_page ): ?>

                    <?php foreach( $services_page as $post): ?>
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
        <!-- Advantage -->
        <section class="advantage bg-color_gray">
            <div class="advantage__body container">
                <h2 class="advantage__title title title_big title_color_dark">
                    Почему с нами удобно работать?
                </h2>
                <div class="advantage__grid">
                    <div class="advantage__row">
                        <div class="item-advantage">
                            <div class="item-advantage__icon">
                                <svg class="item-advantage__img" xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="24.9999mm" height="25mm" version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" viewBox="0 0 2500 2500" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <path style="stroke:#FD6B50;stroke-width:52.9198;fill:none" class="fil0 str0" d="M2182 1250c0,513 -416,932 -932,932 -516,0 -932,-419 -932,-932 0,-513 416,-932 932,-932 516,0 932,419 932,932z"/>
                                    <polyline style="stroke:#FD6B50;stroke-width:52.9198;fill:none" class="fil0 str0" points="525,648 577,701 557,800 622,893 706,985 764,1118 726,1177 706,1257 706,1356 745,1442 706,1535 667,1660 648,1766 648,1865 706,1938 726,1839 764,1766 881,1700 998,1634 1075,1574 1133,1495 1133,1422 1056,1356 998,1290 998,1210 939,1098 829,1078 764,1018 764,939 764,893 706,893 667,840 706,741 810,767 881,840 939,767 998,767 1056,701 1205,701 1256,648 1308,648 1308,582 1256,535 1166,608 1108,562 1075,482 1108,449 1224,449 1224,363 1282,363 1334,423 1354,535 1418,535 1418,482 1418,396 1515,423 1580,482 1515,562 1515,608 1625,608 1723,608 1813,608 1910,701 1949,800 1833,840 1774,893 1723,913 1651,893 1625,939 1651,985 1742,985 1858,939 1923,972 1969,1038 1923,1078 1949,1118 2046,1118 2104,1177 2104,1237 2085,1290 2020,1290 1994,1237 1923,1237 1858,1151 1833,1098 1742,1098 1625,1098 1541,1177 1477,1257 1477,1356 1515,1422 1651,1442 1703,1535 1703,1634 1703,1700 1625,1799 1625,1918 1625,1991 1651,2077 1703,2077 "/>
                                    <polygon style="stroke:#FD6B50;stroke-width:52.9198;fill:none" class="fil0 str0" points="959,1045 881,959 900,932 991,959 1023,1018 "/>
                                    <polyline style="stroke:#FD6B50;stroke-width:52.9198;fill:none" class="fil0 str0" points="758,2051 952,2051 1043,2117 1146,2117 1256,2077 1334,2117 1405,2117 1496,2156 "/>
                                    <rect style="fill:none" class="fil0" width="2500" height="2500"/>
                                </svg>
                            </div>
                            <div class="item-advantage__text">
                                <h3 class="item-advantage__title title-second">
                                    Два главных офиса в США и России
                                </h3>
                                <div class="item-advantage__descr text text_color_dark">
                                    Взаимодействие офисов в Майами и в Москве обеспечивает удобные и короткие сроки получения документов. Вы всегда можете посетить наш офис по указанным адресам.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="advantage__row">
                        <div class="item-advantage">
                            <div class="item-advantage__icon">
                                <svg class="item-advantage__img" xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="24.9999mm" height="25mm" version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" viewBox="0 0 2500 2500" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <path style="stroke:#FD6B50;stroke-width:52.9198;fill:none" class="fil0 str0" d="M1418 747l-47 -25c-26,-14 -55,-23 -84,-27l0 0c-39,-5 -78,0 -114,13l-63 24 -10 5c-172,92 -376,104 -557,33l-219 -87 -198 538 268 129 168 79 90 42m766 -724l32 31c25,23 46,50 63,79l37 62c6,10 10,22 10,35l1 5c1,20 -7,39 -22,53l0 0c-14,12 -31,18 -49,16l-23 -1c-16,-1 -31,-5 -45,-12l-75 -36 -45 -28c-15,-10 -31,-15 -48,-16l0 0c-41,-1 -78,22 -95,59l-10 25c-5,12 -13,24 -21,34l-19 23c-31,36 -69,65 -112,86l-10 5c-37,18 -72,42 -102,71l-52 50 -137 134 -44 49m766 -724l0 0c30,-8 62,-8 92,0l72 19 0 0c90,33 191,23 273,-28l204 -125 173 261 142 215 -264 192 -247 163m-1211 27l-10 28c-6,19 -4,38 5,55l0 0c7,12 18,22 31,28l8 3c13,6 27,8 42,7l34 -1m547 202l-106 72c-19,13 -40,20 -62,21l-15 1c-14,1 -27,-2 -39,-9l0 0c-22,-12 -36,-34 -37,-59l-1 -16m260 -10l-4 -75 1 -47c0,-15 3,-30 9,-44l3 -7c3,-6 7,-13 12,-18l0 0c12,-14 29,-22 47,-23l27 -1m-95 215l13 37c3,9 8,16 14,22l0 0c10,8 21,13 34,13l18 1c15,0 31,-3 45,-10l1 0c15,-7 28,-18 38,-31l20 -24m-730 -210l262 -234m-262 234l0 11c2,26 12,50 28,71l0 0c10,12 22,22 35,29l1 0c21,12 44,18 68,16l5 0m0 0l120 -119 133 -124m-253 243l2 19c1,21 9,41 22,56l2 2c8,9 18,16 29,21l0 0c20,9 42,9 62,0l33 -13m0 0l115 -100 84 -89m156 -36l18 -38c5,-10 12,-19 20,-26l0 0c12,-9 27,-15 42,-16l7 0c8,0 15,0 23,2l26 5m-136 73l28 8c7,2 13,6 19,10l0 0c10,7 18,16 23,28l3 5 0 0c8,25 12,50 14,75l0 4 2 32 -1 61m48 -296l1 -25c1,-11 5,-23 12,-32l0 0c4,-6 10,-12 17,-16l4 -3c11,-7 24,-12 37,-12l0 0c14,-1 29,2 41,9l19 11 25 17m-156 51l50 69c7,11 14,22 20,33l2 5c7,12 12,25 15,38l0 0c4,15 7,29 8,44l1 29m60 -269l20 -38c3,-7 8,-13 13,-18l4 -3c9,-9 22,-14 35,-15l0 0c11,-1 22,2 31,8l8 4c4,3 9,6 13,9l23 21 20 22m-167 10l20 26c10,12 19,26 26,40l0 0c10,19 18,39 23,60l4 19m94 -155l10 54c2,10 3,21 1,32l-1 6c-2,19 -10,36 -24,50l-4 3c-7,7 -15,12 -25,15l0 0c-14,5 -30,4 -43,-2l-8 -3m0 0l-1 17c0,20 -6,39 -15,56l-1 2c-4,7 -9,13 -14,19l-3 3c-10,12 -23,20 -38,25l0 0c-9,2 -19,4 -29,3l-32 -1m0 0l-14 22c-8,11 -17,21 -27,29l-1 1c-10,8 -21,14 -33,19l-5 2c-20,8 -43,10 -64,5l0 0"/>
                                    <rect style="fill:none" class="fil0" width="2500" height="2500"/>
                                </svg>
                            </div>
                            <div class="item-advantage__text">
                                <h3 class="item-advantage__title title-second">
                                    Надежный и серьезный партнер
                                </h3>
                                <div class="item-advantage__descr text text_color_dark">
                                    Наша компания высокопрофессиональных сотрудников, являющихся ведущими поставщиками решений по обеспечению персонального запроса клиентов.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="advantage__row">
                        <div class="item-advantage">
                            <div class="item-advantage__icon">
                                <svg class="item-advantage__img" xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="24.9999mm" height="25mm" version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" viewBox="0 0 2500 2500" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <path style="stroke:#FD6B50;stroke-width:52.9198;fill:none" class="fil0 str0" d="M1474 400l15 10c41,28 78,61 109,100l0 0c29,35 53,75 70,117l3 7c18,42 30,86 36,131l5 36c5,31 7,62 7,94l0 60m-245 -555l-113 -16c-62,-10 -125,-10 -187,-1l-122 17m422 0l0 -50c0,-32 -9,-63 -25,-91l0 0c-18,-29 -43,-52 -73,-67l-12 -6c-31,-15 -64,-23 -98,-23l-28 0c-32,0 -63,8 -91,23l-4 3c-31,17 -57,43 -72,75l0 0c-13,24 -19,51 -19,78l0 58m667 555l14 33c11,24 16,50 16,76l0 4c0,30 -8,60 -23,87l0 0c-18,32 -47,58 -81,73l-33 16m107 -289l-125 0 -133 -13 -96 -17c-34,-6 -67,-14 -99,-25l-19 -7c-38,-13 -74,-31 -108,-53l-76 -50c-7,-5 -13,-11 -18,-18l0 0c-27,-43 -91,-36 -108,12l-17 47c-4,11 -10,21 -18,29l-76 82m786 302l-190 262m190 -262l17 -64c8,-32 15,-64 18,-97l7 -59 3 -69m-235 551l0 0c-101,28 -209,30 -311,4l-16 -4m327 0l0 0c-44,97 55,197 151,153l112 -50m-590 -103l-219 -262m219 262l0 0c36,106 -71,205 -174,160l-127 -57m82 -365l-39 -19c-28,-13 -53,-33 -72,-58l-10 -14c-20,-25 -30,-56 -30,-87l0 0c0,-28 8,-54 22,-77l21 -34m108 289l61 31c54,28 110,48 169,60l28 6m-258 -97l-31 -112 -9 -51c-6,-38 -10,-76 -10,-115l0 -24m-58 13l0 -51c0,-38 3,-75 9,-112l8 -45c6,-33 15,-66 27,-98l8 -20c17,-43 41,-83 72,-118l0 0c35,-39 77,-71 124,-94l36 -17m-284 555l58 -13m308 399l0 0c21,33 58,55 98,57l5 0 59 -2c17,-1 34,-9 45,-22l0 0c11,-12 17,-27 17,-43l0 -12c0,-15 -6,-30 -16,-42l0 0c-12,-13 -29,-21 -47,-21l-79 0c-17,0 -34,6 -47,16l0 0c-17,12 -29,30 -32,51l-3 18zm-340 268l-45 21c-67,32 -124,79 -167,139l0 0c-17,23 -31,47 -43,72l-38 83 -39 120 -21 99 48 28c45,27 94,49 144,64l178 54 220 38c37,7 74,10 112,10l150 0c32,0 63,-3 94,-7l236 -34c32,-4 65,-11 96,-21l148 -44c42,-13 82,-29 121,-50l71 -38 -8 -37c-9,-41 -22,-81 -38,-120l-27 -62 -31 -66c-16,-37 -38,-71 -63,-101l0 0c-43,-52 -96,-94 -157,-123l-50 -25m-891 0l18 25c31,44 67,83 107,118l60 51 163 121 13 7c58,32 130,30 185,-7l0 0 168 -121 45 -37c53,-44 98,-97 132,-157l0 0"/>
                                    <rect style="fill:none" class="fil0" width="2500" height="2500"/>
                                </svg>
                            </div>
                            <div class="item-advantage__text">
                                <h3 class="item-advantage__title title-second">
                                    Круглосуточная связь с персональным менеджером
                                </h3>
                                <div class="item-advantage__descr text text_color_dark">
                                    Мы на связи 24 на 7 в любом комфортном для Вас формате.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="advantage__row">
                        <div class="item-advantage">
                            <div class="item-advantage__icon">
                                <svg class="item-advantage__img" xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="24.9999mm" height="25mm" version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" viewBox="0 0 2500 2500" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <path style="stroke:#FD6B50;stroke-width:52.9198;fill:none;" class="fil0 str0" d="M2179 1971l0 0c19,-55 25,-114 19,-173l-7 -69 -12 -158 12 -174 33 -164 39 -161c12,-50 18,-102 18,-153l0 -46c0,-64 -11,-127 -32,-187l0 -3c-17,-46 -39,-91 -66,-131l-11 -16c-29,-42 -65,-79 -106,-109l0 0c-55,-41 -119,-68 -187,-80l-17 -3c-29,-5 -58,-7 -88,-7l-119 0 -175 17 -169 34 -185 17c-34,4 -69,4 -103,2l-134 -8 -120 -23c-41,-7 -81,-11 -122,-11l-107 0c-31,0 -61,3 -92,8l-43 7c-31,5 -60,15 -88,29l0 0c-36,19 -67,46 -92,78l-8 11c-22,28 -39,59 -52,92l-13 36c-13,33 -20,67 -22,101l0 6c-2,29 1,58 8,86l0 0c8,35 22,69 42,99l49 73m1950 980l0 28c0,23 5,45 13,66l13 31c2,3 4,6 7,9l0 0c17,15 7,44 -16,46l-14 1c-2,0 -4,0 -5,0l-39 -3c-21,-2 -42,-7 -62,-14l0 0c-29,-11 -55,-28 -76,-50l-7 -6m186 -108l-29 13c-25,10 -52,17 -80,19l-8 1c-12,1 -24,1 -36,-1l0 0c-22,-2 -43,-8 -62,-18l-27 -14m56 108l-22 -51 -34 -57m56 108l-42 7c-17,2 -34,3 -51,0l-10 -1c-28,-4 -54,-17 -75,-37l0 0c-9,-10 -17,-21 -24,-32l-23 -45m169 0l-40 -84 -31 -80c-13,-33 -23,-67 -31,-102l-22 -106 -17 -152 -6 -163m147 687l0 0c-45,12 -91,13 -137,6l-32 -6m22 -687l6 -147m-6 147l-101 -6 -175 -17 -152 -22 -113 -28 -124 -40m671 -34l51 -225 -26 113m-25 112l25 -112m0 0l-32 -41c-14,-18 -30,-35 -47,-49l0 0c-35,-30 -76,-53 -119,-68l-19 -6m-479 310l-10 -38c-5,-16 -7,-32 -7,-48l0 -19c0,-16 4,-32 11,-47l0 0c4,-7 9,-15 15,-21l25 -30m-34 203l6 113 6 141 0 203 -6 163 -2 11c-10,56 -30,110 -60,158l0 0m0 0l-5 9c-11,20 -15,43 -11,65l0 0c3,15 9,28 18,40l23 29c2,3 4,5 7,6l17 14c13,10 10,31 -5,38l0 0c-3,1 -6,2 -9,2l-39 0c-20,0 -40,-3 -59,-8l-18 -6c-32,-9 -61,-26 -85,-50l-2 -3c-16,-15 -28,-33 -37,-53l-5 -11c-3,-6 -5,-13 -6,-21l0 0c-3,-15 -9,-29 -19,-41l-36 -44m271 34l-51 6c-30,4 -60,3 -90,-1l0 0c-25,-3 -49,-9 -73,-18l-57 -21m0 0l0 0c-15,-29 -22,-62 -22,-95l0 -74 0 -158 -6 -146 -5 -56m33 529l0 0c-78,0 -155,-15 -228,-44l-3 -1m198 -484l-17 -124 -23 -113m40 237l-302 -17 -302 -17m564 -203l-541 -23m541 23l0 -40m0 0l56 -62 34 -40c15,-18 27,-38 37,-60l0 0c9,-23 15,-47 17,-72l1 -8c1,-15 1,-30 0,-45l-1 -18c-2,-25 -8,-51 -18,-74l-1 -2c-8,-20 -19,-39 -33,-55l-7 -9c-15,-19 -34,-34 -55,-44l-8 -4c-18,-9 -38,-14 -59,-14l0 0c-16,0 -33,3 -48,9l-16 7c-12,4 -23,8 -36,10l0 0c-25,5 -51,6 -76,1l-3 -1c-14,-2 -27,-6 -40,-11l-11 -5c-17,-6 -35,-10 -54,-10l0 0c-15,0 -30,3 -45,7l-1 1c-18,6 -35,15 -50,28l-5 5c-8,6 -15,14 -22,22l-5 5c-9,11 -17,23 -24,35l-9 15c-9,15 -17,32 -23,49l0 0c-5,16 -9,34 -11,51l0 0c-2,16 -2,33 0,49l1 12c1,21 5,41 10,61l9 38m496 129l-73 20c-38,9 -76,14 -115,12l0 0c-25,-1 -50,-5 -74,-10l-29 -7c-24,-6 -47,-14 -68,-25l0 0c-24,-12 -45,-26 -65,-43l-10 -9 -62 -67m1048 462l524 39 -236 -17 13 81c6,40 16,80 30,118l16 43c13,38 30,75 50,109l32 55 62 90m441 -665l161 12m-189 219l162 12m-1477 499l-87 6c-21,1 -42,-1 -62,-6l-14 -4c-26,-7 -50,-21 -68,-41l-10 -11c-12,-13 -20,-30 -22,-48l-3 -21c-3,-19 -15,-35 -33,-42l0 0m-50 -355l0 213c0,34 8,68 25,97l0 0 25 45"/>
                                    <path style="stroke:#FD6B50;stroke-width:52.9198;fill:none;" class="fil0 str0" d="M545 1177l0 -67 0 -68m0 0l18 -8c14,-6 25,-16 31,-29l1 -2c4,-8 6,-16 6,-25l0 -1c0,-16 -7,-31 -19,-41l0 0c-10,-8 -22,-12 -34,-12l-7 0c-12,0 -24,4 -34,12l0 1c-12,9 -19,24 -19,39l0 0c0,10 3,20 9,28l3 5c7,11 17,19 28,25l17 8zm-198 -107l32 -22c16,-11 27,-28 31,-47l0 0c3,-14 3,-28 -2,-42l-1 -3c-6,-18 -17,-33 -32,-44l-1 -1c-14,-10 -30,-17 -47,-19l-3 0c-14,-2 -29,1 -42,6l0 0c-13,6 -24,14 -32,24l-20 25c-12,14 -18,31 -18,49l0 3c0,17 6,33 16,45l0 0c8,10 18,17 30,21l27 11m62 -6l-62 6m62 -6l0 0c-9,0 -16,-8 -16,-17l0 -11c0,-7 -3,-14 -9,-20l-4 -4c-3,-3 -6,-4 -10,-4l0 0c-4,0 -7,1 -10,4l-4 4c-6,5 -9,13 -9,20l0 34m451 -6l-31 -22c-16,-11 -27,-28 -32,-47l0 0c-3,-14 -2,-28 3,-42l1 -3c5,-18 17,-33 31,-44l2 -1c14,-10 30,-17 46,-19l5 0c13,-2 27,0 40,6l0 0c13,6 24,15 33,26l19 27c8,11 14,25 15,40l1 7c2,17 -4,34 -15,48l0 0c-7,8 -16,15 -27,19l-29 11m-62 -6l62 6m-62 -6l0 0c10,0 17,-8 17,-17l0 -11c0,-7 3,-14 8,-20l5 -4c3,-3 6,-4 10,-4l0 0c3,0 7,1 9,4l5 4c5,5 8,13 8,20l0 34"/> 
                                    <rect style="fill:none" class="fil0" width="2500" height="2500"/>
                                </svg>
                            </div>
                            <div class="item-advantage__text">
                                <h3 class="item-advantage__title title-second">
                                    Минимальное участие клиента
                                </h3>
                                <div class="item-advantage__descr text text_color_dark">
                                    От Вас потребуется только необходимый пакет документов, остальное доверьте нам.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="advantage__row">
                        <div class="item-advantage">
                            <div class="item-advantage__icon">
                                <svg class="item-advantage__img" xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="24.9999mm" height="25mm" version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" viewBox="0 0 2500 2500" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <line style="stroke:#FD6B50;stroke-width:52.9198;fill:none" class="fil0 str0" x1="381" y1="565" x2="1403" y2= "565" />
                                    <line style="stroke:#FD6B50;stroke-width:52.9198;fill:none" class="fil0 str0" x1="2119" y1="949" x2="1097" y2= "949" />
                                    <line style="stroke:#FD6B50;stroke-width:52.9198;fill:none" class="fil0 str0" x1="381" y1="777" x2="816" y2= "777" />
                                    <line style="stroke:#FD6B50;stroke-width:52.9198;fill:none" class="fil0 str0" x1="2119" y1="1128" x2="1097" y2= "1128" />
                                    <line style="stroke:#FD6B50;stroke-width:52.9198;fill:none" class="fil0 str0" x1="390" y1="970" x2="866" y2= "970" />
                                    <line style="stroke:#FD6B50;stroke-width:52.9198;fill:none" class="fil0 str0" x1="2119" y1="1339" x2="1391" y2= "1339" />
                                    <line style="stroke:#FD6B50;stroke-width:52.9198;fill:none" class="fil0 str0" x1="381" y1="1148" x2="892" y2= "1148" />
                                    <line style="stroke:#FD6B50;stroke-width:52.9198;fill:none" class="fil0 str0" x1="2119" y1="1525" x2="1608" y2= "1525" />
                                    <path style="stroke:#FD6B50;stroke-width:52.9198;fill:none" class="fil0 str0" d="M432 1755l0 -320 -98 -33c-37,-12 -70,-31 -99,-56 -38,-34 -67,-77 -83,-125l-7 -22c-13,-38 -19,-78 -19,-118l0 -272 0 -118c0,-40 7,-80 22,-118l1 -2c18,-45 47,-85 83,-117 31,-27 67,-48 106,-61l26 -8c45,-15 93,-23 140,-23l770 0c43,0 87,6 128,19l42 13c40,12 77,35 107,65 29,29 51,63 63,102l4 10c10,31 15,63 15,96l0 78 -383 0 -128 11c-17,1 -34,4 -50,9 -42,12 -81,35 -113,66l-4 5c-25,24 -45,53 -59,85l-2 6c-18,40 -27,84 -27,128l0 48 0 332 -141 0 -294 320z"/>
                                    <path style="stroke:#FD6B50;stroke-width:52.9198;fill:none" class="fil0 str0" d="M2068 2138l0 -319 98 -33c36,-12 70,-31 99,-57 38,-33 67,-76 83,-125l7 -22c13,-38 19,-78 19,-118l0 -272 0 -117c0,-41 -7,-81 -22,-118l-1 -3c-18,-45 -47,-85 -83,-117 -31,-27 -67,-47 -106,-60l-26 -9c-45,-15 -93,-23 -140,-23l-770 0c-43,0 -87,7 -128,20l-42 12c-40,13 -77,35 -107,65 -29,29 -51,64 -64,102l-3 10c-10,31 -15,63 -15,96l0 412c0,25 2,50 6,74l6 31c9,48 29,93 59,130 37,46 86,80 142,97l26 8c36,11 74,17 112,17l556 0 294 319z"/>
                                    <rect style="fill:none" class="fil0" width="2500" height="2500"/>
                                </svg>
                            </div>
                            <div class="item-advantage__text">
                                <h3 class="item-advantage__title title-second">
                                    Бесплатная консультация
                                </h3>
                                <div class="item-advantage__descr text text_color_dark">
                                    Бесплатная консультация на каждом этапе и информирование о месте нахождения документов - отличительная черта работы “Документы 24/7”.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- FAQ -->
        <section class="faq bg-color_white" id="faq">
            <div class="faq__body container">
                <h2 class="faq__title title title_big title_color_dark">
                    Часто задаваемые вопросы
                </h2>
                <div class="faq__accordion">
                    <details class="faq__details">
                        <summary class="faq__summary title-second">
                            <span class="faq__question">1. Что такое легализация документов и для чего она нужна?</span>
                        </summary>
                        <p class="faq__answer text text_color_dark">
                            Легализация нужна для того, чтобы документ, выданный в одном государстве, был действительным в другом государстве, и его можно было предоставить в официальные органы или организации другого государства. Легализация подтверждает полномочия, подлинность подписи и печати должностного лица, выдавшего документ. Без легализации ваш документ полученный, например в США, не будет принят в гос.органах РФ, и наоборот.
                        </p>
                    </details>
                    <details class="faq__details">
                        <summary class="faq__summary title-second">
                            <span class="faq__question">2. Что такое апостиль и для чего он нужен?</span>
                        </summary>
                        <p class="faq__answer text text_color_dark">
                            Апостиль – это специальный знак (штамп), который ставится на официальных документах, выдаваемых учреждениями одного государства, для признания в другом государстве. Проставление апостиля является упрощенной процедурой легализации документов и действует только в отношениях между государствами, которые подписали Гаагскую конвенцию 1961 года. 
                        </p>
                        <p class="faq__answer text text_color_dark">
                            Иностранные документы, заверенные апостилем, признаются во всех странах-участниках Гаагской конвенции и не требуют какой-либо иной формы заверения. Проставление апостиля осуществляется в стране выдачи документа. Если вам необходимо поставить апостиль на документ, выданный в иностранном государстве, обращайтесь в компанию Документы 24/7. Мы предоставляем услуги по проставлению апостиля в России и США.
                        </p>
                    </details>
                    <details class="faq__details">
                        <summary class="faq__summary title-second">
                            <span class="faq__question">3. Можно ли поставить апостиль без личного присутствия?</span>
                        </summary>
                        <p class="faq__answer text text_color_dark">
                            Да, можно. Компания Документы 24/7 получит апостиль на ваши документы и выполнит их легализацию без вашего личного присутствия.
                        </p>
                    </details>
                    <details class="faq__details">
                        <summary class="faq__summary title-second">
                            <span class="faq__question">4. Где получить апостиль на документы об образовании?</span>
                        </summary>
                        <p class="faq__answer text text_color_dark">
                            В России заверением дипломов и иных документов об образовании, ученой степени при помощи апостиля занимаются региональные органы в сфере образования. По срокам получение апостиля на документ об образовании займет около 1,5 — 2 месяца. Если вы находитесь на территории иностранного государства и вам необходима помощь в апостилировании вашего документа об образовании свяжитесь с нами. Мы поможем легализовать ваш документ в России, а после отправим его в страну, в которой вы находитесь.
                        </p>
                    </details>
                    <details class="faq__details">
                        <summary class="faq__summary title-second">
                            <span class="faq__question">5. Сколько времени занимает получение апостиля?</span>
                        </summary>
                        <p class="faq__answer text text_color_dark">
                            Получение апостиля на документы в США и РФ занимает около 6 бизнес дней после подачи документа. Также возможна ускоренная процедура получения апостиля за 3-4 бизнес дней. Обратившись в нашу компанию вы можете получить полный комплекс услуг по легализации документа — апостиль, доставку в нужную вам страну, а также заверенный перевод. В этом случае процедура легализации занимает чуть больше времени. Для того, чтобы получить более подробную информацию по срокам оставьте заявку на нашем сайте и мы свяжемся с вами.
                        </p>
                    </details>
                    <details class="faq__details">
                        <summary class="faq__summary title-second">
                            <span class="faq__question">6. Чем занимается общественный нотариус (Notary Public)?</span>
                        </summary>
                        <p class="faq__answer text text_color_dark">
                            Общественный (публичный) нотариус является должностным лицом, которое уполномочено органом местного самоуправления на удостоверение личности лица, подписывающего документ. При этом нотариус не подтверждает правильность документа, а лишь удостоверяет личность подписавших, их готовность и добровольность подписания, а также место и дату подписания.
                        </p>
                    </details>
                    <details class="faq__details">
                        <summary class="faq__summary title-second">
                            <span class="faq__question">7. Можно ли заверить подпись на документе, который составленный на русском языке, у Notary Public?</span>
                        </summary>
                        <p class="faq__answer text text_color_dark">
                            Да, можно. Обратившись в компанию Документы 24/7 вы можете заверить доверенность на русском, английском и украинском языках. В нашей компании работает общественный нотариус, который в совершенстве владеет этими языками.
                        </p>
                    </details>
                    <details class="faq__details">
                        <summary class="faq__summary title-second">
                            <span class="faq__question">8. Могу ли я удаленно заверить подпись на документе в США?</span>
                        </summary>
                        <p class="faq__answer text text_color_dark">
                            Если вы находитесь не в штате Флорида и не можете лично посетить наш офис, для того чтобы заверить свою подпись на документе, мы поможем вам. Для этого вам нужно связаться с нашими менеджерами или оставить заявку на сайте. Наши специалисты свяжутся с вами и проконсультируют о возможности заверения документа с нашим нотариусом находясь в другом штате.
                        </p>
                    </details>
                    <details class="faq__details">
                        <summary class="faq__summary title-second">
                            <span class="faq__question">9. Мне нужна доверенность для России. Обязательно ли мне ехать в консульство РФ?</span>
                        </summary>
                        <p class="faq__answer text text_color_dark">
                            Нет, не обязательно. Компания Документы 24/7 поможет вам в оформлении, легализации и доставке вашей доверенности в Россию. Мы подготовим проект вашей доверенности, получим на неё гриф Апостиль и отправим её до вашего поверенного лица в Россию. Вам нужно будет лишь заверить свою подпись на документе — все остальные процедуры мы выполним за вас.
                        </p>
                    </details>
                    <details class="faq__details">
                        <summary class="faq__summary title-second">
                            <span class="faq__question">10. Нужно ли переводить апостиль?</span>
                        </summary>
                        <p class="faq__answer text text_color_dark">
                            Да, нужно. Перевод необходим также и для самого документа, который удостоверяется апостилем, если он составлен на языке той страны, в которой вы его получали. При этом перевод должен быть нотариально удостоверен. Например, у вас на руках Birth Certificate (свидетельство о рождении в США), соответственно он составлен на английском языке. Для того чтобы этот документ имел юридическую силу в России будет необходимо получить на него штамп апостиль в США. По приезду в Россию вам потребуется перевести Birth Certificate и апостиль на русский язык, а после заверить его в российского нотариуса. НО! Нотариус РФ заверит перевод только в том случае, если он был выполнен дипломированным переводчиком. Чтобы не тратить своё время на все эти процедуры вы можете обратиться в нашу компанию. В нашем штате работают переводчики, которые переведут ваши документы на необходимый вам язык и заверят свой перевод у нотариуса в РФ.
                        </p>
                    </details>
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
        <!-- Partners -->
        <section class="partners bg-color_white">
            <div class="parnters__body container">
                <h2 class="partners__title title title_big title_color_dark">
                    Компании партнеры
                </h2>
                <div class="partners__grid">
                    <div class="partners__column">
                        <a href="javascript:;" class="partners__logo">
                            <img src="<?php echo STANDART_DIR; ?>img/partners/partners-logo-01.jpg" alt="Логотип DHL" class="partners__img">
                        </a>
                    </div>
                    <div class="partners__column">
                        <a href="javascript:;" class="partners__logo">
                            <img src="<?php echo STANDART_DIR; ?>img/partners/partners-logo-02.png" alt="Логотип OneWorldClick" class="partners__img">
                        </a>
                    </div>
                    <div class="partners__column">
                        <a href="javascript:;" class="partners__logo">
                            <img src="<?php echo STANDART_DIR; ?>img/partners/partners-logo-03.png" alt="Логотип Fincom Group" class="partners__img">
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php get_footer(); ?>
    