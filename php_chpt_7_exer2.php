<?php
function activitytwo ($var1, $var2, $var3)
	{
		$var1 = $var1 +5;
		$var2 = $var2++;
		$var3 += 500;
		echo "<table border=\"1\">\n";
		echo "<tr><td>\$var3</td><td>$var1</td><td>$var2</td>";
	}
activitytwo(10,1,20);
