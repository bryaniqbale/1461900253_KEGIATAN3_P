<?php

namespace App\Http\Controllers;

use App\Models\Mall;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Mall::join('pelanggan', 'transaksi.id_pelanggan', 'pelanggan.id')
        ->join('barang', 'transaksi.id_barang', 'barang.id')
        ->select('transaksi.id', 'pelanggan.nama', 'pelanggan.alamat', 'barang.harga')
        ->get();
        return view('tmpln0253' , ['user' => $user]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambah0253');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Mall::create ([
            'id' => $request ->id,
            'id_pelanggan' => $request ->id_pelanggan,
            'id_barang' => $request ->id_barang,
        ]);

        return redirect('user');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Mall::find($id);
        return view('edit0253', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = Mall::find($id);
        $user->nama = $request->nama;
        $user->harga = $request->harga;
        $user->save();

        return redirect('user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = Mall::find($id);
        $user -> delete();

        return redirect('user');
    }
}
