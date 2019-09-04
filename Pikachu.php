<?php

//クラス（設計図）の構文
//class クラス名｛

//}

//ピカチュウクラス（ピカチュウの設計図）
class Pikachu 
{

//属性：プロパティともいう
//-HP
//-MP

//振る舞い：メソッドとも言う（関数）
//-サンダーボルト
//-アイアンテール


//HP
public $hp;

//MP
public $mp;



//コンストラクタ
//インスタント化した時に呼ばれる
//new Pikachu()をしたときに呼ばれる
//初期設定みたいなもん
public function __construct($hp,$mp){
    echo'ピカチュウが生まれた';
    echo'<br>';

//$this:インスタンスの事を指している
//今回の場合    

    $this->hp = $hp;
    $this->mp = $mp;
}




//サンダーボルト
function thunderVolt(){
    echo 'サンダーボルトを発動した';
    echo'<br>';

}

//アイアンテール
function ironTail(){
  echo 'アイアンテールを発動した';
  echo'<br>';
}

}

class Hinatazaka
{

}