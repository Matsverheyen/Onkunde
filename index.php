<?php    
if(isset($_POST['SubmitButton'])){
  $disp = "none";
  $senteces = ["Er heerst paniek in het koninkrijk " . $_POST["q3"] . " Koning " . $_POST["q6"] . " is ten einde raad en als koning " . $_POST["q6"] . " ten einde raad is roep hij, zijn ten-einde-raadsheer " . $_POST["q2"], $_POST["q2"] . "! Het is een ramp! Het is een shande!", "Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?", "Mijn " . $_POST["q1"] . " is verdwenen! Zo maar, zonder waarschuwing. En ik had net " . $_POST["q5"] . " voor hem gekocht!", "Majesteit, uw " . $_POST["q1"] . " komt vast vanzelf weer terug?", "Ja, da's leuk en aardig, maar hoe moet ik in de tussentijd " . $_POST["q8"] . " leren?", "Maar Sire, daar kunt u toch uw " . $_POST["q7"] . " voor gebruiken.", $_POST["q2"] . ", Je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had.", $_POST["q4"] . ", Sire"];
}    
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/style.css">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <title>Mad Libs | Paniek</title>
</head>

<body class="bg-secondary">
  <div class="main bg-secondary">
    <h1 class="logo">Mad Libs</h1>
    <ul class="navlist bg-danger">
  <li class="item"><a href="index.php">Er heerst paniek...</a></li>
  <li class="item"><a href="onkunde.php">Onkunde</a></li>
</ul>
    <div class="form_body">
      <h1 id="form_header">Er heerst paniek...</h1>
      <div class="container">
        <?php 
          if(isset($_POST['SubmitButton'])){
            echo "<ul class=\"story\" style=\"list-style-type:none\">";
            for ($i=0; $i < 9; $i++) { 
              echo "<li class=\"list_item\">" . htmlspecialchars($senteces[$i]) . "</li>";
            }
            echo "</ul>"; 
            } ?>
        <ul class="questions" style="list-style-type:none; display:<?=$disp;?>">
          <li class="list_item">Welk dier zou je nooit als huisdier willen hebben?</li>
          <li class="list_item">Wie is de belangrijkste persoon in je leven?</li>
          <li class="list_item">In welk land zou je graag willen wonen?</li>
          <li class="list_item">Wat doe je als je je verveelt?</li>
          <li class="list_item">Met welke speelgoed speelde je als kind het meest?</li>
          <li class="list_item">Bij welke docent spijbel je het liefst?</li>
          <li class="list_item">Als je € 100.000,- had wat zou je dan kopen?</li>
          <li class="list_item">Wat is je favoriete bezigheid?</li>
        </ul>
        <ul class="answers" style="display:<?=$disp;?>"">
          <form data-toggle="validator" autocomplete="off" action="#" method="post" role="form">
          <input class="form-control-sm" type="text" name="q1" required><br>
          <input class="form-control-sm" type="text" name="q2" required><br>
          <input class="form-control-sm" type="text" name="q3" required><br>
          <input class="form-control-sm" type="text" name="q4" required><br>
          <input class="form-control-sm" type="text" name="q5" required><br>
          <input class="form-control-sm" type="text" name="q6" required><br>
          <input class="form-control-sm" type="text" name="q7" required><br>
          <input class="form-control-sm" type="text" name="q8" required><br>
          <input class="btn button-lg btn-primary btn-outline-light" type="submit" name="SubmitButton">
          </form>
        </ul>
      </div>
    </div>
    <ul class="footer bg-dark">
  <p class="foot">Deze website is gemaakt door Spinoza</p>
</ul>
  </div>
</body>

</html>