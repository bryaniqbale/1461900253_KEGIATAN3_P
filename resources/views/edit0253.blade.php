<form action="{{ url('user/' . $user->id) }}" method="post">
    @csrf
    
    <input type="hidden" name="_method" value="patch">
    id : <input type="text" name="id" value="{{ $user->id }}">
    id_pelanggan : <input type="text" name = 'id_pelanggan' value="{{ $user->id_pelanggan }}">
    id_barang : <input type="text" name = 'id_barang' value="{{ $user->id_barang }}">
    <button type="submit">Simpan</button>
    </form>