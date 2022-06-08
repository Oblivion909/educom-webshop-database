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
		//geturlvar()
		Echo 'thanks for purchasing';
	}
?>