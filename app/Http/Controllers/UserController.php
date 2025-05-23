<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\keuangan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();

        $keuangan = keuangan::with('user')->get();

        $user = auth()->user();

        $keluargaUsers = User::where('keluarga_id', $user->keluarga_id)
                            ->where('id', '!=', $user->id)
                            ->get();

        return view('user.dashboard', compact('user','keuangan','keluargaUsers'));

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


    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {

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
}
