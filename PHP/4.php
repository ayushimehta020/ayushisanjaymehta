<?php
	// For Loop
	for($i=1; $i<=5; $i++)
	{
		for($j=1; $j<=$i; $j++)
		{
			echo $j . " ";
		}
		echo "<br>";
	}
	
	echo "<br>";
	
	// While Loop
	$i = 1;
	while($i<=5)
	{
		$j = 1;
		while($j<=$i)
		{
			echo $j . " ";
			$j++;
		}
		echo "<br>";
		$i++;
	}
	
	echo "<br>";
	
	// Do..While Loop
	$i = 1;
	do
	{
		$j = 1;
		do
		{
			echo $j . " ";
			$j++;
		}while($j<=$i);
		echo "<br>";
		$i++;
	}while($i<=5);
?>