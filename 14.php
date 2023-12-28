<html>
<head>
<title>лб14</title>
</head>
<body>
<form>
<p>
<input type="text" name="ImputOn">
<input type="text" name="ImputTw">
<input type="text" name="ImputThree">
</p>
<p>
<input type="text" name="ImputFor">
<input type="text" name="ImputFiv">
<input type="text" name="ImputSix">
</p>
<p>
<input type="text" name="ImputSev">
<input type="text" name="ImputEig">
<input type="text" name="ImputNin">
</p>
<p><input type="submit" value="Рассчитать" name="calculation"></p>
</form>
<?php 
if (isset($_POST['calculation'])) calculation();

function calculation(){
$arr = array(
array($_POST['ImputOn'], $_POST['ImputTw'], $_POST['ImputThree']),
array($_POST['ImputFor'], $_POST['ImputFiv'], $_POST['ImputSix']),
array($_POST['ImputSev'], $_POST['ImputEig'], $_POST['ImputNin'])
);
echo result($arr);
}

function result($arr){
$number = 0;
for ($i = 0; $i < count($arr); $i++){
	$number += $arr[$i][$i];
}
return $number;
}
?>
</body>
</html>
