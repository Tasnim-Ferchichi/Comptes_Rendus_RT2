<?php

if (!isset($_POST['nom']) || !isset($_POST['prenom']) || !isset($_POST['nb']) || !isset($_POST['adresse']) || !isset($_POST['type']) || !isset($_FILES['cin'])) 
{
    header('location:./resa.html');
    return;
}



echo "<h1>Recap de la commande</h1>" . "<br>";

$nom = htmlspecialchars($_POST['nom']);

echo "<b>Nom</b> : $nom" . "<br>";
$prenom = htmlspecialchars($_POST['prenom']);

echo "<b>Prenom</b> : $prenom" . "<br>";
$nbre = htmlspecialchars($_POST['nb']);

echo "<b>Nombre de sandwiches</b> : $nbre" . "<br>";
$adresse = htmlspecialchars($_POST['adresse']);

echo "<b>Adresse</b> : $adresse" . "<br>";
$type = $_POST['type'];

echo "<b>Type de sandwiches</b> : $type" . "<br>";
$add = $_POST['add'];

echo "<b>Les sauces :</b>" . "<br>";
foreach ($add as $sauce) {
    echo "<li>$sauce</li>";
}


$prix_unite = 4;
$prix_total;

if ($nbre < 10) {
    $prix_total = $nbre * 4;
}
else {
    $prix_total = ($nbre * 4) * 0.9;
}
echo "<b>Le prix de votre commande est : </b>" . $prix_total . " TND" . "<br>";



$filetype = strtolower(pathinfo(basename($_FILES['cin']['name']), PATHINFO_EXTENSION));

$unique_id = uniqid();

$file_name = "uploads/$unique_id.$filetype";

$success = move_uploaded_file($_FILES['cin']['tmp_name'], $file_name);

if (!$success) {
    header('location:./resa.html');
    return;
}

?>