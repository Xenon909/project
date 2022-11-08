<?php
 header('Content-type: text/html; charset=UTF-8');
$NOM=$_POST['nom'];
$PRE=$_POST['prenom'];
$TEL=$_POST['tel'];
$CYCLE=$_POST['Cycle'];
$NIVEAU=$_POST['Niveau'];
$SEXE=$_POST['Sexe'];
$base = new PDO('mysql:host=localhost;dbname=gestionbiblio;charset=utf8mb4', 'root', '');

$base->query('insert into eleve (Nom,Prénom,tel,Cycle,Niveau,Sexe) 
values("'.$NOM.'","'.$PRE.'","'.$TEL.'","'.$CYCLE.'","'.$NIVEAU.'"
,"'.$SEXE.'")');  

//header('Location:pageAIE.php');/
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="pageAIE.css">
    <link rel="stylesheet" href="button.css">
    <link rel="stylesheet" href="button1.css">
</head>
<body>
<div class="d-flex flex-column justify-content-center w-100 h-100">

	<div class="d-flex flex-column justify-content-center align-items-center">
        <br><br>
		<big><h1 class="fw-light text-white m-0"><center><b><i><?php echo ($NOM) ?> <?php echo ($PRE) ?></i></b> </center></h1></big> 
        <big><h1 class="fw-light text-white m-0"><center> a bien étè enregistrer</center></h1></big>
	</div>
</div><br><br><br><br><center>
<button onclick="window.location.href = 'nav2.html'" class="button-63" role="">Revenir à l'acceuil</button><br>
<button onclick="window.location.href = 'tableE.php'" class="button-63" role="button">Voir la liste des élèves</button><br>
<button onclick="window.location.href = 'eleveF.php'" class="button-63" role="button">Ajouter un autre élève</button><br>
<button onclick="window.location.href = 'plustard.html'" class="button-64" role="button">prêter un livre à <?php echo ($NOM) ?> <?php echo ($PRE) ?></button></a></center>
</body>
</html>