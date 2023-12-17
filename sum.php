<?php

#1:回答

function nibai($number){
    $result = 0;
    $result = $number * 2;
    return $result;
}
echo nibai(100) . "\n";

#2:回答

function kasan($a,$b){
    $result = 0;
    $result = $a + $b;
    return $result;
}
echo kasan(5,7) . "\n";

#3:回答
function arr($arr){
    $results = 1;
    foreach($arr as $result){
        $results = $results * $result;
    }
    return $results;
}
echo arr(array(1, 3, 5 ,7, 9)) . "\n";

#4"回答

function max_array($arr){
    $max_number = $arr[0];
    foreach($arr as $a){
        if($max_number<$a){
            $max_number = $a;
        }
    }
    return $max_number;
}
$array = [1,3,4,6,2];

echo max_array($array) . "\n";


#5-strip_tags:回答

#strip_tags「使用用途は指定した文字列のhtmlタグやphpタグを削除する」
$str = '<p><?php echo "タグ削除"; ?>複数個所使用されている場合に便利？条件付きで消したいときに使用？<p>';
$dltstr = strip_tags($str);
echo $dltstr . "\n";

#5-array_push:回答

#5-array_push 「配列の最後に1つ以上の要素を追加できる。プログラムの途中で要素数が可変するときに使用する。」

$month="12月";
$weekly = array("月曜" , "火曜" , "水曜" , "木曜" , "金曜");
if($month=="12月"){
    array_push($weekly ,"土曜" , "日曜");
}
print_r($weekly);

#5-array_merge:回答

#5-array-merge　「配列の最後の要素に1つまたは複数の配列を結合するときに使用する。」

$array = [10,20,30];
$account
