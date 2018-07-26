<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Index</title>
</head>
<body>
    
<?php
    if (isset($_POST["nom2"]) AND isset($_POST["prenom2"])){
        echo "Bonjour ".$_POST["sexe"]." ".$_POST["nom2"]." ".$_POST["prenom2"]."<br>".$_POST["upload"];
        $verif = $_POST["upload"];
        $extension = pathinfo($verif, PATHINFO_EXTENSION);

            if ($extension === "pdf"){
                echo "  Fichier PDF valide";
            } else {
                echo "  Fichier invalide";
            }         
    } else { 
?>
     <form action="index.php" method="post">
        <select name="sexe"  >
        <option >Mr</option>
        <option >Mme</option>               
        </select>
        <input type="text" name="nom2" placeholder="Entrer votre nom" required>
        <input type="text" name="prenom2" placeholder="Entrer votre prenom" required>
        <input type="file" name="upload" required>
        <input type="submit" value="Valider" >       
    </form>
<?php
}?>

</body>
</html>



