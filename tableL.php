<?php include ('nav2.html')?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Document</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta http-equiv="X-UA-Compatibile" content="ie=edge">
	<meta name="pinterest" content="nopin" />
  <link rel="stylesheet" href="tableE.css">
</head>
<body>
  <h1 style="margin-top:-21em;"> Liste des livres</h1>
  <table style="margin-top:-14em;" class="companies responsive">
    <style>
      /* CSS-made table column headers */
      table.companies tr :nth-child(1):before{content: "Référence";}
      table.companies tr :nth-child(2):before{content: "Titre";}
      table.companies tr :nth-child(3):before{content: "Catégorie";}
      table.companies tr :nth-child(4):before{content: "Cycle";}
      table.companies tr :nth-child(5):before{content: "Niveau";}
      table.companies tr :nth-child(6):before{content: "Matière";}
    </style>
    <tr class="titles-vertical">
      <!-- HTML headers - leave empty! Get populated by the css above -->
      <th></th>
      <th></th>
      <th></th>
      <th></th>
      <th></th>
      <th></th>
    </tr>
    <?php
$base = new PDO('mysql:host=localhost;dbname=gestionbiblio;charset=utf8mb4', 'root', '');
$data =$base->query('select * from livre')-> fetchAll(); //data c'est le resultat de la requete
foreach ($data as $row) {
echo "<tr><td>".$row['refl']."</td><td>".$row['titre']."</td><td>".$row['catégorie']."</td><td>".$row['cycle']."</td><td>".$row['niv']."</td><td>".$row['matiere']."</td></td>";
}
?>
  </table>
</body>
</html>