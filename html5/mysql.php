<?php
    $link = mysqli_connect("localhost","root","root", "memberapp");
    // サーバー名,データベースユーザー名,パスワードを入力
    
    if(mysqli_connect_error()){
        die("データベースにエラーあり！");
    }

    // insertクエリ
    // $query = "INSERT INTO `users` (`email`,`password`) VALUES ('test@test.com','testpas2')";
    // if($result = mysqli_query($link,$query)){
    //     echo "INSERTクエリ発行したよー";
    // }

    // updateクエリ
    // $query = "UPDATE `users` SET email='testnomail@test.com' WHERE id=1 LIMIT 1";
    // if ($result = mysqli_query($link, $query)) {
    //      echo "UPDATEクエリ発行したよー";
    // }

    // $query = "UPDATE `users` SET password ='testnopas' WHERE id=1 LIMIT 1";
    // if ($result = mysqli_query($link, $query)) {
    //      echo "passwordのUPDATEクエリ発行したよー";
    // }


    echo "<br><hr>";

    // $query = "SELECT * FROM users";

    // 個別で検索
    // $query = "SELECT * FROM users WHERE id = 1";

    // ワイルドカード　同じ文字列を検索
    // $query = "SELECT * FROM users WHERE email LIKE '%@test.com'";

    $name = "junroku'neet";
    $query = "SELECT * FROM users WHERE name = '".mysqli_real_escape_string($link,$name)."'";

    echo $query;

    if ($result = mysqli_query($link, $query)) {
        echo "クエリ発行したよー";
    }

    while($row = mysqli_fetch_array($result)){
        print_r($row);
    }
    // $row = mysqli_fetch_array($result);
    // echo "メールアドレス".$row['email']."<br>パスワード".$row['password']."デス。";
?>