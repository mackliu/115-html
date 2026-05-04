<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>日期/時間處理</title>
</head>
<body>
  <h2>給定兩個日期，計算中間間隔天數</h2>  
  <ul>
    <li>起始日期:2026-04-19</li>
    <li>結束時間:2026-05-04</li>
  </ul>
  <?php
    $start="2026-04-19";
    $end="2026-05-04";
    //日期的字串無法計算,所以要轉換為可計算的格式
    $start_time=strtotime($start);
    $end_time=strtotime($end);
    //echo  date("Y-m-d H:i:s",$start_time);
    //echo "<br>";
    //echo  date("Y-m-d H:i:s",$end_time);
    $diff=($end_time - $start_time)/(60*60*24);
    echo "<br>";
    echo "間隔天數:".$diff."天"
    ?>

    <h2>計算距離自己下一次生日還有幾天</h2>
    <?php
    $start=date("Y-m-d");
    $birthday="2000-4-06";

    //判斷今天的時間是否比生日還要大
    $start_time=strtotime($start);
    $birthday_string=date("Y") . date("-m-d",strtotime($birthday));
    $birthday_time=strtotime($birthday_string);
    //echo $start_time ."-". $birthday_time;
    if($birthday_time>$start_time){
        $diff=($birthday_time - $start_time)/(60*60*24);
    }else{
        //$birthday_string=(date("Y")+1) . date("-m-d",strtotime($birthday));
        $birthday_time=strtotime("+1 year",strtotime($birthday_string));

        $diff=($birthday_time - $start_time)/(60*60*24);
    }

    echo "<br>";
    echo "今天是".$start."<br>";
    echo "距離我的下一次生日".date("Y-m-d",$birthday_time)."還有".$diff."天";
    
    ?>

    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
</body>
</html>