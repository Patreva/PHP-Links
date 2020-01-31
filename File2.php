<!DOCTYPE html>
<html>
<head>
	<title>links in file2</title>
</head>
<body>
	<pre>
<?php
print_r($_GET);
?>
</pre>
	<?php

$Name=$_GET['Name'];

echo $Name;

?>
<br>

<?php

$Position=$_GET['Position'];

echo $Position;
	?>

</body>
</html>