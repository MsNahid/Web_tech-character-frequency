<!DOCTYPE html>
<html>
<body>

	<?php
		
		function sanitize_input($data){
			$data = trim($data);
			$data = stripcslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
		
		$charStr=sanitize_input($_POST['comment']);
		
		$newStr=$charStr;
		$wordFre=explode(" ", $charStr);
		$assoArray=array(); //associative array
		/*character count start*/
		echo "<strong>Word count</strong>"."<br>";
		echo "<br>";
		echo "Character".str_repeat("&nbsp;", 15)."count"."<br>";
		$res = preg_replace('/[^a-zA-Z]/', '', $newStr);
		foreach (count_chars($res, 1) as $strr => $value) {
			echo chr($strr) . str_repeat("&nbsp;", 15).$value. "<br>";
        }
		echo "<br>";
		echo "<br>";
		/*world count start*/
		
		sort($wordFre);
		$arralength=count($wordFre);
		for($x = 0; $x < $arralength; $x++){
			$cont=0;
			for($y = 0; $y < $arralength; $y++){
				if($wordFre[$x] == $wordFre[$y]){
					$cont++;
				}
			}
			$val=$wordFre[$x];
			$assoArray[$val]=$cont;	
		}
		echo "<strong>Word count</strong>"."<br>";
		echo "<br>";
		echo "Word".str_repeat("&nbsp;", 15)."count"."<br>";
		foreach($assoArray as $x => $x_value){
			echo $x."               ".$x_value;
			echo "<br>";
		}
		
		
		/*echo $worldFre[0]."<br>";
		echo $worldFre[1]."<br>";
		*/
		
		/*echo $charStr;
		echo "<br>";
		echo $newStr;
		echo "<br>";
		*/
		
	?>
	
</body>
</html>
