<!DOCTYPE HTML>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>4eachblog 掲示板</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

    <?php
    
    mb_internal_encoding("utf8");
    $pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","root");
    $stmt = $pdo -> query("select*from 4each_keijiban");
    
    ?>

    <header>
        <img src="./4eachblog_logo.jpg" class="log">
        <ul class="menu">
            <li>トップ</li>
            <li>プロフィール</li>
            <li>4eachについて</li>
            <li>登録フォーム</li>
            <li>問い合わせ</li>
            <li>その他</li>
        </ul>
    </header>

    <main　class="main">
        <div class="left">
            <h1>プログラミングに役立つ掲示板</h1>
            <form method="post" action="insert.php">
                <h2 class="input_form">入力フォーム</h2>
                <div>
                    <label>ハンドルネーム</label>
                    <br>
                    <input type="text" class="text" size="35" name="handlename">
                </div>

                <div>
                    <label>タイトル</label>
                    <br>
                    <input type="text" class="text" size="35" name="title">
                </div>

                <div>
                    <label>コメント</label>
                    <br>
                    <textarea cols="70" rows="7" name="comments"></textarea>
                </div>


                <div class="button_area">
                    <input type="submit" class="submit" value="投稿する">
                </div>
            </form>

            <?php
            
            while ($row = $stmt -> fetch()) {
            
                echo "<div class='box_1''>";
                echo "<h2 class='box_a'>".$row['title']."</h2>";
                echo "<div class='title_p'>";
                echo $row['comments'];
                echo "<div class = 'handlename'> posted by".$row['handlename']."</div>";
                echo "</div>";
                echo "</div>";
                }
                
            ?>

        </div>



        <div class="right">
            <h2 class="side_title">人気の記事</h2>
            <p class="side-menu">PHPオススメの本</p>
            <p class="side-menu">PHP MyAdminの使い方</p>
            <p class="side-menu">今人気のエディタ Top5</p>
            <p class="side-menu">HTMLの基礎</p>
            <h2 class="side_title">オススメリンク</h2>
            <p class="side-menu">インターノウス株式会社</p>
            <p class="side-menu">XAMPPのダウンロード</p>
            <p class="side-menu">Eclipseのダウンロード</p>
            <p class="side-menu">Bracketsのダウンロード</p>
            <h2 class="side_title">カテゴリ</h2>
            <p class="side-menu">HTML</p>
            <p class="side-menu">PHP</p>
            <p class="side-menu">MySQL</p>
            <p class="side-menu">JavaScript</p>
        </div>



    </main>

    <footer>
        <p>copyright©️internous｜4each blog the which provides A to Z about programming. </p>
    </footer>

</body>



</html>
