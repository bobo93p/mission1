
<?php
$selectedvalue = isset($_POST['lstMois2']) ? $_POST['lstMois2'] : '';

?>

<form action="index.php?uc=suivicumul&action=cumul" method="post">
      <div class="corpsForm">
         
      <p>
	 
        <label for="lstMois" accesskey="n">Mois : </label>

        <select id="lstMois2" name="lstMois2">
            <?php



			foreach ($lesMois as $unMois)
			{
			  $mois = $unMois['mois'];
				$numAnnee =  $unMois['numAnnee'];
				$numMois =  $unMois['numMois'];

          $estslectionne = ($selectedvalue == $mois) ? 'selected' : '' ;
          ?>
          <option value="<?php echo $mois ?>" <?php echo $estslectionne?>> <?php echo  $numMois."/".$numAnnee ?> </option>

          <?php

          
			
			}  
		   ?>    
        </select>
      </p>
      </div>
      <div class="piedForm">
      <p>
        <input id="ok" type="submit" value="Valider" size="20" />
        <input id="annuler" type="reset" value="Effacer" size="20" />
      </p> 
      </div>
        
      </form>

    <h1>Cumul pour touts les visiteurs </h1>

    <table class='table'>
      <thead>
        <th>repas midid</th>
        <th>Nuitee</th>
        <th>Etape</th>
        <th>km</th>
      </thead>
      <tbody>
        <tr>
        <td><?= $repas['somme'] ?? '0'?></td>
        <td><?= $nuite['somme'] ?? '0'?></td>
        <td><?= $etp['somme'] ?? '0'?></td>
        <td><?= $km['somme'] ?? '0'?></td>
        </tr>
      </tbody>
    </table>

</div>