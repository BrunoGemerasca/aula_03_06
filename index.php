<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="ISO-8859-1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


        <link href="JS/bootstrap-3.3.4-dist/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="JS/bootstrap-3.3.4-dist/css/bootstrap-theme.css" rel="stylesheet" type="text/css"/>
        <script src="JS/bootstrap-3.3.4-dist/jquery-1.11.3.js" type="text/javascript"></script>
        <script src="JS/bootstrap-3.3.4-dist/js/bootstrap.js" type="text/javascript"></script>


    </head>
    <body>

        <div class="container">

            <div class="row">
                <div class="col-md-6"><form class="form-horizontal">
                        <div class="form-group">
                            <label for="inputNome3" class="col-sm-2 control-label">Nome</label>
                            <div class="col-sm-10">
                                <input type="text" id="input-nome" class="form-control" id="inputEmail3" placeholder="Nome">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEndereçõ3" class="col-sm-2 control-label">Endereço</label>
                            <div class="col-sm-10">
                                <input type="Endereço" id="input-endereco" class="form-control" id="inputPassword3" placeholder="Endereço">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputSexo3" class="col-sm-2 control-label">Sexo</label>
                            <div class="col-sm-10">
                                <label class="radio-inline">
                                    <input name="sexo" type="radio"  value="M"> Masculino
                                </label>
                                <label class="radio-inline">
                                    <input name="sexo" type="radio"  value="F"> Feminino
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" checked> Ativo
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" id="btn-enviar" class="btn btn-success  ">Cadastrar</button>
                            </div>
                        </div>
                    </form></div>
                <div class="col-md-6">
                    <h3>Listagem de Pessoas</h3>
                </div>
            </div>

        </div>

        <script>
            ($('#btn-enviar')).click(function () {
                if ($('#input-nome').val() == '') {
                    alert('Preencha com um Nome:')
                }
                if ($('#input-endereco').val() == '') {
                    alert('Preencha com um Endereço Valido:')
                }

            })
        </script>



    </body>
</html>
