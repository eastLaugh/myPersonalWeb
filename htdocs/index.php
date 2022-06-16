<!DOCTYPE html>
<html class="no-js">
<!-- 头元素 -->

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>不笑 'S BLOG</title>
	<link rel="icon" href="icon.jpg" type="image/x-icon"></link>
</head>

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
				window.location.href = "chatBoard.html";
			});
		});
</script>

<body>
	<!-- 顶栏header -->

	<?php include 'header.php'; ?>

	<!-- 轮播 -->
	<!-- https://www.runoob.com/bootstrap/bootstrap-intro.html -->
	<div id="demo" class="carousel slide" data-bs-ride="carousel">

		<!-- 指示符 -->
		<div class="carousel-indicators">
			<button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
			<button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
			<button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
		</div>

		<!-- 轮播图片 -->
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="wtf1.png" class="d-block" style="width:100%">
			</div>
			<div class="carousel-item">
				<img src="wtf2.png" class="d-block" style="width:100%">
			</div>
			<div class="carousel-item">
				<img src="wtf3.png" class="d-block" style="width:100%">
			</div>
		</div>

		<!-- 左右切换按钮 -->
		<button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
			<span class="carousel-control-prev-icon"></span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
			<span class="carousel-control-next-icon"></span>
		</button>
	</div>

	<!--  -->
	<img src="sample.jpg">
	<p>
		1858年8月由菲尔德创立的一家英国私人公司在爱尔兰（欧洲）与纽芬兰（北美洲）之间完成铺设了第一条洲际海底通信电缆。

	</p>


	<button id="goToBoard" type="button" class="btn btn-primary">前往留言板</button>



</body>

</html>