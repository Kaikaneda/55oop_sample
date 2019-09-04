<?php

//ピカチュウの設計図がかかれたファイルの読み込み
require_once('Pikachu.php');

//ピカチュウの設計を元に、実態を作成
//インスタンス化( new クラス名（）)
$pikachu1 = new Pikachu(400,500);

//クラスを元に作ったぴかちゅの操作
//プロパティとかメソッドの使い方

//ピカチュウ1にＨＰ100を設定する

$pikachu1->hp = 100;//ピカチュウの仲にあるｈｐに100を入れる－＞ナロー演算子

//ピカチュウ1にＭＰ50を設定する
$pikachu1->mp = 50;

//画面にピカチュウのＨＰとＭＰを表示
echo 'ピカチュウのＨＰは';

echo $pikachu1->hp;
echo '<br>';

echo 'ピカチュウのMPは';

echo $pikachu1->mp;
echo '<br>';

//メソッド（振る舞い）の実行
//サンダーボルトの実行

$pikachu1->thunderVolt();

//アイアンテールの実行
$pikachu1->ironTail();


$pikachu2= new Pikachu(600,300);
$pikachu2->hp=500;
$pikachu2->mp=1500;

echo 'ぴかちゅう1のｈｐは';

//ピカチュウ3の作成
$pikachu3 = new Pikachu(400,400);



echo 'ピカチュウ3のＨＰは1';
echo $pikachu3->hp;
