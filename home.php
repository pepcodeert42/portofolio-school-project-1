<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Pepijn</title>
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="icon" type="image/x-icon" href="website/icon.png">
    <script src="script.js"></script>
</head>

<body  onload="groet()">

<header>

    <h1 id="begroeting"></h1>

    <nav>
        <a href="home.php">Home</a>
        <a href="ervaringen.php">Ervaring</a>
        <a href="ik.php">Over Mij</a>
        <a href="contact.php">Contact</a>
    </nav>

    <button class="dark-mode-button" onclick="toggledarkmode()">Darkmode</button>

</header>

<!-- de cookiemelding -->
<div class="cookie" id="cookiemelding">

    <p class="text-cookie" id="cookieID"> wil je de cookies accepteren</p>

    <button class="cookie-button-style" onclick="accepteer()"> accepteer </button>
    <button class="cookie-button-style" onclick="negeer()"> negeer </button>

</div>


<main class="flex-container">
    <div>
        <h2>Hallo, ik ben Pepijn</h2>
    <?php echo "hoi"?>

        <p>Ik heb software development gekozen omdat
            ik al heel mijn leven naar computers kijk
            en gefacineerd ben over hoe alles nou precies werkt</p>
        <img src="website/klim-foto.jpg" alt="foto van klimmer">
    </div>

    <div>
        <img src="website/foto-barcelona.jpg" alt="foto-barcelona">

    </div>





</main>

<footer>

    <b class="countdown-style" id="timer"></b>
    <p>gemaakt door: Pepijn Bos</p>
    <address>pepijnbos7@gmail.com</address>
    <p>11-2024</p>

</footer>

</body>
</html>
