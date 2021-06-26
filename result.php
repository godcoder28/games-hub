<?php

if(isset($_POST["submit"]))
{

$name = $_POST["name"];
echo($name);
$file = Fopen("db.txt","a+");

fwrite($file,"\n".$name); /

}
?>