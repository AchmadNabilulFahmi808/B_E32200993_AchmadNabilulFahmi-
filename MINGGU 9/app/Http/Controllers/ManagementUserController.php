<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagementUserController extends Controller
{
    public function index()
    {
    
    //return "Hallo ini adalah index, dalam controller Management User.";
    //return "Method ini nantinya akan digunakan untuk mengambil semua data user.";  
    $nama = "Achmad Nabilul Fahmi";

    $pelajaran = ["Algoritma & Pemograman","Kalkulus","Pemograman Web"];

    return view('home', compact ('nama', 'pelajaran'));
    }

}