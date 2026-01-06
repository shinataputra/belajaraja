<?php
session_start();

// Siapkan data pekerjaan
if (!isset($_SESSION['pekerjaan'])) {
    $_SESSION['pekerjaan'] = [];
}

// Proses form
if (isset($_POST['tambah'])) {
    $pekerjaan = trim($_POST['pekerjaan']);

    if ($pekerjaan !== '') {
        $_SESSION['pekerjaan'][] = $pekerjaan;
    }
}

// Setelah logika selesai, tampilkan view
require 'view.php';
