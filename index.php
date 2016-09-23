<?php
error_reporting(-1); # Report all PHP errors
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Omar's Password Generator</title>
  <link href="p2.css" rel="stylesheet" type="text/css" />
	<?php require 'logic.php'; ?>

</head>
<body>

	<h1>Omar's Password Generator</h1><br>

	<form method='GET' action='index.php'>

		<label>Enter the number of words you would like your password to have</label><br>
    <label>(You cannot exceed 9)</label> &nbsp;&nbsp;
    <input type='number' name='words' id='words' autofocus min='1' max="9"><br><br>
		<label>Would you like to have a number or a symbol in your password?</label><br>

    <input type='checkbox' name='chk[]' id='chk' value='char'>
		<label>Symbol</label><br>
    <input type='checkbox' name='chk[]' id='chk' value="num">
    <label>Number</label><br><br>
		<input type='submit' value='Generate Password' class='button'>

	</form><br>
	<h2>Your new password is:</h2>
<h3><?php echo $passwd?><h3><br>
</body></html>
