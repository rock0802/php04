<?php
function sum($num) {
   $result = 0;
   $result = $num * 2;
   return $result;
}
echo sum(7);
echo "\n";
function f($a,$b){
   $result = 0;
   $result = $a + $b ;
   return $result;
}
echo f(7,7);
echo "\n";
/*
3.$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください。
*/

function mp($arr){
   $result = 1;
   foreach ($arr as $a){
   $result *= $a;
      
   }
    echo $result;
    echo "\n";
}
echo mp(array(1, 3, 5 ,7, 9));
/*
4.【応用】　次のプログラムは、配列の中で1番大きい値を返す max_array という関数を実装しようとしています。途中の部分を完成させてください。
*/
function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr[0];
 foreach($arr as $a){
 //どうしたらいいかわからない・・・・
 if($max_number < $a){
  $max_number = $a;   
 }
 }

 return $max_number;
 }
 echo max_array(array(1, 3, 5 ,7, 9,77));
 echo "\n";
 /*
 5.次のビルトイン関数の用途、使い方を調べて実際に使ってみてください。
strip_tags
array_push
array_merge
time, mktime
date
*/
$abc = "a<br>bb<br>ccc";
echo strip_tags ($abc);
echo "\n";

$guns = ["M4","AK","MP5"];
array_push($guns,"M14","PSG1");
print_r ($guns);
echo "\n";

$guns1 = ["M9","1911","Desert Eagle"];
$guns2 = ["SPAS","AA12","MADMAX"];
$guns3 = ["PSG1","AUG","L96"];

$gun = array_merge($guns1,$guns2,$guns3);
print_r($gun);
echo "\n";

echo 'タイムスタンプ'.time();
$timestamp = mktime(0,0,0,8,2,2021);
echo $timestamp;
echo "\n";

date_default_timezone_set('Asia/Tokyo');
echo date("Y/m/d H:i:s")."\n";
echo date("y/m/d h:i:s")."\n";
echo date("Y/m/01")."\n";
?>