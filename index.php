<?php
$yearsold = floor((time() - 641685600) / 31556926);
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV Adam Rousselle</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div id="page">
        <section id="partLeft" class="paddingTop">
            <div class="title">
                <div class="decorationBlock"></div>
                <div class="text">Développeur web</div>
            </div>
        </section>
        <section id="partRight" class="paddingTop">
            <h2><span class="line">ADAM</span><span class="line line2">ROUSSELLE</span></h2>
            <p class="description">3 mai 1990 (<?= $yearsold ?> ans)</p>
        </section>
    </div>
</body>

</html>