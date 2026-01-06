<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Catatan Pekerjaan</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">

        <h2>📋 Catatan Pekerjaan</h2>

        <form method="post">
            <input type="text" name="pekerjaan" placeholder="Tulis pekerjaan..." required>
            <button type="submit" name="tambah">Tambah</button>
        </form>

        <hr>

        <h3>Daftar Pekerjaan:</h3>

        <ul>
            <?php foreach ($_SESSION['pekerjaan'] as $item): ?>
                <li><?= htmlspecialchars($item) ?></li>
            <?php endforeach; ?>
        </ul>

    </div>
</body>
</html>
