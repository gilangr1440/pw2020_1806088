<?php 

function koneksi() {
  return mysqli_connect('localhost:3308', 'root', '', 'phpdasar');
}

function query($query) {
  $conn = koneksi();
  $result = mysqli_query($conn, $query);

  // jika hasilnya hanya 1 data
  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  $rows = [];
  while($row = mysqli_fetch_assoc($result)) {
  $rows[] = $row;
};

return $rows;
}

?>