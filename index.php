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

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f8;
            display: flex;
            justify-content: center;
            padding-top: 50px;
        }

        .container {
            background: white;
            width: 400px;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
        }

        form {
            display: flex;
            gap: 10px;
        }

        input[type="text"] {
            flex: 1;
            padding: 8px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        button {
            padding: 8px 12px;
            border: none;
            background: #4f46e5;
            color: white;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background: #4338ca;
        }

        ul {
            padding-left: 20px;
        }

        li {
            margin-bottom: 6px;
        }
    </style>
</head>


<body>
    <div class="container">

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
    </div>

</body>

</html>