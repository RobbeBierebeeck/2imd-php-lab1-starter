<?php
    /*
        todo1: maak een multidimensionale array met daarin alle checkins zoals te zien op screenshots/screenshot1.png
            - denk na over welke data er in je array moet zitten
            - soms voeg je een foto toe, soms niet (tip: gebruik voor je foto's pexels.com of een andere gratis leverancier)
            - op screenshots/screenshot2.jpeg kan je zien wat bedoelt wordt met een checkin met foto
            - werk met isset() of empty() om de foto soms wel en soms niet af te drukken


        todo2: werk met een constant DISTANCE waarmee je kan instellen wat de maximale afstand is om checkins voor te tonen
            - je zal in je array een extra stukje data moeten bijvoegen om deze afstand mee te betrekken in je checkins

    */

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swarm App</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">
</head>
<body>
<?php include_once("header.inc.php")?>
    <?php // todo3 : lus over je checkins en print deze visueel af zoals op de screenshots/screenshot1.png?>
<section class="content">
    <div class="post">
        <img class="post__userImage" src="images/image-1.png" alt="profile picture">
        <div class="post__content">
        <span class="post__content--username">Jesse</span>
        <span class="post__content--place">Assembly3.0</span>
        <span class="post__content--location">San Francisco, CA</span>
        <p class="post__content--comment">LE WORK.</p>
        </div>
    </div>
    <div class="post">
        <img class="post__userImage" src="images/image-1.png" alt="profile picture">
        <div class="post__content">
            <span class="post__content--username">Jesse</span>
            <span class="post__content--place">Assembly3.0</span>
            <span class="post__content--location">San Francisco, CA</span>
            <p class="post__content--comment">LE WORK.</p>
        </div>
    </div>
</section>
    <?php // todo4 : zorg dat je header en footer opgehaald wordt vanuit footer.inc.php en header.inc.php zodat je deze kan hergebruiken op meerdere schermen?>
    <?php include_once("footer.inc.php")?>
</body>
</html>