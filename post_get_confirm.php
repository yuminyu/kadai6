<html>
<head>
    <meta charset="utf-8">
    <title>スーパーグローバル変数を通してHTTPリクエストを見てみる</title>
</head>
<body>
<?php

//東京のタイムゾーンをセット
date_default_timezone_set("Asia/Tokyo");

//訪問回数を数えるための変数
$n = 0;

//$_COOKIEを見るためにcookieをセットする。過去の訪問回数と最後の訪問時間をvalueとする配列をセットする
if(isset($_GET['delete'])){
    setcookie( "session_time_count" ,"");
}else{
    if (isset($_COOKIE['session_time_count'])){
    //２回目以降のセッション
    $n = json_decode($_COOKIE["session_time_count"])->session_count;
    $n = $n +1;
    $cookie_array = ["session_count"=>$n,"session_time"=>date("Y年m月d日 H時i分s秒", $_SERVER['REQUEST_TIME'])];
    }
    else{
    //初めてのセッション
    $n = 1;
    $cookie_array = ["session_count"=>$n,"session_time"=>date("Y年m月d日 H時i分s秒", $_SERVER['REQUEST_TIME'])];
    }
    setcookie("session_time_count" ,json_encode($cookie_array));
}

//$_POSTを見てみる
if(!empty($_POST)){
    echo '$_POSTはnot empty';
    echo '<p>';
    echo '$_POSTをdump↓';
    echo '</p>';
    echo '<p>';
    var_dump($_POST);
    echo '</p>';
    echo '<p>';
    echo '$_POST['.'name'.']をdump↓';
    echo '</p>';
    echo '<p>';
    var_dump($_POST['name']);
    echo '</p>';
    echo '<p>';
    echo '$_POST['.'name'.']をecho↓';
    echo '</p>';
    echo '<p>';
    echo $_POST['name'];
    echo '</p>';
    echo '<p>'.'〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜'.'</p>';
}else{
    echo '$_POSTはempty';
    echo '<p>';
    echo '$_POSTをdump↓';
    echo '</p>';
    echo '<p>';
    var_dump($_POST);
    echo '</p>';
    echo '<p>';
    echo '$_POST['.'name'.']をdump↓';
    echo '</p>';
    echo '<p>';
    var_dump($_POST['name']);
    echo '</p>';
    echo '<p>';
    echo '$_POST['.'name'.']をecho↓';
    echo '</p>';
    echo '<p>';
    echo $_POST['name'];
    echo '</p>';
    echo '<p>'.'〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜'.'</p>';
}

//$_GETを見てみる
if(!empty($_GET)){
    echo '$_GETはnot empty';
    echo '<p>';
    echo '$_GETをdump↓';
    echo '</p>';
    echo '<p>';
    var_dump($_GET);
    echo '</p>';
    echo '<p>';
    echo '$_GET['.'name'.']をdump↓';
    echo '</p>';
    echo '<p>';
    var_dump($_GET['name']);
    echo '</p>';
    echo '<p>';
    echo '$_GET['.'name'.']をecho↓';
    echo '</p>';
    echo '<p>';
    echo $_GET['name'];
    echo '</p>';
    echo '<p>'.'〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜'.'</p>';
}else{
    echo '$_GETはempty';
    echo '<p>';
    echo '$_GETをdump↓';
    echo '</p>';
    echo '<p>';
    var_dump($_GET);
    echo '</p>';
    echo '<p>';
    echo '$_GET['.'name'.']をdump↓';
    echo '</p>';
    echo '<p>';
    var_dump($_GET['name']);
    echo '</p>';
    echo '<p>';
    echo '$_GET['.'name'.']をecho↓';
    echo '</p>';
    echo '<p>';
    echo $_GET['name'];
    echo '</p>';
    echo '<p>'.'〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜'.'</p>';
}

//$_REQUESTを見てみる
if(!empty($_REQUEST)){
    echo '$_REQUESTはnot empty';
    echo '<p>';
    echo '$_REQUESTをdump↓';
    echo '</p>';
    echo '<p>';
    var_dump($_REQUEST);
    echo '</p>'; 
    echo '<p>';
    echo '$_REQUEST[name]をdump↓';
    echo '</p>';
    echo '<p>';
    var_dump($_REQUEST['name']);
    echo '</p>'; 
    echo '<p>';
    echo '$_REQUEST[name]をecho↓';
    echo '</p>';
    echo '<p>';
    echo $_REQUEST['name'];
    echo '</p>'; 
    echo '<p>'.'〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜'.'</p>';
}else{
    echo '$_REQUESTはempty';
    echo '<p>';
    echo '$_REQUESTをdump↓';
    echo '</p>';
    echo '<p>';
    var_dump($_REQUEST);
    echo '</p>'; 
    echo '<p>';
    echo '$_REQUEST[name]をdump↓';
    echo '</p>';
    echo '<p>';
    var_dump($_REQUEST['name']);
    echo '</p>'; 
    echo '<p>';
    echo '$_REQUEST[name]をecho↓';
    echo '</p>';
    echo '<p>';
    echo $_REQUEST['name'];
    echo '</p>'; 
    echo '<p>'.'〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜'.'</p>';
}

