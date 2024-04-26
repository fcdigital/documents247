<?php

    add_action('wp_enqueue_scripts', function() {
        // Доп. стили для плагинов
        wp_enqueue_style('style-plugins', get_stylesheet_directory_uri() . '/assets/css/style-plugins.css', ['styles'], '1.0.0');

        // Доп. стили для дочерней темы
        wp_enqueue_style('styles-child', get_stylesheet_directory_uri() . '/assets/css/style-child.css', [], '1.0.0' );
    });

    // Счётчики метрики и аналитики
    add_action( 'wp_head', function() {

        ?>
            <!-- Код счетчика Яндекс метрики -->
            <script type="text/javascript" >
                (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
                m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
                (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

                ym(64649485, "init", {
                        clickmap:true,
                        trackLinks:true,
                        accurateTrackBounce:true,
                        webvisor:true
                });
            </script>
            <noscript><div><img src="https://mc.yandex.ru/watch/64649485" style="position:absolute; left:-9999px;" alt="" /></div></noscript>

            <!-- Код счетчика Google аналитики -->
            <!-- Global site tag (gtag.js) - Google Analytics -->
			<script async src="https://www.googletagmanager.com/gtag/js?id=UA-111282443-12"></script>
			<script>
				window.dataLayer = window.dataLayer || [];
				function gtag(){dataLayer.push(arguments);}
				gtag('js', new Date());

				gtag('config', 'AW-647570706');
			</script>

			<!-- Event snippet for Заполнение формы на странице conversion page -->
			<script>
				gtag('event', 'conversion', {'send_to': 'AW-647570706/RuiOCJiF9NQBEJLK5LQC'});
			</script>

			<!-- Event snippet for Клик на телефон conversion page In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
			<script>

                function gtag_report_conversion(url) {
					var callback = function () {
						if (typeof(url) != 'undefined') {
						    window.location = url;
						}
					};
					gtag('event', 'conversion', {
						'send_to': 'AW-647570706/saA0CKru49QBEJLK5LQC',
						'event_callback': callback
					});
                    return false;
				}		
				
			</script>

	    <?php

    }, 99);

    // Отслеживание отправки формы(Contact Form 7)
    add_action( 'wp_footer', function() {

        ?>
            <script type="text/javascript">
                document.addEventListener('wpcf7mailsent', function sendMail(event) {
                    if ('81' == event.detail.contactFormId) {
                    gtag('event', 'send', {
                        'event_category': 'formapopup',
                        'event_action': 'Submit'
                    });
                    yaCounter64649485.reachGoal('submit-button');
                    }
                }, false);
            </script>

            <script>
                (function(w,d,u){
                        var s=d.createElement('script');s.async=true;s.src=u+'?'+(Date.now()/60000|0);
                        var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
                })(window,document,'https://cdn-ru.bitrix24.ru/b5253235/crm/site_button/loader_1_0l674x.js');
            </script>

	    <?php

    }, 20);

    // Связываем Contact Form 7 с Bitrix24
    add_action( 'wpcf7_mail_sent', function($contact_form) {
        //подключение к серверу CRM
        define('CRM_HOST', 'docs24.bitrix24.ru'); // Ваш домен CRM системы
        define('CRM_PORT', '443'); // Порт сервера CRM. Установлен по умолчанию
        define('CRM_PATH', '/crm/configs/import/lead.php'); // Путь к компоненту lead.rest
        
        //авторизация в CRM
        define('CRM_LOGIN', 'manager@fc-g.com'); // Логин пользователя Вашей CRM по управлению лидами
        define('CRM_PASSWORD', '29EDqQ'); // Пароль пользователя Вашей CRM по управлению лидами
        
        //перехват данных из Contact Form 7
        $title = $contact_form->title;
        $posted_data = $contact_form->posted_data;
        if ('Оставить заявку' == $title ) { //Вместо "Контактная форма 1" необходимо указать название Вашей контактной формы
            $submission = WPCF7_Submission::get_instance();
            $posted_data = $submission->get_posted_data();
            //далее мы перехватывает введенные данные в Contact Form 7
            $firstName = $posted_data['text-749']; //перехватываем поле [your-name]
            $firstEmail = $posted_data['email-434'];
            $firstPhone = $posted_data['tel-682'];
            $servText = $posted_data['text-212'];
        
            //сопостановление полей Bitrix24 с полученными данными из Contact Form 7
            $postData = array(
                'TITLE' => 'Лид со страницы ' . $servText, // Установить значение свое значение
                'NAME' => $firstName,
                'EMAIL_WORK' => $firstEmail,
                'PHONE_WORK' => $firstPhone
            );
        
            //передача данных из Contact Form 7 в Bitrix24
            if (defined('CRM_AUTH')) {
                $postData['AUTH'] = CRM_AUTH;
            } else {
                $postData['LOGIN'] = CRM_LOGIN;
                $postData['PASSWORD'] = CRM_PASSWORD;
            }
        
            $fp = fsockopen("ssl://".CRM_HOST, CRM_PORT, $errno, $errstr, 30);
            if ($fp) {
                $strPostData = '';
                foreach ($postData as $key => $value)
                    $strPostData .= ($strPostData == '' ? '' : '&').$key.'='.urlencode($value);
        
                $str = "POST ".CRM_PATH." HTTP/1.0\r\n";
                $str .= "Host: ".CRM_HOST."\r\n";
                $str .= "Content-Type: application/x-www-form-urlencoded\r\n";
                $str .= "Content-Length: ".strlen($strPostData)."\r\n";
                $str .= "Connection: close\r\n\r\n";
        
                $str .= $strPostData;
        
                fwrite($fp, $str);
        
                $result = '';
                while (!feof($fp))
                {
                    $result .= fgets($fp, 128);
                }
                fclose($fp);
        
                $response = explode("\r\n\r\n", $result);
        
                $output = '<pre>'.print_r($response[1], 1).'</pre>';
            } else {
                echo 'Connection Failed! '.$errstr.' ('.$errno.')';
            }
        }
    });