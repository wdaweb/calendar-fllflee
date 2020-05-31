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