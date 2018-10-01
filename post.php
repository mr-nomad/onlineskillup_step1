<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>POSTのサンプル</title>
  </head>
  <body>
    <?php
      //commentがPOSTされているなら
      if(isset($_POST["name"]) and isset($_POST["email"]) and isset($_POST["comment"])){
        //エスケープしてから表示
        $name = htmlspecialchars($_POST["name"]);
        $email = htmlspecialchars($_POST["email"]);
        $comment = htmlspecialchars($_POST["comment"]);

        print("あなたのコメントは「 ${name} 」です。");
        print("あなたのコメントは「 ${email} 」です。");
        print("あなたのコメントは「 ${comment} 」です。");
      } else {
    ?>
        <p>コメントしてください。</p>
        <form method="POST" action="post.php">
          <input type="text" name="name" placeholder="name"/>
          <input type="email" name="email" placeholder="email"/>
          <input type="text" name="comment" placeholder="comment">
          <input type="submit" value="送信" />
        </form>
    <?php
      }
    ?>
  </body>
</html>
