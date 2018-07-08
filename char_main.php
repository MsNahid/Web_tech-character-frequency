<!DOCTYPE html>
<html>
<head>
	
	<style>
	table {
		font-family: arial, sans-serif;
		border-collapse: collapse;
		width: 100%;
	}

	td, th {
		border: 1px solid #dddddd;
		text-align: left;
		padding: 8px;
	}

	tr:nth-child(even) {
		background-color: #dddddd;
	}
	button.btn-primary{
		background-color: blue;
		border-radius: 4px;
	}
</style>
</head>
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
		// echo "<strong>Word count</strong>"."<br>";
		// echo "<br>";
		// echo "Character".str_repeat("&nbsp;", 15)."count"."<br>";
		$res = preg_replace('/[^a-zA-Z]/', '', $newStr);
		
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
		
		?>
		<h3>Character frequency count</h3>
		<div  style="margin-top: 1%;">
			<table>
				<thead>
					<tr>
						<th>Character</th>
						<th>Count</th>
					</tr>
				</thead>
				<tbody>
					<?php 
					foreach (count_chars($res, 1) as $strr => $value) {
						?>
						<tr>
							<td><?php echo chr($strr) ?></td>
							<td><?php echo $value?></td>
						</tr>
						<?php
					}
					?>

				</tbody>
			</table>
			<br>
			<form action="character_box.php">
				<button name="anotherString" class="btn-primary" style="color:white">Input Another String</button>			
			</form>
			<br><br>
			<h4>World Count</h4>

			<table style="margin-top: 1%;">
				<thead>
					<tr>
						<th>Word</th>
						<th>Count</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($assoArray as $x => $x_value){
						?>
						<tr>
							<td><?php echo $x ?></td>
							<td><?php echo $x_value ?></td>
						</tr>
						<?php 

					}?>

				</tbody>
			</table>
			<br>
			<form action="character_box.php">
				<button name="anotherString" class="btn-primary" style="color:white">Input Another String</button>			
			</form>

		</div>

	</body>
	</html>
