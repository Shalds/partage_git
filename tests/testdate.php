<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>testDate</title>
    </head>
    <body>

      <?php
      	echo "Ceci est un test";
      	echo date('d/m/Y h:i:s');
      	
      	echo "<br /> le timesStamp actuel est de : " .time();

      	$timesStampfutur = mktime(12,0,0,11,23,2017);
      	echo "<br />" . $timesStampfutur;

      	$teststrtotime = strtotime('2017/11/23 12:00:00');
      	echo "<br />" .$teststrtotime;




		// Le 2ème argument c'est pour être sûr qu'il n'y aura pas 
		//de décalage horaire


       ?>


    </body>
</html>

