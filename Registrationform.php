<!DOCTYPE html>
<html>
    <head>
        <style>
            *{
                background-color:blanchedalmond;
            }
            .bottom_up{
	width:100%;
	background-color:blanchedalmond;
	border-bottom:2px solid #f0f0f0;
}
form{
	position: absolute;
	right: 25%;
	
}
.bottom_up div{
	padding-top:20px;
	width:1200px;
	text-align:center;
	background-color:blanchedalmond;
	font-family:forte;
	font-size:30px;
	padding-bottom:20px;
}
.bottom_up div table{
	padding-top:30px;
	font-size:30px;
	width:1100px;
	text-align:center;
	background-color:blanchedalmond;
	font-family:calibri;
	
}

input[type="text"]{
	padding:5px;
	width:250px;
}

input[type="password"]{
	padding:5px;
	width:250px;}
	
input[type="email"]{
	padding:5px;
	width:250px;}
	
input[type="date"]{
	padding:5px;
	width:250px;}
	
input[type="number"]{
	padding:5px;
	width:250px;}
select{
	padding:5px;
	width:250px;
}
textarea{
	padding:50px;
	width:550px;
}
button{
	width:550px;
	padding:10px;
	color:#fff;
	font-size:20px;
	background-color:#2FA5EB !important;
}
a{
	width:550px;
	padding:10px;
	color:#fff;
	font-size:20px;
	text-decoration: none;
	background-color:#2FA5EB !important;
}
h1{
	background-color: lightblue;
	text-align: center;

}
.error ,.success{
	color: red;
	background-color: blanchedalmond;
	width: 100%;
	height: 2%;
	padding-left: 38%;
}
.success{
	color: blue;
	background-color: blanchedalmond;
	width: 100%;
	height: 2%;
	padding-left: 38%;
}


            
        </style>
    </head>
    <body>
	<h1>Create An Account</h1>
		<form method="post" action="registration.php">
		
		<div>
				<!-- <h1>Create An Account</h1> -->

				 <?php if(isset($_GET['error'])) { ?>
					<p class="error"> <?php echo $_GET['error']; ?> </p>

				 <?php }?>
				 
				 <?php if(isset($_GET['success'])) { ?>
					<p class="success"> <?php echo $_GET['success']; ?> </p>

				 <?php }?>
				
				<table>
										
					<tr>
						<td width="500px"> </td>
						<td>	<input type="text" placeholder="User Name" name="username" required >
						<td> 	<input type="text" placeholder="User ID" name="id" required>
					</tr>
					<tr height="30px">
						
					</tr>
					<tr>
						<td width="500px"> </td>
						<td>	<input type="email" placeholder="Email Id" name="Email" required>
						<td> 	<input type="number" placeholder="Mobile Number" name="mobile">
					</tr>
					
					<tr height="30px">
						
					</tr>
					<tr>
						<td width="500px"> </td>
						<td>	<select name="gender" required> <option> -- Sex -- </option> <option> Male </option> <option> Female </option> </select>
											
						<td> 	<input type="date" placeholder="Enter visite Date" name="date">
					</tr>
					
						<tr height="30px">
						
					</tr>
					<tr>
						<td width="500px"> </td>						
						<td> 	<input type="password" placeholder="Password" name="password" required>
						<td> 	<input type="password" placeholder="confirm Password" name="confirm" required>
					</tr>
					<!-- <tr>
						<td width="500px"> </td>
						<td colspan="2">	<textarea placeholder="Message" name="textArea"> </textarea>
					</tr> -->
					
						<tr height="30px">
						
					</tr>
					<tr>
						<td width="500px"> </td>
						<td colspan="2">	<button name="submit"> SUBMIT </button><br>
						
					</tr>
					<tr height="30px">
					<tr>
						<td width="450px"> </td>							
						<td colspan="2"> <a href="login.php">Login</a></td>
					</tr>
				</table>
				
		</div>
	</div>
	
</form>
        
    </body>
</html>