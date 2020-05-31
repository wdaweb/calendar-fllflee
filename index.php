<?php
include 'hwc1set1.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>萬年曆</title>
    <link rel=stylesheet type="text/css" href="hwc1.css">

</head>
<body>
<div class="bg11"></div>
<div class="ddd1">
    <h1><br></h1>
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
            include 'hwc1cal1.php';
        ?>
    </table>
</div>
<div class="word1"><?PHP include 'hwcword1.php'; ?></div>
<div class="time1"><?PHP include 'hwctime1.php'; ?></div>
<div class="year1"><?PHP include 'hwcyear1.php'; ?></div>
<div class="opt1"><?PHP include 'hwc1opt1.php'; ?></div>
<div class="pre1"><a class="rm1" href="index.php?y=<?php echo $prevYear ?>&m=<?php echo $prevMonth ?>">上一月</a></div>
<div class="next1"><a class="rm1" href="index.php?y=<?php echo $nextYear ?>&m=<?php echo $nextMonth ?>">下一月</a></div> 

</body>
</html>