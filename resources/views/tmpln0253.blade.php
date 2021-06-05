<head>
    <meta name='viewport' content="width=device-width,
    initial=scale=1">
    <title>Data Mahasiswa</title>
    <style>
        table{
            border-collapse: collapse;
            border-spacing: 0;
            width: 100%;
            border: 1px solid #ddd;
        }
        thead{
            background-color: #f2f2f2;
        }
        th, td{
            text-align: left;
            padding: 8px;
        }
        tr:nth-child(even){background-color: #f2f2f2}
        .tambah{
            padding: 8px 16px;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div style="overflow-x: auto">

        <a href="{{ route('tambah0253.create') }}">Tambah Data</a>

        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Harga</th>
                </tr>
            </thead>
            <tbody>
                <?php $no=1 ?>
                @foreach ($user as $usr)
                    
                <tr>
                    <td>{{ $usr->id }}</td>
                    <td>{{ $usr->nama }}</td>
                    <td>{{ $usr->alamat }}</td>
                    <td>{{ $usr->harga }}</td>
                    <td>
                        <a href="{{ url('user/' . $usr->id . '/edit') }}">Edit</a>
                        |
                        <form action="{{ url('user/' . $usr->id) }}" method="post">
                            @csrf
                            <input type="hidden" name="_method" value="delete">
                            <button type="submit">Delete</button>
                                                   
                        </form>
                    </td>
                </tr>

                @endforeach
            </tbody>
        </table>
    </div>
</body>