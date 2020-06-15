<?php
 include 'header.php'; 

// création des variables POST
$lastname = $_POST['lastname'] ?? '';
$firstname = $_POST['firstname'] ?? ''; ?>

<!-- affichage des données / trim = enlever espaces avant et après -->
<p><?= trim(htmlspecialchars($lastname)) ?></p>
<p><?= trim(htmlspecialchars($firstname)) ?></p>

<?php include 'footer.php' ?>