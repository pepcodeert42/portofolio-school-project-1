<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Pepijn</title>
    <link rel="stylesheet" href="/styles/stylesheet.css">
    <link rel="icon" type="image/x-icon" href="/website-fotos/icon.png">
    <script src="/js/script.js"></script>
</head>

<body>

<header>

    <h1>Contact</h1>
    <?php include 'nav.php'?>

</header>

<main class="flex-container">

    <div>

        <h2>Neem contact op</h2>

        <p>Wil je dat ik voor u kom werken? zoek mij op via mijn socials</p>

        <div class="contact-icons">
            <a href="https://www.instagram.com/pepijn_murphy"><img src="/website-fotos/insta2-logo.png" alt="Instagram"></a>
            <a href="mailto:pepijnbos7@gmail.com"><img src="/website-fotos/mail-logo.png" alt="Email"></a>
        </div>

        <p> tel: 06 20691851</p>

    </div>

    <div>

        <form class="form">

            <label for="fname">Naam:</label><br>
            <input type="text" id="fname" name="fname" placeholder="jouw naam"><br>


            <p>Wat vind je van deze website?</p>

            <input type="radio" id="goed" name="beoordeel" value="goed">
            <label for="goed">prachtig</label><br>

            <input type="radio" id="mehhh" name="beoordeel" value="meh">
            <label for="mehhh">mehhh</label><br>

            <input type="radio" id="slecht" name="beoordeel" value="slecht">
            <label for="slecht">Kwalitatief Uitermate Teleurstellend</label><br><br>

            <label for="tips">tips of vragen?</label><br>
            <input type="text" id="tips" name="tips" placeholder="heb jij tips of vragen"><br>

        </form>

    </div>

</main>

<footer>

    <?php include 'footer.php'?>

</footer>

</body>
</html>

