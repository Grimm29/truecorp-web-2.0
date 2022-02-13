<?php

	$conn =mysqli_connect("172.18.0.3","root","root","truecorp_db"); 
	
	if (!$conn)
	{ 
		echo "Not Connected to the Database!!";
		exit; 
	} 
	else
	{

		$sql = "SELECT * FROM users";
		$res = $conn->query($sql);

		$i = 0;
		
		if ($res->num_rows > 0) 
		{
		    
		    while($row = $res->fetch_assoc()) 
		    {
		        $i++;
		    }
		    
		    echo $i;
		} 
		else 
		{
		    echo "No User!!";
		}

		mysqli_close($conn);		
	}


?>




