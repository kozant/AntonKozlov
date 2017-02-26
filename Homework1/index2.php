
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
			unlink($file[$i]);
		}
		else{
			rmdir($file[$i]);
		}
	}
?>
</pre>
</body>
</html>