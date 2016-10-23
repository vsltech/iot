<!DOCTYPE html>
<!--WiringPi GPIO Numbering for me: 1, 4, 15, 16-->
<!--BCM GPIO Numbering for me: 14, 15, 18, 23-->
<!--Copyright VSL Creations-->

<html lang="en">
    <head>		
        <title>Home Automation- IoT Project</title>
        <meta charset="UTF-8" />					
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Door Counter - Entry/Exit" />
		<link rel="icon" type="png" href="favicon.png">
	</head>
	<body background="bg.jpg">
	<font face="calibri">
		<div align="center">
		<img src="header.png" width="75" height="auto">
		<h2>Home Automation- IoT Project</h2><hr><hr>
		<form method="post" action="index.php">
		
		<br><br>
		<table>
			<tr><td><h2>Room1</h2>
			    Please click on buttons to control your room</td>
			</tr>
		</table>
		<table style="text-align: left;" border=1>
			<tr>
				<td><img src="fanoff.png" width=40px>
					<?php 
						system("gpio mode 16 out");
						if(isset($_POST['off1']))
						{
							echo '<img src="fanoff.png" width=40px>';
							exec("gpio write 16 0");	
						}
						if(isset($_POST['on1']))
						{
							echo '<img src="fan.gif" width=40px>';
							exec("gpio write 16 1");
						}
				   
					?>
				</td>
				<td><h4>FAN1</h4><input type="submit" value="ON" name="on1" style="background-color: green;width:40px;"><br>
						 <input type="submit" value="OFF" name="off1" style="background-color: red;width:40px;">
				</td>
				<td><img src="bulboff.png" width=40px>
					<?php 
						system("gpio mode 15 out");
						if(isset($_POST['off2']))
						{
							echo '<img src="bulboff.png" width=40px>';
							exec("gpio write 15 0");
						}
						if(isset($_POST['on2']))
						{
							echo '<img src="bulbon.png" width=40px>';
							exec("gpio write 15 1");
						}
				    ?>
				</td>
				<td><h4>LIGHT1</h4><input type="submit" value="ON" name="on2" style="background-color: green;width:40px;"><br>
						   <input type="submit" value="OFF" name="off2" style="background-color: red;width:40px;">
				</td>
			</tr>	
		
			<tr>
				<td><img src="fanoff.png" width=40px>
					<?php 
						system("gpio mode 4 out");
						if(isset($_POST['off3']))
						{
							echo '<img src="fanoff.png" width=40px>';
							exec("gpio write 4 0");	
						}
						if(isset($_POST['on3']))
						{
							echo '<img src="fan.gif" width=40px>';
							exec("gpio write 4 1");
						}
				     ?>
				</td>
				<td><h4>FAN2</h4><input type="submit" value="ON" name="on3" style="background-color: green;width:40px;"><br>
						 <input type="submit" value="OFF" name="off3" style="background-color: red;width:40px;">
				</td>
				<td><img src="bulboff.png" width=40px>
					<?php 
						system("gpio mode 1 out");
						if(isset($_POST['off4']))
						{
							echo '<img src="bulboff.png" width=40px>';
							exec("gpio write 1 0");
						}
						if(isset($_POST['on4']))
						{
							echo '<img src="bulbon.png" width=40px>';
							exec("gpio write 1 1");
						}
				    ?>
				</td>
				<td><h4>LIGHT2</h4><input type="submit" value="ON" name="on4" style="background-color: green;width:40px;"><br>
						   <input type="submit" value="OFF" name="off4" style="background-color: red;width:40px;">
				</td>
			</tr>
				
		</table>
		</form>
		<br><br>

				
		</div>
		<br><hr>
		<footer align=center>
			<font size="2px">2016 &copy;<a href="http://www.vslcreations.com" title="Home Automation- IoT Project" target="_blank">VSL Creations</a>. All Rights Reserved.</font>
		</footer>
	</font>
	</body>
</html>

