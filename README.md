# very-simple-php-oop-login-reg-system

-------------------------DATABASE------------------------
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'new_lr');



------------------------USER TABLE------------------------
CREATE TABLE users
(
uid INT PRIMARY KEY AUTO_INCREMENT,
uname VARCHAR(30) UNIQUE,
upass VARCHAR(50),
fullname VARCHAR(100),
uemail VARCHAR(70) UNIQUE
);
