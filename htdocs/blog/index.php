<?php
    
?>

<!DOCTYPE html>
<html class="no-js">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>不笑'S BLOG</title>
    <link rel="icon" href="/icon.jpg">
</head>

<!-- 调用JQ库\Foundation库 \Bookstrap库-->
<!-- <link rel="stylesheet" href="css/foundation.css" /> -->
<script src="/jquery-3.6.0.js"></script>
<!-- 新 Bootstrap5 核心 CSS 文件 -->
<link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/5.1.1/css/bootstrap.min.css">
<link rel="stylesheet" href="/index.css">
<!-- 最新的 Bootstrap5 核心 JavaScript 文件 -->
<script src="https://cdn.staticfile.org/twitter-bootstrap/5.1.1/js/bootstrap.bundle.min.js"></script>
<!-- <script src="js/vendor/what-input.js"></script> -->
<!-- <script src="js/vendor/foundation.min.js"></script> -->

<body>
    <?php include '../header.php'?>
    
    <link rel="stylesheet" href="blog.css">
    <script src="blog.js"></script>

    <div id="blog" class="container pt-1">
        <!-- PHP读取blog -->
        <?php
            $conn = mysqli_connect("localhost","root","");

            //创建数据库buxiao并选中
            // $conn->query("CREATE DATABASE buxiao");
            $conn->select_db("buxiao"); 
            $res=$conn->query("SELECT * FROM `blog` order by id desc"); 

        
            function getAbstract(){
                return "abstract";
            }

            while($row=$res->fetch_assoc()){
                
                $rowout=<<<EOF
                <div class="card container-fluid" id="article-
                
                EOF.$row['id'].<<<EOF
                
                ">
                <div class="card_body row">
                    <div class="col-sm-4"><img src="/sample.jpg" alt=""></div>
                    
                    <div class="col-sm-8">
                        <div id="title">
                            <div id="symbol"><h1 >“</h1></div><h1>
                EOF.$row['title'].<<<EOF
                </h1>
                        <div id="review_btn_group" style="margin-top: 5px;margin-bottom:5px">
                            <button onclick="review()"> 😍 </button>
                            <button> 😂 </button>
                            <button> 😡 </button>
                        </div>
                    </div>
                    <div id="abstract">
                EOF.getAbstract().<<<EOF
                        </div>
                            </div></div>
                        </div>
                EOF;
                echo $rowout;
            }
        ?>

        <!-- sample -->
        <div class="card container-fluid">
            <div class="card_body row">
                <div class="col-sm-4"><img src="/sample.jpg" alt=""></div>
                
                <div class="col-sm-8">
                    <div id="title">
                        <div id="symbol"><h1 >“</h1></div>
                        <h1>标题标题标题</h1>
                        <div id="review_btn_group" style="margin-top: 5px;margin-bottom:5px">
                            <button onclick="review()"> 😍 </button>
                            <button> 😂 </button>
                            <button> 😡 </button>
                        </div>
                    </div>
                    <div id="abstract">
                    内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容容内容内容内容内容内容内容内容内容内容内容
                    容内容内容内容内容内容内容内容内容内容内容<br>
                    容内容内容内容内容内容内容内容内容内容内容<br>
                    容内容内容内容内容内容内容内容内容内容内容<br>
                    容内容内容内容内容内容内容内容内容内容内容<br>
                    容内容内容内容内容内容内容内容内容内容内容<br>
                    容内容内容内容内容内容内容内容内容内容内容<br>
                    容内容内容内容内容内容内容内容内容内容内容<br>
                    容内容内容内容内容内容内容内容内容内容内容<br>
                    容内容内容内容内容内容内容内容内容内容内容<br>
                    容内容内容内容内容内容内容内容内容内容内容<br>
                    容内容内容内容内容内容内容内容内容内容内容<br>
                    容内容内容内容内容内容内容内容内容内容内容<br>
                    容内容内容内容内容内容内容内容内容内容内容<br>
                    容内容内容内容内容内容内容内容内容内容内容<br>
                    </div>
                </div>
            </div>
        </div>

        <div class="card container-fluid">
            <div class="card_body row">
                <div class="col-sm-4"><img src="https://gxzv.com/api/uploads/blog/u_1_6299cfbdc21e7_1331x997.jpeg" alt=""></div>
                
                <div class="col-sm-8">
                    
                    
                    内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容
                </div>
            </div>
        </div>

        <div class="card container-fluid">
            <div class="card_body row">
                <div class="col-sm-4"><img src="/sample.jpg" alt=""></div>
                
                <div class="col-sm-8">
                    <title style="display:inline">标题标题标题</title>
                    内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容
                </div>
            </div>
        </div>

        
    </div>
</body>

</html>