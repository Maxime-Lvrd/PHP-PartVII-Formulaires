<?php
 include 'header.php'; 

// création des variables GET
$lastname = $_GET['lastname'] ?? '';
$firstname = $_GET['firstname'] ?? ''; ?>

<!-- affichage des données / trim = enlever espaces avant et après -->
<p><?= trim(htmlspecialchars($lastname)) ?></p>
<p><?= trim(htmlspecialchars($firstname)) ?></p>

<?php include 'footer.php' ?>