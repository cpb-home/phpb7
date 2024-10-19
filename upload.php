<?php
declare(strict_types=1);

if ($_POST['file_name'] === '') {
    header('Location: ./index.php?err=name');
    exit;
}

if (empty($_FILES)) {
    header('Location: ./index.php?err=file');
    exit;
} else {
    $uploaddir = './upload/';
    $fileName = htmlspecialchars($_POST['file_name']);
    $fileSize = $_FILES['content']['size'];
    $fileInfo = pathinfo($_FILES['content']['name']);
    $ext = $fileInfo['extension'];
    $uploadingFile = $uploaddir . $fileName . '.' . $ext;

    if (move_uploaded_file($_FILES['content']['tmp_name'], $uploadingFile)) {
    echo 'Файл успешно загружен.<br> Полный путь к файлу: '. $uploadingFile;
    echo '<br>Размер файла в байтах: '. $fileSize;
    } else {
    echo 'Не удалось загрузить файл<br>';
    }
}

echo '<br><br><br><a href="./index.php">На главную</a>';