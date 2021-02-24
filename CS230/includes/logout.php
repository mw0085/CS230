<?php

session_start();
session_unset(); //basically sets session variable to an emoty array
session_destroy(); //removes all files clear cache
header("Location: ../index.php");
exit();
