  <link rel="stylesheet" href="style.css?v=2" />

<?php
$q3="バズーカを持っているところを職質されました 言い逃れして下さい";
$select3=["あ、これプレゼント用なんで","あ、これスマホカバーです","おまわりさん、ハロウィン、ハロウィン！"];
// shuffle($select3);
echo "Q3.".$q3."<br>"."<br>";
$answer3=$select3[0];
?>

<!DOCTYPE html>
<html lang="ja">
  <link rel="stylesheet" href="style.css" />
  <head></head>
  <body>
  <div class="box">  
       <form method="POST" action="answer3.php">
    
<?php foreach($select3 as $value) { ?>
<input type ="radio" name="select3" value="<?php echo $value; ?>" /><?php echo $value; ?>><br>
<?php } ?>
<input type ="hidden" name="answer3" value="<?php echo $answer3; ?>">
<input type ="submit"  class="button" value="回答">
     
</form>
</div>
<footer>◆bakarizumuquiz◆</footer>  
  </body>
</html>












