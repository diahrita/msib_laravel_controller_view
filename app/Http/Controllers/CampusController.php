<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CampusController extends Controller
{

    public function index()
    {
        $nama = 'Politeknik Negeri Banyuwangi';
        $desc = 'Politeknik Negeri Banyuwangi atau disingkat Poliwangi adalah sebuah perguruan tinggi negeri politeknik yang terletak di Labanasem, Banyuwangi, Jawa Timur, Indonesia.';
        $alamat = 'Jalan Raya Jember No.KM13, Kawang, Labanasem, Kec. Kabat, Kabupaten Banyuwangi, 68461';
        $telp = '(0333) 636780';
        $prov = 'Jawa Timur';
        $logo = 'img/poliwangi.png';
        $foto1 = 'img/1.jpeg';
        $foto2 = '2.jpg';
        $foto3 = '3.jpg';
        $foto4 = '4.jpg';

        $data['nama'] = $nama;
        $data['desc'] = $desc;
        $data['alamat'] = $alamat;
        $data['telp'] = $telp;
        $data['prov'] = $prov;
        $data['logo'] = $logo;
        $data['foto1'] = $foto1;
        $data['foto2'] = $foto2;
        $data['foto3'] = $foto3;
        $data['foto4'] = $foto4;

        return view('campus/index', $data);
    }
}
