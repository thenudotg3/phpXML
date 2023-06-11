<?php
	if(ISSET($_POST['load'])){
?>

<table class="table table-bordered">	
	<thead class="alert-info">
		<tr>
			<th>Name</th>
			<th>ID</th>
			<th>DEPARTMENT</th>
		</tr>
	</thead>
	
	<tbody>
	
		<?php
			$xml = simplexml_load_file('xml files/employees.xml');
			foreach($xml->employee as $employee){
				echo '
					<tr>
						<td>'.$employee->name.'</td>
						<td>'.$employee->id.'</td>
						<td>'.$employee->department.'</td>
					</tr>
				';
			}
		?>
	</tbody>
</table>
<?php
	}else{
?>
<table class="table table-bordered">	
	<thead class="alert-info">
		<tr>
			<th>Name</th>
			<th>ID</th>
			<th>DEPARTMENT</th>
		</tr>
	</thead>
	
	<tbody>
	
	</tbody>
</table>
<?php
	}
?>
