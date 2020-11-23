<?php
$bg_color = "lightblue";
$fontsize = "20px";
$fontColor= "grey";

?>
<!DOCTYPE html>
<html>
<head>
	<title>Dynamic CSS with PHP</title>
	<style type="text/css">
		body{
			background-color: <?php echo $bg_color; ?>;
			font-size:<?php echo $fontsize; ?>;
			color: <?php echo $fontColor; ?>
		}
	</style>
</head>
<body>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

</body>
</html>