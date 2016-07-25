<?php include("FogBugz.php"); ?>

<!DOCTYPE html>
<html>
	<head>
		<title>Test</title>
	</head>
	<body>
		<?php echo actionSessionLogin($GET["username"], $GET["password"]); ?>
	</body>
</html>