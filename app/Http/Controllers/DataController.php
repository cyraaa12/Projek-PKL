<?php

namespace App\Http\Controllers;

use App\Models\data;
use App\Models\client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data['data'] = data::all();
        // return view('data', $data);

        $data = DB::table('tb_m_project')
        ->join('tb_m_client', 'tb_m_client.client_id', '=', 'tb_m_project.client_id')
        ->get();
        return view('data')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['client'] = client::select('client_name')->get();
        return view('adddata', $data);

        // return view('adddata');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $data = new data;
        // $data->project_name = $request->project_name;
        // $data->client_name = $request->client_name;
        // $data->project_start = $request->project_start;
        // $data->project_end = $request->project_end;

        // $data->Project_status = $request->Project_status;
        // $data->save();
        $data = data::create($request->all());
        dd($data);
        // return redirect('/data');
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
    }
}
