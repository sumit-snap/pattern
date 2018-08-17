<!DOCTYPE html>
<html>
<head>
	<title>pattern</title>
</head>
<body>
	<?php
			$n=15;
			for($i=0;$i<=$n;$i++)
			{
				for($j=0;$j<=$n;$j++)
				{
					if($i==1 || $i==$n || $j==0 || $j==$n)
					{
						echo "*&nbsp;";
					}
					else
					{
						echo "&nbsp;&nbsp;&nbsp;";
					}	
				}
				echo("</br>");
			}
	?>
</body>
</html>