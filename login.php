<?php
$host="localhost";
$user="id4136341_dilip";
$password="7709868870";
$db="id4136341_login";
$db=new mysqli('localhost',$user,$password,$db) or die("Unable to connect");
//$db=new mysql_connect($host,$user,$password);
//mysql_select_db($db);
$uname=$_POST['uname'];
    $password=$_POST['pass'];


  //  $sql="INSERT INTO login VALUES ('".$uname."','".$password."')";
    $sql="SELECT * FROM login_page WHERE uname='".$uname."' AND pass='".$password."'";
    //$sql="INSERT INTO  login WHERE name1='".$uname."' AND password='".$password."'";

    $result=mysqli_query($db,$sql);
    if(mysqli_num_rows($result)==1){
        echo "Successfull login";

    }
    else {
      echo "not execute";
    }
      ?>