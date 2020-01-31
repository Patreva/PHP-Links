<!DOCTYPE html>
<html>
<head>
	<title>Links in file1</title>
</head>
<body>
<?php
$Name="Alex Kimathi";
$Position="Support coordinator Manager";
?>
<a href="File2.php?Name=<?php echo $Name; ?>">Click1</a><br>
<a href="File2.php?Name=<?php echo $Name; ?>&<?php echo $Position; ?>">Click2</a><br>
<a href="File2.php?Name=<?php echo $Name; ?>&Position=<?php echo urlencode($Position); ?>">Click3</a>
</body>
</html>