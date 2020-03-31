<?php

namespace App\Http\Controllers;

use App\Ac;
use Illuminate\Http\Request;


class AcController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = Ac::all();
        return view('data_ac.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'aset' => 'required',
            'wing' => 'required',
            'lantai' => 'required',
            'lokasi' => 'required',
            'merk' => 'required',
            'jenis' => 'required',
            'type' => 'required',
            'status' => 'required'
        ]);
        Ac::create([
            'aset' => $request->aset,
            'wing' => $request->wing,
            'lantai' => $request->lantai,
            'lokasi' => $request->lokasi,
            'merk' => $request->merk,
            'jenis' => $request->jenis,
            'type' => $request->type,
            'status' => $request->status,
        ]);
        session()->flash('pesan', 'Data berhasil ditambah');
        return redirect('/data');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ac  $ac
     * @return \Illuminate\Http\Response
     */
    public function show(Ac $ac)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ac  $ac
     * @return \Illuminate\Http\Response
     */
    public function edit(Ac $ac, $id)
    {
        $data = Ac::find($id);
        return view('data_ac.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ac  $ac
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ac $ac, $id)
    {
        $data = Ac::find($id);
        $this->validate($request, [
            'aset' => 'required',
            'wing' => 'required',
            'lantai' => 'required',
            'lokasi' => 'required',
            'merk' => 'required',
            'jenis' => 'required',
            'type' => 'required',
            'status' => 'required'
        ]);
        $data->aset = $request->aset;
        $data->wing = $request->wing;
        $data->lantai = $request->lantai;
        $data->lokasi = $request->lokasi;
        $data->merk = $request->merk;
        $data->jenis = $request->jenis;
        $data->type = $request->type;
        $data->status = $request->status;
        $data->save();
        session()->flash('pesan', 'Data berhasil diupdate');
        return redirect('/data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ac  $ac
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ac $ac, $id)
    {
        $data = Ac::find($id);
        $data->delete();
        return redirect('/data');
    }
}