<?php
class Hinatazaka{

  public $member;
  public $fanHp;

public function __construct($member,$fanHp){
    echo'2016年5月8日ひらがなけやきが誕生した';
    echo'<br>';
    
    $this->member=$member;
    $this->fanHp =$fanHp;

    echo'メンバーの数は';
    echo $this->member ;
    echo'<br>';
    echo'ファンのエネルギーは';
    echo $this->fanHp = 30;
    echo'<br>';
    echo'<br>';
    echo'<br>';
} 
 function happyAura(){
      echo'ハッピーオーラを発動した';
      echo'<br>';
      echo'ファンの心は捕まれた';
      echo'<br>';
      echo'ファンのエネルギーは';
      echo $this->fanHp += 10000;
      echo'<br>';
      echo'<br>';
      echo'<br>';
 }
 function additional(){
      echo'2017年8月15日二期生が新たに追加された';
      echo'<br>';
      echo'ファンは新たな期待を抱いた';
      echo'<br>';
      echo'ファンのエネルギーは';
      echo $this->fanHp +=10000;
      echo '<br>';
      echo'メンバーの数は';
      echo $this->member +=9;
      echo'<br>';
      echo'<br>';
      echo'<br>';
 }
 function leave(){
     echo'2017年9月25日長濱ねるが抜けた';
     echo'<br>';
     echo'ファンの心は複雑だった';
     echo'<br>';
     echo'ファンのエネルギーは';
     echo $this->fanHp +=0;
     echo'<br>'; 
     echo'メンバーの数は';
     echo $this->member -=1;
     echo'<br>';
     echo'<br>';
     echo'<br>';
    }

 function reborn(){
     echo'2019年2月11日「ひらがなけやき」は「日向坂46」に生まれ変わった';
     echo'<br>';
     echo'ファンは涙した';
     echo'<br>';
     echo'ファンのエネルギーは';
     echo $this->fanHp +=1000000;
     echo'<br>';
     echo'<br>';
     echo'<br>';
 }
 function firstSingle(){
     echo'2019年3月27日ファーストデビューシングル『キュン』発売';
     echo'<br>';
     echo'メンバーみんなとファンの夢が叶う';
     echo'<br>';
     echo'ファンのエネルギーは';
     echo $this->fanHp +=1000000;
     echo'<br>';
     echo'<br>';
     echo'<br>';
 }
 function Goodbye(){
    echo'2019年8月11日メンバーの一人、柿崎芽実が引退';
    echo'<br>';
    echo'深い悲しみ';
    echo'<br>';
    echo'ファンのエネルギーは';
    echo $this->fanHp -=500000;
    echo'<br>';
    echo'メンバーの数は';
    echo $this->member -=1;
    echo'<br>';
    echo'<br>';
    echo'<br>';
}


}