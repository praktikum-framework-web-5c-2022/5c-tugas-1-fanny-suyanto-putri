<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $dsn = [
        'Purwantoro, M.Kom.',
        'Susilawati, M.Si.',
        'Yuyun Umaidah, M.Kom.',
        'Kamal Prihandani, M.Kom',
        'Intan Purnamasaru, M.kom',
        'Apriade Voutama, M.Kom',
        'M. Jajuli, M.Si.',
        'Carudin, M.Kom.',
        'Arip Solehudin, M.Kom.',
        'Dadang Yusuf, M.Kom.',
    ];
    return view('dosen')->with('dosen',$dsn);
});
  
Route::get('/matkul', function (){
    $mk = [
        'Matematika Dasar',
        'Pancasila',
        'Bahasa Inggris',
        'Metode Numerik',
        'Pemrograman Berbasis Web',
        'Basis Data',
        'Keamanan Sistem',
        'Jaringan Komputer',
        'Budaya Bangsa',
        'Pemrograman Berbasis Objek',
    ];
    return view('matakuliah')->with('matkul',$mk);;
});

Route::get('/mahasiswa', function (){
    $mhs = [
        'Fanny Suyantoputri',
        'Rian',
        'Agung Adi Putra',
        'Angel Alda Paulus',
        'Carmelitta',
        'Evita Sari',
        'Wilson Marvin',
        'Revata Tri',
        'Willy Candra',
        'Vionicca',
    ];
    return view('mahasiswa')->with('mahasiswa',$mhs);
});