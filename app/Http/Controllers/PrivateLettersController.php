<?php

namespace App\Http\Controllers;

use App\Models\PrivateLetter;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Log;

class PrivateLettersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        log::info('私聊页面');
        return view('private_letters.index');
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
    public function store(Request $request, PrivateLetter $privateLetter)
    {
        $privateLetter->content = $request->content;
        $privateLetter->user_id = Auth::id();
        $privateLetter->to_id = 22;
        $privateLetter->save();

        return redirect()->to('private_letters')->with('success', '成功！');
//        return response()->json([
//            'code' => 1,
//            'msg'  => '成功',
//        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PrivateLetter  $privateLetter
     * @return \Illuminate\Http\Response
     */
    public function show(PrivateLetter $privateLetter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PrivateLetter  $privateLetter
     * @return \Illuminate\Http\Response
     */
    public function edit(PrivateLetter $privateLetter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PrivateLetter  $privateLetter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PrivateLetter $privateLetter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PrivateLetter  $privateLetter
     * @return \Illuminate\Http\Response
     */
    public function destroy(PrivateLetter $privateLetter)
    {
        //
    }
}