//$_FILESを見てみる
if(!empty($_FILES)){
    echo '$_FILESはnot empty';
    echo '<p>';
    echo '$_FILESをdump↓';
    echo '</p>';
    echo '<p>';
    var_dump($_FILES);
    echo '</p>';
    echo '<p>';
    echo '$_FILES['.'name'.']をdump↓';
    echo '</p>';
    echo '<p>';
    var_dump($_FILES['name']);
    echo '</p>';
    echo '<p>';
    echo '$_FILES['.'name'.']をecho↓';
    echo '</p>';
    echo '<p>';
    echo $_FILES['name'];
    echo '</p>';
    echo '<p>'.'〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜'.'</p>';
}else{
    echo '$_FILESはempty';
    echo '<p>';
    echo '$_FILESをdump↓';
    echo '</p>';
    echo '<p>';
    var_dump($_FILES);
    echo '</p>';
    echo '<p>';
    echo '$_FILES['.'name'.']をdump↓';
    echo '</p>';
    echo '<p>';
    var_dump($_FILES['name']);
    echo '</p>';
    echo '<p>';
    echo '$_FILES['.'name'.']をecho↓';
    echo '</p>';
    echo '<p>';
    echo $_FILES['name'];
    echo '</p>';
    echo '<p>'.'〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜'.'</p>';
}

//$_SESSIONを見てみる
if(!empty($_SESSION)){
    echo '$_SESSIONはnot empty';
    echo '<p>';
    echo '$_SESSIONをdump↓';
    echo '</p>';
    echo '<p>';
    var_dump($_SESSION);
    echo '</p>'; 
    echo '<p>'.'〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜'.'</p>';
}else{
    echo '$_SESSIONはempty';
    echo '<p>';
    echo '$_SESSIONをdump↓';
    echo '</p>';
    echo '<p>';
    var_dump($_SESSION);
    echo '</p>'; 
    echo '<p>'.'〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜'.'</p>';
}

//$_COOKIEを見てみる
if(!empty($_COOKIE)){
    echo '$_COOKIEはnot empty';
    echo '<p>';
    echo '$_COOKIEをdump↓';
    echo '</p>';
    echo '<p>';
    var_dump($_COOKIE);
    echo '</p>'; 
    echo '<p>';
    echo '$_COOKIE[session_time_count]をdump↓';
    echo '</p>';
    echo '<p>';
    var_dump($_COOKIE["session_time_count"]);
    echo '</p>'; 
    echo '<p>';
    var_dump(json_decode($_COOKIE["session_time_count"]));
    echo '</p>'; 
    echo '<p>';
    var_dump(json_decode($_COOKIE["session_time_count"])->session_count);
    echo '</p>'; 
    echo '<p>';
    echo json_decode($_COOKIE["session_time_count"])->session_count;
    echo '</p>'; 
    echo '<p>'.'〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜'.'</p>';
}else{
    echo '$_COOKIEはnot empty';
    echo '<p>';
    echo '$_COOKIEをdump↓';
    echo '</p>';
    echo '<p>';
    var_dump($_COOKIE);
    echo '</p>'; 
    echo '<p>';
    echo '$_COOKIE[session_time_count]をdump↓';
    echo '</p>';
    echo '<p>';
    var_dump($_COOKIE["session_time_count"]);
    echo '</p>'; 
    echo '<p>';
    var_dump(json_decode($_COOKIE["session_time_count"]));
    echo '</p>'; 
    echo '<p>';
    var_dump(json_decode($_COOKIE["session_time_count"])->session_count);
    echo '</p>'; 
    echo '<p>'.'〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜'.'</p>';
}

