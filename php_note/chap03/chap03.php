<!DOCTYPE html>
<html>
<head>
  <meta charset = "utf-8">
  <title>コロンで区切ったif構文</title>
</head>
<body>
  <?php
    $age =25;
  ?>
  <?php if($age<=15):?>
    15歳以下の料金は500円です。<br>
  <?php elseif($age<=19):?>
    16歳から19歳は2000円です。<br>
  <?php else:?>
    20歳以上の大人は2500円です。<br>
  <?php endif;?>
<?php
  $color = "blue";
  switch($color){
    case "green":
      $price = 120;
    break;
    case "red":
      $price = 140;
    break;
    case "blue";
      $price = 160;
    break;
    default:
      $price = 100;
    break;
  }
  echo "{$color}は{$price}円";
  echo "<br>";

  $numArray = array();
  while(count($numArray) < 5){
    $num = mt_rand(1,30);
    if(! in_array($num,$numArray)){
      array_push($numArray,$num);
    }
  }
  print_r($numArray);
?>

</body>
</html>
