<form action="{{ route ('user.store') }}" method="post">
    @csrf
    
    id : <input type="text" name="id">
    id_pelanggan : <input type="text" name = 'id_pelanggan'>
    id_barang : <input type="text" name = 'id_barang'>
    <button type="submit">Simpan</button>
    </form>