<!-- resources/views/barang/create.blade.php -->
<h1>Tambah Barang Baru</h1>
<form method="POST" action="{{ route('barang.store') }}">
    @csrf
    <label for="nama">Nama Barang:</label>
    <input type="text" id="nama" name="nama">
    <label for="harga">Harga:</label>
    <input type="text" id="harga" name="harga">
    <label for="stok">Stok:</label>
    <input type="number" id="stok" name="stok" value="0"> <!-- Tambahkan input field untuk 'stok' -->
    <button type="submit">Simpan</button>
</form>
<a href="http://127.0.0.1:8000/barang">kembali</a>