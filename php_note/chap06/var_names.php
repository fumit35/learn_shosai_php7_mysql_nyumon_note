<?php
$name1 = "赤井一郎";
$name2 = "伊藤五郎";
$name3 = "上野信二";
$name4 = "江藤幸代";
$name5 = "小野幸子";

$teamA = ["赤井一郎","伊藤五郎","上野信二"];
$teamB = ["江藤幸代","小野幸子"];

$member1 = ['name' => '赤井一郎','age' => 29];
$member2 = ['name' => '伊藤五郎','age' => 29];
$member3 = ['name' => '上野信二','age' => 37];
$member4 = ['name' => '江藤幸代','age' => 26];
$member5 = ['name' => '小野幸子','age' => 32];

$teamA = [$member1,$member2,$member3];
$teamB = [$member4,$member5];

$teamA = ["赤井一郎","伊藤五郎","上野信二"];
echo $teamA[0],"さん\n";
echo $teamA[1],"さん\n";
echo $teamA[2],"さん\n";

$teamA = ["赤井一郎","伊藤五郎","上野信二"];
$teamA[1] = "石丸四郎";
echo $teamA[0],"さん\n";
echo $teamA[1],"さん\n";
echo $teamA[2],"さん\n";

$teamA = ["赤井一郎","伊藤五郎","上野信二"];
for($i = 0;$i<count($teamA);$i++){
  echo $teamA[$i],"さん\n";
}
?>
