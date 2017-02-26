<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
<pre>
<?php #header("Content-Type: text/html; charset=utf-8");
	$file=scandir("Directory");
	$kol=count($file);
	chdir("Directory");
	$size=0;
	for ($i=0; $i < $kol ; $i++) { 
		if(is_file($file[$i])){
			echo $file[$i]." ".filesize($file[$i])."\n";
			$size=$size+filesize($file[$i]);
		}
		else{
			echo $file[$i]."\n";
		}
	}
?>
</pre>
</body>
</html>