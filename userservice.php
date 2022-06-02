<?php
    function RegisterFormValidated($_Data)
    {   
        //Write to database 
        
        $_dbServerName = "127.0.0.1";
        $_dbUserName = "WebShopUser";
        $_dbPassWord = "AHiREcdCBG*PfxTy";
        $_dbName = "stans_webshop";
        
        $_EnteredEmail = $_Data['EnteredEmail'];
        $_EnteredUsername = $_Data['UserName'];
        $_EnteredPassword = $_Data['EnteredPassword'];
        
        $_Conn = new mysqli($_dbServerName, $_dbUserName, $_dbPassWord, $_dbName);
        
        if (!$_Conn)
        {
            die ("Connection failed" . $_Conn->connect_error());
        }
        
        $sql = "INSERT INTO users(Email, Username, Password)
        VALUES('$_EnteredEmail', '$_EnteredUsername', '$_EnteredPassword')";
        
        if(mysqli_query($_Conn, $sql))
        {
            echo "User Registered!";
        }
        else
        {
            echo "Error: " . $sql . "<br>" . mysqli_error($_Conn);
        }
        
        mysqli_close($_Conn);
        header("location: index.php?page=Login");
    }
?>