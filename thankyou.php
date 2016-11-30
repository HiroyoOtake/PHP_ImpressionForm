<?php

// var_dump($_POST);
$name = $_POST['name'];
$impression = $_POST['impression'];

?>

<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<title>サンキューページ</title>
	</head>
	<body>
		<h1>投稿ありがとうございました。</h1>
		<p>以下の内容で投稿されました。</p>
		名前: <?php echo $name; ?><br>
		感想: <?php echo $impression; ?><br>
	</body>
	<a href="index.php">戻る</a>
</html>
