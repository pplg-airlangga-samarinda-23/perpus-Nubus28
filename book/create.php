<?php

include __DIR__ . '/../koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $name = $_POST ['name'];
    $author = $_POST ['author'];
    $Stok = $_POST ['Stok'];

    $sql = "INSERT INTO buku (name, author, Stok) VALUES (?,?,?)";
    $result = $koneksi->execute_query($sql, [$name, $author, $Stok]);

    if ($result){
        header("location:index.php");
    }
}


?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Add Book</h1>
    <form action="" method="post">
        <div class="form-item">
            <label for="name">Book Name</label>
            <input type="text" name="name" id="name">
        </div>
          <div class="form-item">
            <label for="author">Author</label>
            <input type="text" name="author" id="author">
        </div>
          <div class="form-item">
            <label for="Stok">Stok</label>
            <input type="number" name="Stok" id="Stok">
        </div>
        <button type="submit">ADD</button>
    </form>
</body>
</html>