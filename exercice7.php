<?php include 'header.php' ?>

<h1 class="text-center">Exercice 7</h1>

<?php 
// Tester si le formulaire est rempli et le fichier bien envoyé
if (isset($_POST['lastname']) && isset($_POST['firstname']) && isset($_FILES['file'])) {
    echo 'Bonjour ' . trim(htmlspecialchars($_POST['civility'])) . ' ' . trim(htmlspecialchars($_POST['lastname'])) . ' ' . trim(htmlspecialchars($_POST['firstname'])) . ', vous avez bien envoyé le fichier ' . trim(htmlspecialchars($_FILES['file']['name'])) . ' !';
// s'il n'est pas rempli, afficher le formulaire
} else { ?>
<div class="d-flex justify-content-center">
    <form action="exercice7.php" method="post" enctype="multipart/form-data"
        class="col-6 border p-3 bg-dark text-white">
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

        <div>
            <label for="file">Envoi de fichier :</label>
            <input type="file" name="file" id="file">
        </div>

        <button type="submit">Envoyer</button>
    </form>
</div>

<?php }

include 'footer.php' ?>