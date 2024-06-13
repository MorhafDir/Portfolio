<?php

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
            $to = 'e.dirbas1@gmail.com'; // Plaats hier het e-mailadres van de ontvanger
            $subject = 'Onderwerp van de e-mail';
            $headers = "From: $name <$email>" . "\r\n" .
                       "Reply-To: $email" . "\r\n" .
                       "Content-Type: text/html; charset=UTF-8" . "\r\n";
    
            $body = "Naam: $name<br>E-mail: $email<br>Bericht: $message";
    
            if (mail($to, $subject, $body, $headers)) {
                echo 'E-mail is succesvol verzonden!';
            } else {
                echo 'Er is een fout opgetreden bij het verzenden van de e-mail';
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
    