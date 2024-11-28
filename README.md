<h2>Praktikum 9: PHP Modular</h2>
<h3>Ini adalah halaman Utama</h3>

![image](https://github.com/user-attachments/assets/447279c5-e881-4576-97d5-a91f00c30d41)
<h3>Ini adalah halaman About</h3>

![image](https://github.com/user-attachments/assets/28da3add-deb8-4315-a73f-062d90730bff)
<h3>Ini adalah halaman Kontak</h3>

![image](https://github.com/user-attachments/assets/8e22c5ba-3588-4958-8cbe-0590e95aa6f3)
<h3>Semua ini menggunakan templet yang hanya di panggil menggunakan php contoh pengguannya seperti ini

Kode <?php require('footer.php'); ?> adalah perintah dalam PHP untuk menyertakan file footer.php ke dalam file utama (seperti kontak.php).

Penjelasan:
require(): Digunakan untuk menyisipkan file PHP eksternal. Jika file yang dimasukkan tidak ditemukan, akan menghasilkan error fatal dan eksekusi skrip berhenti.
footer.php: Biasanya, file ini berisi elemen yang ditampilkan di bagian bawah halaman, seperti informasi hak cipta (copyright), tautan navigasi tambahan, atau skrip JavaScript.

Kenapa Digunakan?
Konsistensi: Semua halaman seperti index.php, kontak.php, about.php, dll., akan memiliki bagian footer yang sama tanpa perlu menyalin ulang kode.
Modularisasi: Memudahkan pemeliharaan kode. Jika ingin mengubah tampilan atau konten footer, cukup mengedit footer.php tanpa mengubah setiap file halaman

</h3>

<h2>Pertanyaan dan Tugas</h2>
<h3>Tugas ini pun sama konsepnya dengan yang di atas, dan file ini hanya perlu menambahkan database didalamnya agar bisa mengedit, menghapus, dan menambahkan file sesuka hati tanpa perlu mengubah code file kalo sudah menggunakan database MySQL </h3>
<h3>Ini adalah halaman Utama</h3>

![image](https://github.com/user-attachments/assets/4af91b4d-1bce-4aa9-ac12-ace0a0d7e6b8)
<h3>Ini adalah halaman About</h3>

![image](https://github.com/user-attachments/assets/6d375f8b-e610-4a09-88a4-4b6871911f61)
<h3>Ini adalah halaman Kontak</h3>

![image](https://github.com/user-attachments/assets/8646344e-fb17-44f9-af37-d50eca36ec31)
