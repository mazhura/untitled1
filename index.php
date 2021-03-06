<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order Taxi</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
<div class="header">
    <svg id="logo" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
         width="421.028px" height="421.028px" viewBox="0 0 421.028 421.028"
         xml:space="preserve">
<g>
    <g>
        <polygon points="179.7,218.231 199.752,218.231 189.626,190.962 		"/>
        <path d="M419.864,272.842l-38.357-138.505c-2.89-10.438-12.39-17.664-23.219-17.664H62.726c-10.831,0-20.331,7.227-23.221,17.664
			L0.874,273.829c-2.009,7.254-0.513,15.029,4.044,21.02c4.557,5.99,11.651,9.507,19.176,9.507h372.823c0.006,0,0.011,0,0.017,0
			c13.306,0,24.094-10.788,24.094-24.095C421.028,277.673,420.62,275.179,419.864,272.842z M133.832,184.964v59.92
			c0,3.038-2.463,5.5-5.5,5.5h-5.898c-3.037,0-5.5-2.462-5.5-5.5v-59.92H99.07c-3.038,0-5.5-2.462-5.5-5.5v-3.32
			c0-3.038,2.462-5.5,5.5-5.5h52.573c3.037,0,5.5,2.462,5.5,5.5v3.32c0,3.038-2.463,5.5-5.5,5.5H133.832z M226.91,247.967
			c-1.021,1.512-2.729,2.417-4.555,2.417h-6.472c-2.276,0-4.317-1.402-5.134-3.527l-5.52-14.359h-30.78l-5.184,14.265
			c-0.79,2.174-2.855,3.622-5.169,3.622h-6.049c-1.816,0-3.515-0.896-4.54-2.396c-1.025-1.498-1.244-3.408-0.585-5.1l26.773-68.74
			c0.824-2.113,2.858-3.504,5.125-3.504h10.009c2.248,0,4.271,1.368,5.106,3.456l27.523,68.74
			C228.139,244.534,227.933,246.454,226.91,247.967z M298.903,247.482c-0.958,1.786-2.819,2.901-4.848,2.901h-7.115
			c-1.874,0-3.619-0.954-4.63-2.532l-15.561-24.274l-15.614,24.281c-1.012,1.574-2.754,2.525-4.625,2.525h-7.087
			c-2.021,0-3.878-1.107-4.84-2.885c-0.96-1.777-0.868-3.938,0.237-5.629l21.664-33.076l-19.209-29.66
			c-1.097-1.691-1.179-3.847-0.216-5.617c0.962-1.771,2.815-2.873,4.832-2.873h6.615c1.896,0,3.66,0.978,4.666,2.587l13.895,22.259
			l13.584-22.216c0.999-1.634,2.777-2.631,4.691-2.631h6.479c2.012,0,3.86,1.097,4.825,2.86c0.964,1.764,0.892,3.913-0.192,5.605
			l-19.388,30.271l21.567,32.459C299.759,243.528,299.861,245.696,298.903,247.482z M327.46,244.884c0,3.038-2.463,5.5-5.5,5.5
			h-5.899c-3.037,0-5.5-2.462-5.5-5.5v-68.74c0-3.038,2.463-5.5,5.5-5.5h5.899c3.037,0,5.5,2.462,5.5,5.5V244.884z"/>
    </g>
</g>
</svg>
    <h1 id="text-header">
        Заказать такси онлайн
    </h1>
    <svg id="logo" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
         width="421.028px" height="421.028px" viewBox="0 0 421.028 421.028"
         xml:space="preserve">
