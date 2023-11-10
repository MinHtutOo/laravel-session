<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        echo json_encode($request->session()->all());
        return view("home");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function setSession(Request $request)
    {
        // $request->session()->put('name','Jonathan'); #using request
        session(['name'=>'Justin']); # using helper

        return redirect('/')->with('status', 'Successfully set single Session');
    }

    public function getSession(Request $request)
    {
        // $name = $request->session()->get('name'); #using request
        $name = session('name'); # using helper

        return redirect('/')->with('status',$name);
    }

    public function deleteSession(Request $request)
    {
        $request->session()->flush();
        return view('home');
    }

    public function setMultiSession(Request $request)
    {
        $request->session()->put(['name'=> 'Josh','age'=> '20','nationality'=> 'american']);
        return redirect('/')->with('status','Sessions set successfully');
    }

    public function getSingleSession(Request $request)
    {
        $get = $request->session()->get('age');

        return redirect('/')->with('status',$get);
    }
}
