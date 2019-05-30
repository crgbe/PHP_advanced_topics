<?php
$password = password_hash('testing', PASSWORD_DEFAULT);
echo "{$password}\n";

//$matches = password_verify('foo', $password);
//echo "{$matches}\n";//false doesn't match
//
//$matches1 = password_verify('testing', $password);
//echo "{$matches1}\n";//1 does match

if(password_needs_rehash($password, PASSWORD_DEFAULT, ['cost' => 12])){
    $password = password_hash($password, PASSWORD_DEFAULT, ['cost' => 12]);
    echo "{$password}\n";
}
