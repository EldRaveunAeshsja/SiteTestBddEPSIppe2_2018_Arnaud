<?php
/**
 * Created by PhpStorm.
 * User: arnau
 * Date: 27/03/2018
 * Time: 17:23
 */

?>

<?php
include '../include/connexion.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
</head>
<body>
<a href="../main.php">Retournez au menu</a>

<section>


</section>
    <h1>Code AITA des villes joignable</h1>
        <article>
            <?php

            $reponse = $bdd->query('SELECT * FROM aeroport');

            while ($donnees = $reponse->fetch()) {
                ?>



                <p><?php  echo $donnees['code_aita']; ?></p>


                <?php
            }$reponse->closeCursor();
            ?>
        </article>
</body>

</html>







