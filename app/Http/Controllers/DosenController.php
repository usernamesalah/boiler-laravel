<?php

namespace App\Http\Controllers;

use App\Module\DosenModule;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dosen = DosenModule::get();
        return view('common.layout', [
            'page_title' => 'Data Dosen',
            'page' => 'dosen',
            'data' => $dosen,
        ]);
    }

}
