<?php
 $db = mysqli_connect('host', 'username', 'password', 'dbname');
 if(!$db){
   echo "failed to connect";
 }

/*
Use this sql query to create the table in your mysql database

CREATE TABLE `mydb`.`myblogz` ( `id` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR NOT NULL , `title` VARCHAR NOT NULL , `content` LONGTEXT NOT NULL , `date_created` DATE NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`id`)) ENGINE = MyISAM;
*/
?>
