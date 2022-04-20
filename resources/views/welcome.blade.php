<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Calculadora Simples</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

        <!-- Styles -->
        <style>
        </style>
    </head>
    <body>
        <h1 class="text-center">Calculadora em HTML</h1> 
        <div class="container" style="width: 30%;">
            @if(session('result'))
                <div class="alert alert-info">
                    {{ session('result') }}
                </div>
            @endif
            <hr/>
            <form id="calculator-form" name="calculator-form" action="{{route('calculateOperation')}}" method="POST">
            @csrf 
                <div class="form-group text-center">
                    <label for="first-operator">Operador 1:</label><br>
                    <input type="number" id="first-operator" name="first-operator" class="form-control" placeholder="Digite um número..." required>
                    <br>
                </div>

                <div class="form-group text-center">
                    <label class="text-center" for="second-operator">Operador 2:</label><br>
                    <input type="number" id="second-operator" name="second-operator" class="form-control" placeholder="Digite um número..." required><br>
                </div>

                <div class="form-group text-center">
                    <label>Operações:</label><br>
                    <input class="form-check-inputt" type="radio" id="sum" name="operation" value="+" checked>
                    <label class="form-check-label" for="+">Soma</label><br>

                    <input class="form-check-input" type="radio" id="subtraction" name="operation" value="-">
                    <label class="form-check-label" for="-">Subtração</label><br>

                    <input class="form-check-input" type="radio" id="division" name="operation" value="/">
                    <label class="form-check-label" for="/">Divisão</label><br>

                    <input class="form-check-input" type="radio" id="multiplication" name="operation" value="*">
                    <label class="form-check-label" for="*">Multiplicação</label><br>
                </div>

                <div class="form-group text-center">
                    <button class="btn btn-primary" name="pressedButton" value="calculate" type="submit">Calcular</button>
                    <button class="btn btn-primary" name="pressedButton" value="clear" type="clear">Limpar</button>
                </div>
            </form>
        </div>
    </body>
</html>
