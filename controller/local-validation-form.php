<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

$error = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Voorkom XSS-aanvallen door invoergegevens te filteren
    $name = filter_var($_POST["name"], FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $message = filter_var($_POST["message"], FILTER_SANITIZE_SPECIAL_CHARS);

    // Valideer invoergegevens
    if (empty($name) || empty($email) || empty($message)) {
        $error[] = "Alle velden zijn verplicht";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error[] = "Ongeldig e-mailadres";
    } else {
        // Verzend e-mail
        $mail = new PHPMailer(true);
        try {
            //Server settings
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'e.dirbas1@gmail.com'; // Plaats hier je Gmail-adres
            $mail->Password = 'bcvq upju ibxb jpab'; // Plaats hier je Gmail-app-wachtwoord
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            // Ontvanger
            $mail->setFrom($email, $name);
            $mail->addAddress('e.dirbas1@gmail.com'); // Plaats hier het e-mailadres van de ontvanger
            $mail->addReplyTo($email, $name);

            // Inhoud
            $mail->isHTML(true);
            $mail->Subject = 'Portfoli';
            $mail->Body    = "Naam: $name <br> E-mail: $email <br> Bericht: $message";

            $mail->send();
            header("location:../contact.php");
            echo 'E-mail is succesvol verzonden!';
        } catch (Exception $e) {
            echo "Er is een fout opgetreden bij het verzenden van de e-mail: {$mail->ErrorInfo}";
        }
    }
}

// Toon fouten indien aanwezig
if (!empty($error)) {
    foreach ($error as $err) {
        echo "<p>$err</p>";
    }
}
?>
