<?php require('header.php'); ?>

<div class="content">
    <h2>Kontak Kami</h2>
    <p>Jika Anda memiliki pertanyaan atau membutuhkan bantuan, jangan ragu untuk menghubungi kami. Kami akan segera merespon pesan Anda.</p>

    <h3>Formulir Kontak</h3>
    <form action="kirim_pesan.php" method="POST">
        <div>
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div>
            <label for="pesan">Pesan:</label>
            <textarea id="pesan" name="pesan" rows="4" required></textarea>
        </div>
        <div>
            <button type="submit">Kirim Pesan</button>
        </div>
    </form>
</div>

<?php require('footer.php'); ?>
