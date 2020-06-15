<?php include 'header.php' ?>

<h1 class="text-center">Exercice 2</h1>

<div class="d-flex justify-content-center">
    <form action="user1.php" method="post" class="col-6 border p-3 bg-dark text-white">
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

<?php include 'footer.php' ?>