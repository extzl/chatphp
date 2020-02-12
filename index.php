				<!DOCTYPE html>
				<html>
				<head>
					<title>чат</title>
				</head>
				<body>
					
				<?php

					$message;
						if (!empty($_POST))
					    {
					      $nikName = $_POST['login']; 
							}	
							
						if (!empty($_POST))
					    {
					      $expr = $_POST['message']; 
							}
											
					$file=fopen('chat.txt', 'a');

					 	 fseek($file, 0, SEEK_END);
					   fwrite($file, $nikName.':'.$expr."\r\n");

					  
					fclose($file);
				?>		
					
				</body>
				</html>