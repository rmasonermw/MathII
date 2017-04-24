<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class General extends Controller
{
    public function index()
    {
        $list = <<<EOT
        <pre>
             /                      Gives this screen
             /math/add/x/y          Adds x and y, x and y must be integers. /math/add/3/4 gives 7
             /math/subtract/x/y
             /math/multiply/x/y
             /math/divide/x/y
             /function/sqrt/x
             /function/log/x        Natural log of x
             /constant/PI           Prints PHP's version of PI
             /constant/e            Prints PHP's version of the constant e
             /random                Generates a random integer
             /random/low/high       Random integer in the range low and high, where low and hi are integers
             /random/high           Random integers in the range 1 though high
        </pre>
        
EOT;
        return $list;
    }

    public function pI(){
        $message = M_PI;
        return $message;
    }

    public function e($integer){
        $message = "The log of $integer is " . log($integer);
        return $message;
    }

    public function random(){
        $message = "A random number is " . rand() . "<br>Refresh the browser for another random number";
        return $message;
    }

    public function randomLowHigh($low, $high){
        $message = "The random number between " .$low . " and " . $high ." is " . rand($low, $high);
        return $message;
    }

    public function randomHigh($highOnly){
        $message = "The random number between 1 and " .$highOnly. " is " . rand(1, $highOnly);
        return $message;
    }


}
