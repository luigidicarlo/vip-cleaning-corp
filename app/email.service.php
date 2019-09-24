<?php
require_once('./app.config.php');

if (isset($_POST['submit'])) {
    $name = null;
    $lastName = null;
    $email = null;
    $address = null;
    $message = null;

    if (isset($_POST['name']) && !empty($_POST['name'])) {
        $name = stripslashes(stripcslashes(strip_tags(trim($_POST['name']))));
    }

    if (isset($_POST['lastName']) && !empty($_POST['lastName'])) {
        $lastName = stripslashes(stripcslashes(strip_tags(trim($_POST['lastName']))));
    }

    if (isset($_POST['email']) && !empty($_POST['email'])) {
        $email = stripslashes(stripcslashes(strip_tags(trim($_POST['email']))));
    }

    if (isset($_POST['address'])) {
        $address = stripslashes(stripcslashes(strip_tags(trim($_POST['address']))));
    }

    if (isset($_POST['message']) && !empty($_POST['message'])) {
        $message = stripslashes(stripcslashes(strip_tags(trim($_POST['message']))));
    }

    if (isset($name) && isset($lastName) && isset($email) && isset($message)) {
        $mailed = mail(
            EMAIL_TO,
            EMAIL_SUBJECT,
            $message,
            'Content-Type:text/html;charset=UTF-8' . "\r\n" . 'From:<' . $email . ">\r\n"
        );

        header('Location:' . HOST);
    }
} else {
    header('Location:' . HOST);
}
