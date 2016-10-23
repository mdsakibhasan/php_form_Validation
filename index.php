<?php 

	$error = array();

	if(isset( $_POST['submit'] )){
		$Name=$_POST['naam'];
		$address=$_POST['address'];
		$university=$_POST['university'];

		
		if(empty($Name)){
			$error['naam'] = "name is empty ";
		}
		if(empty($address)){
			$error['address'] = "address is empty ";
		}
		if(empty($university)){
			$error['university'] = "university is empty ";
		}

	}
 ?>
<form action="" method="POST">
	<input type="text" name="naam" placeholder="NAME"><br>
	<?php 
		if(isset($error['naam'])){
			echo $error['naam'];
		}
	 ?>

	<input type="text" name="address" placeholder="address"><br>
	<?php 
		if(isset($error['address'])){
			echo $error['address'];
		}
	 ?>

	<input type="text" name="university" placeholder="university"><br>
	<?php 
		if(isset($error['university'])){
			echo $error['university'];
		}
	 ?>
	<input type="submit" name="submit" value="register">
</form>