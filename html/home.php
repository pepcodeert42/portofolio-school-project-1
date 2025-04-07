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

<body  onload="groet()">

<header>

    <h1 id="begroeting"></h1>
    <?php include 'nav.php'?>

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

        <p>Ik heb software development gekozen omdat
            ik al heel mijn leven naar computers kijk
            en gefacineerd ben over hoe alles nou precies werkt</p>
        <img src="/website-fotos/klim-foto.jpg" alt="foto van klimmer">
    </div>

    <div>
        <img src="/website-fotos/foto-barcelona.jpg" alt="foto-barcelona">

    </div>





</main>

<footer>

   <?php include 'footer.php'?>

</footer>

</body>
</html>
