<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>HTMLのサンプル</title>
  <style>
  #comment{
    height: 40px;
  }
  </style>

</head>

<body>
  <h1>HTMLのサンプル</h1>
  <p>こんにちは</p>
  <?php
  $date = date("Y/m/d H:m:s");
  print($date);
  ?>
  <form>
    <input type="text" name="yourName" placeholder="Your Name" size="40px" id="name"></br>
    <input type="text" name="comment" placeholder="Write your comment here" size="40px" id="comment" height="40px"></br>
    <input type="submit" value="Submit">
  </form>
</body>
</html>
