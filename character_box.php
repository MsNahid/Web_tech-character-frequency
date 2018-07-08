<!DOCTYPE html>
<html>
<head>
<style>
textarea{
	border: 2px solid powderblue;
}
input.count{
	width: 5em; height: 3em;
	background-color: green;
	 border-radius: 10px;
	
}
input.clear{
	width: 5em; height: 3em;
	background-color: orange;
	border-radius: 10px;
	
}
</style>
</head>
<body>
<div align="center">
    <p><font size="8">Character Frequencey Counter</font></p>
	<br><br>
	Insert your string in the following text area to get the count per character
	<br><br>
</div>
<div align="center">
    <form name="aiub" action="char_main.php" method="post">
	    <textarea name="comment" rows="7" cols="95" placeholder="This is web tech assignment"></textarea>
		<br>
		<input type="submit" class="count" value="count" style="color:white">
		<input type="reset" class="clear" value="Clear" style="color:white">
	</form>
</div>


</html>
</body>