<g>
    <g>
        <polygon points="179.7,218.231 199.752,218.231 189.626,190.962 		"/>
        <path d="M419.864,272.842l-38.357-138.505c-2.89-10.438-12.39-17.664-23.219-17.664H62.726c-10.831,0-20.331,7.227-23.221,17.664
			L0.874,273.829c-2.009,7.254-0.513,15.029,4.044,21.02c4.557,5.99,11.651,9.507,19.176,9.507h372.823c0.006,0,0.011,0,0.017,0
			c13.306,0,24.094-10.788,24.094-24.095C421.028,277.673,420.62,275.179,419.864,272.842z M133.832,184.964v59.92
			c0,3.038-2.463,5.5-5.5,5.5h-5.898c-3.037,0-5.5-2.462-5.5-5.5v-59.92H99.07c-3.038,0-5.5-2.462-5.5-5.5v-3.32
			c0-3.038,2.462-5.5,5.5-5.5h52.573c3.037,0,5.5,2.462,5.5,5.5v3.32c0,3.038-2.463,5.5-5.5,5.5H133.832z M226.91,247.967
			c-1.021,1.512-2.729,2.417-4.555,2.417h-6.472c-2.276,0-4.317-1.402-5.134-3.527l-5.52-14.359h-30.78l-5.184,14.265
			c-0.79,2.174-2.855,3.622-5.169,3.622h-6.049c-1.816,0-3.515-0.896-4.54-2.396c-1.025-1.498-1.244-3.408-0.585-5.1l26.773-68.74
			c0.824-2.113,2.858-3.504,5.125-3.504h10.009c2.248,0,4.271,1.368,5.106,3.456l27.523,68.74
			C228.139,244.534,227.933,246.454,226.91,247.967z M298.903,247.482c-0.958,1.786-2.819,2.901-4.848,2.901h-7.115
			c-1.874,0-3.619-0.954-4.63-2.532l-15.561-24.274l-15.614,24.281c-1.012,1.574-2.754,2.525-4.625,2.525h-7.087
			c-2.021,0-3.878-1.107-4.84-2.885c-0.96-1.777-0.868-3.938,0.237-5.629l21.664-33.076l-19.209-29.66
			c-1.097-1.691-1.179-3.847-0.216-5.617c0.962-1.771,2.815-2.873,4.832-2.873h6.615c1.896,0,3.66,0.978,4.666,2.587l13.895,22.259
			l13.584-22.216c0.999-1.634,2.777-2.631,4.691-2.631h6.479c2.012,0,3.86,1.097,4.825,2.86c0.964,1.764,0.892,3.913-0.192,5.605
			l-19.388,30.271l21.567,32.459C299.759,243.528,299.861,245.696,298.903,247.482z M327.46,244.884c0,3.038-2.463,5.5-5.5,5.5
			h-5.899c-3.037,0-5.5-2.462-5.5-5.5v-68.74c0-3.038,2.463-5.5,5.5-5.5h5.899c3.037,0,5.5,2.462,5.5,5.5V244.884z"/>
    </g>
</g>
</svg>


</div>
<div class="main">
    <!--Если отправлено-->
    <?php
    $ready=NULL;
    require_once __DIR__ . '/bot.php';

    if (!empty($_POST)){
        $ready=true;
        if (count($_POST) == 4){
            $data = "Новый заказ"."\n".
                'Дата: '.date("H:i d-m-y",time())."\n" .
                'Имя: '.$_POST['name']."\n".
                'Адрес старта: '.$_POST['route']. "\n".
                'Адрес доставки: '.$_POST['route1']."\n".
                'Номер телефона: +'.$_POST['number'];

            $send = new SendToTelegram(TOKEN);
            $send->SendRequest('SendMessage',[
                'chat_id' => ID_USER,
                'text' => $data,
                'parse_mode' => 'HTML',
            ]);


            echo '<p class="ready input">Заявка оформлена<br>Ожидайте такси<br>в точке старта<br>'.$_POST['route'].'</p>';
        }

    }?>

    <!--Если не отправлено-->
   <?php if (!$ready){
        echo '<div class="form">
        <form action="" class="input" method="post">
            <div>
                <p>
                    <label for="name">Имя</label>
                <p>
                    <input type="text" id="name" name="name" minlength="2" required>
                </p>
                <p>
                    <label for="route">Адрес отправления</label>
                <p>
                    <input type="text" id="route" name="route" minlength="5" required>
                </p>
                <p>
                    <label for="route1">Адрес доставки</label>
                <p>
                    <input type="text" id="route1" name="route1" minlength="5" required>
                </p>
                <p>
                    <label for="number" >Номер телефона</label>
                <p>
                    <input type="number" id="number" name="number" min="99999999999" max="999999999999"  required>
                </p>
                <input type="submit" id="submit">
            </div>


        </form>
    </div>';
    }?>


</div>


</body>
</html>