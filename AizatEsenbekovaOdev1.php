
<!DOCTYPE html>
<html>
<head>
</head>
<body style="background-color:#FAEBD7">
<?php
if(isset($_GET["size_"]))
{

function ucgen($boyut)
{
	for($i=1;$i<=$boyut;$i++)
	{	
		$j=0;
		while($j<$i)
		{
			echo "o ";
			$j++;
		}
		echo "<br>";
	}
}
$size=$_GET["size_"];
ucgen($size);
}
?>
<form action="AizatEsenbekovaOdev1.php" method="get">
Ucgen Boyutunu giriniz: <input type="number" name="size_" style="width:50px; height:30px; border-radius:8px;">
<input type="submit" name="ok_" value="OK" style="height:35px;">
</body>
</html>