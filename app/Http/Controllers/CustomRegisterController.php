<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CustomRegisterController extends Controller
{
    use RegistersUsers;

    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        // Validasi data input
         $validator = Validator::make($request->all(), [
            'nik' => ['required', 'string', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
            'usia' => ['required', 'integer'],
            'no_hp' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'gender' => ['required'],
            'alamat_asal' => ['required', 'string', 'max:255'],
            'alamat_domisili' => ['required', 'string', 'max:255'],
            'foto_ktp' => ['required', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048'],
        ]);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    // Proses pengunggahan gambar
    if ($request->hasFile('foto_ktp')) {
        $file = $request->file('foto_ktp');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('uploads'), $fileName); // Upload gambar ke direktori public
    }

    // Simpan data pengguna
    $user = User::insert([
        'nik' => $request->input('nik'),
        'name' => $request['name'],
        'usia' => $request['usia'],
        'no_hp' => $request['no_hp'],
        'email' => $request['email'],
        'gender' => $request['gender'],
        'alamat_asal' => $request['alamat_asal'],
        'alamat_domisili' => $request['alamat_domisili'],
        'foto_ktp' => $fileName, // Simpan nama file gambar
        'password' => bcrypt($request['email']),
        "created_at"=>now(),
        "updated_at"=>now(),
    ]);

    // Redirect kembali ke halaman sebelumnya dengan pesan sukses
    return redirect()->back()->with('success', 'Pendaftaran berhasil!,Terima Kasih telah mendaftar menjadi Relawan Amin');
    }


}