<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function categories()
    {
         $breadcrumbs = [
            [
                'name' => 'Beranda',
                'url'  => route('index')
            ],
            [
                'name' => 'Kategori',
                'url'  => null
            ]
        ];
        return view('categories', compact('breadcrumbs'));
    }

    public function detail()
    {
        $breadcrumbs = [
            [
                'name' => 'Beranda',
                'url'  => route('index')
            ],
            [
                'name' => 'Kategori',
                'url'  => null
            ],
            [
                'name' => 'Nama Perusahaan',
                'url' => null
            ]
        ];
        return view('detail', compact('breadcrumbs'));
    }

    public function contact(){
        $breadcrumbs = [
            [
                'name' => 'Beranda',
                'url'  => route('index')
            ],
            [
                'name' => 'Hubungi Kami',
                'url'  => null
            ]
        ];

        return view('contact', compact('breadcrumbs'));
    }
}
