<?php

namespace App\Module;
use App\Models\Dosen;
use Illuminate\Support\Facades\DB;

class DosenModule
{
    public function get()
    {
        return Dosen::where('dosen.is_deleted' , '0')->get();
    }

}