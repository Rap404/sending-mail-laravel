<?php

namespace App\Http\Controllers;

use App\Mail\kirimEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class KirimEmailController extends Controller
{
    public function index(){

        $pesan = "<h3>Halo, <b> selamat kamu berhak mendapatkan character baru yaitu raiden shogun </b></h3>";
        $pesan .= "<div> <img src='https://media1.tenor.com/m/ZCgS9VyQJBgAAAAd/windahbasudara-brando.gif' width='400'/> </div>";
        $pesan .= "Ketik 1 jika kamu senang";

        $data_email = [
            "subject" => "Selamat Kamu Berhak Mendapatkan Hadiah Dari Mihoyo",
            "sender_name" => "adibrafli37@gmail.com",
            "isi" => $pesan,
        ];

    Mail::to("adibrafli37@gmail.com")->send(new kirimEmail($data_email));
    return '<h1>Email Telah Terkirim</h2>';
    }
}
