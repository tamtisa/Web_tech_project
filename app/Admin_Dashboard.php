<?php
	session_start();
	//var_dump($GLOBALS);
?>
<html>
	<body>
		<table border="1" height="85%" width="80%" cellpadding="20" align="center">
			<tr height="20%">
				<td colspan="9">
					<img align="center"  src="Logo.jpg" width="100" height="50"/>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
					&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
					&emsp;&emsp;&emsp;
					Logged in as <a href="Admin_View_Profile.php"><?= $_SESSION['username']; ?></a> | 
					<a href="Login.php">Logout</a>
				</td>
			</tr>
			<tr height="200%">
				<td colspan="1" width="30%">
					Account
					<ul>
						<li><a href="Admin_Dashboard.php">Dashboard</a></li>
						<li><a href="Userlist.php">View Userlist</a></li>
						<li><a href="Admin_View_Profile.php">View Profile</a></li>
						<li><a href="Admin_Change_Profile_Picture.php">Change Profile Picture</a></li>
						<li><a href="Admin_Change_Password.php">Change Password</a></li>
						<li><a href="Login.php">Logout</a></li>
					<ul>
				</td>
				<td colspan="8" valign="top">
					<h3>Welcome <?= $_SESSION['username']; ?></h3>
					<br/><br/>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<b><i>Admin Panel</i></b><br/><br/>
					&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; <a href="">Contests</a>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; <a href="">Donations</a>
				</td>
			</tr>
			<tr height="10%">
				<td align="center" colspan="9">
					Copyright � 2017
				</td>
			</tr>
		</table>
	</body>
</html>