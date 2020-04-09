<?php
$link = mysqli_connect("localhost", "root", "root", "memberapp");
// サーバー名,データベースユーザー名,パスワードを入力

if (mysqli_connect_error()) {
    die("データベースにエラーあり！");
}


if(array_key_exists('email',$_POST) OR array_key_exists('password',$_POST)){
    if($_POST['email'] == ''){
        echo "Eメールを入力してください。";
    } else if($_POST['password'] == ''){
        echo "パスワードを入力してください。";
    } else {
        $query = "SELECT `id` FROM `users` WHERE email = '".mysqli_real_escape_string($link,$_POST['email'])."'";
        $result = mysqli_query($link,$query);
        if(mysqli_num_rows($result) > 0){
            echo "もう登録されてますよー";
        } else {
            $query = "INSERT INTO `users` (`email`,`password`) VALUES 
            ('".mysqli_real_escape_string($link,$_POST['email'])."','".mysqli_real_escape_string($link,$_POST['password'])."')";
            if(mysqli_query($link,$query)){
                echo "登録しましたよー。";
            } else {
                echo "登録できないよー。";
            }
        }
    }
}

?>

<!-- ログインフォーム設置 -->

<form method="post">
    <p><input type="text" name="email" placeholder="EMAIL"></p>
    <br>
    <p><input type="password" name="password" placeholder="PASSWORD"></p>
    <br>
    <input type="submit" value="登録する！">


</form>