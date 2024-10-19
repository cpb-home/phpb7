<?php
$errorText = '';
if (isset($_GET['err'])) {
  if ($_GET['err'] === 'name') {
    $errorText = 'Вы не указали название для файла';
  } else if ($_GET['err'] === 'file') {
    $errorText = 'Вы не выбрали файл';
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php 7</title>
</head>
<body>
  <h1 style="text-align: center;">Отправка формы</h1>
  <h3 style="color: red; text-align: center; min-height: 24px;">
    <?=$errorText!==''?$errorText:''?>
  </h3>
  <form method="post" enctype="multipart/form-data" action="./upload.php" style="display: flex; flex-direction: column; justify-content: center; align-items: center; padding: 20px; gap: 20px;">

        <label>
          С каким именем сохранить файл на сервере?<br>
          <input style="width: 100%; padding: 2px; font-size: 16px;" type="text" name="file_name" placeholder="Введите название для файла">
        </label>

        <label>
          С каким именем сохранить файл на сервере<br>
          <input type="file" name="content">
        </label>

    <button style="padding: 2px 5px; font-size: 16px;" type="submit">Отправить форму</button>
  </form>
</body>
</html>