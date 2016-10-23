<?php require('send.php'); ?>

<?php 

	$error = array();

	if(isset( $_POST['submit'] )){
		$Name=$_POST['naam'];
		$address=$_POST['address'];
		$university=$_POST['university'];
		$to=$_POST['to'];
		$from=$_POST['from'];
		$message=$POST['message'];
		$subject=$POST['subject'];

		
		if(empty($Name)){
			$error['naam'] = "name is empty "."<br>";
		}
		if(empty($address)){
			$error['address'] = "address is empty "."<br>";
		}
		if(empty($university)){
			$error['university'] = "university is empty "."<br>";
		}
		if(empty($to)){
			$error['to'] = "to is empty "."<br>";
		}
		if(empty($from)){
			$error['from'] = "from is empty "."<br>";
		}


	}
 ?>
<form action="" method="POST">
	<input type="email" name="to" placeholder="to email"><br>
	<?php 
		if(isset($error['to'])){
			echo $error['to'];
		}
	 ?>
	<input type="email" name="from" placeholder="from email"><br>
	<?php 
		if(isset($error['from'])){
			echo $error['from'];
		}
	 ?>
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
	 <input type="text" name="subject" placeholder="subject"><br>
	<?php 
		if(isset($error['subject'])){
			echo $error['subject'];
		}
	 ?>
	 <input type="text" name="message" placeholder="message"><br>
	<?php 
		if(isset($error['message'])){
			echo $error['message'];
		}
	 ?>

	<input type="submit" name="submit" value="register"><br>
</form>