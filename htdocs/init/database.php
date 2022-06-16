<?php
// 数据库连接
$conn = mysqli_connect("localhost","root","");

//创建数据库buxiao并选中
$conn->query("CREATE DATABASE buxiao");
$conn->select_db("buxiao");


//创建chat_board数据表
    $sql=<<<EOF
    CREATE TABLE `buxiao`.`chat_board` (`id` INT(10) UNSIGNED NULL DEFAULT NULL AUTO_INCREMENT , `IP` VARCHAR(50) NOT NULL , `username` TEXT NOT NULL , `context` TEXT NOT NULL , `date` DATE NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
EOF;
    echo $sql;
    $conn->query($sql);

//创建blog数据表
$sql=<<<EOF
CREATE TABLE `buxiao`.`blog` (`id` INT NOT NULL AUTO_INCREMENT , `title` TEXT NOT NULL , `src` TEXT NOT NULL , `review` TEXT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
EOF;
echo $sql;
$conn->query($sql);

//插入blog
// INSERT INTO `blog` (`id`, `title`, `abstract`, `content`, `date`, `review`) VALUES (NULL, '', '', '', '', '')
?>




