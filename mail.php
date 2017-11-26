<?
if(isset($_POST['email'])&&$_POST['email']!=""){ //Проверка отправилось ли наше поля name и не пустые ли они
        $to = '31babaev@gmail.com'; //Почта получателя, через запятую можно указать сколько угодно адресов
        $subject = 'Bot for biz email'; //Заголовок сообщения
        $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                        <p>Email: <b>'.$_POST['email'].'</b></p>
                    </body>
                </html>'; //Текст нащего сообщения можно использовать HTML теги
        $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
        $headers .= "From: Bot for biz <31babaev@gmail.com>\r\n"; //Наименование и почта отправителя
        mail($to, $subject, $message, $headers); //Отправка письма с помощью функции mail
}
?>