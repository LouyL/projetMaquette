<?php include("include/header.php");
?>

<body>
    <div class="backg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form action="form.php" method="post" class="text-center">
                        <div class="form-group">
                            <label for="name"class="labelSize" >Votre nom :</label>
                            <input type="text" name="name" placeholder="Entrez votre nom" class="form-control">
                        </div>
                </div>
                <div class="col-12">
                    <div class="form-group text-center">
                        <label for='age' class="labelSize">Votre âge :</label>
                        <input type="number" name="age" placeholder="Entrez votre âge" class="form-control">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group text-center">
                        <label for='fonction' class="labelSize">Votre fonction : </label>
                        <input type='text' name="fonction" placeholder="Entrez votre fonction" class="form-control">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group text-center">
                        <label for="sexe" class="labelSize">Vous êtes :</label>
                        <select name="sexe" class="custom-select">
                            <option value="femme">Madame</option>
                            <option value="homme">Monsieur</option>
                            <option value="autre">Autre</option>
                        </select>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group text-center">
                        <label for="exampleFormControlTextarea1" class="labelSize">Votre question?</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="question" rows="3"></textarea>
                    </div>
                </div>
                <div class="col-12 text-center">
                    <input type="submit" class='btn btn-outline-danger leButton' value="Soumettre ">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php include("include/footer.php");
?>