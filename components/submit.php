<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../css/style.css">
  <title>Mad Libs | Paniek</title>
</head>
<body>
  <div class="main">
    <h1 class="logo">Mad Libs</h1>
    <?php include 'nav2.html';?>
    <div class="form_body">
  <h1 id="form_header">Er heerst paniek...</h1>
    <ul class="questions">
    <li class="list_item">Er heerst paniek in het koninkrijk <?=$_GET["q3"]?>. Koning <?=$_GET["q6"]?> is ten einde raad en als koning <?=$_GET["q6"]?> ten einde raad is roep hij, zijn ten-einde-raadsheer <?=$_GET["q2"];?></li>
    <li class="list_item">"<?=$_GET["q2"]?>! Het is een ramp! Het is een shande!"</li>
    <li class="list_item">"Site, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?"</li>
    <li class="list_item">"Mijn <?=$_GET["q1"]?> is verdwenen! Zo maar, zonder waarschuwing. En ik had net <?=$_GET["q5"]?> voor hem gekocht!"</li>
    <li class="list_item">"Majesteit, uw <?=$_GET["q1"]?> komt vast vanzelf weer terug?"</li>
    <li class="list_item">"Ja, da's leuk en aardig, maar hoe moet ik in de tussentijd <?=$_GET["q8"]?> leren?"</li>
    <li class="list_item">"Maar Sire, daar kunt u toch uw <?=$_GET["q7"]?> voor gebruiken."</li>
    <li class="list_item">"<?=$_GET["q2"]?>, Je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had."</li>
    <li class="list_item">"<?=$_GET["q4"]?>, Sire"</li>
  </ul>
  <?php include 'footer.php';?>
</div>
  </div>
</body>
</html>