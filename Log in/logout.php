<?php

 session_unset();
 session_reset();
 session_destroy();
 
 header("location: log-in.php")


?>