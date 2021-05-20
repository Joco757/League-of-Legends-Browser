<?php
  $xml = simplexml_load_file("champions.xml") or die("Error: Cannot create object");
  $odabir = (int) $_POST['select1'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" type="image/jpg" href="https://lolstatic-a.akamaihd.net/frontpage/apps/prod/harbinger-l10-website/en-us/production/en-us/static/favicon-0cf29ce019f7cd1e7b24f85ab6ff97da.ico"/>
  <title><?php echo $xml->champion[$odabir]->name;?></title>
  <style>
    * {
      font-family:Verdana, Geneva, Tahoma, sans-serif;
      background-color: rgb(71, 124, 161);
      margin: 0;
      padding: 0;
      font-size: 16px;
    }

    main {
        width: 70%;
        margin-top: 20px;
        margin-bottom: 20px;
        margin-left: auto;
        margin-right: auto;
        text-align: left;
        padding: 40px;
        border: 5px solid black;
        border-radius: 50px;
    }

    .img1 {
      width: 100%;
      padding-top:30px;
      padding-bottom: 30px;
      border-radius: 150px;
    }

    footer {
      width: 100%;
      padding-top:30px;
      padding-bottom: 30px;
      background-color: rgb(43, 77, 105);
    }

    footer p {
      color: white;
      text-align: center;
      background-color: rgb(43, 77, 105);
    }

    h1 {
        text-align:center;
        font-size: 70px;
        text-transform: uppercase;
        color: rgb(189, 160, 64);
    }

    a {
      border-radius: 15px;
      background-color: rgb(43, 77, 105);
      color: white;
      text-decoration: none;
      display: block;
      position: fixed;
      top: 20px;
      left: 20px;
      border: 2px solid black;
      padding: 5px;
    }

    .img2 {
      display: inline;
      width: 16px;
    }
  </style>
</head>
<body>
  <main>
    <a href="index.php"><- Back to Home page</a>
    <?php 
      echo "<h1>". $xml->champion[$odabir]->name ."</h1>";
      echo "<img class='img1' src='img/". $xml->champion[$odabir]->image->full ."'>";
      echo "<h3>Basic information</h3><br>";
      echo "Name: ". $xml->champion[$odabir]->name ."<br><br>";
      echo "Title: ". $xml->champion[$odabir]->title ."<br><br>";
      echo "Short lore: ". $xml->champion[$odabir]->blurb ."<br><br>";
      echo "Role: ". $xml->champion[$odabir]->tags[0] . " " . $xml->champion[$odabir]->tags[1]. "<br><br>";
      echo "<h3>Stats</h3><br><img class='img2' src='HP5.png'> HP: ". $xml->champion[$odabir]->stats->hp. "<br>";
      echo "<img class='img2' src='HP5.png'> HP per level: ". $xml->champion[$odabir]->stats->hpperlevel. "<br>";
      echo "<img class='img2' src='MS.png'> Movement speed: ". $xml->champion[$odabir]->stats->movespeed. "<br>";
      echo "<img class='img2' src='Armor.png'> Armor: ". $xml->champion[$odabir]->stats->armor. "<br>";
      echo "<img class='img2' src='Armor.png'> Armor per level: ". $xml->champion[$odabir]->stats->armorperlevel. "<br>";
      echo "<img class='img2' src='Range.png'> Attack range: ". $xml->champion[$odabir]->stats->attackrange. "<br>";
      echo "<img class='img2' src='HP5.png'> HP regeneration: ". $xml->champion[$odabir]->stats->hpregen. "<br>";
      echo "<img class='img2' src='HP5.png'> HP regeneration per level: ". $xml->champion[$odabir]->stats->hpregenperlevel. "<br>";
      echo "<img class='img2' src='AD.png'> Attack damage: ". $xml->champion[$odabir]->stats->attackdamage. "<br>";
      echo "<img class='img2' src='AD.png'> Attack damage per level: ". $xml->champion[$odabir]->stats->attackdamageperlevel. "<br>";
      echo "<img class='img2' src='Attack_Speed.png'> Attack speed: ". $xml->champion[$odabir]->stats->attackspeed. "<br>";
      echo "<img class='img2' src='Attack_Speed.png'> Attack speed per level: ". $xml->champion[$odabir]->stats->attackspeedperlevel. "<br>";
    ?>
  </main>
  <footer>
    <p>© Josip Frančić, 2021. TVZ</p>
  </footer>
</body>
</html>