function buyProduct(productName, price) {
  const kodeUnik = Math.floor(Math.random() * 700); // Kode unik di bawah 700
  const totalHarga = price + kodeUnik;

  // Simpan data transaksi ke localStorage (sementara)
  localStorage.setItem('productName', productName);
  localStorage.setItem('totalHarga', totalHarga);

  // Redirect ke halaman pembayaran
  window.location.href = 'payment.html';
}
