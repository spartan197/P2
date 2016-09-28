<?php
$passwd=" ";
//Checking if "words" and "chk" are not null
if(isset($_POST["words"]) && isset($_POST["chk"])){
    $words=$_POST["words"];
    $arr=file('word.txt');
    $x=count($arr)-2;

    while($words>0){
      $y= rand(0,$x);
      $passwd.=$arr[$y];
      if($words>1)
          $passwd.="- ";
      $words--;
    }
    //Array of Special characters/Symbols
    $a = array("!", "@", "#", "$", "%", "&", "*", "~");
    //Adding symbold and numbers if the checkboxes are selected
    if($_POST['chk'] > 1){
        $chk=$_POST['chk'];
        if(count($chk)>2){
            $passwd.="- ";
            $passwd.=$a[rand(0,7)];
            $passwd.=rand(0,99);
        }
        elseif ($chk[0]=='char'){
            $passwd.="- ";
            $passwd.=$a[rand(0,7)];
        }
        elseif ($chk[0]=='num'){
            $passwd.="- ";
            $passwd.=rand(0,99);
        }
        else{
            $passwd=$passwd;
        }
    }
}
