<?php

include __DIR__ . '/../koneksi.php';

if ($_SERVER['REQUEST_METHOD']=== 'GET'){
    $id = $_GET['id'];
    $sql = "SELECT * FROM buku WHERE id=?";
    $book = $koneksi->execute_query($sql, [$id])->fetch_assoc();
} elseif ($_SERVER['REQUEST_METHOD']=== 'POST'){
    $name = $_POST['name'];
     $author = $_POST['author'];
      $Stok = $_POST['Stok'];
       $id  = $_GET['id'];

       $sql = "UPDATE buku SET name=?, author=?, Stok=? WHERE id=?";
       $result = $koneksi->execute_query($sql, [$name, $author, $Stok, $id]);

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
    <h1>Edit</h1>
    <form action="" method="post">

    
    <div class="form-item">
        <label for="name">book name</label>
        <input type="text" name="name" id="name" value="<?=  $book['name'] ?>">
    </div>
    <div class="form-item">
        <label for="author">author name</label>
        <input type="text" name="author" id="author" value="<?=  $book['author'] ?>">
    </div>
    <div class="form-item">
        <label for="Stok">stok book</label>
        <input type="number" name="Stok" id="Stok" value="<?=  $book['Stok'] ?>">
    </div>
    <button type="submit">EDIT</button>
    </form>
</body>
</html>