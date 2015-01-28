<?php
	require ('includes/connection.php');

	$sql = ('SELECT * FROM tblstudents WHERE status = "Current"');
	$result = $conn->query($sql);

?>

<html>
<head>
	<title>Server Test Page</title>
	<link href="/sqaserver/styles/SQA.css" rel="stylesheet" type="text/css" />

</head>
<body>
<table><thead>Student Name</thead>
	<tbody>

<?php
	if($result->num_rows) {
	while($row = $result->fetch_assoc()) {
?>

		<tr>
		<td><?php echo $row['StudentFirst']; ?></td>
		<td><?php echo $row['StudentLast']; ?></td>
		<td><?php echo $row['Status']; ?></td>
		<td><a href="update.php?id=<?php echo $row['StudentID']; ?>">Edit</a></td>
		</tr>
<?php
	}
} 	else {
		echo "No Results Found";
}	
?>	
		<tr>
			<td><p>ADD NEW</p></td>
		</tr>
	</tbody>	
	</table>



</body>
</html>
