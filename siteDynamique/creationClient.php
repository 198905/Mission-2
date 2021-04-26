<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="main.css">
    <title>Ative Bretagne Informatique</title>
</head>
<body>
    <?php require('headerConnecte.php') ?>

    <?php require('menuSecondaireIntranet.php') ?>

    <div class="miette">
        <a href="indexConnecte.php"><img src="img/home.png" id="logoMiette"></a>
        <a href="mainIntranet.php">  / Accueil Intranet</a>
        <a href="commercial.php">  / Gestion commerciale </a> / Création client
    </div>

    <h2 class="h2Centre">Création client</h2>

    <?php require('rechercheIntranet.php') ?>

    <div class="containerGestionCommercial">
        <aside class="sideBar">
                <ul class="function">
                    <li><a href="listeClient.php">Liste des clients</a></li>
                    <li><a href="creationClient.php">Création client</a></li>
                </ul>
        </aside>   
        <div class="interface">
            <form id="formCreationClient" method="post" action="formulaire.php">
                <div id="containerCreationClientBlocTop">
                    <div id="bloc1Creationclient">
                        <p class="pFormCreationClient">    
                            <label>Raison sociale</label> 
                            <input class="formInputCreationClientBloc1" type="text" name="raisonSociale"  maxlength="32">
                        </p>  
                        <p class="pFormCreationClient">    
                            <label>Téléphone</label> 
                            <input class="formInputCreationClientBloc1" type="text" name="telephone" maxlength="15">
                        </p>  
                        <p class="pFormCreationClient">    
                            <label>Adresse</label>
                            <input class="formInputCreationClientBloc1" type="text" name="adresse">
                        </p>  
                    </div>
                    <div id="bloc2Creationclient">
                        <p class="pFormCreationClient">    
                            <label>Type</label>
                            <select class="formInputCreationClientBloc2" name ="typeSociete" id="type">
                                <option value="prive">Privé</option>
                                <option value="public">Public</option>
                            </select>
                        </p>  
                        <p class="pFormCreationClient">    
                            <label>Nature</label>
                            <select class="formInputCreationClientBloc2" name ="nature" id="nature">
                                <option value="principal">Principal</option>
                                <option value="secondaire">Secondaire</option>
                                <option value="ancienne">Ancienne</option>
                            </select>
                        </p>  
                        <p class="pFormCreationClient">    
                            <label>Activité</label>
                            <input class="formInputCreationClientBloc2" type="text" name="activite" maxlength="25" >
                        </p>  
                        <p class="pFormCreationClient">    
                            <label>Effectifs</label>
                            <input class="formInputCreationClientBloc2" type="number" name="effectif">
                        </p>  
                        <p class="pFormCreationClient">    
                            <label>Chiffres d'affaires</label>
                            <input class="formInputCreationClientBloc2" type="number" step="any" name="CA">
                        </p>
                    </div>
                </div>

                <hr class="hrIndex">

                <div id="bloc3CreationClient">                                
                    <p class="pFormCreationClientBloc3">    
                        <label class="labelCreationClientBottom">Commentaires</label>
                        <textarea id="textAreaCreationClientCommentaires" type="textarea" name="commentComm"></textarea>
                        <span id="formCreationClientFakeButton"><span> 
                    </p>   
                </div>
                <div class="flexCreationClient">
                    <a href="commercial.php"><div class="buttonCreationClient">Annuler</div></a>
                    <input class="buttonCreationClient" type="submit" value="Valider">
                </div>    
            </form>
        </div>
    </div>

    <?php require('footer.php')?>   
</body>
</html>
