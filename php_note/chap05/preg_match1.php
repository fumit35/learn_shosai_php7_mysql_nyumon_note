<?php
$result1 = preg_match("/46-49/u","確か49-46でした");
$result2 = preg_match("/46-49/u","確か46-49でした");
$result3 = preg_match("/46-49u","/49-46");

var_dump($result1);
var_dump($result2);
var_dump($result3);

echo "<br>";

$result1 = preg_match("/4.-49/u","確か49-46でした");
$result2 = preg_match("/4.-49/u","たぶん46-49だった");
$result3 = preg_match("/4.-49/u","/41-49かな?");

var_dump($result1);
var_dump($result2);
var_dump($result3);

echo "<br>";

$result1 = preg_match("/4[6-9]-49/u","確か49-46でした");
$result2 = preg_match("/4[6-9]-49/u","たぶん46-49だった");
$result3 = preg_match("/4[6-9]-49/u","/41-49かな?");

var_dump($result1);
var_dump($result2);
var_dump($result3);

echo "<br>";

$filepath = "/goods/image/cat/";
var_dump(preg_match("/\/image\//u",filepath));
var_dump(preg_match("#/image/#u",$filepath));

echo "<br>";

$pattern = "/赤の玉/u";
var_dump(preg_match($pattern,"赤の玉です"));
var_dump(preg_match($pattern,"青の玉です"));
var_dump(preg_match($pattern,"赤の箱です"));

echo "<br>";

$pattern = "/[赤青緑]の玉/u";
var_dump(preg_match($pattern,"それは赤の玉です"));
var_dump(preg_match($pattern,"青の玉が2個です"));
var_dump(preg_match($pattern,"緑の玉でした"));
var_dump(preg_match($pattern,"緑の箱でした"));

echo "<br>";

$pattern = "/[^青赤]木/u";
var_dump(preg_match($pattern,"大木"));
var_dump(preg_match($pattern,"青木"));
var_dump(preg_match($pattern,"赤木"));
var_dump(preg_match($pattern,"赤木、白木"));

echo "<br>";

$pattern = "/[A-F]-[0-9]-[0-9a-zA-Z]/u";
var_dump(preg_match($pattern,"A-5-5"));
var_dump(preg_match($pattern,"F-9-c"));
var_dump(preg_match($pattern,"G-17-10"));
var_dump(preg_match($pattern,"a-2-9"));

echo "<br>";

$pattern = "/田中..子/u";
var_dump(preg_match($pattern,"田中佐知子"));
var_dump(preg_match($pattern,"田中亜希子"));
var_dump(preg_match($pattern,"田中幸子"));
var_dump(preg_match($pattern,"田中向日葵子"));

echo "<br>";

$pattern = "/^山..子$/u";
var_dump(preg_match($pattern,"山田智子"));
var_dump(preg_match($pattern,"山田あさ子"));
var_dump(preg_match($pattern,"山崎貴美"));

echo "<br>";

$pattern = "/東京|横浜/u";
var_dump(preg_match($pattern,"東京タワー"));
var_dump(preg_match($pattern,"横浜駅前"));
var_dump(preg_match($pattern,"新東京美術館"));
var_dump(preg_match($pattern,"東横ホテル"));

echo "<br>";

$pattern = "/[0-9]{3}-[0-9]{4}/u";
var_dump(preg_match($pattern,"123-45"));
var_dump(preg_match($pattern,"090-88"));
var_dump(preg_match($pattern,"11-222"));
var_dump(preg_match($pattern,"abc-de"));

echo "<br>";

$pattern = "/[a-z]{4,8}/u";
var_dump(preg_match($pattern,"cycling"));
var_dump(preg_match($pattern,"marathon"));
var_dump(preg_match($pattern,"run"));
var_dump(preg_match($pattern,"SURF"));

echo "<br>";

$pattern = "/(090|080|070)-{0,1}[0-9]{4}-{0,1}[0-9]{4}/u";
var_dump(preg_match($pattern,"090-1234-5678"));
var_dump(preg_match($pattern,"080-1234-5678"));
var_dump(preg_match($pattern,"07012345678"));
var_dump(preg_match($pattern,"12345678"));

echo "<br>";

