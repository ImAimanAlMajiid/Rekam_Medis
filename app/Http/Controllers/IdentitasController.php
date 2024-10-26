<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class IdentitasController extends Controller
{
    public function identitas()
    {
        return view('identitas');
    }

    public function signifikan()
    {
        return view('signifikan');
    }

    public function persetjuan()
    {
        return view('persetujuan');
    }

    public function tambahidentitas()
    {
        return view('tambahidentitas');
    }

    public function tambahsignifikan()
    {
        return view('tambahsignifikan');
    }
}
