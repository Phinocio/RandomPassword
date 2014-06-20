<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Random Password Generator</title>
	</head>
	<body>
		<?php 
			$characters = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z',
								'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z',
								'0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '!', '@', '#', '$', '%', '&');
			$length = 20; // The length of the password.
			$strength = 0; // 0 = Lowercase only; 1 = Lowercase and Uppercase; 2 = Alphanumeric; 3 = Alphanumeric + symbols; Default: 2.
			$pass = '';
			
			
			/*if($strength == 0)
			{*/
				echo '<h1>Password Strength 0</h1>';
				for($ii = 0; $ii < 3; $ii ++)
				{
					for($i = 0; $i < $length; $i++)
					{
						$pass .= $characters[rand(0,25)];
					}
					
					echo $ii . ': ' . $pass . '<br/>';
					$pass = '';
				}
				
				echo 'Amount of combinations possible is 26<sup>' . $length . '</sup> which = ' . pow(26,$length);
			//}
			
				echo '<h1>Password Strength 1</h1>';
				for($ii = 0; $ii < 3; $ii ++)
				{
					for($i = 0; $i < $length; $i++)
					{
						$pass .= $characters[rand(0,51)];
					}
					
					echo $ii . ': ' . $pass . '<br/>';
					$pass = '';
				}
				
				echo 'Amount of combinations possible is 52<sup>' . $length . '</sup> which = ' . pow(52,$length);
				
				echo '<h1>Password Strength 2 (Default)</h1>';
				for($ii = 0; $ii < 3; $ii ++)
				{
					for($i = 0; $i < $length; $i++)
					{
						$pass .= $characters[rand(0,61)];
					}
					
					echo $ii . ': ' . $pass . '<br/>';
					$pass = '';
				}
				
				echo 'Amount of combinations possible is 62<sup>' . $length . '</sup> which = ' . pow(62,$length);
				
				echo '<h1>Password Strength 3</h1>';
				for($ii = 0; $ii < 3; $ii ++)
				{
					for($i = 0; $i < $length; $i++)
					{
						$pass .= $characters[rand(0,67)];
					}
					
					echo $ii . ': ' . $pass . '<br/>';
					$pass = '';
				}
				
				echo 'Amount of combinations possible is 68<sup>' . $length . '</sup> which = ' . pow(68,$length);
		
		?>
	</body>
</html>
