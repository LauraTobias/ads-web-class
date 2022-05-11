<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Formulário de Cadastro</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
    </style>

    <script>
        function showMessage()  
        {
            var alertDiv = document.getElementById("alert-div");

            if (confirm("Confirmar o cadastro?")) 
            { 
                alertDiv.textContent = "Prezado(a) seu cadastro foi realizado com sucesso! Em breve você receberá mais informações no e-mail.";
            } else 
            { 
                alertDiv.textContent = "Prezado(a) seu cadastro foi cancelado.";
            }
        }
    </script>
</head>

<body>
    <div class="container" style="width: 65%; margin-top: 5%; margin-bottom: 5%">
        @if(session('result'))
        <div class="alert alert-info" id="alert-div">
            <script>showMessage()</script>
        </div>
        @endif
        <form class="row g-5" id="register-form" name="register-form" action="{{route('register-person')}}" method="POST">
            @csrf
            <div class="col-md-6">
                <label for="person-name" class="form-label">Nome Completo</label>
                <input type="text" class="form-control" id="person-name" name="person-name" required>
            </div>

            <div class="col-md-6">
                <label for="person-email" class="form-label">Email</label>
                <input type="email" class="form-control" id="person-email" name="person-email" required>
            </div>

            <div class="col-md-6">
                <label for="person-gender" class="form-label">Gênero</label>
                <select id="person-gender" name="person-gender" class="form-select" required>
                    <option selected>Selecione...</option>
                    <option>Masculino</option>
                    <option>Feminino</option>
                    <option>Outro</option>
                    <option>Prefiro não dizer</option>
                </select>
            </div>

            <div class="col-md-6">
                <label for="person-couser" class="form-label">Curso</label>
                <select id="person-course" name="person-course" class="form-select" required>
                    <option selected>Selecione...</option>
                    <option>Programação Web</option>
                    <option>Banco de Dados</option>
                    <option>Ciência de Dados</option>
                </select>
            </div>

            <div class="col-md-12">
                <label for="person-address" class="form-label">Endereço</label>
                <input type="text" class="form-control" id="person-address" required>
            </div>

            <div class="col-md-4">
                <label for="person-zip" class="form-label">CEP</label>
                <input type="text" class="form-control" id="person-zip" name="person-zip" required>
            </div>

            <div class="col-md-4">
                <label for="person-city" class="form-label">Município</label>
                <input type="text" class="form-control" id="person-city" name="person-city" required>
            </div>

            <div class="col-md-4">
                <label for="person-state" class="form-label">Estado</label>
                <select id="person-state" name="person-state" class="form-select" required>
                    <option selected>Selecione...</option>
                    <option>Acre (AC)</option>
                    <option>Alagoas (AL)</option>
                    <option>Amapá (AP)</option>
                    <option>Amazonas (AM)</option>
                    <option>Bahia (BA)</option>
                    <option>Ceará (CE)</option>
                    <option>Distrito Federal (DF)</option>
                    <option>Espírito Santo (ES)</option>
                    <option>Goiás (GO)</option>
                    <option>Maranhão (MA)</option>
                    <option>Mato Grosso (MT)</option>
                    <option>Mato Grosso do Sul (MS)</option>
                    <option>Minas Gerais (MG)</option>
                    <option>Pará (PA)</option>
                    <option>Paraíba (PB)</option>
                    <option>Paraná (PR)</option>
                    <option>Pernambuco (PE)</option>
                    <option>Piauí (PI)</option>
                    <option>Rio de Janeiro (RJ)</option>
                    <option>Rio Grande do Norte (RN)</option>
                    <option>Rio Grande do Sul (RS)</option>
                    <option>Rondônia (RO)</option>
                    <option>Roraima (RR)</option>
                    <option>Santa Catarina (SC)</option>
                    <option>São Paulo (SP)</option>
                    <option>Sergipe (SE)</option>
                    <option>Tocantins (TO)</option>
                </select>
            </div>

            <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                <button class="btn btn-primary me-md-2" name="pressedButton" value="save" type="submit">Salvar</button>
                <button class="btn btn-primary" name="pressedButton" value="clear" type="clear">Limpar</button>
            </div>
        </form>
    </div>
</body>

</html>