<?php

session_start();


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cible php</title>
</head>
<body>
<p>Connection: <?php  echo htmlspecialchars($_POST['ident']); ?></p>
<?php
	if (isset($_POST['pass']) AND ($_POST['pass'] == "serialcoder") )
	{
		echo "<p>VOus etes conneté !!!</p>";
	}
	else
	{
		echo "<p>ta geule cest pas le bon pass!!</p>";

	}
	?>
	
	<?php
		echo $_SESSION['ident'];		
		echo $_SESSION['pass'];
	?>



</body>
</html>