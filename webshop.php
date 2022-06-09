<?php
		
	function showWebshopHeader()
	{
		 echo   "<h1> Webshop </h1>";
	}

	function showWebshopContent($_Data)
	{
		$_dbServerName = "127.0.0.1";
        $_dbUserName = "WebShopUser";
        $_dbPassWord = "AHiREcdCBG*PfxTy";
        $_dbName = "stans_webshop";
        
        $_Conn = new mysqli($_dbServerName, $_dbUserName, $_dbPassWord, $_dbName);
        
        if (!$_Conn)
        {
            die ("Connection failed" . $_Conn->connect_error());
        }    

		$_Img = mysqli_query($_Conn, "SELECT * FROM products");

		while($rows = mysqli_fetch_array($_Img))
		{
		 	echo 'ID:' .  $rows['Id']. "<br>";
			echo $rows['Price'] . "<br>";
			echo'	
				<ul class="ItemList"> 
					<li><a href = index.php?page=detail&id=' . $rows['Id'] . '> ' .  $rows['Name'] . '</a></li>
				</ul>
			';
			
			echo '<Img src="Images/'. $rows['Filename'].'">' . "<br>";
		}
	}
	function showDetailedPage($_Data)
	{	
		$_dbServerName = "127.0.0.1";
        $_dbUserName = "WebShopUser";
        $_dbPassWord = "AHiREcdCBG*PfxTy";
        $_dbName = "stans_webshop";
        
        $_Conn = new mysqli($_dbServerName, $_dbUserName, $_dbPassWord, $_dbName);
        
        if (!$_Conn)
        {
            die ("Connection failed" . $_Conn->connect_error());
        }    

		$_Url = $_SERVER['REQUEST_URI'];

		$_UrlComponents = parse_url($_Url);
		parse_str($_UrlComponents['query'], $_Parameters);
		$_Id = $_Parameters['id'];

		echo '<div class="BigImages">';
		switch($_Id)
		{
			
			case "1":
			
				$_ProductToDisplay = mysqli_query($_Conn, "SELECT * FROM products WHERE Id = 1");

				while($rows = mysqli_fetch_array($_ProductToDisplay))
				{
		 			echo 'ID:' .  $rows['Id']. "<br>";
					echo $rows['Price'] . "<br>";
					echo $rows['Name'] . "<br>";
			
					echo '<Img src="Images/'. $rows['Filename'].'"width="360" height="230" >' . "<br>";
				}
				break;
				case "2":
			
				$_ProductToDisplay = mysqli_query($_Conn, "SELECT * FROM products WHERE Id = 2");

				while($rows = mysqli_fetch_array($_ProductToDisplay))
				{
		 			echo 'ID:' .  $rows['Id']. "<br>";
					echo $rows['Price'] . "<br>";
					echo $rows['Name'] . "<br>";
			
					echo '<Img src="Images/'. $rows['Filename'].'" alt="" width="360" height="230" >' . "<br>";
				}
				break;
				case "3":
			
				$_ProductToDisplay = mysqli_query($_Conn, "SELECT * FROM products WHERE Id = 3");

				while($rows = mysqli_fetch_array($_ProductToDisplay))
				{
		 			echo 'ID:' .  $rows['Id']. "<br>";
					echo $rows['Price'] . "<br>";
					echo $rows['Name'] . "<br>";
			
					echo '<Img src="Images/'. $rows['Filename'].'">' . "<br>";
				}
				break;
				case "4":
			
				$_ProductToDisplay = mysqli_query($_Conn, "SELECT * FROM products WHERE Id = 4");

				while($rows = mysqli_fetch_array($_ProductToDisplay))
				{
		 			echo 'ID:' .  $rows['Id']. "<br>";
					echo $rows['Price'] . "<br>";
					echo $rows['Name'] . "<br>";
			
					echo '<Img src="Images/'. $rows['Filename'].'">' . "<br>";
				}
				break;
				case "5":
			
				$_ProductToDisplay = mysqli_query($_Conn, "SELECT * FROM products WHERE Id = 5");

				while($rows = mysqli_fetch_array($_ProductToDisplay))
				{
		 			echo 'ID:' .  $rows['Id']. "<br>";
					echo $rows['Price'] . "<br>";
					echo $rows['Name'] . "<br>";
			
					echo '<Img src="Images/'. $rows['Filename'].'">' . "<br>";
				}
				break;
			echo '</div>';
		}
		echo "Hello";
	}
?>