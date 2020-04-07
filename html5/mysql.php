<?php
    $link = mysqli_connect("localhost","root","root", "memberapp");
    // サーバー名,データベースユーザー名,パスワードを入力
    
    if(mysqli_connect_error()){
        echo "データベースにエラーあり！";
    } else {
        echo "接続してますよー";
    }
?>