<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
		<table border="1 solid">
			<tr>
				<th>Name</th>
				<th>Email</th>
			</tr>
			<?php for($i=0; $i<sizeof($show_all); $i++){ ?>
			<tr>
				<th><?php echo $show_all[$i][0] ; ?></th>
				<th><?php echo $show_all[$i][1] ; ?></th>
				<th><a href="<?php echo site_url().'edit_page/'.$show_all[$i][2] ; ?>" title="click for edit.">Edit</a></th>
				<th><a href="<?php echo site_url('Users/delete').'/'.$show_all[$i][2] ; ?>" title="click for delete.">Delete</a></th>
			</tr>
			<?php } ?>
		</table>
</body>
</html>