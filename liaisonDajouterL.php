<?php
 header('Content-type: text/html; charset=UTF-8');
$REF=$_POST['ref'];
$CATEG=$_POST['categorie'];
$TITRE=$_POST['titre'];
$CYCLE=$_POST['cycle'];
$NIVEAU=$_POST['niveau'];
$MAT=$_POST['matiere'];
$DES=$_POST['comment'];
$base = new PDO('mysql:host=localhost;dbname=gestionbiblio;charset=utf8mb4', 'root', '');

$base->query('insert into livre (refl,titre,catégorie,cycle,niv,matiere,description) 
values("'.$REF.'","'.$CATEG.'","'.$TITRE.'","'.$CYCLE.'","'.$NIVEAU.'"
,"'.$MAT.'","'.$DES.'")');  

//header('Location:tablepersonne.php');/
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
		<big><h1 class="fw-light text-white m-0"><center><b><i>Le livre <?php echo ($TITRE) ?> de référence "<?php echo ($REF) ?>"</i></b> </center></h1></big> 
        <big><h1 class="fw-light text-white m-0"><center> a bien étè enregistrer</center></h1></big>
	</div>
</div><br><br><br><br><center>
<button onclick="window.location.href = 'nav2.html'" class="button-63" role="">Revenir à l'acceuil</button><br>
<button onclick="window.location.href = 'tableL.php'" class="button-63" role="button">Voir la liste des livres</button><br>
<button onclick="window.location.href = 'livreF.php'" class="button-63" role="button">Ajouter un autre livre</button><br>
</center>
</body>
</html>