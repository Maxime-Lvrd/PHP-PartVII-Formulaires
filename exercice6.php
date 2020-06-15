<?php include 'header.php' ?>

<h1 class="text-center">Exercice 6</h1>

<?php 
// Vérifier si le formulaire est bien rempli
if (!empty($_POST['civility']) && !empty($_POST['lastname']) && !empty($_POST['firstname'])) {
    echo 'Bonjour ' . $_POST['civility'] . ' ' . $_POST['lastname'] . ' ' . $_POST['firstname'] . ' !';
// sinon afficher le formulaire
} else { ?>

<div class="d-flex justify-content-center">
    <form action="exercice6.php" method="post" class="col-6 border p-3 bg-dark text-white">
        <div class="form-group">
            <select class="form-control" name="civility" id="civility">
                <option selected="selected" disabled="disabled" value="">Civilité</option>
                <option value="Mr">Mr</option>
                <option value="Mme">Mme</option>
            </select>
        </div>
        <div class="form-group">
            <label for="lastname">Nom :</label>
            <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Doe">
        </div>
        <div class="form-group">
            <label for="firstname">Prénom :</label>
            <input type="text" class="form-control" id="firstname" name="firstname" placeholder="John">
        </div>
        <button type="submit">Envoyer</button>
    </form>
</div>

<?php }

include 'footer.php' ?>