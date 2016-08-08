<div align="center">
	<table class="table table-hover">
		<thead>
      	<tr>
        	<th>FIRST NAME</th>
        	<th>LAST NAME</th>
        	<th>E-MAIL</th>
      	</tr>
    	</thead>
    	<tbody>
			<?php 
			//Exportar el script que obtiene los récords mediante JSON
			require 'getJSON.php';
			//Script nos devuelve un arreglo $getData y se recorre 
			//para obtener los fields: 'First Name','Last Name' e 'Email'
			foreach ($getData as $row) :
			?>
			<tr>
				<td><?php echo $row['First Name']; ?></td>
				<td><?php echo $row['Last Name']; ?></td>
				<td><?php if (!isset($row['Email'])) {echo ' ';
					}else{echo $row['Email']; }?></td>
			<?php
			endforeach;
			?>		
		</tbody>
	</table>
</div>
