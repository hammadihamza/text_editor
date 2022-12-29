<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Text content</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <p><a href="./textEdit.php" class="button">Return</a></p>
</body>
<?php
  $text = $_POST['text']."<br>";
  $file = fopen('text.txt', 'a');
  fwrite($file, $text);
  fclose($file);

  $file = fopen('text.txt', 'r');
  $text = fread($file, filesize('text.txt'));
  echo $text;
  fclose($file);
?>
</html>

