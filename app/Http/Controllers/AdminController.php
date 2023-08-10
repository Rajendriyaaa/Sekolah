<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function masterSiswa()
    {
        return view('admin.master-siswa', [
            'title' => 'Master Siswa'
        ]);
    }

    public function masterProject()
    {
        return view('admin.master-project', [
            'title' => 'Master Project'
        ]);
    }

    public function masterContact()
    {
        return view('admin.master-contact', [
            'title' => 'Master Contact'
        ]);
    }

    public function masterContactType()
    {
        return view('admin.master-contact-type', [
            'title' => 'Master Contact Type'
        ]);
    }
}
