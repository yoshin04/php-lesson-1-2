<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>PHP課題1-1</title>
</head>
<body>
<?php 
 $title = '日本の首都は？';
?>
<form method="post">
   <p><?php echo $title ?></p>
   <input type="text" name="answer">
   <input type="submit" name="submit" value="OK">
</form>
<?php 
  if($_POST['submit']) {
    $answer = $_POST['answer'];
    if($answer === '東京') {
      $judge = '正解';
    } else {
      $judge = '不正解';
    }
  }
?>
<div>
  <?php echo $judge ?>
</div>
</body>
</html>