<?php
// POST内容を取得、入力値が検証
$movie = '';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $movie = $_POST['movie'];

    if(mb_strlen($movie) === 0){
        $err = '文字を入力してください';
    }elseif(mb_strlen($movie) > 20){
        $err = '20文字以内で入力してください';
    }
}
?>

<html>
<head>
<meta charset="utf-8">
<style type="text/css">
.center{text-align: center;}
input{margin: 5px;}
</style>
</head>
<body>
    <div class="center">
        <h1>入力フォームを検証</h1>
        <p>
            <?php
            // 入力内容んい誤りがあればError問題なければ表示 
            if(isset($err)){
                echo $err;
            }else {
                echo 'あなたの好きな映画は'.$movie.'です。'; 
            }
            ?>
         </p>
            <form action="" method="POST">
                <label>好きな映画</label>
                <input type="text" name="movie"><br>
                <input type="submit">
            </form>
    </div>
</body>
</html>