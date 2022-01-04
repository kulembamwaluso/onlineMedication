


<?php

if(isset($_POST["submit"])){
    
 $Username=$_POST["username"];
 $UserID=$_POST['id']; 
 $Email=$_POST["Email"];
 $Number=$_POST["mobile"];
 $Gender=$_POST["gender"];
$Date=$_POST["date"];
$Pass1=$_POST["password"];
$Pass2=$_POST["confirm"];

 if($Pass1 != $Pass2){
     header("location: Registrationform.php? error=passwods does not match!");
     exit();
 }
 elseif(strlen($Pass1) && strlen($Pass2)<6 ){
    header("location: Registrationform.php? error=passwods must be more than 6 characters!");
    exit();
}else{

echo "you are $Username <br> ID number: $UserID <br> Email: $Email<br> 
PhoneNumber:$Number <br> Gender: $Gender <br> DOB :$Date <br> Password1 and 2 are : $Pass1 ,$Pass2 ";
 $con=mysqli_connect('localhost','root','','onlinemedication');
 if($con){
    $Query="INSERT INTO patient(PatientName, patientID, Gender, email, password, confirmpassword, date) 
    VALUES('$Username','$UserID','$Gender','$Email','$Pass1','$Pass2','$Date')";

    $result=mysqli_query($con,$Query);
    if($result){
        header('location:Registrationform.php? success=Registered successfully!');
    }
  } 
    else{
       echo" zakanika";

        }
 }
}
else{
    echo" yalakwa";
}
?>