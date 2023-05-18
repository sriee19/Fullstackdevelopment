<?php
 header('Access-Control-Allow-Origin: *');
 $uname=$_GET["username"];
 $unamelist=array('Shrustiga','Sneha','Kavya');
 $b=false;
foreach($unamelist as $value){
   if($uname==$value){
        $b=true;
        break;
}
}
if($b){
   echo "The username is available";
}
  
else{
   echo "The username is not available";

}
   
?>