<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Index</title>
</head>
<body>
    
<?php
$extension = [".pdf"];

if (isset($_POST["nom2"]) AND isset($_POST["prenom2"]) AND (isset($_FILES["upload"]) AND in_array($extension)){
    echo "Bonjour ".$_POST["sexe"]." ".$_POST["nom2"]." ".$_POST["prenom2"]."<br>".$_FILES["upload"]["name"].".".["type"];        
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



?>

</body>
</html>



