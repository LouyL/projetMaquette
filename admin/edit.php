<?php
require('../include/connect.php');
// 
$id = $_POST['id'];
var_dump($_POST);
if(isset($_POST['delete'])) {
    $req = $bdd->prepare("DELETE FROM personne WHERE id = '$id'");
    $req->execute();
    header('Location: admin_index.php');
}