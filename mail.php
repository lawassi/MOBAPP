<?php


$name = $_POST['name'];

$email = $_POST['email'];

$subject = $_POST['subject'];

$message = $_POST['message'];


$mailheader = "From:".$name."<".$email.">\r\n";


$recipient = "lawassi@yahoo.com";


mail($recipient, $subject, $message, $mailheader)
or die("Error");

echo'
>
    <!DOCTYPE html>
    <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Formulaire Animer</title>
            <link rel="stylesheet" href="style_e.css">
        </head>
        <body>
            <div class="container">
                <div class="form">
                    <form>
                        <h2>Envoyer avec succes; Merci a vous.</h2>
                        <div >
                            <h4>Retour a la Page <a href="index.html"> Acceuil=></a></h4>
                        </div>
                    </form>
                </div>
            </div>
        </body>
    </html>
<?php>
';


>