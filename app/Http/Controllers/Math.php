<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Math extends Controller
{
    public function index(){

        $mathPaths = <<<EOT
        <pre>
             /math/add/x/y          Adds x and y, x and y must be integers. /math/add/3/4 gives 7
             /math/subtract/x/y
             /math/multiply/x/y
             /math/divide/x/y
        </pre>
        
EOT;
        return $mathPaths;

    }

    public function add($x, $y){
        $sum = $x + $y;
        $message = "The sum of ".$x. " and " . $y . " is " . $sum;
        return $message;
    }

    public function subtract($x, $y){
        $diff = $x - $y;
        $message = "The difference between ".$x. " and " . $y . " is " . $diff;
        return $message;
    }

    public function multiply($x, $y){
        $product = $x * $y;
        $message = "The product of ".$x. " and " . $y . " is " . $product;
        return $message;
    }

    public function divide($x, $y){
        $result = $x / $y;
        $message = "The result of ".$x. " and " . $y . " is " . $result;
        return $message;
    }

}
