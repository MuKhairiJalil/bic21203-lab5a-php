localhost/lab_5a/lab5a_q1.php 
 
<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <title>Lab 5a Q1</title> 
	<style>
        table, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 8px;
        }
    </style>
</head> 
<body> 
    <?php  
        $name = "Muhammad Khairi bin Jalil";
		$matricNumber = "AI240009";
		$course = "Bachelor of Computer Science (Information Security)";
		$yearOfStudy = "Year 3";
		$address = "Parit raja, Batu Pahat, Johor";
    ?> 
 
    <table> 
        <tr> 
            <td>Name</td> 
            <td><?php echo $name; ?></td>  
        </tr> 
		<tr>
			<td>Matric Number</td>
			<td><?php echo $matricNumber;?></td>
		</tr>
		<tr>
            <td>Course</td>
            <td><?php echo $course; ?></td>
        </tr>
        <tr>
            <td>Year of Study</td>
            <td><?php echo $yearOfStudy; ?></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><?php echo $address; ?></td>
        </tr>		
		
		
    </table> 
     
</body> 
</html> 
