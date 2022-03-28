<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data=Siswa::all();
        return view('/siswa/index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('/siswa/form_siswa');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[
            'nis'=>'required|unique:tb_siswa',
            'nama'=>'required',
            'alamat'=>'required'
        ]);
        $simpan=Siswa::create([
            'nis'=>$request->nis,
            'nama'=>$request->nama,
            'alamat'=>$request->alamat
        ]);
        return redirect('/')->with('status','Data siswa berhasil ditambah!'); 
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
        //
       
        $data=Siswa::find($id);
        return view('/siswa/form_edit',['data'=>$data]);
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
        //
        $this->validate($request,[
            'nis'=>'required',
            'nama'=>'required',
            'alamat'=>'required'
        ]);
        $edit=Siswa::find($id);
        $edit->nis=$request->nis;
        $edit->nama=$request->nama;
        $edit->alamat=$request->alamat;
        $edit->save();
        return redirect('/')->with('status','Data siswa berhasil diubah!'); 

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Siswa::destroy($id);
        return redirect('/')->with('status','Data siswa berhasil dihapus!');
    }
}
