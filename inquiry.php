<?php

// var_dump($_POST);

$name = $_POST['name'];
$impression = $_POST['impression'];

?>

<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<title>内容確認</title>
	</head>
	<body>
		<h1>内容確認</h1>
		<p>以下の内容でよろしいですか?</p>
		名前: <?php echo $name; ?><br>
		感想: <?php echo $impression; ?>
	</body>
</html>
