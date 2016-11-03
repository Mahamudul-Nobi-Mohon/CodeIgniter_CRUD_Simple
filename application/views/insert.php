<!DOCTYPE html>
<html>
<head>
	<title>insert,update,delete project</title>
</head>
<body>
		<form action="<?php echo base_Url('Users/insert') ?>" method="post">
			<input type="text" name="name" placeholder="type a name" />
			<input type="email" name="email" placeholder="type a email" />
			<input type="text" name="about" placeholder="about users" />
			<select name="gender">
				<option value="0">select</option>
				<option value="1">male</option>
				<option value="2">female</option>
			</select>
			<input type="submit" name="save" value="save" />
		</form>
</body>
</html>