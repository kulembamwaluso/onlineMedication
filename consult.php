<?php
$choice="signs";
  if(isset($_POST['submit'])){
    //    $head=$_POST['head'];   
    //   $fever=$_POST['fever'];
    //   $vomiting=$_POST['vomiting'];
    //   $bodypain=$_POST['bodypain'];
    //   $stomach=$_POST['stomach'];
    //   $joint=$_POST['joint'];
    //   $rashes=$_POST['Rashes'];
    //   $apetite=$_POST['apetite'];
    //   $tooth=$_POST['tooth'];
    //   $diarr=$_POST['diarr'];
    //   $wound=$_POST['wound'];
    //   $sole=$_POST['sole'];
      
    
        if(!empty($_POST['fever'])=="Fever" && !empty($_POST['head']) =="Head" && 
        !empty($_POST['vomiting'])=="Vomiting" && !empty($_POST['bodypain'])=="Genera body pain"){
            echo "mkudwala Matenda oopsa! ";
             exit();
             
            } 
           elseif(!empty($_POST['vomiting'])=="Vomiting" && !empty($_POST['bodypain'])=="Genera body pain"){
              echo "mkudwala Malungo ndi Mutu ";
               exit();
               
              }
              
        elseif(!empty($_POST['head']) =="Head"){
          echo "mkudwala Mutu ";
          exit();

        }
       else if(!empty($_POST['fever']) =="Fever" &&!empty($_POST['joint']) =="Joint pains" ){
          echo "Mkayezese Malungo kuchipatala chapafupi kwanuko ";
           exit();
           
          }
          
        elseif(!empty($_POST['Stomach']) =="Stomachache"){
          echo "mkudwala mumimba nde mkamwe magnesium ";
          exit();

        }
       else if(!empty($_POST['joint']) =="Joint pains" ){
          echo "Mkudwala kuphwanya kwa mthupi nde mkamwe panado ";
           exit();
           
          } else{
                echo "Kakumanani ndi Dotolo mungamwalire";
              }      
        
      


//       if(!empty($joint) && !empty($fever) && !empty($vomiting) && !empty($bodypain)){
//         $con=mysqli_connect('localhost','root','','onlinemedication');   
//  if($con){

//     $query="SELECT * FROM Disease WHERE SignsAndSympotms='".$joint.',' .$fever.',' .$vomiting.','.$bodypain."' limit 1";
//     $result=mysqli_query($con,$query);

//     if(mysqli_num_rows($result)===1){
//         $row=mysqli_fetch_assoc($result);
//         if($row['SignsAndSymptoms']==$joint.',' .$fever.','.$vomiting.','.$bodypain){
//             echo $row['disease'];
//         //  header("location:consultation.html");
//             //  exit();
          
//         }
//     }
//   }
//       }
}
?>