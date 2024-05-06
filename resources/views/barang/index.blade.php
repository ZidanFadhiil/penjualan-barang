<!-- resources/views/barang/index.blade.php -->
<h1>Inventory toko Elektronik</h1>
<h1>Daftar Barang</h1>
<a href="{{ route('barang.create') }}">Tambah Barang</a>
<ul>
    @foreach ($barangs as $barang)
        <li>
            {{ $barang->nama }} - {{ $barang->harga }} - Stok: {{ $barang->stok }}
            <!-- Tombol untuk mengedit barang -->
            <a href="{{ route('barang.edit', $barang->id) }}">Edit</a>
            <!-- Tombol untuk menghapus barang -->
            <form method="POST" action="{{ route('barang.destroy', $barang->id) }}" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Hapus</button>
            </form>
        </li>
    @endforeach
</ul>
