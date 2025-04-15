<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body class="cyberpunk-bg">
    <div class="login-box">
      <h2>
<?php

//データ追加
$indataname = isset($_GET['username']) ? $_GET['username']:'';
$indataaddress = isset($_GET['useraddress']) ? $_GET['useraddress']:'';
$indatamail = isset($_GET['usermail']) ? $_GET['usermail']:'';

if(mb_ereg('^[ぁ-んァ-ヶ一-龥ー]{1,20}$',$indataname) == false)
{
  die("20文字以内で名前を入力してください。記号等は利用できません。");
}
if(mb_ereg('^[ぁ-んァ-ヶ一-龥0-9０-９ー\-－]{1,50}$',$indataaddress) == false)
{
  die("50文字以内で住所を入力してください。記号等は利用できません。");
}
if(mb_ereg('^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.[a-zA-Z]{2,100}$',$indatamail) == false)
{
  die("正しいメールアドレス形式で入力してください。記号は.-_@のみ利用可能。");
}
//ここまで

echo "あなたが入力した値<br>";
echo "名前：" . $_GET['username'] . "<br>";
echo "住所：" . $_GET['useraddress']. "<br>";
echo "メールアドレス：" . $_GET['usermail'];
?>
    </h2>
    </div>
  </body>
</html>
