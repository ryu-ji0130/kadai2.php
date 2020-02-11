<?php
$height = 160;
if ($height < 150) {
    echo "150cm 未満の方はご乗車できません。";
}   else {
    echo "ご乗車になれます。";
}

$height = 230;
if ($height < 150) {
    echo "150cm　未満の方はご乗車できません。";
} else if ($height >= 200) {
    echo "200cm　以上の方はご乗車できません。";
} else {
    echo "ご乗車になれます。";
}

$weekday = "月曜";
switch($weekday) {
    case "月曜":
        echo "可燃ごみの日です。";
        break;
    case "水曜":
        echo "資源ごみの日です。";
        break;
    default:
        echo "回収はありません。";
        break;
}

for($i = 0; $i < 10; $i++){
    echo $i;
}

$total = 0;
echo $total;
for ($i = 0; $i <= 100; $i++){
    $total += $i;
}
echo $total;

$fruits = array("apple", "orange", "lemon");
echo count($fruits);
for ($i = 0; $i < count($fruits); $i++) {
    echo "要素は" . $fruits[$i];
    echo "\n";
}

$animals = array("dog", "cat", "panda");
foreach($animals as $animal){
    echo "要素は" . $animal;
    echo "\n";
}

