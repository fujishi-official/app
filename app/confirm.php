<?php
// postdate
$user_name = $_POST['user_name'];
$hobby = $_POST['hobby'];
?>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
    <h1>受信ページ</h1>
    <p>あなたの名前は <?php echo $user_name; ?> さんです</p>
    <p>趣味は <?php echo $hobby; ?> です</p>
    <p>こちらの情報でよろしいですか？</p>
    <!-- form -->
    <form action="complete.php" method='POST'>
    <input type="hidden" name="user_name" value="<?php echo $user_name; ?>">
    <input type="hidden" name="hobby" value="<?php echo $hobby; ?>">
    <input type="submit" value="登録">
    </form>
</body>
</html>