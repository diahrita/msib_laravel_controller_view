<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $nama = 'Diah Rita Nurholifah';
        $prodi = 'Teknologi Rekayasa Perangkat Lunak';
        $jurusan = 'Bisnis dan Informatika';
        $poltek = 'Politeknik Negeri Banyuwangi';
        $mitra = 'GITS Indonesia';
        $bidang = 'Fullstack Web Developer';
        $foto = 'img/me.jpg';

        $data['nama'] = $nama;
        $data['prodi'] = $prodi;
        $data['jurusan'] = $jurusan;
        $data['poltek'] = $poltek;
        $data['mitra'] = $mitra;
        $data['bidang'] = $bidang;
        $data['foto'] = $foto;

        return view('profile/index', $data);
    }
}
