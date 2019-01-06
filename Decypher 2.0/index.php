<?php

if (isset($_POST)) {
	$string = $_POST["string"];
} else {
	echo "shit";
}

function decypher($textTodeCode, $codeKeyword){
		
	$codeKeyword = str_split($codeKeyword);
	
	foreach ($codeKeyword as $key => $value) {
		$textTodeCode = str_replace($key, $value, $textTodeCode);
	}	
	echo $textTodeCode;
}
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Decypher 2.0</title>
</head>
<body>
<h1>Decypher 2.0</h1>

<form action="index.php" method="post" >
	<h3>Please input your  cyphered message that you want to be de-cyphered:</h3>
	<input type="text" name="string">
	<input type="submit" name="submit">
</form>

<p>
	Your cyphered message is: <?php echo $string . '<br>';	?>
	<br>
	Your decyphered message is: 
	<?php 
	decypher($string, 'germanikus');//we are setting up the code keyword here (second argument...)
	?>
	<br>
	<br>
	
</p>


</body>
</html>


