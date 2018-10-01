<?php

$host = 'localhost';
$user = 'root';
$password = 'root';
$db = 'teamlab';
//mysqliクラスのオブジェクトを作成
$mysqli = new mysqli($host, $user, $password, $db);
//エラーが発生したら
if ($mysqli->connect_error){
  print("接続失敗：" . $mysqli->connect_error);
  exit();
}
?>

<?php
//プリペアドステートメントを作成　ユーザ入力を使用する箇所は?にしておく
$stmt = $mysqli->prepare("INSERT INTO datas (name, email, comment) VALUES (?, ?, ?)");
//$_POST["name"]に名前が、$_POST["message"]に本文が格納されているとする。
//?の位置に値を割り当てる
$stmt->bind_param('ss', $_POST["name"], $_POST["email"], $_POST["comment"]);
//実行
$stmt->execute();
?>

<?php
//datasテーブルから日付の降順でデータを取得
$result = $mysqli->query("SELECT * FROM datas ORDER BY created DESC");
if($result){
  //1行ずつ取り出し
  while($row = $result->fetch_object()){
    //エスケープして表示
    $name = htmlspecialchars($row->name);
    $email = htmlspecialchars($row->email);
    $comment = htmlspecialchars($row->comment);
    $created = htmlspecialchars($row->created);
    print("$name : $email : $comment ($created)<br>");
  }
}
?>

<?php
$mysqli->close();
?>
