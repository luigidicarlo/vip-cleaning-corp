<?php
require_once('./app.config.php');

if (isset($_POST['submit'])) {
    $name = null;
    $lastName = null;
    $email = null;
    $address = null;
    $message = null;

    $validName = false;
    $validLastName = false;
    $validEmail = false;
    $validMessage = false;

    if (isset($_POST['name']) && !empty($_POST['name'])) {
        $name = stripslashes(stripcslashes(strip_tags(trim($_POST['name']))));
        if (!preg_match("/^[A-Za-zñÑáéíóúÁÉÍÓÚüÜ]+$/", $name)) {
            header('Location:'.HOST.'#contact?error=true&name=1');
            exit();
        }
    }

    if (isset($_POST['lastName']) && !empty($_POST['lastName'])) {
        $lastName = stripslashes(stripcslashes(strip_tags(trim($_POST['lastName']))));
        if (!preg_match("/^[A-Za-zñÑáéíóúÁÉÍÓÚüÜ]+$/", $lastName)) {
            header('Location:'.HOST.'#contact?error=true&lastname=1');
            exit();
        }
    }

    if (isset($_POST['email']) && !empty($_POST['email'])) {
        $email = stripslashes(stripcslashes(strip_tags(trim($_POST['email']))));
        if (!preg_match("/[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$/", $email)) {
            header('Location:'.HOST.'#contact?error=true&email=1');
            exit();
        }
    }

    if (isset($_POST['address'])) {
        $address = stripslashes(stripcslashes(strip_tags(trim($_POST['address']))));
    }

    if (isset($_POST['message']) && !empty($_POST['message'])) {
        $message = nl2br(trim($_POST['message']));
        if (strlen($message) <= 20) {
            header('Location:'.HOST.'#contact?error=true&message=1');
            exit();
        }
    }

    if (empty($address)) {
        $address = 'Not provided';
    }

    $content = '
        <html>
            <head>
                <meta charset="UTF-8">
                <title>New Contact Message</title>
            </head>
            <body style="font-size: 16px;">
                <div style="margin: 0 auto; width: 80%; border-radius: 20px; border: 1px solid #434343; box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.5);">
                    <div style="border-top-left-radius: 10px; border-top-right-radius: 10px; background-color: #317bff; color: #fff; padding: 2rem;">
                        <div style="text-align: center;">
                            <img style="max-width: 100%; max-height: 92px; margin: 0 auto;" src="'.HOST.'/assets/img/logo.png" alt="VIP Cleaning Corp">
                        </div>
                        <br>
                        <h1 style="text-align: center; color: #fff">New Contact Message</h1>
                    </div>
                    <div style="padding: 4rem;">
                        <p style="text-align: center; font-size: 1.25rem;">'.$name.' '.$lastName.' (<a style="color: #317bff;" href="emailto:'.$email.'">'.$email.'</a>) has sent you a message</p>
                        <hr>
                        <p style="text-align: justify; font-size: 1.1rem; max-width: 100%; word-break: break-word;">'.$message.'</p>
                        <hr>
                        <p style="font-size: 0.75rem; color: #565656; text-align: center;">
                            <small>User address: '.$address.'</small>
                        </p>
                    </div>
                </div>
            </body>
        </html>
    ';

    if (isset($name) && isset($lastName) && isset($email) && isset($message)) {
        $mailed = mail(
            EMAIL_TO,
            EMAIL_SUBJECT,
            $content,
            'Content-Type:text/html;charset=UTF-8' . "\r\n" . 'From:<' . $email . ">\r\n"
        );

        header('Location:' . HOST);
    }
} else {
    header('Location:' . HOST);
}
