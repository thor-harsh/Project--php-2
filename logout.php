<?php

session_start();//Starting the session
session_unset();//Unsetting the session
session_destroy();//Destroy the session


header("location: login.php");

exit;


?>