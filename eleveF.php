<?php include ('nav2.html')?>
<div class="container">
        <header>Ajouter un élève</header>

        <form method="POST" action="liaisonDajouterE.php">
            <div class="form first">
                    <div class="upload">
      <img src="noprofil.jpg" width = 100 height = 100 alt="">
      <div class="round">
        <input type="file" name="photo">
        <i class = "fa fa-camera" style = "color: #fff;"></i>
      </div>
    </div><br>
    <div class="details personal">
                    <div class="fields">
                        <div class="input-field">
                            <label>Nom</label>
                            <input type="text" name="nom" placeholder="Veuillez enter un nom" required>
                         </div>
                        <div class="input-field">
                            <label>Prénom</label>
                            <input type="text" name="prenom" placeholder="Veuillez enter un prénom" required>
                        </div>
                        <div class="input-field">
                            <label>Numéro de téléphone</label>
                            <input type="number" name="tel" placeholder="Veuillez enter un num de tel" >
                        </div>
                        <div class="input-field"><br>
                            <label>Cycle</label>
                            <select name="Cycle" required>
                                <option disabled selected>Sélectionner un cycle</option>
                                <option>Primaire</option>
                                <option>Collège</option>
                                <option>Lycée</option>
                            </select>
                        </div>
                        <div class="input-field"><br>
                            <label>Niveau</label>
                            <select name="Niveau" required>
                                <option disabled selected> Sélectionner un niveau</option>
                                <option>CP</option>
                                <option>CE1</option>
                                <option>CE2</option>
                                <option>CM1</option>
                                <option>CM2</option>
                                <option>CE6</option>
                                <option>1AC</option>
                                <option>2AC</option>
                                <option>3AC</option>
                                <option>TCSf</option>
                                <option>1BAC S.EX</option>
                                <option>1BAC S.PC</option>
                                <option>1BAC S.MATH</option>
                                <option>2BAC S.EX</option>
                                <option>2BAC S.PC</option>
                                <option>2BAC S.MATH</option>
                            </select>
                        </div>
                        <div class="input-field"><br>
                            <label>Sexe</label>
                            <select name="Sexe" required>
                                <option disabled selected> Sélectionner un sexe</option>
                                <option>Masculin</option>
                                <option>Féminin</option>
                            </select>
                        </div>
                        
                    
                    </div>
                </div>

                        <br><br><br>
                    <div onclick="window.location.href ='nav2.html'" class="buttons">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
                        <div  class="backBtn">
                            <i class="uil uil-navigator"></i>
                            <span class="btnText">Annuler</span>
                        </div>
                        &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
                        <button class="sumbit">
                            <span class="btnText">Enregistrer</span>
                            <i class="uil uil-navigator"></i>
                        </button>
                    </div>
                </div> 
            </div>
        </form>
    </div>