$pattern = "/(090|080|070(-?\d{4}){2})/u";
var_dump(preg_match($pattern,"090-1234-5678"));
var_dump(preg_match($pattern,"080-1234-5678"));
var_dump(preg_match($pattern,"07012345678"));
var_dump(preg_match($pattern,"12345678"));

echo "<br>";
//preg_quote
$escaped = preg_quote("http://sample.com/php/","/");
$pattern = "/{$escaped}/u";
echo $pattern, "\n";
var_dump(preg_match($pattern,"URLはhttp://sample.com/php/です"));
var_dump(preg_match($pattern,"URLはhttp://sample.com/swift/です"));

echo "<br>";
//「.+」は任意の文字が一個以上あるパターン
$pattern = "/佐.+子/u";
//ヒアドキュメント 普通に入力すると「佐藤有紀、佐藤ゆう子」で検索されてしまう
$subject = <<< "names"
佐藤有紀
佐藤ゆう子
堀田智子
杉山香
names;
//マッチテスト
//preg_match($pattern,$subject,$matches);
//マッチした結果は第三引数(配列)に入る。
//一つしか入らないので$matches[0]
$result = preg_match($pattern,$subject,$matches);
//実行結果をチェックをする
if($result === false){
  echo "エラー:",preg_last_error();
}else if($result == 0){
  echo "マッチした値はありません。";
}else{
  echo"｢",$matches[0],"｣が見つかりました。";
}

echo "<br>";
//マッチしたすべての型式を取り出す
//preg_match_all($pattern,$subject,$matches);
$pattern = "/201[2-5](AX|FX)/i";
$subject = "2011AX,2012Fx,2012AF,2013FX,2015ax,2016Fx";
$result = preg_match_all($pattern,$subject,$matches);
//実行結果をチェックする
if($result === false){
  echo "エラー:",preg_last_error();
}else if($result == 0){
  echo "マッチした型式はありません。";
}else{
  echo "{$result}個マッチしました。\n";
  //配列の値を取り出して文字列に連結する
  echo implode("、",$matches[0]);
}

echo "<br>";
//サブパターン
//で囲まれているもの
//2013のAからF型を探す
$pattern = "/2013([A-F])-(..)/";
$subject = "2012A-sx,2013F-fx,2013G-fx,2013A-dx,2015a-sx";
$result = preg_match_all($pattern,$subject,$matches);
//実行結果をチェックする
if($result === false){
  echo "エラー:",preg_last_error();
}else if($result == 0){
  echo "マッチした型式はありません。";
}else{
  //配列の値を取り出して文字列に連結する
  $all = implode("、",$matches[0]);
  $model = implode("、",$matches[1]);
  $type = implode("、",$matches[2]);
  echo "見つかった型式:{$all}","\n";
  echo "モデル:{$model}","\n";
  echo "タイプ:{$type}","\n";
}

echo "<br>";
//検索置換
// \s?空白があってもなくてもよいパターン
//()はサブパターン
//サブパターンでマッチした値は$1,$2,$3...と順に取り出せる
function numbermask($subject){
  //クレジットカード番号パターン
  $pattern = "/^\d{4}\s?\d{4}\s?\d{4}\s?\d{2}(\d{2})$/";
  $replacement = "**** **** **** **$1";
  $result = preg_replace($pattern,$replacement,$subject);
  //実行結果をチェックする
  if(is_null($result)){
    return "エラー:" . preg_last_error();
  }else if($resulet == $subject){
    return "番号エラー";
  }else{
    return $result;
  }
}

$number1 = "1234 5678 9012 3456";
$number2 = "6543210987654321";
$num1 = numbermask($number1);
$num2 = numbermask($number2);
echo "{$number1}は次のようになります。\n";
echo $num1,"\n";
echo "<br>";
echo "{$number2}は次のようになります。\n";
echo $num2,"\n";

echo "<br>";
$pattern = ["/開催日/u","/開始時間/u"];//置き換えられる文字
$replacement = ["金曜日","午後2:30"];//見つかった文字と置き換えられる値
$subject = "次回は開催日の開始時間からです。";
$result = preg_replace($pattern,$replacement,$subject);
echo $result;
?>
