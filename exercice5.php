<?php include 'header.php'; 


$civility = $_POST['civility'] ?? '';
$lastname = $_POST['lastname'] ?? '';
$firstname = $_POST['firstname'] ?? ''; ?>

<h1 class="text-center">Exercice 5</h1>

<div class="d-flex justify-content-center">
    <form action="exercice5.php" method="post" class="col-6 border p-3 bg-dark text-white">
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

<div class="text-center mt-4">
    <p><?= trim(htmlspecialchars($civility)) ?></p>
    <p><?= trim(htmlspecialchars($lastname)) ?></p>
    <p><?= trim(htmlspecialchars($firstname)) ?></p>
</div>

<?php include 'footer.php' ?>