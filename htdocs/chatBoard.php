
<!DOCTYPE html>

<html class="no-js">
<!-- 头元素 -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>不笑 'S BLOG</title>
    <link rel="icon" href="icon.jpg" type="image/x-icon"></link>

    <!-- 调用JQ库\Foundation库 \Bookstrap库-->
    <!-- <link rel="stylesheet" href="css/foundation.css" /> -->
    <script src="jquery-3.6.0.js"></script>
    <!-- 新 Bootstrap5 核心 CSS 文件 -->
    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/5.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="/index.css">
    <!-- 最新的 Bootstrap5 核心 JavaScript 文件 -->
    <script src="https://cdn.staticfile.org/twitter-bootstrap/5.1.1/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="js/vendor/what-input.js"></script> -->
    <!-- <script src="js/vendor/foundation.min.js"></script> -->

    <script>
        // $(document).foundation();
        //alert("你好，欢迎你来到这里玩");
        console.log("我的联系方式是east_laugh@qq.com");
        $(document).ready(
            function () {

                //alert("页面加载完毕");
                $("#goToBoard").click(function () {
                    // alert("正在前往留言板(开发中)");

                });
            });
    </script>
</head>







<body>
    <!-- 顶栏header -->
    <?php include 'header.php'; ?>



    <h1>ChatBoard(未完成。。可勉强使用)</h1>

    <!-- <p>
        这会暴露你的IP地址。

    </p> -->
<?php
    if(isset($_GET['result'])){
    if($_GET['result']=='fault'){
        echo <<<EOF
            <div class="alert alert-danger">
                发送失败！请检查内容、留名是否为空。
            </div>
        EOF;
    }else if($_GET['result']=='success'){
        echo <<<EOF
            <div class="alert alert-success">
                发送成功！
            </div>
        EOF;
    }
    }
?>
    <div class="input-group mb-3">
        <form action="send.php" method="post">
            <textarea type="text" class="form-control" placeholder="内容" aria-label="context" name="context"></textarea>
            <span class="input-group-text">@</span>
            <input type="text" class="form-control" placeholder="留名" aria-label="username" name="username">
            <input id="submitChat" type="submit" class="btn btn-secondary" value="提交"></button>
        </form>
    </div>

    <link rel="stylesheet" type="text/css" href="chat_room.css">
    <div id="chat_room" class="">
<?php
    // 数据库
    $conn = mysqli_connect("localhost","root","");
    $conn->select_db("buxiao");
    $res=$conn->query("SELECT * FROM `chat_board` order by id desc");
    while($row=$res->fetch_assoc()){
        $rowout="<div class=\"card\">
            <div class=\"card-body\">".$row['context']."</div>
            <div class=\"card-footer\">".
                "<username>".$row['username']."</username>".
                "<date>   发表于".$row['date']."</date>".
            "</div>
        
        </div>";
     
        // echo '<pre>';
        // print_r($row);
        echo $rowout;
    }
    $conn->close();

?>
    </div>

</body>
    
</html>