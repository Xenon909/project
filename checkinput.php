<?php
$titreErr =  "";
$titre = $cycle = $categorie = $matiere = $classe = $description = $reference = "" ;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["titre"])) {
        $nameErr = "Ce champ est obligatoire";
    } else {
        $name = test_input($_POST["name"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
          $nameErr = "Only letters and white space allowed";
        }
    }
}

?>
