<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cible php</title>
</head>
<body>
<p>Connection: <?php  echo htmlspecialchars($_POST['ident']); ?></p>
<?php
	if(($_POST['pass'] == "kangourou") )
	{
		echo "<p>VOus etes conneté !!!</p>";
	}
	else
	{
		echo "<p>erreur de mot de pass!!</p>";

	}
	?>
	




</body>
</html>