<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


<?php
// on va chercher connect
require('../include/connect.php'); 
// demarrer une session 
session_start();
// si c'est pas vide
if(!empty($_SESSION['login']) && !empty($_SESSION['pass'])) {
} else {
    header('Location: index.php');
    die();
}
//aller chercher les élements colums dans la base de donnée
$reponse = $bdd->query('SELECT * FROM personne');
while ($donnees = $reponse->fetch()) {
?>
<div class="centerElement">
<!-- les phrases de le base de donnée -->
<p style="font-size:2em;"><span style="display: none;"><?php echo $donnees['id'] ?></span> Il s'appelle <?php echo $donnees['name']; ?> il à <?php echo $donnees['age'] ;?> ans, il(elle) est un(e) <?php echo $donnees['sexe'] ?> il(elle) est <?php echo $donnees['fonction'] ?> et la réponse à la question c'est <?php echo $donnees['question'] ?></p>
<!-- supprimé les phrases -->
<form action="edit.php" method='post'>
    <input type='hidden' name="id" value="<?php echo $donnees['id'] ?>">
    <input class="btn btn-danger" type="submit" value="Delete" name="delete">
</form>

<?php
};
?>

<!-- deconnection de la session -->
<form action="logout.php" method="post">
    <input class="btn btn-secondary" type="submit" name="logout" value="deconnection">
</form>
</div>
<link rel="stylesheet" href="CSS/admin_login.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
</body>
</html>