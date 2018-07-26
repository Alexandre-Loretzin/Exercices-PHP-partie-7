<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Index</title>
</head>
<body>
    
<?php
if (isset($_POST["nom2"]) AND isset($_POST["prenom2"])){
    echo "Bonjour ".$_POST["sexe"]." ".$_POST["nom2"]." ".$_POST["prenom2"];        
} else {
    echo "<form action=index.php method=post>
    <select name=sexe  >
        <option >Mr</option>
        <option >Mme</option>            
     </select>
    <input type=text name=nom2 placeholder=Entrer votre nom >
    <input type=text name=prenom2 placeholder=Entrer votre prenom >
     <input type=file name=upload>
     <input type=submit value=Valider >       
</form>";
}

$extension = ["pdf"];
$verif = strrchr($_FILES["upload"]["name"],".");

if (in_array($verif,$extension)){
    echo $_FILES["upload"]["name"].".".["type"];
} else {
    echo "Choisir un fichier PDF";
}
?>

</body>
</html>



