<?php

	// phpinfo();


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

		if ($res->num_rows > 0) 
		{
		    while($row = $res->fetch_assoc()) 
		    {
		        echo "".$row["id"]." - ".$row["Nama"]." - ". $row["Alamat"]." - ". $row["Jabatan"]."<br>";
		    }
		} 
		else 
		{
		    echo "No data!!";
		}

		mysqli_close($conn);		
	}


?>
