
<link rel="stylesheet" type="text/css" href="css/register.css">
<?php

		include 'dbcon.php';
		$selectquery = "select * form register";
		$query = mysqli_query($con,$selectquery);
		
		// while($result = mysqli_fetch_assoc($query)){
		$sql = "SELECT * FROM register";
		$query = mysqli_query($con,$sql);
		
		?>
<center><table border="1">
	<thead class="th">
		<th>id</th>
		<th>name</th>
		<th>email</th>
		<th>phone</th>
		<th>File</th>
		<th>gender</th>
		<th>Date Of Birth</th>
		<th>update</th>
	</thead>
	<tbody>

		<?php
		foreach ($query as $key => $value) {
			
		
		?>
	
		<tr>
			<td><?php echo $value['id']; ?></td>
			<td><?php echo $value['name']; ?></td>
			<td><?php echo $value['email']; ?></td>
			<td><?php echo $value['phone']; ?></td>
			<td><?php echo $value['file']; ?></td>
			<td><?php echo $value['gender']; ?></td>
			<td><?php echo $value['age']; ?></td>
			<td><a href=">Update</a></td>
		</tr>
	<?php 
		} 
	?>

	</tbody>
</table>
</center>



 