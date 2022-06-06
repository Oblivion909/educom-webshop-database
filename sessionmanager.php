<?php
    function doLoginUser($_UserName)
    {
        //set session username to username.
        $_SESSION['LoggedIn'] = true;
        $_SESSION['UserName'] = $_UserName;
        
    } 
    function isUserLoggedIn()
    {
        //returns that the user is logged in.
        return isset($_SESSION["LoggedIn"]); 
    }
    function getLoggedInUser()
    {
        //returns user login name.
        return $_SESSION['UserName'];
    }
    function doLogoutUser()
    {
        //unsets the session login status and name.
        unset($_SESSION['LoggedIn']);
        unset($_SESSION['UserName']);
        
    }
?>