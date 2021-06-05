<form action="{{ url('user/' . $user->id) }}" method="post">
    @csrf
    
    <input type="hidden" name="_method" value="patch">
    Nama : <input type="text" name="nama_mhs" value="{{ $user->nama }}">
    Harga : <input type="text" name = 'nbi' value="{{ $user->harga }}">
    <button type="submit">Simpan</button>
    </form>