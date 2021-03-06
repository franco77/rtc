<!doctype html>
<html lang="en" ng-app="appRtc">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Login - RTC (Reltrab Cliente) - WEB</title>
        <!-- Bootstrap CSS -->
        <script src="js/angular.min.js"></script>
        <script src="js/rtc.js"></script>
        <script src="js/filters.js"></script>
        <script src="js/services.js"></script>
        <script src="js/controllers.js"></script>       

        <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
        <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/libs/css/style.css">
        <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
        <style>
            html,
            body {
                height: 100%;
            }

            body {
                display: -ms-flexbox;
                display: flex;
                -ms-flex-align: center;
                align-items: center;
                padding-top: 40px;
                padding-bottom: 40px;
            }
            .splash-description {
                margin-top: 25px;
                padding-bottom: 0px;
            }
            a:hover {
                color: #4aaf51;
                text-decoration: none;
            }
            .splash-container {
                max-width: 500px;
                padding: 35px;
            }
        </style>
    </head>

    <body ng-controller="crtLogin">
        <!-- ============================================================== -->
        <!-- login page  -->
        <!-- ============================================================== -->
        <div class="splash-container">
            <div class="card ">
                <div class="card-header text-center"><a href="index.html"><img class="logo-img" src="assets/images/logo.png" alt="logo"></a><span class="splash-description text-left">Bem vindo ao RTC.</span></div>
                <div class="card-body">

                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-prepend"><span class="input-group-text"><i class="fa fa-user"></i></span></span>
                            <input class="form-control form-control-lg" ng-model="usuario" ng-keyup="logar()" id="username" type="text" placeholder="Insira aqui seu número de usuário" autocomplete="off">
                        </div>	
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-prepend"><span class="input-group-text"><i class="fa fa-lock"></i></span></span>
                            <input class="form-control form-control-lg" ng-model="senha" ng-keyup="logar()" id="password" type="password" placeholder="Insira aqui sua senha">
                        </div>
                    </div>

                    <div id="loading" class="alert alert-success" role="alert" style="display: block;">Digite seus dados</div>

                </div>
                <div class="card-footer bg-white p-0 text-center">
                    <div class="card-footer-item card-footer-item-bordered">
                        <a href="#" class="footer-link" href="#" data-toggle="modal" data-target="#senha" onclick="limpaCamposEsqueceuSenha();">Esqueceu a senha?</a>
                    </div>
                </div>
            </div>
        </div>


        <!-- Modal ESQUECEU SUA SENHA -->

        <div class="modal fade" id="senha" tabindex="-1" role="dialog" aria-labelledby="senha" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="modalRecuperaLabel">Esqueceu sua senha?</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div>
                        <div class="modal-body"><br>
                            <div id="respostaCliente1" class="alert alert-danger" role="alert" style="display: none;">Email inválido.</div>
                            <p>Nós só precisamos do seu endereço de e-mail registrado para enviar sua senha redefinida.</p>

                            <div class="form-group row">
                                <label for="recipient-name" class="col-sm-2 form-control-label normal align-middle" style="margin-top: 10px; padding-left: 40px;">Email:</label>
                                <div class="col-sm-9">
                                    <input type="text" ng-model="email" class="form-control form-control-lg" id="txtEmail" placeholder="Insira aqui seu e-mail" style="text-align:center">
                                </div>
                            </div>
                            <br> 				  

                        </div>
                        <div class="modal-footer" style="text-align:center;">
                            <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
                            <button id="btRecuperar" ng-click="recuperar()" class="btn btn-primary">Recuperar senha</button>
                        </div>
                    </div>				  
                </div>

            </div>
        </div>


        <!-- ============================================================== -->
        <!-- end login page  -->
        <!-- ============================================================== -->
        <!-- Optional JavaScript -->
        <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>

        <script type="text/javascript">

                                        $("input[type='text']").focus();

                                        loading.show = function () {

                                            $("#loading").html("Processando...");
                                            $("#loading").removeClass("alert-success").removeClass("alert-danger").removeClass("alert-primary").addClass("alert-warning");

                                        }

                                        loading.close = function () {



                                        }

                                        msg.erro = function (msg) {

                                            $("#loading").removeClass("alert-warning").addClass("alert-danger");
                                            $("#loading").html(msg);

                                        }

                                        msg.alerta = function (msg) {

                                            $("#loading").removeClass("alert-warning").addClass("alert-primary");
                                            $("#loading").html(msg);

                                        }

                                        function limpaCamposEsqueceuSenha() {

                                            $("#txtEmail").val("");
                                            $("#respostaCliente1").css('display', 'none');

                                        }


                                       

        </script>
    </body>

</html>