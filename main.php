<!DOCTYPE html>
<html>
<head>
	<title>Site test BDD BTS</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">


</head>
<body>
<div class="container">
    <header class="row">
        <div class="col-lg-12">
            Entete
        </div>
    </header>
    <section>
        <h1>Management du personnel</h1>
    </section>
    <section>
        <h1>Management des vols</h1>
    </section>
    <footer class="row">
        <div class="col-lg-12">
            Pied de page
        </div>
    </footer>
</div>
</body>
</html>





<?php

    include 'include/connexion.php';

$reponse = $bdd->query('SELECT * FROM aeroport');

while ($donnees = $reponse->fetch()) {
    ?>



<p><?php  echo $donnees['code_aita']; ?></p>


<?php
 }$reponse->closeCursor();
?>
