<style>@font-face{font-family:mono;src:url('mono.ttf');}</style>
<pre style="font-family:mono;];font-size:20px;">

<?php


for($row=1;$row<=5;$row++) {
	for($col=2;$col<=0+$row;$col++) {
		echo(" ");
	}
	
	for($col=$row;$col<=$row;$col++) {
		echo($row);
	}
	
	echo($row+1);
	for($col=1;$col<=5-$row;$col++){
		echo("  ");
	}
	
	for($col=$row;$col<=$row;$col++) {
		echo($row+1);
	}
	
	echo($row);
	
	echo "<br/>";
}
?>
</pre>