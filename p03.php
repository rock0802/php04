<?php
$name = "Kazuhiro";
if ($name == "Kazuhiro"){
echo "私は あなたの名前 です";
}else{
    echo "あなたの名前ではありません";
}
$total = 0 ;
for($i = 0; $i <= 10000; $i++){
    $total +=$i;
}
echo $total;

$fruits = ["apple","banana","orange","lemon","strawberry"];
foreach($fruits as $fruit){
    echo $fruit;
    echo "\n";
}
/* for文の始めの値を定義する /
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;
$start = 1;
for($i = $start; $i <= $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;
    echo "\n";
  }
}