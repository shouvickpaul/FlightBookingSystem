<html>
	<head>
		<title>Add New User</title>
	</head>
	<body>
		<?php
			if(isset($_POST['Submit']))
			{
				
					$user_name=trim($_POST['username']);
				
					$password=$_POST['password'];
				
					$email_id=trim($_POST['email']);
				
					$name=$_POST['name'];
				
					$phone_no=trim($_POST['phone_no']);
				
					$address=$_POST['address'];
					require_once('Database Connection file/mysqli_connect.php');
					$query="INSERT INTO customer (customer_id,pwd,name,email,phone_no,address) VALUES (?,?,?,?,?,?)";
					$stmt=mysqli_prepare($dbc,$query);
					mysqli_stmt_bind_param($stmt,"ssssss",$user_name,$password,$name,$email_id,$phone_no,$address);
					mysqli_stmt_execute($stmt);
					$affected_rows=mysqli_stmt_affected_rows($stmt);
					//echo $affected_rows."<br>";
					// mysqli_stmt_bind_result($stmt,$cnt);
					// mysqli_stmt_fetch($stmt);
					// echo $cnt;
					mysqli_stmt_close($stmt);
					mysqli_close($dbc);
					/*
					$response=@mysqli_query($dbc,$query);
					*/
					if($affected_rows==1)
					{
						header('location:user_reg_success.php');
					}
					else
					{
						echo "Submit Error";
						echo mysqli_error();
					}
				
				
			}
			else
			{
				echo "Submit request not received";
			}
		?>
	</body>
</html>