<?php

if (isset($_POST)) {
	$string = $_POST["string"];
} else {
	echo "shit";
}

function germanikus(){
	global $string;
	$Gsolved = str_replace('g', 1, $string);
	$Esolved = str_replace('e', 2, $Gsolved);
	$Rsolved = str_replace('r', 3, $Esolved);
	$Msolved = str_replace('m', 4, $Rsolved);
	$Asolved = str_replace('a', 5, $Msolved);
	$Nsolved = str_replace('n', 6, $Asolved);
	$Isolved = str_replace('i', 7, $Nsolved);
	$Ksolved = str_replace('k', 8, $Isolved);
	$Usolved = str_replace('u', 9, $Ksolved);
	$Ssolved = str_replace('s', 0, $Usolved);
	echo $Ssolved;
}
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Cypher</title>
</head>
<body>
<h1>Cypher</h1>

<form action="index.php" method="post" >
	<h3>Please input your message that you want to be scrambled:</h3>
	<input type="text" name="string">
	<input type="submit" name="submit">
</form>

<p>
	You typed this: <?php echo $string . '<br>';	?>
	<br>
	Your crypted message now looks like this: <?php germanikus(); echo '<br>'; ?>
	<br>
	To de-crypt your crypted message, please use the Decypher webpage.
</p>


</body>
</html>


