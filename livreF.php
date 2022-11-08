<?php 
include ('nav2.html');
include ('checkinput.php');
?>

<div class="container">
<header>Ajouter un Livre</header>
    <form method="POST" action="liaisonDajouterL.php">
        <div class="form first">
            <div class="upload">
                <img src="book.png" width = 100 height = 100 alt="">
                <div class="round">
                    <input type="file">
                    <i class = "fa fa-camera" style = "color: #fff;"></i>
                </div>
            </div><!--<br>-->
            <div class="details personal">
                <div class="fields">
                   <div class="input-field">
                        <label>Réference</label>
                        <input type="number" name="ref" value="<?php echo $reference;?>" placeholder="Veuillez enter la réference du livre">
                    </div>
                        <div class="input-field">
                        <label>Catégorie</label>
                        <select name="categorie" value="<?php echo $categorie;?>" required>
                            <option disabled selected>Sélectionner une catégorie</option>
                            <option>Manuel d'élève</option>
                            <option>Dictionnaire</option>
                            <option>Histoire</option>
                            <option>Manuel du Professeur</option>
                            <option>Autres...</option>
                        </select>
                    </div>
                    <div class="input-field">
                        <label>Titre</label>
                        <input type="text" name="titre" placeholder="Veuillez enter le titre du livre" value="<?php echo $titre;?>"required>
                        </div>
                    <div class="input-field"><br>
                        <label>Cycle</label>
                        <select name="cycle" value="<?php echo $cycle;?>" required>
                            <option disabled selected>Sélectionner un cycle</option>
                            <option>Primaire</option>
                            <option>Collège</option>
                            <option>Lycée</option>
                        </select>
                    </div>

                    <div class="input-field"><br>
                        <label>Niveau</label>
                        <select name="niveau" required>
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
                    <label>Matière</label>
                    <select name="matiere" value="<?php echo $matiere?>" required>
                        <option disabled selected>Sélectionner une matière</option>
                        <option id="ma_op_1">Arabe</option>
                        <option id="ma_op_2">Francais</option>
                        <option id="ma_op_3">Anglais</option>
                        <option id="ma_op_4">Physique & Chimie</option>
                        <option id="ma_op_5">Sciences Vie & Terre</option>
                        <option id="ma_op_6">Philosophie</option>
                        <option id="ma_op_7">Informatique</option>
                        <option id="ma_op_8">Education Physique</option>
                        <option id="ma_op_9">Mathématiques</option>
                        <option id="ma_op_10">Histoire & Géographie</option>
                    </select>
                    <script>
                        jQuery.fn.toggleOption = function( show ) {
                            jQuery( this ).toggle( show );
                            if( show ) {
                                while( jQuery( this ).parent( 'span.toggleOption' ).length ) 
                                    jQuery( this ).unwrap( );
                            } else {
                                jQuery( this ).wrap( '<span class="toggleOption" style="display: none;" />' );
                            }
                        };
                        //var cycle = '<?php echo $cycle; ?>';
                        $('#matiere option').attr('disabled',true);
                        alert($cycle);
                        if($cycle == 'Primaire') {
                            $("#ma_op_5").toggleOption(false); 
                        }
                        
                    </script>
                </div>
                <div class="input-field" id="descriptionid">
                    <label>Description</label>
                    <textarea name="comment" rows="4" cols="60"><?php echo $description;?></textarea>
                </div>
                <!--<div class="buttons">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
                    <div class="backBtn">
                    <i class="uil uil-navigator"></i>
                    <span class="btnText">Annuler</span>
                </div>
                &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
                <button class="sumbit">
                    <span class="btnText" >Enregistrer</span>
                    <i class="uil uil-navigator"></i>
                </button>-->
                <!--</div>-->
                <!--</div>-->
                
            </div>
            <!--<br><br>-->
            <div onclick="window.location.href = 'nav2.html'" class="buttons">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
                <div class="backBtn" >
                    <i class="uil uil-navigator"></i>
                    <span class="btnText">Annuler</span>
                </div></a>
                &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
                <button class="sumbit">
                    <span class="btnText">Enregistrer</span>
                    <i class="uil uil-navigator"></i>
                </button>
            </div>
            <!--</div>--> 
        </div>
    </form>
</div>
