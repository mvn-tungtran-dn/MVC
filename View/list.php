<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<table>		
		<thead>
			<tr>				
				<th>ID</th>
				<th>Full Name</th>
				<th>Email</th>
				<th>Action</th>				
			</tr>
		</thead>
		<tbody>
			<?php
				foreach ($data as $value) {				
			?>
			<tr>
				<td><a href="index.php?controller=user&action=info&id=<?php echo $value['id']; ?>" title=""><?php echo $value['id']; ?></a></td>
				<td><?php echo $value['full_name']; ?></td>
				<td><?php echo $value['email']; ?></td>
				<td><a href="index.php?controller=user&action=update&id=<?php echo $value['id']; ?>" title="">Update</a><a href="index.php?controller=user&action=delete&id=<?php echo $value['id']; ?>" title="">Delete</a><br></td>

			</tr>
			<?php
				}
			?>
		</tbody>
	</table>
	<a href="index.php?controller=user&action=add" title="">New User</a><br>
</body>
</html>