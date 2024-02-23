<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{

public function aksiDariRegister(Request $request){
    if($request->input('level')=='masyarakat'){
        $data = new Masyarakat();
        $data->nik = $request->input('nik');
        $data->nama = $request->input('nama');
        $data->username = $request->input('username');
        $data->password = $request->input('password');
        $data->telpon = $request->input('telpon');
        $data->save();
        return redirect('/login');
    }else{
        $data =new Petugas();
    }
}

}
