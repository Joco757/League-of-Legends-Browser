<?php
  $xml1 = simplexml_load_file("champions.xml") or die("Error: Cannot create object");
  $json1 = json_encode($xml1);
  $array1 = json_decode($json1, TRUE);

  $xml2 = simplexml_load_file("summoners.xml") or die("Error: Cannot create object");
  $json2 = json_encode($xml2);
  $array2 = json_decode($json2, TRUE);

  $xml3 = simplexml_load_file("runes.xml") or die("Error: Cannot create object");
  $json3 = json_encode($xml3);
  $array3 = json_decode($json3, TRUE);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" type="image/jpg" href="https://lolstatic-a.akamaihd.net/frontpage/apps/prod/harbinger-l10-website/en-us/production/en-us/static/favicon-0cf29ce019f7cd1e7b24f85ab6ff97da.ico"/>
  <title>League of Legends Browser</title>
  <style>
    * {
      font-family:Verdana, Geneva, Tahoma, sans-serif;
      background-color: rgb(71, 124, 161);
      margin: 0;
      padding: 0;
    }

    main {
        width: 70%;
        margin-left: auto;
        margin-right: auto;
        text-align: center;
    }

    h1 {
        font-size: 50px;
        padding-top: 80px;
        padding-bottom: 20px;
        color: white;
    }

    img {
      padding-top: 50px;
    }

    footer {
      width: 100%;
      position: absolute;
      bottom: 0;
      padding-bottom: 30px;
      padding-top: 30px;
      background-color: rgb(43, 77, 105);
    }

    footer p {
      color: white;
      text-align: center;
      background-color: rgb(43, 77, 105);
    }

    select, input {
      border: 1px solid black;
      padding: 5px;
      border-radius: 10px;
    }

    form {
      padding-bottom: 20px;
    }

  </style>
</head>
<body>
  <main>
    <img src="logo.png" width="500px">
    <h1>Browser</h1>
    <form method="POST" action="skripta.php">
        <label for="select1">Choose a champion:</label>
        <select name="select1">
        <?php
          for ($i = 0; $i < count($array1['champion']); $i++) {
            echo "<option value=". $i .">". $array1['champion'][$i]['name'] . "</option>";
          }
        ?>
        </select>
        <input type="submit" value="Search">
    </form>
    <form method="POST" action="skripta_summoner.php">
        <label for="select2">Choose a summoner spell:</label>
        <select name="select2">
        <?php
          for ($i = 0; $i < count($array2['summoner']); $i++) {
            echo "<option value=". $i .">". $array2['summoner'][$i]['name'] . "</option>";
          }
        ?>
        </select>
        <input type="submit" value="Search">
    </form>
    <form method="POST" action="skripta_runes.php">
        <label for="select3">Choose a rune:</label>
        <select name="select3">
        <?php
          for ($i = 0; $i < count($array3['runes']); $i++) {
            echo "<option value=". $i .">". $array3['runes'][$i]['name'] . "</option>";
          }
        ?>
        </select>
        <input type="submit" value="Search">
    </form>
  </main>
  <footer>
    <p>© Josip Frančić, 2021. TVZ</p>
  </footer>
</body>
</html>