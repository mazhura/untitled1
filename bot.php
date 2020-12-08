<?php
error_reporting(E_ALL);

const ID_USER = '795053500';
const TOKEN = '1491210091:AAEex5_7_6vs435szDYWwVa27xO6sJlvLLc';


class SendToTelegram{

    protected string $url = 'https://api.telegram.org/bot';

    public function __construct($token_bot){
        $this->url=$this->url.$token_bot.'/';
    }


    public function SendRequest($method,$params = []){
        if(!empty($params)){
            $this->url = $this->url.$method.'?'.http_build_query($params);
        } else $this->url = $this->url.$method;
        return json_decode(file_get_contents($this->url),JSON_OBJECT_AS_ARRAY);
    }

}





/*echo '-------------'.'<br>';
echo 'DEBUG :'.'<br>';



$error = error_get_last();
var_dump($error);*/