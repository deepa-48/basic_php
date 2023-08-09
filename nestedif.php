<?php 
$t=date("H");
if($t<"10")
{
	echo "have a good morning!";
}
else if($t<"20")
{
	echo "have a good day!";
}
else
{
	echo "have a good night!";
}
?>