<?php
$con = mysql_connect('localhost', 'root', '');
mysql_select_db("krish");
?>
$sql= CREATE TABLE questions (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
YES VARCHAR(5) NOT NULL,
NO VARCHAR(5) NOT NULL,BOTH VARCHAR(5),NONE MAYBE VARCHAR(5));

