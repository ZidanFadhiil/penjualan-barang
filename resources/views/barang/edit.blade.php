<!-- resources/views/barang/edit.blade.php -->
<h1>Edit Barang: {{ $barang->nama }}</h1>
<form method="POST" action="{{ route('barang.update', $barang->id) }}">
    @csrf
    @method('PUT')
    <label for="nama">Nama Barang:</label>
    <input type="text" id="nama" name="nama" value="{{ $barang->nama }}">
    <label for="harga">Harga:</label>
    <input type="text" id="harga" name="harga" value="{{ $barang->harga }}">
    <label for="stok">Stok:</label>
    <input type="text" id="stok" name="stok" value="{{ $barang->stok }}">
    <button type="submit">Simpan Perubahan</button>
    
</form>
<a href="http://127.0.0.1:8000/barang">kembali</a>