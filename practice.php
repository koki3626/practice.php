<?php

// PHP/Laravel 03 プログラムの実行を条件分岐構文と繰り返し構文で制御できるようになろう

//　課題1---------------------------------------
$name = "koki";

if ($name === "koki"){
    echo "私は あなたの名前 です";
}
else {
    echo "あなたの名前ではありません";
}


//　課題2---------------------------------------
$total = 0;

for($i = 0; $i <= 10000 ;$i++){
    $total += $i;
}
echo $total;



//　課題3---------------------------------------
$fruit = array("kiwi","banana","apple","lemon","strawberry");

foreach($fruit as $fruit){
    echo $fruit;
}

//　課題4---------------------------------------
/* for文の始めの値を定義する */
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i <= $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 === 0){
    echo $i;
  }
}



//PHP/Laravel 02 PHPの型と基本的な式を理解しよう

$a = 3;
$b = 7;

echo $a+$b; 

$array_month = ["1月","2月","3月","4月","5月","6月","7月","8月","9月","10月","11月","12月"];

echo $array_month[7];

$hello = "Hello";
$name = "koki";
$world = "'s World!";

echo $hello.$name.$world;

$tech_boost = "tech";
$tech_boost .= 'boost';

echo $tech_boost;

$calendar_2018 = [
  "January" => "1月",
  "February" => "2月",
  "March" => "3月",
  "April" => "4月",
  "May" => "5月",
  "June" => "6月",
  "July" => "7月",
  "August" => "8月",
  "September" => "9月",
  "October" => "10月",
  "November" => "11月",
  "December" => "12月"
];

// 12月を表示する
echo $calendar_2018["December"];

