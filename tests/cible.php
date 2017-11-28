<h2> Bonjour ! </h2>

<p> Je sais comment tu t'appelles he he. Tu t'appelles <?php echo $_POST["prenom"]; ?> ! </p>

<p> Je sais d'où tu viens également. Tu habites en <?php echo $_POST['nationalite']; ?> ! </p>

<p> Je vois aussi que tu adores <?php echo $_POST['aliment']; ?> ! </p>

Si tu veux changer de prénom <a href="test.php"> clique ici</a>. Tu seras redirigé sur la page du <strong> formulaire </strong>.
<br />
<br />
<br />
<br />



<?php
      if(isset($_POST["mdp"]) AND $_POST["mdp"] == "kangourou") {

        echo "<h3> Accès autorisé </h3>
        <p> Les codes sont <strong> 1JDK 4983 DHSK 3947 H98O </strong> </p>";

        # code...
      }

      else {
        echo 'Accès refusé<br />
        <a href="test.php"> cliquez-ici</a> pour revenir à la page d\'acceuil.' ;
      }
 ?>
