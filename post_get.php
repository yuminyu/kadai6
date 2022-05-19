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

<script>
    const url = "post_get_confirm.php";
    
    const post_paras = {
        method:'POST',
        headers:{
            'Content-Type':'application/json'
        },
        body:JSON.stringify({"name":"aaa"})
    }

    //getでレスポンス取得する(cookieの訪問回数は増える)
    fetch(url+'?name=aaa')
    .then((get_response)=>{
        return get_response.text();
    })
    .then((get_text)=>{
        //HTML部分をログに
        console.log(get_text);
         //postでレスポンス取得する(cookieの訪問回数は増える)
        fetch(url,post_paras)
        .then((post_response)=>{
            return post_response.text(); 
        })
        .then((post_text)=>{
            //HTML部分をログに
            console.log(post_text);
        })
    })

   

   


</script>
</body>

</html>

