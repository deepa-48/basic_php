<!DOCTYPE html>
<html>
<body>
<?php
$cars=array(array("volvo",22,18),array("bmw",15,13),array("saab",5,2),array("land Rover",17,15))
echo $cars[0][0]."instock".$cars[0][1]."sold".$cars[0][2]."<br>";
echo $cars[1][0].":instock:".$cars[1][1]."sold:".$cars[1][2]."<br>";
echo $cars[2][0].":instock".$cars[2][1].",sold:".$cars[2][2]."<br>";
echo $cars[3][0].":instock".$cars[3][1].",sold:".$cars[3][2]."<br>";
?>
</body>
</html>