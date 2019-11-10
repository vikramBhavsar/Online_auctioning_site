<?php

// -------------IMPORTANT VARIABLES SET DURING SESSION LOGIN ------------
// $_SESSION['userid'] = $row['userid'];
// $_SESSION['username'] = $row['username'];
// $_SESSION['emailid'] = $row['emailid'];
// $_SESSION['loggedin'] = 1;


session_start();

function destroySession(){
    session_unset();
    session_destroy();
}

?>
