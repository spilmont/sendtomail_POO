<?php
/**
 * Created by PhpStorm.
 * User: Onatouvus
 * Date: 29/01/2019
 * Time: 21:25
 */


require "classes/mail.php";

$monMail = new mail();

$email =(isset($_GET["email"])?$_GET["email"]:null);
$email = filter_var($email,FILTER_SANITIZE_EMAIL);
$titre =(isset($_GET["titre"])?$_GET["titre"]:null);
$titre = filter_var($titre,FILTER_SANITIZE_STRING);
$message =(isset($_GET["message"])?$_GET["message"]:null);
$message = filter_var($message,FILTER_SANITIZE_STRING);


$monMail->setdestinataire($email);
$monMail->settitre($titre);
$monMail->setmessage($message);


$monMail->send();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="" method="get">
<input type="email" name="email" id="email">
<input type="text" name="titre" id="titre">
<textarea name="message" id="message"></textarea>
<input type="submit" value="send">
</form>
</body>
</html>
