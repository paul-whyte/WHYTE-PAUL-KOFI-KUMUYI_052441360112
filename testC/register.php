<?php
$Name["fnName"]
$Email["email"]
$Password["passw"]
$Department["dept"]

if (empty($Name)|| empty($Email)|| empty($Password)) {
    echo "All input is required";
}else{
   header("Location:login.php")
}
?>