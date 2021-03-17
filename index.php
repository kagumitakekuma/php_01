    <link rel="stylesheet" href="style.css?v=2" />

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>バカリズムIPPON回答まとめ</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="main">
      <div>IPPONグランプリに出場した際の『バカリズムの回答』がどれかを当てるクイズを出題します！</div>
      <div>全部で3問あります。</div>
      <div>選択肢をチェックして、回答ボタンを押してください。</div>
      <div>クイズスターティン！！</div>
    </div>
  </body>
</html>

<?php
$q1="語尾に「あそばせ」をつけて相手をイラっとさせてください";
$select1=["気象衛星あそばせ","足立区に住んでんだ、俺港区に住んであそばせ","味わからないでしょうが　お食べあそばせ"];
// shuffle($select1);
echo  "Q1.".$q1."<br>"."<br>";
$answer1=$select1["0"];





?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>バカリズムIPPON回答まとめ</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
  <div class="box">
   <form method="POST" action="answer.php" class="form">
<?php foreach($select1 as $value) { ?>
<input type ="radio" name="select1" value="<?php echo $value; ?>" /><?php echo $value; ?><br>
<?php } ?>
<input type ="hidden" name="answer1" value="<?php echo $answer1; ?>">
<input type ="submit"  class="button" value="回答">
</div>  
</form>
<footer>◆bakarizumuquiz◆</footer>  
 </body>
</html>

