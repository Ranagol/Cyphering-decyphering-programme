<?php

if (isset($_POST)) {
	$string = $_POST["string"];
} else {
	echo "shit";
}

function reverseGermanikus(){
	global $string;
	$Greversed = str_replace(1, 'g', $string);
	$Ereversed = str_replace(2, 'e', $Greversed);
	$Rreversed = str_replace(3, 'r', $Ereversed);
	$Mreversed = str_replace(4, 'm', $Rreversed);
	$Areversed = str_replace(5, 'a', $Mreversed);
	$Nreversed = str_replace(6, 'n', $Areversed);
	$Ireversed = str_replace(7, 'i', $Nreversed);
	$Kreversed = str_replace(8, 'k', $Ireversed);
	$Ureversed = str_replace(9, 'u', $Kreversed);
	$Sreversed = str_replace(0, 's', $Ureversed);
	echo $Sreversed;
}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Decypher</title>
</head>
<body>


<form action="index.php" method="post" >
	<h3>Please input your crypted message that you want to be de-scrambled</h3>
	<input type="text" name="string">
	<input type="submit" name="submit">
</form>

<p>
	Your crypted message is: <?php echo $string . '<br>';	?>
	<br>
	Your de-crypted message is: <?php reverseGermanikus();?>
	
</p>
</body>
</html>


