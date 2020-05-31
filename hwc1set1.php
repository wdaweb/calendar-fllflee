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