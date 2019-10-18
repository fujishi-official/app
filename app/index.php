<?php echo '<p>Hello fujishi</p>'; ?>

<?php 
$score = mt_rand(0,100);
echo $score;

if($score > 0 && $score < 60){
    echo '平均点以下';
}elseif($score >= 60 && $score < 80){
    echo 'safe';
}elseif($score >= 80 && $score < 100){
    echo 'nice';
}elseif($score === 100){
    echo 'max';
}else{
    echo 'error';
}
?>