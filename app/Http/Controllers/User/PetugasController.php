<?php

namespace App\Http\Controllers;

use App\Models\Petugas;
use Illuminate\Http\Request;

class PetugasController extends Controller
{
    public function tampil(){
        return view('loginAdmin');
    }

    public function aksi(Request $request){
        $data = Petugas::where('username', $request->input('username'))->where('password', $request->input('password'))->first();

        if($data === null){
            return redirect('/login-admin')->with('pesan','Username / Password Salah!!');
        }else{
            //berhasil login
            echo "kamu berhasil login";
        }
    }
}
