<?php

$name = "bob";
echo $name;

$myNumber = 45;
echo "<p>番号：　$myNumber</p>";

echo "<hr>";

$myarrey = array("bob", "mike", "ken");
print_r($myarrey);

echo "<br><br>";


for($i = 0; $i < 4; $i++){
    echo $i."<br>";
}
echo "<br><br>";

for($i = 2; $i <= 20; $i++){
    echo $i."<br>";
}
echo "<hr>";

$family = array("bob", "mike", "ken");
foreach ($family as $key => $value){
    echo $key.":".$value.",";
}
echo "<hr>";

if($_POST){
    echo "これはテストです。ドーモ" . $_POST['name'] . "サン!<br>ニートです！";
} else {
    echo "ハイクを詠め！";
}

echo "<hr>";

$emailTo = "test@test.com";
$subject = "これはテストです。";
$body = "テストの出力方法";
$header = "";

if(mail($emailTo, $subject, $body, $header)){
    echo "<p>送信成功</p>";
} else {
    echo "<p>失敗しました</p>";
}
?>
<p>テスト用フォーム</p>
<form method="post">
    <input type="text" name="name">
    <input type="submit" value="送信">
</form>



