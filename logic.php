<?php
$words=$_GET["words"];
$chk=$_GET['chk'];
$arr=file('word.txt');
$x=count($arr);
$passwd="";
while($words>0){
  $y= rand(0,$x);
  $passwd.=$arr[$y]."- ";
  $words--;
}
$a = array("!", "@", "#", "$", "%", "&", "*", "~");

if ($chk[0]=='char' or $chk[1]=='char'){
    $passwd.=$a[rand(0,7)];
}

if ($chk[0]=='num' or $chk[1]=='num'){
    $passwd.=rand(0,99);
}
