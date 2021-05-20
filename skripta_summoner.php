<?php
  $xml = simplexml_load_file("summoners.xml") or die("Error: Cannot create object");
  $odabir = (int) $_POST['select2'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" type="image/jpg" href="https://lolstatic-a.akamaihd.net/frontpage/apps/prod/harbinger-l10-website/en-us/production/en-us/static/favicon-0cf29ce019f7cd1e7b24f85ab6ff97da.ico"/>
  <title><?php echo $xml->summoner[$odabir]->name;?></title>
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
      display: block;
      margin-left: auto;
      margin-right: auto;
      width: 15%;
      padding-top:30px;
      padding-bottom: 30px;
      border-radius: 100%;
    }

    footer {
      position: absolute;
      bottom: 0;
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
      echo "<h1>". $xml->summoner[$odabir]->name ."</h1>";
      echo "<img class='img1' src='img_summoner/". $xml->summoner[$odabir]->image->full ."'>";
      echo "<h3>Basic information</h3><br>";
      echo "Name: ". $xml->summoner[$odabir]->name ."<br><br>";
      echo "Description: ". $xml->summoner[$odabir]->description ."<br><br>";
      echo "Cooldown: ". $xml->summoner[$odabir]->cooldown ." seconds<br><br>";
      echo "Cost: ". $xml->summoner[$odabir]->costType ."<br><br>";
    ?>
  </main>
  <footer>
    <p>© Josip Frančić, 2021. TVZ</p>
  </footer>
</body>
</html>