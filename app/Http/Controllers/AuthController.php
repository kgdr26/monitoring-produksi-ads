<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Validator;
use Session;
use Hash;


class AuthController extends Controller
{
    public function ShowFormLogin()
    {
        if (Auth::check()) {
            return redirect()->route('masterbaseprice');
        }

        $arr        = DB::select("SELECT a.*, b.grade AS material_name, c.name AS shape_name FROM trx_quartal a LEFT JOIN mst_material b ON a.id_material=b.id LEFT JOIN mst_shape c ON b.shape=c.id ORDER BY a.thn DESC");
        $material   = DB::select("SELECT * FROM mst_material WHERE shape=1 AND is_active=1");
        $shape      = DB::select("SELECT * FROM mst_shape WHERE is_active=1");
        $data = array(
            'title'     => 'Quartal',
            'arr'       => $arr,
            'material'  => $material,
            'shape'     => $shape,
            'display'   => 'block'
        );

        return view('Produksi.masterbaseprice')->with($data);
    }

    public function login(Request $request)
    {

        $rules = [
            'username'  => 'required',
            'password'  => 'required'
        ];

        $messages = [
            'username.required' => 'Username wajib diisi',
            'password.required' => 'Password wajib diisi'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($request->all);
        }

        $data = [
            'username'  => $request->input('username'),
            'password'  => $request->input('password'),
        ];

        Auth::attempt($data);

        if (Auth::check()) { // true sekalian session field di users nanti bisa dipanggil via Auth
            return redirect()->route('masterbaseprice');

        } else {
            //Login Fail
            Session::flash('error', 'Username atau Password salah');
            return redirect()->route('masterbaseprice');
        }

    }

    public function logout(Request $request){
        header("cache-Control: no-store, no-cache, must-revalidate");
        header("cache-Control: post-check=0, pre-check=0", false);
        header("Pragma: no-cache");
        header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
        Session::flush();
        $request->session()->regenerate();
        Auth::logout(); // menghapus session yang aktif
        return redirect()->route('masterbaseprice');
    }


}
