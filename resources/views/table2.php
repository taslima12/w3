<!DOCTYPE html>
<html>
<head>
	<title> 5th clss </title>
</head>
<body>


	<?php
	// 	echo $name,"<br>";
	// echo $mobile,"<br>";
	// echo $address;


// foreach($students[1] as $key=>$val){
// 		echo $key,":", $val,"<br>";
// 	}
    

	// foreach($students as $key=>$values){
	// 	foreach($values as $key=>$val){
	// 	echo $key,":", $val,"<br>","<br>";
	// }
 //    }
	?>

	<table border="1px" color="blue" height="200px" width="300px">
		<tr>
			<th>id</th>
			<th>name</th>
			<th>mobile</th>
		</tr>
<?php
foreach($students as $values){
	echo "<tr>";
		foreach($values as $val){
			echo "<td>$val</td>";
		}
	echo "</tr>";
}

?>
		
	</table>
	
</body>
</html>
