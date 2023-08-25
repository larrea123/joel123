
	<h1>Inicio</h1>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>Agregar estudiante</h1>
					<?php
					/*
					<form action="<?php echo base_url();?>index.php/estudiante/agregarbd" method="POST">
					*/?>
					<?php echo form_open_multipart('estudiante/agregarbd'); 
					?>
					<input type="text" name="nombre" placeholder="Escriba el nombre" class="form-control" value="<?php echo set_value('nombre'); ?>">
					
					<?php echo form_error('nombre'); ?>

					<input type="text" name="apellido1" placeholder="Escriba el primer apellido" class="form-control">value="<?php echo set_value('apellido'); ?>">
					
					<?php echo form_error('apellido'); ?>

					<input type="text" name="apellido2" placeholder="Escriba el segundo apellido" class="form-control">
					<input type="text" name="nota" placeholder="Escriba la nota" class="form-control" value="<?php echo set_value('nota'); ?>">
					
					
					<button type="submit" class="btn btn-success">AGREGAR</button>
					<?php
					echo form_close();
					?>


<?php
/*				
</form>
*/
?>				
			</div>

		</div>
	</div>

	

