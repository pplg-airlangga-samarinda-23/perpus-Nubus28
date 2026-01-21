<?php

include __DIR__ . '/../koneksi.php';
$sql = "SELECT * FROM buku";
$books = $koneksi ->execute_query($sql)->fetch_all(MYSQLI_ASSOC);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Book data</h1>
    <a href="create.php">ADD</a>
    <table>
        <thead>
            <th>No</th>
            <th>Name</th>
            <th>Author</th>
            <th>stok</th>
            <th>action</th>
        </thead>
        <tbody>
            <?php $no=0; foreach ($books as $book) : ?>
                <tr>
                    <td><?= $no++; ?></td>
                     <td><?= $book['name'] ?></td>
                       <td><?= $book['author'] ?></td>
                          <td><?= $book['Stok'] ?></td>

                    <td>
                        <a href="edit.php">Edit</a>
                        <a href="delete.php">Delete</a>
                    </td>
                </tr>
                <?php endforeach ?>
        </tbody>
    </table>
</body>
</html>