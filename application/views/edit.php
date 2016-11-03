<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	  <form method="post" action="<?php echo base_url('update'); ?>">
	  	<input type="text" name="name" value="<?php echo $data[0] ; ?>" />
	  	<input type="email" name="email" value="<?php echo $data[1] ; ?>" />
	  	<input type="hidden" name="id" value="<?php echo $data[2] ; ?>" />
	  	<input type="submit" name="Update" value="Update"/>
	  </form>
</body>
</html>