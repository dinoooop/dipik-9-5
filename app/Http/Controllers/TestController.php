<?php

namespace App\Http\Controllers;

use App\Helpers\Dback;
use App\Models\Option;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function test(Request $request)
    {
        $tables = DB::select('SHOW TABLES');
        $tableNames = array_column(json_decode(json_encode($tables), true), 'Tables_in_' . env('DB_DATABASE'));
        print_r($tableNames);
    }
}