<?php
// 某年
//$year=$_GET['y']?$_GET{'y'}:date('Y',time());
// 與以下相同
//加上@是為了避免不必要的錯誤訊息
if (@$_GET['y']){
	$year=$_GET{'y'};
}
else{	
	$year=date('Y',time());
}

date_default_timezone_set('Asia/Taipei');
$datetimenow = date ("Y年 m月 d日 / H 點 i 分");

// 某月
$month=@$_GET['m']?$_GET['m']:date('n',time());
$day1=date("j");
$month1=date("n");
// 本月總天數
$days=date('t',strtotime("{$year}-{$month}-1"));


// 本月1號是周幾
$week=date('w',strtotime("{$year}-{$month}-1"));

// 真正的第一天
$firstday=1-$week;

//月數大於12月年+1，月變成1月
if($month>=12){
    //下一年和下一月
    $nextYear=$year+1;
    $nextMonth=1;
}else{
    //下一年和下一月
    $nextYear=$year;
    $nextMonth=$month+1;
}
//月數小於1月份時，則年-1，月變成12月
if($month<=1){
    //下一年和下一月
    $prevYear=$year-1;
    $prevMonth=12;
}else{
    //下一年和下一月
    $prevYear=$year;
    $prevMonth=$month-1;
}

// 上月總天數
$prevdays1=date('t',strtotime("{$year}-{$prevMonth}-1"));
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>萬年曆</title>
    <link rel=stylesheet type="text/css" href="hwc11.css">

</head>
<body>
<div class="time1">現在時間:<?php echo  $datetimenow; ?></div>
<div class="ddd1">
    <h1>西元-<?php echo $year ?>年-<?php echo $month ?>月</h1>
    <table>
        <tr>
            <th class='sunday1'>SUN</th>
            <th>MON</th>
            <th>TUE</th>
            <th>WED</th>
            <th>THU</th>
            <th>FRI</th>
            <th class='sat1'>SAT</th>
        </tr>
       <?php 

       for($i=$firstday;$i<=$days;){
            echo '<tr>';
            for($j=0;$j<7;$j++){
                if($i<=$days && $i>=1){
                    if($j==0){
                        echo "<td class='sunday1'>$i<br>";
                    }
                    else if($j==6){
                        echo "<td class='sat1'>$i<br>";
                    }                    
                    else {
                        echo "<td class='yy1'>$i<br>";                      
                    }

                    include 'hwc2.php';

                    echo "</td>";
                }
                else{

                    if($i<1){
                        echo "<td class='gray1'>";
                        echo $i+$prevdays1;
                        echo "<br>&nbsp</td>";
                    }
                    else {
                        echo "<td class='gray1'>";
                        echo $i-$days;
                        echo "<br>&nbsp</td>";
                    }
                }
                $i++;
            }
            echo '</tr>';

       }
       ?>
    </table>



    <center> <?PHP   include 'hwc1opt1.php'; ?></center>
   

    </div>

    <div class="pre1"><a class="rm1" href="hwc1.php?y=<?php echo $prevYear ?>&m=<?php echo $prevMonth ?>">上一月</a></div>
    <div class="next1"><a class="rm1" href="hwc1.php?y=<?php echo $nextYear ?>&m=<?php echo $nextMonth ?>">下一月</a></div> 
    <div class="word1"> <?PHP   include 'hwcword1.php'; ?></div>


</body>
</html>