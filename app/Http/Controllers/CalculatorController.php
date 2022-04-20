<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function calculate(Request $request) 
    {
        $firstOperator = $request->input('first-operator');
        $secondOperator = $request->input('second-operator');
        $operation = $request->input('operation');
        $operation = $request->input('operation');
        $pressedButton = $request->input('pressedButton');
        $calcResult = "";

        if ($pressedButton == 'clear')
        {
            $firstOperator = "";
            $secondOperator = "";

            return view('welcome');
        }

        switch ($operation) 
        {
            case '+':
                $calcResult = $firstOperator + $secondOperator;
                break;
            case '-':
                $calcResult = $firstOperator - $secondOperator;
                break;
            case '*':
                $calcResult = $firstOperator * $secondOperator;
                break;
            case '/':
                if ($secondOperator == 0)
                    return redirect('')->with('result', "Não é possível realizar divisão por 0!");
                $calcResult = $firstOperator / $secondOperator;
                break;
            default:
                $calcResult = "";
                break;
        }

        return redirect('')
        ->with('result', "Resultado da operação $firstOperator $operation $secondOperator = $calcResult");
    }
}
