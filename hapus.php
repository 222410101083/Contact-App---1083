<?php
include 'koneksi.php';

$id = $_GET['id'];
$query = $pdo->prepare("DELETE FROM contacts WHERE id = ?");
$query->execute([$id]);

header("Location: index.php");