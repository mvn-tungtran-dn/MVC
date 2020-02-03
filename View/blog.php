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
				<th>id</th>
				<th>category_id</th>
				<th>user_id</th>
				<th>title</th>
				<th>view</th>
				<th>is_active</th>
				<th>content</th>
				<th>created_at</th>
				<th>updated_at</th>
			</tr>
		</thead>
		<tbody>
			<?php
				foreach ($data as $value) {				
			?>
			<tr>
				<td><a href="index.php?controller=blog&action=infoblog&id=<?php echo $value['id']; ?>" title=""><?php echo $value['id']; ?></a></td>
				<td><?php echo $value['category_id']; ?></td>
				<td><?php echo $value['user_id']; ?></td>
				<td><?php echo $value['title']; ?></td>
				<td><?php echo $value['view']; ?></td>
				<td><?php echo $value['is_active']; ?></td>
				<td><?php echo $value['content']; ?></td>
				<td><?php echo $value['created_at']; ?></td>
				<td><?php echo $value['updated_at']; ?></td>
			</tr>
			<?php
				}
			?>
		</tbody>
	</table>
</body>
</html>