<html>
<head>
	<title>Calculate</title>
</head>
<body>
<font face="Arial">
	<table style="width: 100%" align="center">
	<tr><td align="center">
		<?php

		if(isset($_POST['num1']) && !empty($_POST['num1']) && !empty($_POST['num2'])){
			$num1=$_POST['num1'];
			$num2=$_POST['num2'];
			$operator=$_POST['operator'];
			
			if($operator == "+"){
				echo "The Answer of $num1 + $num2 = ".($num1+$num2);
			}elseif ($operator == "-") {
				echo "The Answer of $num1 - $num2 = ".($num1-$num2);
			}elseif ($operator == "*") {
				echo "The Answer of $num1 * $num2 = ".($num1*$num2);
			}elseif ($operator == "/") {
				echo "The Answer of $num1 / $num2 = ".($num1/$num2);
			}
		}
		?>
	</td></tr><tr></tr>
	<tr><td align="center">.........................................................</td></tr>
	<tr></tr>
	<tr><td align="center">
	<a href="calculate.html" target="_parent"><input type ="submit" name="back" value="Go Black to Calculate Program"></a>
	</td></tr>
	<tr><td align="center"><hr width="70%" align="center" noshade>
	</tr></td>
</font>	
</body>
</html>