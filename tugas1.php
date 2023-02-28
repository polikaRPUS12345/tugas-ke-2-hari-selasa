<?php
$kode_barang = "B003";
$harga = 0;

switch ($kode_barang) {
  case "B001":
    $harga = 30000;
    break;
  case "B002":
    $harga = 50000;
    break;
  case "B003":
    $harga = 70000;
    break;
  default:
    echo "Kode barang tidak valid.";
}

if ($harga != 0) {
  echo "Harga barang dengan kode " . $kode_barang . " adalah " . $harga . " rupiah.";
}
