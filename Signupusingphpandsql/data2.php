<?php
header("Access-Control-Allow-Origin: *");
 $username = $_GET["username"];
 $query="select username from users where username=\"".$username."\"";
//  echo $query;
if(!($conn=mysqli_connect("localhost","root","","test"))){
    die("could not establish connection with MySQL server /DB");
}
if(!($result=mysqli_query($conn,$query))){
    die("Query execution failure");
}
$count=mysqli_num_rows($result);
if($count==1){
    echo "<h1> $username is already taken.<h1>";
}
else{
    echo "<h1> Available.</h1>";
}
mysqli_close($conn);
?>