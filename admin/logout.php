<?php
session_start();
$_SESSION = array();
session_destroy();
header("Location: http://localhost/project/login.html");
exit();
