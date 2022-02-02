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
      <form action="procesar.php" method="post">
        <div>
          <label>Nombre (s):</label>
          <input class="input is-danger" type="text" name="nombre">
        </div>

        <div>
          <label>Apellido Paterno:</label>
          <input class="input is-danger" type="text" name="apat">
        </div>

        <div>
          <label>Apellido Materno:</label>
          <input class="input is-danger" type="text" name="amat">
        </div>

        <div>
          <label>Cargo:</label>
          <input class="input is-danger" type="text" name="cargo">
        </div>

        <div>
          <label>RFC:</label>
          <input class="input is-danger" type="text" name="rfc">
        </div>

        <div>
          <label>CURP:</label>
          <input class="input is-danger" type="text" name="curp">
        </div>

        <div>
          <label>Domicilio:</label>
          <input class="input is-danger" type="text" name="dom">
        </div>

        <div>
          <label>Teléfono:</label>
          <input class="input is-danger" type="int" name="tel">
        </div>

        <div>
          <label>Correo electrónico:</label>
          <input class="input is-danger" type="text" name="email">
        </div>

        <div>
          <label>Sexo:</label>
          <input class="input is-danger" type="text" name="sex">
        </div>

        <div>
          <label>Fecha de nacimiento:</label>
          <input class="input is-danger" type="text" name="fn">
        </div>

        <div>
          <label>Estado civil:</label>
          <input class="input is-danger" type="text" name="ec">
        </div>

        <div>
          <label>Escolaridad:</label>
          <input class="input is-danger" type="text" name="esc">
        </div>

        <div>
          <label>Referencia familiar:</label>
          <input class="input is-danger" type="text" name="rf">
        </div>

        <div>
          <label>Observaciones:</label>
          <input class="input is-danger" type="text" name="obs">
        </div>

        <div>
          <input type="submit" class="button is-danger" name="guardar">
        </div>

      </form>
    </div>
      <div class="column"></div>
    </div>

   

  </section>




 	 </body> 
 </html>
