<?php
$kingaku = 5470;
$amari = $kingaku % 4;
$hitori = ($kingaku -  $amari)/4;
echo "一人{$hitori}円、不足{$amari}円";

$ans = 11.6%4.1;
echo "$ans";

echo "<br/>";

//型のジャグリング
$ninzu = "3人"+"2人";
$price = "500円" * $ninzu;
$price = $price * "1.08 消費税";
echo "料金{$price}円,{$ninzu}人";

echo "<br/>";

//インクリメント、デクリメント
$a=0;
$b=++$a;
echo "\$aは{$a},\$bは{$b}";

echo "<br/>";

//ポストインクリメント、デクリメント
$a2 = 0;
$b2 = $a2++;
echo "\$aは{$a2},\$bは{$b2}";

echo "<br/>";

//文字のインクリメント、デクリメント
$myNum = "19";
$myChar = "a";
++$myNum;
++$myChar;
echo "\$myNumは{$myNum}、\$myCharは{$myChar}";

//文字列結合演算子
$who = "青島";
$hello = "こんにちは";
$msg = $who . "さん" . $hello;
echo $msg;

echo "<br/>";

$num = 19 + 1;
$msg1 = $num . "番" . PHP_EOL;
$msg2 = $num . 77;
echo $msg1;
echo $msg2;

echo "<br/>";

$a = 7;
$b = 10;
$hanteil1 = ($a < $b);
$hanteil2 = ($a > $b);
var_dump($hanteil1);
var_dump($hanteil2);

echo "<br/>";

$price = 250 * ($kosu ?? 2);
var_dump($kosu);
echo $price;

echo "<br/>";

//整数と文字列を比較する
$hantei1 = ("99" == 99);
$hantei2 = ("99" != 99);
var_dump($hantei1);
var_dump($hantei2);

echo "<br/>";

//整数と文字列を型を含めて比較する
$hantei1 = ("99" === 99);
$hantei2 = ("99" !== 99);
var_dump($hantei1);
var_dump($hantei2);

echo "<br/>";

$test1 = TRUE;
$test2 = FALSE;
$hantei1 = $test1 && $test2;
$hantei2 = $test1 || $test2;
$hantei3 = !$test1;
var_dump($hantei1);
var_dump($hantei2);
var_dump($hantei3);

echo "<br/>";

//()でくくらないと$hantei1 = $test1が先に計算される
$hantei1 = ($test1 and $test2);
$hantei2 = ($test1 || $test2);
var_dump($hantei1);
var_dump($hantei2);

echo "<br/>";

$hantei1 = $test1 and $test2;
$hantei2 = $test1 || $test2;
var_dump($hantei1);
var_dump($hantei2);

echo "<br/>";

//三項演算子
$a = mt_rand(0,50);
$b = mt_rand(0,50);
$bigger = ($a>$b)?$a:$b;
/*if($a>$b){
  $bigger = $a;
}else{
  $bigger = $b;
}*/
echo "大きな値は{$bigger}、\$aは{$a}\$bは{$b}";

//キャスト演算子 値が入っているかどうか判定
$theDate = new DateTime();
$isAccess = (bool)$theDate;
var_dump($isAccess);

echo "<br/>";

//型演算子
$now = new DateTime();
$isDate = $now instanceof DateTime;
var_dump($isDate);

?>
