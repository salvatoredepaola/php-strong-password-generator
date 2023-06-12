<?php 
    $number = $_GET["passwordLenght"];
    $form_result = $_GET["form"];
    if (isset($form_result)){
    if (!is_numeric($number)) {
        echo 'inserire un numero';
    }
    }


    function getRandomString($number)
    {
        $caratteri = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';

        for ($i = 0; $i < $number; $i++) {
            $random = rand(0, strlen($caratteri) - 1);
            $randomString .= $caratteri[$random];
        }

        return $randomString;
    }

    ?>