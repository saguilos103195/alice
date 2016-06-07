<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php

        $filename = __DIR__. '/'. md5(date('Y-m-d H:i:s')) . '.jpg';

        class Upload
        {
            public function __construct($name)
            {

            }
            public function moveUpload($file, $name)
            {
                move_uploaded_file($file, $name);
            }
        }

        $up = new Upload($filename);
        $up->moveUpload($_FILES['avatar']['tmp_name'], $filename);


    ?>
    <form method="POST" enctype="multipart/form-data">
        <input type="file" name="avatar">
        <button type="submit">Upload</button>
    </form>
</body>
</html>