<?php

$select=$_POST["select3"];
$answer=$_POST["answer3"];

if($select===$answer){
    $result= "正解！";
}else{
    $result= "残念！";
}



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
<h2>結果</h2>
<?php echo $result; ?>
    
     <form method="POST" action="index.php">
<button class="answerb">トップへ戻る</button>
     </form>
<footer>◆bakarizumuquiz◆</footer>  
  </body>
</html>