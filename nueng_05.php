<style>@font-face{font-family:mono;src:url('mono.ttf');}</style>
<pre style="font-family:mono;];font-size:20px;">

<?php


for($row=1;$row<=4;$row++) {
	for($col=1;$col<=4-$row;$col++) {
		/*àÃÔèÁµé¹ ;ÊÔé¹ÊØ´;¡ÒÃàÅ×èÍ¹ä» (à¾ÔèÁ¢Ñé¹ / Å´Å§)*/
	echo(" ");
	}
	echo($row);
	for($col=2;$col<=$row;$col++){
	echo("**");
	}
	echo($row);
	echo "<br/>";
}
for($row=3;$row>=1;$row--) {
	for($col=1;$col<=4-$row;$col++) {
	echo(" ");
	}
	echo($row);
	for($col=2;$col<=$row;$col++){
	echo("**");
	}
	echo($row);
	echo "<br/>";
}
?>

</pre>