<?php
header("Cache-Control:no-cache,no-store,must-revalidate");
session_start();
unset($_SESSION['username']);
unset($_SESSION['status']);
session_destroy();

header("Location:Login.php");

?>