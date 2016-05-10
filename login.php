
<?php

$password = $_POST['password'];

if($password== 'providenzia'){
echo "correct password";
    header('location: downloadable/test');
}
else{
    echo"wrong password";
}

?>