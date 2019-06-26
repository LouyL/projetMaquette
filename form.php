<?php
include("include/connect.php");

if(!isset($_POST['name']) && !isset($_POST['age']) && !isset($_POST['sexe']) && !isset($_POST['fonction']) && !isset($_POST['question'])) {
    echo "Désolé nous ne pouvons donnez suite a votre formulaire. Vérifier que tout les champs sont bien remplie.";
} else { 
$nom = $_POST['name'];
$age = $_POST['age'];
$genre = $_POST['sexe'];
$fonction = $_POST['fonction'];
$question = $_POST['question'];

$req = $bdd->prepare("INSERT INTO personne (name, fonction, age, sexe, question) VALUES ('$nom', '$fonction', '$age', '$genre', '$question')");
$req->execute();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Votre choix</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center title"><h1>Votre message à bien etait envoyé</h1></div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12 text-center text-form">
            <button type="button" class="btn btn-outline-danger " onclick="window.location.href='index.php'">Revenir à l'accueil</button>
            </div>
        </div>
    </div>

<?php
}
?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
