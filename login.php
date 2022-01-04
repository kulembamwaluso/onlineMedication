<?php 

 if(isset($_POST['submit'])){
 $UserName=$_POST['userName'];
 $Password=$_POST['Password'];

 $con=mysqli_connect('localhost','root','','onlinemedication');
 if($con){

    $query="SELECT * FROM patient WHERE PatientName='".$UserName."' AND Password='".$Password."' limit 1";
    $result=mysqli_query($con,$query);

    if(mysqli_num_rows($result)===1){
        $row=mysqli_fetch_assoc($result);
        if($row['PatientName']==$UserName && $row['password']===$Password){
         header("location:consultation.html");
             exit();
          
        }else{
            header("location:login.php? error=wrong UserName or Password");
        }
    }else{
        header("location:login.php? error=wrong UserName or Password");
    }

   }
 }
?>



<!DOCTYPE html>
<html>
    <head>
        <title>login.com</title>
     <style>
         form{
             background-color: whitesmoke;
             padding-left: 35%; 
             padding-right: 20%;            
             width:65%;
             height: 65%;
             align-items: center;
         }
         h1{
             color: white;
             background-color: blue;
             width: 65%;
         }
         p a{
             color: black;
             background-color: whitesmoke;
             width: 65%;
             text-decoration: none;
         }
         p a:hover{
             color: blue;             
             width: 65%;
             text-decoration: underline;
            }
                  table{
             border: white solid 1px;
             width: 65%;
           }
           .error{
	            color: red;
	            background-color: blanchedalmond;
	            width: 100%;
	            height: 2%;
	            padding-left: 38%;
}
         
     </style>
    </head>
    <body>
        <form action="" method="POST">
            <table>
                <h1>Login to online Medication</h1>
                <tr>
                    <?php if(isset($_GET['error'])) { ?>
                     <p> <?php echo $_GET['error']; ?> </p>
                     <?php }?>
                    
                    <td width=350px>
                        <input type="text" name="userName" placeholder="user Name" required><br><br>
                        <input type="password" name="Password" placeholder="Password" required><br><br>
                        <input type="submit" name="submit" placeholder="send" value="send"><br><br>
                        <p><b><a href="Registrationform.php"> Register </a></b> </p>
                        <p><b><a href="#"> Forgot Password </a></b></p>

                    </td>                  
                    
                </tr>
            </table>

        </form>
    </body>
</html>