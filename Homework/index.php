<?php
	$numb=6;
	$row="<td> </td>";
	for ($i=1; $i <= $numb; $i++) { 
		$row.="<td>$i</td>";
	}
	$thead="<tr>$row</tr>";
	for ($i=1; $i <= $numb; $i++) {
		$row="<td>$i</td>";
		for ($j=1; $j <= $numb; $j++) { 
			$row.="<td>".($i*$j)."</td>";
		}
		$tbody.="<tr>$row</tr>";
	}
?>
<!DOCTYPE html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<table>
		<thead>
			<?php echo $thead ?>
		</thead>
		<tbody>
			<?php echo $tbody ?>
		</tbody>
	</table>
</body>
</html>