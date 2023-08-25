
	<h1>Inicio</h1>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<a href="<?php echo base_url();?>index.php/estudiante/agregar">
					<button type="button" class="btn btn-primary">Crear Estudiante</button>
				</a>

				<a href="<?php echo base_url();?>index.php/estudiante/deshabilitados">
					<button type="button" class="btn btn-primary">Ver lista Deshabilitados</button>
				</a>

				<h1>Lista de estudiantes</h1>
				<table class="table">
					<tr>
						<td>No</td>
						<td>Nombre</td>
						<td>Apellido P.</td>
						<td>Apellido M.</td>
						<td>Nota</td>
						<td>Modificar</td>
						<td>Eliminar</td>
						<td>Deshabilitar</td>


					</tr>

					<?php
					$indice=1;
					foreach($estudiantes-> result() as $row)
					{
						?>
						<tr>
							<td><?php echo $indice;?></td>
							<td><?php echo $row->nombre;?></td>
							<td><?php echo $row->primerApellido;?></td>
							<td><?php echo $row->segundoApellido;?></td>
							<td><?php echo $row->nota;?></td>
							<td>
							<?php echo form_open_multipart('estudiante/modificar'); 
							?>
							<input type="hidden" name="idestudiante" value="<?php echo $row->idEstudiante;?>">
							<button type="submit" class="btn btn-success">MODIFICAR</button>
							<?php
							echo form_close();
							?>
							</td>							
							<td>
							<?php echo form_open_multipart('estudiante/eliminarbd'); 
							?>
							<input type="hidden" name="idestudiante" value="<?php echo $row->idEstudiante;?>">
							<button type="submit" class="btn btn-danger">ELIMINAR</button>
							<?php
							echo form_close();
							?>
							</td>

							<td>
							<?php echo form_open_multipart('estudiante/deshabilitarbd'); 
							?>
							<input type="hidden" name="idestudiante" value="<?php echo $row->idEstudiante;?>">
							<button type="submit" class="btn btn-warning">DESHABILITAR</button>
							<?php
							echo form_close();
							?>
							</td>
						</tr>
						<?php
						$indice++;
					}
					?>
					

				</table>
				
			</div>

		</div>
	</div>

	

