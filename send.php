<?php
 
/* Задаем переменные */
$name = htmlspecialchars($_POST["name"]);
$phone = htmlspecialchars($_POST["phone"]);
 
/* Ваш адрес и тема сообщения */
$address = "vitaly.orendarenko@gmail.com";
$sub = "Сообщение с сайта ХХХ";
 
/* Формат письма */
$mes = "Сообщение с сайта ХХХ.\n
Имя отправителя: $name 
Телефон отправителя: $phone;
 
 
if (empty($bezspama)) /* Оценка поля bezspama - должно быть пустым*/
{
/* Отправляем сообщение, используя mail() функцию */
$from  = "From: $name <$email> \r\n Reply-To: $email \r\n";
if (mail($address, $sub, $mes, $from)) {
 header('Refresh: 5; URL=http://biznessystem.ru');
 echo '<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
    <body class="man" style="background-color: #f1f4f6;">
<input type="hidden" id="fio_for_collector_page" value="вававава">


<div class="section block-1" style="background: #f1f4f6 url(../img/top-bg-purple.png) center top no-repeat; margin-top: 0px;margin-bottom: 20px">
    <div class="wrap" style="height:180px;">
        <div class="top-title top-title-c" style="text-align: center;padding: 30px 0;">
            <h2 style="color: #55d90d;">Спасибо. Ваш заказ принят!</h2>
            <div style="color: white;">Наш оператор свяжется с вами в течение 30 минут</div>
        </div>
    </div>
    <div class="wrap present">
        <div class="dashed_frame"><h2>вававава, МЫ ПОДГОТОВИЛИ ДЛЯ ВАС <span style="color: red;">ПОДАРОК!</span></h2></div>

        <div class="present-descr">
            <img src="../img/free3bestsellers.png" alt="Получите 3 бестселлера бесплатно!" class="offer-head">
            <div class="presents">
                <div class="present1">
                    <img src="../img/ideal_face_skin.jpg" alt="Идеальная кожа лица">
                    <p>Идеальная кожа лица<br/>Секреты звезд голливуда</p>
                </div>
                <div class="present1">
                    <img src="../img/popular_man.jpg" alt="Как стать популярным">
                    <p>Как стать популярным<br/>Пособие для мужчин</p>
                </div>
                <div class="present1 last">
                    <img src="../img/save_health.jpg" alt="Сохранить здоровье">
                    <p>Как сохранить здоровье<br/>Секреты древней Руси</p>
                </div>
            </div>
        </div>
        <div class="mail-box desc_cc_holder">
            <div class="head">Просто введите свою почту<br/>и нажмите на кнопку</div>
            <div class="email_ss_holder"><input type="text" id="email_subscribe" class="email_cc_input" placeholder="Введите Ваш e-mail"></div>
            <div class="btn_ss_holder"><img src="../img/get-present.jpg"></div>
            <div class="desc_cc_desc">Ваши данные не будут переданы<br>третьим лицам</div>
        </div>
        <p style="color: grey;">*книги в электронном виде</p>
    </div>
</div>

<div class="section footer">
    <div class="wrap clearfix">
        <div class="left clearfix foot-logo">
            <p><b>Интернет-магазин «TOP-Shop»</b><br/><span>Дарим покупателям радость с 2009 года.</span></p>
        </div>
        <div class="right"><p>Copyright (c) 2016<br/>ОГРН 34582345720962</p></div>
    </div>
</div>

<!--PopUp-->
<div class="popup reg_form reg_form_pop">
    <a class="close">Close</a>

    <h2 id="center1">Написать отзыв</h2>

    <div>
        <form id="comment-form" action="" class="clearfix">
            <div>
                <input type="text" placeholder="Введите ваше имя" required=""/>
            </div>
            <div>
                <textarea cols="" rows="8" placeholder="Введите текст отзыва" required=""></textarea>
            </div>
            <button type="submit">Отправить</button>
        </form>
    </div>
</div>
</body>';}
else {
 header('Refresh: 5; URL=http://biznessystem.ru');
 echo '<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
    <body>Письмо не отправлено, через 5 секунд вы вернетесь на страницу YYY</body>';}
}
exit; /* Выход без сообщения, если поле bezspama заполнено спам ботами */
?>