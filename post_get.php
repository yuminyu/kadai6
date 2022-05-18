<html>
<head>
    <meta charset="utf-8">
    <title>POST OR GET</title>
</head>

<body>
    <P>クッキーを削除する</P>
    <form action="post_get_confirm.php" method="get">
        <input type="submit" name="delete" value="cookie削除">
    </form>

    <P>POSTメソッド</P>
    <form action="post_get_confirm.php" method="post">
        name: <input type="text" name="name">
        <input type="submit" value="POST送信">
    </form>

    <P>GETメソッド</P>
    <form action="post_get_confirm.php" method="get">
        name: <input type="text" name="name">
        <input type="submit" value="GET送信">
    </form>

    <P>$_FILESを確かめる</P>
    <form enctype="multipart/form-data" action="post_get_confirm.php" method="POST">
    <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
    このファイルをアップロード: <input name="userfile" type="file" />
    <input type="submit" value="ファイルを送信" />
    </form>

    <p>なんとなくgetメソッドのform中にpostのformをネストしてみる</p>
    <form action="post_get_confirm.php" method="get">
    <form action="post_get_confirm.php" method="post">
        name: <input type="text" name="name">
        <input type="submit" value="送信">
    </form>
    </form>

    <p>なんとなくpostメソッドのformの中にgetのformをネストしてみる</p>
    <form action="post_get_confirm.php" method="post">
    <form action="post_get_confirm.php" method="get">
        name: <input type="text" name="name">
        <input type="submit" value="送信">
    </form>
    </form>


</body>

</html>
