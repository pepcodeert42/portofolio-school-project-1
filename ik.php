<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Pepijn</title>
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="icon" type="image/x-icon" href="website-fotos/icon.png">
    <script src="script.js"></script>
</head>

<body>

<header>

    <h1>Over Mij</h1>

    <nav>
        <a href="home.php">Home</a>
        <a href="ervaringen.php">Ervaring</a>
        <a href="ik.php">Over Mij</a>
        <a href="contact.php">Contact</a>
    </nav>

    <button class="dark-mode-button" onclick="toggledarkmode()">Darkmode</button>

</header>

<main class="flex-container">

    <div>

        <h2>Wie ben ik?</h2>
        <p>Mijn naam is Pepijn. Mijn hobbies zijn klimmen,
            ukelele en piano spelen en muziek luisteren.
            Ik hou er van om te coderen en nieuwe dingen te leren.
            Ik woon samen met mijn ouders, zus en mijn twee katten Harrie en Barry.
        </p>
        <h3>Competenties</h3>

        <ul>
            <li>Creatief</li>
            <li>stipt</li>
            <li>stressbestendig</li>
            <li>zelfverzekerd</li>
        </ul>

    </div>

    <div>
        <img src="website-fotos/katten-foto.jpg" alt="katten op de bank">
    </div>

    <div>

        <p>
            Fotografie is ook voor mij een hobby,<br>
            en ik houd ervan om de grootheid van het moment vast te leggen.<br>
            Benieuwd naar mijn foto's hier heb je een paar.<br>
        </p>

        <img class="foto-opmaak-ik" src="website-fotos/foto-uitzicht.jpg" alt="foto-uitzicht">
        <img class="scale-panorama" src="website-fotos/foto-uitzicht2.jpg" alt="foto-uitzicht">

    </div>

    <div class="foto-opmaak-ik">

        <img src="website-fotos/foto-roze-wolken.jpg" alt="foto roze lucht">
        <img src="website-fotos/foto-clearsky.jpg" alt="clearsky">

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

