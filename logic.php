<?php
    $words=isset($_GET["words"]);
    $arr=file('word.txt');
    $x=count($arr);
    $passwd="";

    while($words>0){
      $y= rand(0,$x);
      $passwd.=$arr[$y];
      if($words>1)
          $passwd.="- ";
      $words--;
    }

    $a = array("!", "@", "#", "$", "%", "&", "*", "~");

    if(isset($_GET['chk']) > 1){
        $chk=isset($_GET['chk']);
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
