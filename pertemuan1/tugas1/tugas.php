<?php
$m_fruits = [
    ["ID" => "1","name" => "Pisang", "color" => "Kuning", "stock" => 25, "price" => 15000, "description" => "Pisang dengan rasa manis"],
    ["ID" => "2","name" => "Alpukat", "color" => "Hijau", "stock" => 18, "price" => 13000, "description" => "Buah berwarna hijau yang segar dan memiliki banyak khasiat"],
    ["ID" => "3","name" => "Strawberry", "color" => "Merah", "stock" => 20, "price" => 16000, "description" => "Buah yang rasanya asam dan manis"]
  ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Array Table Buah</title>
</head>
<body>
  <div class="container">
    <h1 class="text-center mt-5 mb-4">Daftar Buah</h1>
    <table class="table table-striped table-hover">
      <thead class="thead-dark">
        <tr>
          <th>ID</th>
          <th>Nama</th>
          <th>Warna</th>
          <th>Stok</th>
          <th>Harga</th>
          <th>Deskripsi</th>
        </tr>
      </thead>

      <tbody>
        <?php
              foreach ($m_fruits as $fruit) {
                echo '<tr><td>'. $fruit["ID"]. '</td>';
                echo '<td>'.$fruit["name"].'</td>';
                echo '<td>'.$fruit["color"].'</td>';
                echo '<td>'.$fruit["stock"].'</td>';
                echo '<td>'.$fruit["price"].'</td>';
                echo '<td>'. $fruit["description"].'</td></td>';
                echo '<br>';
              }
        ?>
      </tbody>
    </table>
  </div>
</body>
</html>