
  <link rel="stylesheet" href="style.css?v=2" />
<?php
$q2="３・３・７拍子だけで何のハリウッド映画かをわからせて下さい";
$select2=["レリゴ　レリゴ　やたらとレリゴ","熱い、とこに、シュワちゃん沈む","グラサンの、男が、背中をそらす物語"];
// shuffle($select2);
echo  "Q2.".$q2."<br>"."<br>";
$answer2=$select2[0];
?>

<!DOCTYPE html>
<html lang="ja">
  <link rel="stylesheet" href="style.css" />
  <head></head>
  <body>
 <div class="box">
  <form method="POST" action="answer2.php">
<?php foreach($select2 as $value) { ?>
<input type ="radio" name="select2" value="<?php echo $value; ?>" /><?php echo $value; ?><br>
<?php } ?>
<input type ="hidden" name="answer2" value="<?php echo $answer2; ?>">
<input type ="submit" class="button" value="回答">
  </form>
 </div>
 <footer>◆bakarizumuquiz◆</footer>  
  </body>
</html>

