<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Functions extends Controller
{
    public function index(){
    $functionPaths = <<<EOT
        <pre>
             /function/sqrt/x
             /function/log/x        Natural log of x
        </pre>
        
EOT;
    return $functionPaths;

    }

    public function sqrt($x){
        $message = sqrt($x);
        return $message;
    }

    public function log($x){
        $message = log($x);
        return $message;
    }
}
