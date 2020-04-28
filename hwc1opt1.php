
<?PHP
$starty1="1901";
$endy1="3335";

echo '<div><form action="?" method="GET" style="font-size:14px">請選擇<select name="y">';

	for($i=$starty1;$i<=$endy1;$i++){
		if($i==$year){
			echo "<option selected>$i</option>";
		}
		else {
			echo "<option>$i</option>";
		}
		
	}
echo '</select>年<select name="m">';

	for($i=1;$i<=12;$i++){
		if($i==$month){
			echo "<option selected>$i</option>";
		}
		else {
			echo "<option>$i</option>";
		}	
	}
		
echo '</select>月<input type="submit" value="查詢"></form></div>';



?>