<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Morhaf Derbas</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/medium.css">
    <link rel="stylesheet" href="css/small.css">
</head>
<body>
    <header>
        <?php include './nav.php'; ?>
    </header>

    <section class="container">
        <section class="container-wrapper">

            <div class="contact-outer">
                <div class="contact-iner">
                    <form class="contact-form" action="controller/local-validation-form.php" method="post">
                      <h1>Contact me</h1>
                        <input type="text" name="name" id="name" placeholder="Naam" required>
                        <input type="email" name="email" id="email" placeholder="E-mail" required>
                        <textarea name="message" rows="4" id="message" placeholder="Bericht" required></textarea>
                        <input type="submit" value="send">
                    </form>
                </div>
            </div>

            <div class="contact-outer">
                <div class="contact-iner">
                    <h2>Neem Contact met Mij Op</h2>
                    <p>Ik sta altijd open voor nieuwe kansen en samenwerkingen. Of je nu een vraag hebt, een project wilt bespreken of gewoon gedag wilt zeggen, voel je vrij om contact met mij op te nemen. Je kunt mij bereiken via de volgende contactgegevens:</p>
                    <ul class="contact-details">
                        <li><strong>Icon</strong> ......</li>
                        <li><strong>Icon:</strong> ......</li>
                        <li><strong>Icon:</strong> .......</li>
                    </ul>
                </div>
            </div>

        </section>
    </section>

    <footer>
        <?php include './footer.php'; ?>
    </footer>
</body>
</html>
