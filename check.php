<?php
    $email = $_POST['email'];
    $message = $_POST['message'];

    $error = '';
    if (trim($email)== '')
        $error = 'Введите ваш email';
    elseif (trim($message) == '')
        $error = 'Введите само сообщение';
    elseif (strlen($message) < 10)
        $error = 'Сообщение должно быть более 10 символов';

    if ($error != '') {
        echo $error;
        exit;
    }

    $subject = "=?utf-8?B?".base64_encode("Тестовое сообщение")."?=";
    $headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html;charset=utf-8\r\n";

    mail('m_shlyahov@mail.ru', $subject, $message, $headers);

    header('Location:/send.php');

    ?>