<!DOCTYPE html> <html>
 	<head>
 		<meta charset="utf-8">
 		<meta name="viewport" content="width=device-width, initial-scale=1">
 		<title>Inicio</title>
 		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bulma.min.css');?>">
 </head>
 <body> 
 	<!-- Esto es un fragmento de PHP --> 
<section class="hero is-danger">
		<div class="hero-body">
			<p class="title">Formulario en PHP</p>
			<p class="subtitle">Victor Hugo</p>
		</div>
	</section>



  <section class="section">
    

    <div class="columns">
      <div class="column"></div>
      
      <div class="column is-three-fifths">
        

        <?php
          $nombre= $_POST['nombre'];
          $apat = $_POST['apat'];
          $amat = $_POST['amat'];
          $cargo = $_POST['cargo'];
          $rfc = $_POST['rfc'];
          $curp = $_POST['curp'];
          $dom = $_POST['dom'];
          $tel = $_POST['tel'];
          $email = $_POST['email'];
          $sex = $_POST['sex'];
          $fn = $_POST['fn'];
          $ec = $_POST['ec'];
          $esc = $_POST['esc'];
          $rf = $_POST['rf'];
          $obs = $_POST['obs'];
        
          echo $nombre."<br>" .$apat."<br>".$amat."<br>".$cargo."<br>".$rfc."<br>".$curp."<br>".$dom."<br>".$tel."<br>".$email."<br>".$sex."<br>".$fn."<br>".$ec."<br>".$esc."<br>".$rf."<br>".$obs;
        ?>

      </div>

      <div class="column"></div>
    </div>

   

  </section>




 	 </body> 
 </html>
