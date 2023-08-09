<!DOCTYPE html>
<html>
<body>
<?php 
$age=array("Peter"=>"35","Ben"=>"37","joe"=>"43");
foreach($age as $x=>$x_value)
{
	echo "keys".$x."value".$x_value;
	echo "<br>";
}
?>
</body>
</html>