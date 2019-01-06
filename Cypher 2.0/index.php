<?php

if (isset($_POST)) {
	$string = $_POST["string"];
} else {
	echo "shit";
}

function cypher($textToCode, $codeKeyword){//the cypher function accepts two arugments. $textToCode comes from the user, and will be cyphered. The $codeKeyword is a STRING from the admin, this will be used for the cyphering process. 
		
	$codeKeyword = str_split($codeKeyword);//here we are making an array from the string, and keeping it in the same array. We will use the arrays key-value pairs to cypher a text. Every key (letters) will be replaced with the corresponging value (numbers)
	
	foreach ($codeKeyword as $key => $value) {//we are iterating/going through the keyword's key and correpsonding value pairs
		$textToCode = str_replace($value, $key, $textToCode);//...and we are replacing every key with a value (we are replacing the letters with numbers)
	}	
	echo $textToCode;
}
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Cypher 2.0</title>
</head>
<body>
<h1>Cypher 2.0</h1>

<form action="index.php" method="post" >
	<h3>Please input your message that you want to be cyphered:</h3>
	<input type="text" name="string">
	<input type="submit" name="submit">
</form>

<p>
	You typed this: <?php echo $string . '<br>';	?>
	<br>
	Your crypted message now looks like this: 
	<?php 
	cypher($string, 'germanikus');//the first argument here is the text that will be cyphered, and we are importing that from the Forms. The second item will be the coding keyword, which will be used for the cyphering process. This coding keyword is not something that we want to show the user. Also, we are setting up the code keyword here! Right now it is germanikus.
	?>
	<br>
	<br>
	To de-crypt your crypted message, please use the Decypher webpage.
</p>


</body>
</html>


