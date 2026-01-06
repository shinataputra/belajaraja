<?php
session_start();

/*
  Kita pakai SESSION supaya data tersimpan sementara
  (belum pakai database dulu, biar aman dan nggak stres)
*/

// Kalau daftar pekerjaan belum ada, buat dulu
if (!isset($_SESSION['pekerjaan'])) {
    $_SESSION['pekerjaan'] = [];
}

// Kalau form dikirim
if (isset($_POST['tambah'])) {
    $pekerjaan = trim($_POST['pekerjaan']);

    if ($pekerjaan !== '') {
        $_SESSION['pekerjaan'][] = $pekerjaan;
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Catatan Pekerjaan</title>
</head>

<body>

    <h2>📋 Catatan Pekerjaan</h2>

    <!-- Form input pekerjaan -->
    <form method="post">
        <input type="text" name="pekerjaan" placeholder="Tulis pekerjaan..." required>
        <button type="submit" name="tambah">Tambah</button>
    </form>

    <hr>

    <!-- Daftar pekerjaan -->
    <h3>Daftar Pekerjaan:</h3>

    <ul>
        <?php foreach ($_SESSION['pekerjaan'] as $item): ?>
            <li><?= htmlspecialchars($item) ?></li>
        <?php endforeach; ?>
    </ul>

</body>

</html>