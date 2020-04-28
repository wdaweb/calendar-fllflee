<!-- 節日 -->

<?php

$holyday1[1][1]="元旦";
$holyday1[2][28]="和平紀念日";
$holyday1[3][8]="婦女節";
$holyday1[3][12]="國父逝世紀念日";
$holyday1[4][4]="兒童節";
$holyday1[5][1]="勞動節";
$holyday1[8][8]="父親節";
$holyday1[9][3]="軍人節";
$holyday1[9][28]="教師節";
$holyday1[10][10]="國慶日";
$holyday1[10][24]="聯合國日";
$holyday1[10][25]="光復節";
$holyday1[11][12]="國父誔辰紀念日";
$holyday1[12][25]="行憲紀念日";

if($month==5 && $j==0 && $i>7 && $i<15){
	echo "母親節";
}

else if (!empty($holyday1[$month][$i])){
	echo $holyday1[$month][$i];
}

else {
	echo "&nbsp";
}

?>
