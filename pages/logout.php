<?php

session_start();
session_destroy();
header("Location: login.php"); // use for the redirecetion to some page
?>