//$_ENVを見てみる($_ENVがemptyになることはないけど、、、)
if(!empty($_ENV)){
    echo '$_ENVはnot empty';
    echo '<p>';
    echo '$_ENVをdump↓';
    echo '</p>';
    echo '<p>';
    var_dump($_ENV);
    echo '</p>'; 
    echo '<p>'.'〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜'.'</p>';
}else{
    echo '$_ENVはempty';
    echo '<p>';
    echo '$_ENVをdump↓';
    echo '</p>';
    echo '<p>';
    var_dump($_ENV);
    echo '</p>'; 
    echo '<p>'.'〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜'.'</p>';
}

//$_SERVERを見てみる（$_SERVERがemptyになることはないけど、、、）
if($_SERVER["REQUEST_METHOD"] == "POST"){
    echo '<p>';
    echo 'POSTメソッドでした';
    echo '</p>'; 
    echo '<p>';
    echo '$_SERVERをdump↓';
    echo '</p>';
    echo '<p>';
    var_dump($_SERVER);
    echo '</p>'; 
    echo '<p>';
    echo '$_SERVER[QUERY_STRING]をdump↓';
    echo '</p>';
    echo '<p>';
    var_dump($_SERVER['QUERY_STRING']);
    echo '</p>'; 
    parse_str($_SERVER['QUERY_STRING'],$parameters);
    echo '<p>';
    echo '$parameters[name]をdump↓';
    echo '</p>';
    echo '<p>';
    var_dump($parameters['name']);
    echo '</p>'; 
    echo '<p>';
    echo '$parameters[name]をecho↓';
    echo '</p>';
    echo '<p>';
    echo $parameters['name'];
    echo '</p>'; 
    echo '<p>'.'〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜'.'</p>';
}else{
    echo '<p>';
    echo 'GETメソッドでした';
    echo '</p>'; 
    echo '<p>';
    echo '$_SERVERをdump↓';
    echo '</p>';
    echo '<p>';
    var_dump($_SERVER);
    echo '</p>'; 
    echo '<p>';
    echo '$_SERVER[QUERY_STRING]をdump↓';
    echo '</p>';
    echo '<p>';
    var_dump($_SERVER['QUERY_STRING']);
    echo '</p>'; 
    parse_str($_SERVER['QUERY_STRING'],$parameters);
    echo '<p>';
    echo '$parameters[name]をdump↓';
    echo '</p>';
    echo '<p>';
    var_dump($parameters['name']);
    echo '</p>'; 
    echo '<p>';
    echo '$parameters[name]をecho↓';
    echo '</p>';
    echo '<p>';
    echo $parameters['name'];
    echo '</p>'; 
    echo '<p>'.'〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜'.'</p>';
}

//$GLOBALSを見てみる（$_GLOBALSがemptyになることはないけど、、、）
if(!empty($GLOBALS)){
    echo '$GLOBALSはnot empty';
    echo '<p>';
    echo '$GLOBALSをdump↓';
    echo '</p>';
    echo '<p>';
    var_dump($GLOBALS);
    echo '</p>'; 
    echo '<p>'.'〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜'.'</p>';
}else{
    echo '$GLOBALSはempty';
    echo '<p>';
    echo '$GLOBALSをdump↓';
    echo '</p>';
    echo '<p>';
    var_dump($GLOBALS);
    echo '</p>'; 
    echo '<p>'.'〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜'.'</p>';
}

//php://inputはリクエストのbodyから生のデータを読み込む。file_get_contentsはファイルの内容を全て文字列に読み込む。
if(!empty(file_get_contents('php://input'))){
    echo '<p>';
    echo 'file_get_contents('.'php://input'.')について';
    echo '</p>'; 
    echo '<p>';
    var_dump(file_get_contents('php://input'));
    echo '<p>'.'〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜'.'</p>';
}else{
    echo '<p>';
    echo 'file_get_contents('.'php://input'.')'.'はカラでした。';
    echo '</p>';
    echo '<p>'.'〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜'.'</p>';
}

//「https://www.php.net/manual/ja/function.filter-input.php」、filter_inputの引数にINPUT_SERVERを指定、$_SERVERのQUERY_STRINGを取得
if(!empty(filter_input(INPUT_SERVER, 'QUERY_STRING'))){
    echo '<p>';
    echo 'filter_input(INPUT_SERVER, '.'QUERY_STRING)について';
    echo '</p>';  
    echo '<p>';
    echo filter_input(INPUT_SERVER, 'QUERY_STRING');
    echo '<p>'.'〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜'.'</p>';
}else{
    echo '<p>';
    echo 'filter_input(INPUT_SERVER, '.'QUERY_STRING)はからでした';
    echo '</p>';
    echo '<p>'.'〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜'.'</p>';
}

?>
</body>
</html>
