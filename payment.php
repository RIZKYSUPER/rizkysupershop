<?php
// Simulasikan data transaksi
$productName = $_GET['productName'];
$totalHarga = $_GET['totalHarga'];

// Tampilkan halaman pembayaran
echo "<h1>Pembayaran untuk $productName</h1>";
echo "<p>Total Harga: Rp $totalHarga</p>";
echo "<p>Pilih Metode Pembayaran:</p>";
echo "<button onclick='payWithDana()'>Dana</button>";
echo "<button onclick='payWithOvo()'>Ovo</button>";
echo "<button onclick='payWithGopay()'>Gopay</button>";
echo "<button onclick='payWithQRIS()'>QRIS</button>";

echo "<script>
function payWithDana() {
  alert('Silakan transfer ke Nomor Dana: 081234567890 (Atas Nama: RIZKY SUPER)');
}
function payWithOvo() {
  alert('Silakan transfer ke Nomor Ovo: 081234567890 (Atas Nama: RIZKY SUPER)');
}
function payWithGopay() {
  alert('Silakan transfer ke Nomor Gopay: 081234567890 (Atas Nama: RIZKY SUPER)');
}
function payWithQRIS() {
  alert('Silakan scan QRIS berikut: [QRIS Image]');
}
</script>";
?>
