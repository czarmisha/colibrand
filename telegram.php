 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="fontawesome/css/all.min.css">
     <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
     <link rel="stylesheet" href="styles/tg.css">
     <title>Заявка | Colibrand</title>
 </head>

 <body>
     <header>
         <nav class="navbar navbar-expand-xl" id="nav">
             <a class="navbar-brand" href="index.html"><img src="images/logo-2.png" alt="" height="50px" width="120px"></a>
             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
             </button>
             <div class="collapse navbar-collapse" id="navbarSupportedContent">
                 <ul class="navbar-nav mr-auto">
                     <li class="nav-item active">
                         <a class="nav-link" href="index.html">Главная</a>
                     </li>
                     <li class="nav-item dropdown">
                         <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                             Услуги
                         </a>
                         <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                             <a class="dropdown-item" href="#graph-design">Графический дизайн</a>
                             <a class="dropdown-item" href="#smm">SMM продвижение</a>
                             <a class="dropdown-item" href="#seo">SEO продвижение</a>
                             <a class="dropdown-item" href="#seo">Создайние сайтов</a>
                         </div>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="about.html">О нас</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="contacts.html">Контакты</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="#">Портфолио</a>
                     </li>
                 </ul>
                 <ul class="social-nav my-2 my-lg-0 d-flex">
                     <li><a href=""><i class="fab fa-telegram-plane"></i></a></li>
                     <li><a href=""><i class="fas fa-phone"></i></a></li>
                     <li><a href=""><i class="far fa-envelope"></i></a></li>
                 </ul>
             </div>
         </nav>
     </header>
     <p class="response">

         <?php
            /* https://api.telegram.org/botXXXXXXXXXXXXXXXXXXXXXXX/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

            //Переменная $name,$phone, $mail получает данные при помощи метода POST из формы
            $name = $_POST['name'];
            $phone = $_POST['tel'];
            $message = $_POST['message'];

            //в переменную $token нужно вставить токен, который нам прислал @botFather
            $token = "1245494253:AAH5FvpPt0_jQVezwwUYWgq1hTFJYg6mEpc";

            //нужна вставить chat_id (Как получить chad id, читайте ниже)
            $chat_id = "-415347671";

            //Далее создаем переменную, в которую помещаем PHP массив
            $arr = array(
                'Имя: ' => $name,
                'Телефон: ' => $phone,
                'Сообщение' => $message
            );

            //При помощи цикла перебираем массив и помещаем переменную $txt текст из массива $arr
            foreach ($arr as $key => $value) {
                $txt .= "<b>" . $key . "</b> " . $value . "%0A";
            };

            //Осуществляется отправка данных в переменной $sendToTelegram
            $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}", "r");

            //Если сообщение отправлено, напишет "Thank you", если нет - "Error"
            if ($sendToTelegram) {
                echo "Ваша заявка отправлена! Наши менеджеры вскоре свяжутся с вами!";
            } else {
                echo "Произошла ошибка! Попробуйте чуть позже";
            }
            ?>
     </p>


     <footer>
         <p class="text-center">Все права защищены</p>
     </footer>
     <script src="bootstrap/js/jquery.js"></script>
     <script src="bootstrap/js/popper.js"></script>
     <script src="fontawesome/js/all.min.js"></script>
     <script src="bootstrap/js/bootstrap.min.js"></script>
 </body>

 </html>