<?php

namespace App\Http\Controllers;

class useController extends Controller

{

    public function andre(string $name, string $lastname=null ){

        
        return view('name', ['name' => $name, 'lastname' => $lastname]);
        
        //return view ('name')->with('name', $name)->with('lastname',$lastname);
    }

    //Calculo 
    /**
     * Realiza operações matemáticas, o usuario tem que digitar na barra de navegação.
     * http://127.0.0.1:8000/1/+/102
     * http://127.0.0.1:8000/1/-/102
     * http://127.0.0.1:8000/1/ * /102 ' obs. retirar o espaço antes e dopois do '*'
     * http://127.0.0.1:8000/1/+/102  
     * 
     * 
     */

    public function calculo (int $num1, $op, int $num2){

        if ($num1 == null || $op == null || $num2 == null)

        echo 'Insira um número, um operador aritimético e outro número para ser calculado!';

    if($op == 'div' && $num2 == 0)

        echo 'Não é possível divisão por zero!';
    
    else
        switch ($op){

        case '+':
            ($resp = $num1 + $num2); 
            break;
        case '-':
            ($resp = $num1 - $num2); 
            break;
        case '*':
            ($resp = $num1 * $num2); 
            break;
        case 'div':
            ($resp = $num1 / $num2); 
            break;
        default:
        echo 'Erro!!!';
        }

    return view ('calculo')->with('num1',$num1)->with('op', $op)->with('num2', $num2)->with('resp',$resp);
    
}

public function dados(string $name1, string $lastname1=null, string $age=null, string $gender=null, string $email=null, string $telephone=null){

    return view('dados', ['name1' => $name1, 'lastname1' => $lastname1, 'age' => $age, 'gender' => $gender, 'email'=>$email,'telephone'=>$telephone]);
    
    //return view ('name')->with('name', $name)->with('lastname',$lastname);
}

    }

