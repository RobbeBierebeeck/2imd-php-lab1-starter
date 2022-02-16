<?php
    $posts = [
            [
                    "profilePicture"=>"images/image-1.png",
                    "username"=>"Jesse",
                    "place"=>"Assembly3.0",
                    "location"=>"San Francisco, CA",
                    "comment"=>"Le Work.",
                    "postImage"=>""
            ],
        [
            "profilePicture"=>"images/image-2.png",
            "username"=>"Michal",
            "place"=>"Voxer",
            "location"=>"San Francisco, CA",
            "comment"=>"",
            "postImage"=>"images/post/post1.jpg"
        ],
        [
            "profilePicture"=>"images/image-3.png",
            "username"=>"Petr",
            "place"=>"ROXY/NoD",
            "location"=>"Prague, Czech Republic",
            "comment"=>"Le Work.",
            "postImage"=>""
        ],
        [
            "profilePicture"=>"images/image-4.png",
            "username"=>"Jaroslav",
            "place"=>"Brno hlavni nadrazi",
            "location"=>"Brno, Czech Republic",
            "comment"=>"",
            "postImage"=>""
        ],
        [
            "profilePicture"=>"images/image-5.png",
            "username"=>"Jesse",
            "place"=>"The Mill",
            "location"=>"Puurs, Belgium",
            "comment"=>"Le Work.",
            "postImage"=>""
        ],
        [
            "profilePicture"=>"images/image-6.png",
            "username"=>"Matej",
            "place"=>"MassVentures",
            "location"=>"Baal, Tremelo",
            "comment"=>"",
            "postImage"=>""
        ],
        [
            "profilePicture"=>"images/image-7.png",
            "username"=>"Robbe",
            "place"=>"ThomasMore",
            "location"=>"Mechelen, Belgium",
            "comment"=>"",
            "postImage"=>""
        ],

    ]
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
    <?php foreach ($posts as $post): ?>
    <div class="post">
        <img class="post__userImage" src= "<?php echo $post["profilePicture"]?>" alt="profile picture">
        <div class="post__content">
        <span class="post__content--username"><?php echo $post["username"]?></span>
        <span class="post__content--place"><?php echo $post["place"]?></span>
        <span class="post__content--location"><?php echo $post["location"]?></span>
        <p class="post__content--comment"><?php echo $post["comment"]?></p>
        </div>
    </div>
    <?php endforeach;?>
</section>
    <?php // todo4 : zorg dat je header en footer opgehaald wordt vanuit footer.inc.php en header.inc.php zodat je deze kan hergebruiken op meerdere schermen?>
    <?php include_once("footer.inc.php")?>
</body>
</html>