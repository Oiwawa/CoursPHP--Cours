<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Les formulaires</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
if (isset($_POST['nom']) && !empty($_POST['nom'])) {
    $nom = filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_STRING);
}
if (isset($_POST['prenom']) && !empty($_POST['prenom'])) {
    $prenom = filter_var($_POST['prenom'], FILTER_SANITIZE_STRING);

}
if (isset($_POST['adresse']) && !empty($_POST['adresse'])) {
    $adresse = filter_input(INPUT_POST, 'adresse', FILTER_SANITIZE_STRING);
}
if (isset($_POST['codepostal']) && !empty($_POST['codepostal'])) {
    $codepostal = filter_input(INPUT_POST, 'codepostal', FILTER_SANITIZE_STRING);

}
if (isset($_POST['ville']) && !empty($_POST['ville'])) {
    $ville = filter_input(INPUT_POST, 'ville', FILTER_SANITIZE_STRING);
}

$message = "";
if (!isset($_POST['nom']) || empty($_POST['nom'])) {
    $message.='Le nom n\'a pas été renseigné';
}
if (!isset($_POST['prenom']) || empty($_POST['prenom'])) {
    $message.= '\nLe prenom n\'a pas été renseigné';
}
if (!isset($_POST['adresse']) || empty($_POST['adresse'])) {
    $message.='\nL\'adresse n\'a pas été renseigné';
}
if (!isset($_POST['codepostal']) || empty($_POST['codepostal'])) {
    $message.= '\n Le code postal n\'a pas été renseigné';

}
if (!isset($_POST['ville']) || empty($_POST['ville'])) {
    $message.= '\n La ville n\'a pas été renseigné';
}
if(strlen($message)!=0) {
    echo "<script Language='javaScript'> window.alert( $message )</script>";
}
var_dump($message);

?>
<table>
    <thead>
    <tr>Données renseignées</tr>
    </thead>
    <br>
    <tbody>
    <tr>

        <?php
        $tabData = ["nom" => $nom, "prenom" => $prenom, "adresse" => $adresse,
            "codepostal" => $codepostal, "ville" => $ville];
        foreach ($tabData as $values => $v)
            echo "<td>$v</td> "

        ?>
    </tr>
    </tbody>
</table>
<br/>
<a href="indexTP1.php">Retourner au formulaire</a>
<br>
<a href="indexTP1Ex3.php">Exercice 3</a>
</body>
</html>


