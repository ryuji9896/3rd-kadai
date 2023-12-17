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

$array1 = [10,20,30];
$array2 = [40,50];
$array3 = [60,70];
$account = "yes";
if($account == "yes"){
    $array=array_merge($array1,$array2);
}else{
    $array=array_merge($array1,$array3);
}
print_r($array) . "\n";

#5-time,mktime:回答

#5-time,mktime　「time関数:現在時刻のUNIXタイムスタンプを取得する。
#                 mktime関数:指定した時刻のUNIXタイムスタンプを取得する。」
#                 UNIXタイムスタンプは1970年1月1日午前0時0分からどれだけの時間が経過したかを示すもの。
#time関数例
date_default_timezone_set ('Asia/Tokyo');
$time = time();
$date = date('y/m/d H:i:s',$time);
echo $date . "\n";

#mktime関数例
date_default_timezone_set ('Asia/Tokyo');
$event_month = 12;
$event_day1 = 15;
$event_day2 = 18;
$event_year = 2023;
$X_day1 = mktime(0,0,0,$event_month,$event_day1,$event_year);
$X_day2 = mktime(23,59,59,$event_month,$event_day2,$event_year);
$today = time();

if($today < $X_day1){
    echo "1イベント期間外のため値引きはありません。" . "\n";
}elseif($today <= $X_day2){
     echo"2この商品はイベント中のため値引きされます。" . "\n";
}else echo "3イベント期間外のため値引きはありません。" . "\n";

#5-date:回答

#5-date関数　「ローカルの日付や時刻を書式化する関数。日付表示にしたりするときに使用する」
date_default_timezone_set('Asia/Tokyo');
$today=time()+(7*24*60*60);
echo "1週間後の" . date('Y年m月d日',$today) . "はクリスマスイヴ！";