<?php




echo $_POST["username"], "<br>";
echo $_POST["context"];
if(empty($_POST["username"])){
    $_POST["username"]=$_SERVER["HTTP_CLIENT_IP"];
}

if (empty($_POST["context"])) {
    header('Location:'."chatBoard.php?result=fault");
    die();
} else {

}

// 数据库连接
$conn = mysqli_connect("localhost","root","");
if ($conn){
    echo "连接成功";
}

$res=$conn->select_db("buxiao");

// if(!$res){
//     echo "创建数据库buxiao中";
//     $conn->query("CREATE DATABASE buxiao");
//     $conn->select_db("buxiao");
//     $sql=<<<EOF
// CREATE TABLE `mysql`. (`id` INT NULL DEFAULT NULL AUTO_INCREMENT , `IP` TEXT NOT NULL , `username` TEXT NOT NULL DEFAULT '来自M34-4602151-B1的网友' , `context` TEXT NOT NULL , `date` TEXT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
// EOF;
//     $conn->query($sql);


// }

// $sql = "INSERT INTO `chat_board` (`id`, `IP`, `content`, `date`) VALUES (NULL,"."IP".",".$_POST["context"].",".date('YYYY-MM-DD HH:MM:SS', time()).")";
//$sql = "INSERT INTO chat_board". 
$sql="INSERT INTO `chat_board` (`id`, `IP`, `username`,`context`, `date`) VALUES (NULL,'"."IP"." ','".$_POST["username"]."', '".$_POST["context"]."', '".date('Y-m-d H:m:s', time())."')";
echo $sql;
$conn->query($sql);

header('Location:'."chatBoard.php?result=success");

?>
