<?php

/** Just a test file */

echo 'Checking mysql connection : ';
//$_ENV['DB_HOST']     = 'localhost';
//$_ENV['DB_NAME']     = 'db_site';
//$_ENV['DB_USER']     = 'root';
//$_ENV['DB_PASSWORD'] = 'docker';
//print_r('<pre>');
//print_r('$_ENV: ');
//print_r($_ENV);
//print_r('</pre>');

print_r('<pre>');
print_r('PDO::getAvailableDrivers(): ');
print_r(PDO::getAvailableDrivers());
print_r('</pre>');




$pdo = new PDO("sqlite:host=localhost;dbname=db_site", 'root', 'docker');
//$pdo = new PDO('mysql:host=' . getenv('DB_HOST') . ';dbname=' . getenv('DB_NAME'), getenv('DB_USER'), getenv('DB_PASSWORD'));
//new mysqli(getenv('DB_HOST'), getenv('DB_USER'), getenv('DB_PASSWORD'), getenv('DB_NAME'));

echo 'OK';


phpinfo();

