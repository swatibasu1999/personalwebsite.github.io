<?php
$server="localhost";
$user="root";
$password="";
$db="feedback";

$con= mysqli_connect($server,$user,$password,$db);
if($con){
    echo '<script>alert("Procees?")</script>'; 
}
else {
    echo "Connection not established";
}      

if(isset($_POST['submit'])){
    $feed= $_POST['feed'];
    $name= $_POST['name'];

    $insertquery= "insert into feedtable(name,feed) values('$name', '$feed')";
    $query= mysqli_query($con, $insertquery);

    if($query){
        echo '<script>alert("feedback submitted")</script>'; 
       }
       else{
           echo "not inserted";
       }
}
else{
    echo "Not Connected";
}
?>
<?php

header("Location: index.html");
?>