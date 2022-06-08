<?php
		
	function showWebshopHeader()
	{
		 echo   "<h1> Webshop </h1>";
	}

	function showWebshopContent()
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

		$_Img = mysqli_query($_Conn, "SELECT * FROM products WHERE id = 1");

		while($rows = mysqli_fetch_array($_Img))
		{
			echo '<Img src="Images/'. $rows['Filename'].'">';
		}
		
	}
?>