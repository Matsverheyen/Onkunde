<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../css/style.css">
  <title>Mad Libs | Onkunde</title>
</head>
<body>
  <div class="main">
    <h1 class="logo">Mad Libs</h1>
    <?php include 'nav2.html';?>
    <div class="form_body">
  <h1 id="form_header">Onkunde</h1>
  <p id="text">Er zijn veel mensen die niet kunnen <?=$_GET["q1"]?>. Neem nou maar een voorbeeld aan <?=$_GET["q2"]?>. Zelfs met de hulp van een <?=$_GET["q4"]?> of zelfs <?=$_GET["q3"]?> kan <?=$_GET["q2"]?> niet <?=$_GET["q1"]?>. Dat heeft niet te maken met een gebrek aan <?=$_GET["q5"]?>, maar met een te veel aan <?=$_GET["q6"]?>. Te veel <?=$_GET["q6"]?> leidt tot <?=$_GET["q7"]?> en dat is niet goed als je wilt leren <?=$_GET["q1"]?>. Helaas voor <?=$_GET["q2"]?>.</p>
  <?php include 'footer.php';?>
</div>
  </div>
</body>
</html>