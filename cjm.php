<?php
function foo(&...$args)
{
	var_dump($args);
	$i = 0;
	
	foreach ($args as &$arg) {
		$arg = ++$i;
	}
}

foo($a, $b, $c);
echo 'a = ', $a, ', b = ', $b, ', c = ', $c;

echo "<br>";
$a = strstr("Hello world!","world");

$array = [1,2,3];
$array['a'] = ['22'];
var_dump($array);


?>




<script>
window.onresize=function (){

	alert('a');
}


</script>

