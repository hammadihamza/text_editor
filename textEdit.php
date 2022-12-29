<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Text Editor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form action="process.php" method="post">
  <textarea name="text" rows="30"></textarea>
  <input type="submit" class="button" value="Save">
</form>

<?php
if(!file_exists("text.txt")){
    touch("text.txt",time());
}
?>
</body>
</html>