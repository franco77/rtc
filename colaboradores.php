<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/datatables/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/datatables/css/buttons.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/datatables/css/select.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/datatables/css/fixedHeader.bootstrap4.css">
	<!--<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">-->
	<link rel="stylesheet" href="assets/vendor/multi-select/css/multi-select.css">
    <title>RTC (Reltrab Cliente) - WEB</title>
	<style>
	</style>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="index.html"><img style="" src="assets/images/logo.png" alt="" title=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item">
                            <div id="custom-search" class="top-search-bar">
								<div class="form-group">
											<div class="icon-addon addon-sm">
												<input class="form-control" type="search" placeholder="Digite o que procura" aria-label="Search" size="80%">
												<label for="email" class="fa fa-search" rel="tooltip" title="email"></label>
											</div>
								</div>
                            </div>
                        </li>
						<li class="nav-item dropdown notification">
                            <a class="nav-link nav-icons" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-fw fa-shopping-cart fa-bell"></i></a>
                            <ul class="dropdown-menu dropdown-menu-right notification-dropdown">
                                <li>
                                    <div class="notification-title">Carrinho de Compras<span class="badge badge-primary badge-pill m-l-20">3</span></div>
                                    <div class="notification-list">
                                        <div class="list-group">
											
											  <a href="#" class="list-group-item list-group-item-action active">
													<div class="notification-info">
														<div class="notification-list-user-img"><img src="http://www.faunasystem.com.br:8080/rtc/SUPPORT-GL-5L.png" alt="" class="user-avatar-xl"></div>
														<div class="notification-list-user-img m-l-20"><span class="notification-list-user-name">Support (Gl 5L)</span>.
															<div class="notification-date">Qtd p/ caixa: 4</div>
															<div class="notification-date">Valor: R$ 79.93</div>
															<div class="notification-date">Qtd:&nbsp;<input id="inputText4" type="number" class="form-control form-control-xs" placeholder="5" min="1" max="5"></div>
															<div class="notification-date">SubTotal: R$ 319.72</div>
														</div>	
														<div class="notification-list-user-img m-l-25 product"><button class="btn btn-outline-light btn-sm"><i class="fa fa-times"></i></button></div>	
														
													</div>
												</a>
												<a href="#" class="list-group-item list-group-item-action active">
													<div class="notification-info">
														<div class="notification-list-user-img"><img src="http://www.faunasystem.com.br:8080/rtc/SUPPORT-GL-5L.png" alt="" class="user-avatar-xl"></div>
														<div class="notification-list-user-img m-l-20"><span class="notification-list-user-name">Support (Gl 5L)</span>.
															<div class="notification-date">Qtd p/ caixa: 4</div>
															<div class="notification-date">Valor: R$ 79.93</div>
															<div class="notification-date">Qtd:&nbsp;<input id="inputText4" type="number" class="form-control form-control-xs" placeholder="5" min="1" max="5"></div>
															<div class="notification-date">SubTotal: R$ 319.72</div>
														</div>	
														<div class="notification-list-user-img m-l-25 product"><button class="btn btn-outline-light btn-sm"><i class="fa fa-times"></i></button></div>	
														
													</div>
												</a>
												<a href="#" class="list-group-item list-group-item-action active">
													<div class="notification-info">
														<div class="notification-list-user-img"><img src="http://www.faunasystem.com.br:8080/rtc/SUPPORT-GL-5L.png" alt="" class="user-avatar-xl"></div>
														<div class="notification-list-user-img m-l-20"><span class="notification-list-user-name">Support (Gl 5L)</span>.
															<div class="notification-date">Qtd p/ caixa: 4</div>
															<div class="notification-date">Valor: R$ 79.93</div>
															<div class="notification-date">Qtd:&nbsp;<input id="inputText4" type="number" class="form-control form-control-xs" placeholder="5" min="1" max="5"></div>
															<div class="notification-date">SubTotal: R$ 319.72</div>
														</div>	
														<div class="notification-list-user-img m-l-25 product"><button class="btn btn-outline-light btn-sm"><i class="fa fa-times"></i></button></div>	
														
													</div>
												</a>
											
											
                                        </div>
										
                                    </div>
                                </li>
                                <li>
                                    <div class="list-footer"> <a href="carrinho-de-compras.html">Finalizar Compra</a></div>
                                </li>
                            </ul>
                        </li>
						<li class="nav-item dropdown notification">
                            <a class="nav-link nav-icons" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="far fa-fw fa-comments"></i></span></a>
                            <ul class="dropdown-menu dropdown-menu-right notification-dropdown">
                                <li>
                                    <div class="notification-title bg-primary"> Chat <i class="far fa-comments m-l-10"></i></div>
                                    <div class="notification-list">
                                        <div class="list-group">
											<a href="#" class="list-group-item list-group-item-action bg-chat-pardal">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="assets/images/avatar-2.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Pardal:</span>Quer fazer uma simulação preços com produtos que tenham algum ativo, ou cultura?
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a>
											<a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="assets/images/avatar-1.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Você:</span>teste
                                                        <div class="notification-date">2 days ago</div>
                                                    </div>
                                                </div>
                                            </a>
											<a href="#" class="list-group-item list-group-item-action bg-chat-pardal">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="assets/images/avatar-2.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Pardal:</span> Como posso ajudá-lo? Serei seu vendedor virtual!
                                                        <div class="notification-date text-right">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a>
											<a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="assets/images/avatar-1.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Você:</span>teste
                                                        <div class="notification-date">2 days ago</div>
                                                    </div>
                                                </div>
                                            </a>
											<a href="#" class="list-group-item list-group-item-action bg-chat-pardal">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="assets/images/avatar-2.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Pardal: </span>Sou o Pardal!! Não sou professor, mas inventei o RTC para atendê-lo!
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
										
                                    </div>
                                </li>
                                <li>
                                    <div class="list-footer bg-light"> 
										<form class="form-inline justify-content-center">
											<div class="form-group mx-sm-3 mb-2">
												<input type="text" class="form-control" style="width: 100%" placeholder="Digite sua mensagem" id="txtFala">
											</div>	
												<button class="btn btn-sm btn-primary mb-2">Enviar</button>
										</form>
									</div>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown notification">
                            <a class="nav-link nav-icons" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-fw fa-bell"></i> <span class="indicator"></span></a>
                            <ul class="dropdown-menu dropdown-menu-right notification-dropdown">
                                <li>
                                    <div class="notification-title"> Notification</div>
                                    <div class="notification-list">
                                        <div class="list-group">
                                            <a href="#" class="list-group-item list-group-item-action active">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="assets/images/avatar-2.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Jeremy Rakestraw</span>accepted your invitation to join the team.
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="assets/images/avatar-3.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">John Abraham </span>is now following you
                                                        <div class="notification-date">2 days ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="assets/images/avatar-4.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Monaan Pechi</span> is watching your main repository
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="assets/images/avatar-5.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Jessica Caruso</span>accepted your invitation to join the team.
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="list-footer"> <a href="#">View all notifications</a></div>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<img src="assets/images/avatar-1.jpg" alt="" class="user-avatar-md rounded-circle">
								<span class="hidden-xs">Andre Sbrana</span>
								<span class=" fa fa-angle-down"></span>
							</a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info clearfix align-middle">
									<div class="float-left m-r-10 m-t-5">
										<img src="assets/images/avatar-1.jpg" alt="" class="user-avatar-md rounded-circle ">
									</div>
									<div class="float-left">									
										<h5 class="mb-0 text-white nav-user-name">Andre Sbrana </h5>
										<span class="status"></span><span class="ml-2">webdesigner</span>
									</div>	
                                </div>
                                <a class="dropdown-item" href="colaboradores.html"><i class="fas fa-user mr-2"></i>Colaboradores</a>
                                <a class="dropdown-item" href="alteracao-do-logo.html"><i class="fas fa-font mr-2"></i>Alterar Logo</a>
								<a class="dropdown-item" href="cadastro-empresas-filiais.html"><i class="fas fa-file-alt mr-2"></i>Empresas / Filiais</a>
								<a class="dropdown-item" href="configuracao-da-empresa.html"><i class="fas fa-cog mr-2"></i>Configuração da empresa</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-power-off mr-2"></i>Sair</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <?php include("menu.php") ?>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">Colaboradores</h2>
                                <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">      
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">RTC</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Colaboradores</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
					<div class="row">
                    <!-- ============================================================== -->
                    <!-- basic table  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
									<div class="product-btn m-b-20">
										<a href="#" class="btn btn-primary" data-title="Add" data-toggle="modal" data-target="#add" ><i class="fas fa-plus-circle m-r-10"></i>Adicionar Colaborador</a>
									</div>
                                    <table id="fornecedor" class="table table-striped table-bordered first">
                                        <thead>
                                            <tr>
													<th>Cod.</th>
													<th>Nome</th>
													<th>login</th>
													<th>Ação</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>2</td>
													<td>ELIAS</td>
													<td>1</td>
													<th>
														<div class="product-btn">
															<a href="#" class="btn btn-outline-light" data-title="Edit" data-toggle="modal" data-target="#edit" ><i class="fas fa-pencil-alt m-r-10"></i>Editar</a>
															<a href="#" class="btn btn-outline-light" data-title="Delete" data-toggle="modal" data-target="#delete" ><i class="fas fa-trash-alt m-r-10"></i>Deletar</a>
														</div>
													</th>
												</tr>
												<tr>
													<td>12</td>
													<td>Romario Santos</td>
													<td>1557</td>
													<th>
														<div class="product-btn">
															<a href="#" class="btn btn-outline-light" data-title="Edit" data-toggle="modal" data-target="#edit" ><i class="fas fa-pencil-alt m-r-10"></i>Editar</a>
															<a href="#" class="btn btn-outline-light" data-title="Delete" data-toggle="modal" data-target="#delete" ><i class="fas fa-trash-alt m-r-10"></i>Deletar</a>
														</div>
													</th>
												</tr>
												<tr>
													<td>13</td>
													<td>Ana Beatriz M. Rodrigues</td>
													<td>1555</td>
													<th>
														<div class="product-btn">
															<a href="#" class="btn btn-outline-light" data-title="Edit" data-toggle="modal" data-target="#edit" ><i class="fas fa-pencil-alt m-r-10"></i>Editar</a>
															<a href="#" class="btn btn-outline-light" data-title="Delete" data-toggle="modal" data-target="#delete" ><i class="fas fa-trash-alt m-r-10"></i>Deletar</a>
														</div>
													</th>
												</tr>
												<tr>
													<td>14</td>
													<td>Miguel Augusto Porto Inbanha</td>
													<td>1553</td>
													<th>
														<div class="product-btn">
															<a href="#" class="btn btn-outline-light" data-title="Edit" data-toggle="modal" data-target="#edit" ><i class="fas fa-pencil-alt m-r-10"></i>Editar</a>
															<a href="#" class="btn btn-outline-light" data-title="Delete" data-toggle="modal" data-target="#delete" ><i class="fas fa-trash-alt m-r-10"></i>Deletar</a>
														</div>
													</th>
												</tr>
												<tr>
													<td>16</td>
													<td>Jaqueline Almeida Barbosa</td>
													<td>1549</td>
													<th>
														<div class="product-btn">
															<a href="#" class="btn btn-outline-light" data-title="Edit" data-toggle="modal" data-target="#edit" ><i class="fas fa-pencil-alt m-r-10"></i>Editar</a>
															<a href="#" class="btn btn-outline-light" data-title="Delete" data-toggle="modal" data-target="#delete" ><i class="fas fa-trash-alt m-r-10"></i>Deletar</a>
														</div>
													</th>
												</tr>
												<tr>
													<td>38</td>
													<td>Rodrigo Porto Nunes</td>
													<td>1433</td>
													<th>
														<div class="product-btn">
															<a href="#" class="btn btn-outline-light" data-title="Edit" data-toggle="modal" data-target="#edit" ><i class="fas fa-pencil-alt m-r-10"></i>Editar</a>
															<a href="#" class="btn btn-outline-light" data-title="Delete" data-toggle="modal" data-target="#delete" ><i class="fas fa-trash-alt m-r-10"></i>Deletar</a>
														</div>
													</th>
												</tr>
											</tbody>
											<tfoot>
												<tr>
													<th>Cod.</th>
													<th>Nome</th>
													<th>login</th>
													<th>Ação</th>
												</tr>
											</tfoot>
										</table>
							
									
								</div>
							</div>
						</div>
					</div>
				</div>	
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            
                <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 - Agro Fauna Tecnologia. Todos os direitos reservados.</p>
                                </div>
                            </div>
                        </div>

            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
	
	<!-- /.modal-content ADD --> 
	<div class="modal fade in" id="add" tabindex="-1" role="dialog" aria-labelledby="add" aria-hidden="true" style="display: none;">
	   <div class="modal-dialog">
		  <div class="modal-content">
			 <div class="modal-header">
				<h5 class="modal-title m-t-10" id="exampleModalLongTitle"><i class="fas fa-plus-circle fa-3x"></i>&nbsp;&nbsp;&nbsp;Adicione os dados de seu Colaborador</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">×</span>
				</button>
			 </div>
			 <div class="modal-body">
				<form id="add-form" parsley-validate>
				   <div class="form-group row">
					  <label for="txtname" class="col-3 col-lg-2 col-form-label text-left">Nome</label>
					  <div class="col-9 col-lg-10">
						 <input id="txtname" type="text" required data-parsley-type="email" placeholder="" class="form-control is-invalid">
						 <div class="invalid-feedback">
							Please provide a valid text.
						 </div>
					  </div>
				   </div>
				   <div class="form-group row">
					  <label for="txtemail" class="col-3 col-lg-2 col-form-label text-left">Email</label>
					  <div class="col-9 col-lg-10">
						 <input id="txtemail" type="email" required data-parsley-type="email" placeholder="" class="form-control">
						 <div class="invalid-feedback">
							Please provide a valid text.
						 </div>
					  </div>
				   </div>
				   <div class="form-group row">
					  <label for="txtend" class="col-3 col-lg-2 col-form-label text-left">Login</label>
					  <div class="col-9 col-lg-10">
						 <input id="txtend" type="text" required data-parsley-type="email" placeholder="" class="form-control">
						 <div class="invalid-feedback">
							Please provide a valid text.
						 </div>
					  </div>
				   </div>
				   <div class="form-group row">
					  <label for="txtpass" class="col-3 col-lg-2 col-form-label text-left">Senha</label>
					  <div class="col-9 col-lg-10">
						 <input id="txtpass" type="text" required placeholder="" class="form-control">
						 <div class="invalid-feedback">
							Please provide a valid text.
						 </div>
					  </div>
				   </div>
				   <table class="table">
				         <thead>
                            <tr>
								<th colspan="3" class="text-center">Módulos</th>
							</tr>
						</thead>
						<tbody>
																		<tr>
													<td width="45%" class="text-center">
														 Colaborador
													</td>
													<td width="10%">
													</td>
													<td width="45%" class="text-center">
														Todos
												    </td>
												</tr>
												<tr>
													<td width="45%">
														 <select class="custom-select" name="" size="10" multiple>
																<option value="" > adicione os módulos</option>
														  </select>
													</td>
													<td width="10%">
															<a href="#" class="btn btn-outline-light m-b-20" data-toggle="tooltip" data-placement="top" title="" data-original-title="Adicionar"><i class="fas fa-chevron-circle-left"></i></a><br>
															<a href="#" class="btn btn-outline-light" data-toggle="tooltip" data-placement="top" title="" data-original-title="Remover"><i class="fas fa-chevron-circle-right"></i></a>
														
													</td>
													<td width="45%"><select class="custom-select" name="" size="10" multiple>
																<option value="" > CADASTRO CLIENTE Agro Fauna Comercio de Insumos Ltda Filial</option>
																<option value="" > CADASTRO CLIENTE Agro Fauna Filial 18</option>
																<option value="" > CADASTRO TRANSPORTADORA Agro Fauna Comercio de Insumos Ltda Filial</option>
																<option value="" > CADASTRO TRANSPORTADORA Agro Fauna Filial 18</option>
																<option value="" > VISUALIZAR PEDIDOS Agro Fauna Filial 18</option>
																<option value="" > CADASTRO PEDIDO DE COMPRA Agro Fauna Comercio de Insumos Ltda Filial</option>
																<option value="" > CADASTRO PEDIDO DE COMPRA Agro Fauna Filial 18</option>
																<option value="" > CADASTRO PEDIDO DE VENDA Agro Fauna Filial 18</option>
																<option value="" > CADASTRO COTACAO DE VENDA Agro Fauna Comercio de Insumos Ltda Filial</option>
																<option value="" > CADASTRO COTACAO DE VENDA Agro Fauna Filial 18</option>
																<option value="" > CADASTRO COTACAO DE COMPRA Agro Fauna Comercio de Insumos Ltda Filial</option>
																<option value="" > CADASTRO COTACAO DE COMPRA Agro Fauna Filial 18</option>
																<option value="" > LISTA DE PREÇO Agro Fauna Comercio de Insumos Ltda Filial</option>
																<option value="" > LISTA DE PREÇO Agro Fauna Filial 18</option>
																<option value="" > CADASTRO DE PRODUTOS Agro Fauna Comercio de Insumos Ltda Filial</option>
																<option value="" > CADASTRO DE PRODUTOS Agro Fauna Filial 18</option>
																<option value="" > CADASTRO DE FORNECEDORES Agro Fauna Comercio de Insumos Ltda Filial</option>
																<option value="" > CADASTRO DE FORNECEDORES Agro Fauna Filial 18</option>
																<option value="" > CADASTRO DE MOVIMENTOS Agro Fauna Comercio de Insumos Ltda Filial</option>
																<option value="" > CADASTRO DE MOVIMENTOS Agro Fauna Filial 18</option>
																<option value="" > CFG Agro Fauna Comercio de Insumos Ltda Filial</option>
																<option value="" > CFG Agro Fauna Filial 18</option>
																<option value="" > CFG Agro Fauna</option>
																<option value="" > LOTES Agro Fauna Comercio de Insumos Ltda Filial</option>
																<option value="" > LOTES Agro Fauna Filial 18</option>
																<option value="" > HABILITACAO PRODUTOS Agro Fauna Comercio de Insumos Ltda Filial</option>
																<option value="" > HABILITACAO PRODUTOS Agro Fauna Filial 18</option>
																<option value="" > HABILITACAO PRODUTOS Agro Fauna</option>
														  </select>
												    </td>
													
												</tr>
						</tbody>
				   </table>
				</form>
			 </div>
			 <div class="modal-footer">
				<button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
				<button class="btn btn-primary" type="submit">
				<i class="fas fa-save"></i> &nbsp; Salvar
				</button>
			 </div>
		  </div>
	   </div>
	</div>
	<!-- /.modal-content -->
	
	<!-- /.modal-content EDIT --> 
	<div class="modal fade in" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true" style="display: none;">
	   <div class="modal-dialog">
		  <div class="modal-content">
			 <div class="modal-header">
				<h5 class="modal-title m-t-10" id="exampleModalLongTitle"><i class="fas fa-pencil-alt fa-3x"></i>&nbsp;&nbsp;&nbsp;Edite os dados de seu Colaborador</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">×</span>
				</button>
			 </div>
			 <div class="modal-body">
				<form id="add-form" parsley-validate>
				   <div class="form-group row">
					  <label for="txtname" class="col-3 col-lg-2 col-form-label text-left">Nome</label>
					  <div class="col-9 col-lg-10">
						 <input id="txtname" type="text" required placeholder="Romario Santos" class="form-control is-invalid">
						 <div class="invalid-feedback">
							Please provide a valid text.
						 </div>
					  </div>
				   </div>
				   <div class="form-group row">
					  <label for="txtemail" class="col-3 col-lg-2 col-form-label text-left">Email</label>
					  <div class="col-9 col-lg-10">
						 <input id="txtemail" type="email" required placeholder="teste@agrofauna.com.br" class="form-control">
						 <div class="invalid-feedback">
							Please provide a valid text.
						 </div>
					  </div>
				   </div>
				   <div class="form-group row">
					  <label for="txtend" class="col-3 col-lg-2 col-form-label text-left">Login</label>
					  <div class="col-9 col-lg-10">
						 <input id="txtend" type="text" required placeholder="1571" class="form-control">
						 <div class="invalid-feedback">
							Please provide a valid text.
						 </div>
					  </div>
				   </div>
				   <div class="form-group row">
					  <label for="txtpass" class="col-3 col-lg-2 col-form-label text-left">Senha</label>
					  <div class="col-9 col-lg-10">
						 <input id="txtpass" type="text" required placeholder="123456" class="form-control">
						 <div class="invalid-feedback">
							Please provide a valid text.
						 </div>
					  </div>
				   </div>
				   <table class="table">
				         <thead>
                            <tr>
								<th colspan="3" class="text-center">Módulos</th>
							</tr>
						</thead>
						<tbody>
												<tr>
													<td width="45%" class="text-center">
														 Colaborador
													</td>
													<td width="10%">
													</td>
													<td width="45%" class="text-center">
														Todos
												    </td>
												</tr>
												<tr>
													<td width="45%">
														 <select class="custom-select" name="" size="10" multiple>
																<option value="" > CADASTRO CLIENTE Agro Fauna Comercio de Insumos Ltda Filial</option>
																<option value="" > CADASTRO CLIENTE Agro Fauna Filial 18</option>
																<option value="" > CADASTRO TRANSPORTADORA Agro Fauna Comercio de Insumos Ltda Filial</option>
																<option value="" > CADASTRO TRANSPORTADORA Agro Fauna Filial 18</option>
																<option value="" > VISUALIZAR PEDIDOS Agro Fauna Filial 18</option>
														  </select>
													</td>
													<td width="10%">
															<a href="#" class="btn btn-outline-light m-b-20" data-toggle="tooltip" data-placement="top" title="" data-original-title="Adicionar"><i class="fas fa-chevron-circle-left"></i></a><br>
															<a href="#" class="btn btn-outline-light" data-toggle="tooltip" data-placement="top" title="" data-original-title="Remover"><i class="fas fa-chevron-circle-right"></i></a>
														
													</td>
													<td width="45%"><select class="custom-select" name="" size="10" multiple>
																<option value="" > CADASTRO CLIENTE Agro Fauna Comercio de Insumos Ltda Filial</option>
																<option value="" > CADASTRO CLIENTE Agro Fauna Filial 18</option>
																<option value="" > CADASTRO TRANSPORTADORA Agro Fauna Comercio de Insumos Ltda Filial</option>
																<option value="" > CADASTRO TRANSPORTADORA Agro Fauna Filial 18</option>
																<option value="" > VISUALIZAR PEDIDOS Agro Fauna Filial 18</option>
																<option value="" > CADASTRO PEDIDO DE COMPRA Agro Fauna Comercio de Insumos Ltda Filial</option>
																<option value="" > CADASTRO PEDIDO DE COMPRA Agro Fauna Filial 18</option>
																<option value="" > CADASTRO PEDIDO DE VENDA Agro Fauna Filial 18</option>
																<option value="" > CADASTRO COTACAO DE VENDA Agro Fauna Comercio de Insumos Ltda Filial</option>
																<option value="" > CADASTRO COTACAO DE VENDA Agro Fauna Filial 18</option>
																<option value="" > CADASTRO COTACAO DE COMPRA Agro Fauna Comercio de Insumos Ltda Filial</option>
																<option value="" > CADASTRO COTACAO DE COMPRA Agro Fauna Filial 18</option>
																<option value="" > LISTA DE PREÇO Agro Fauna Comercio de Insumos Ltda Filial</option>
																<option value="" > LISTA DE PREÇO Agro Fauna Filial 18</option>
																<option value="" > CADASTRO DE PRODUTOS Agro Fauna Comercio de Insumos Ltda Filial</option>
																<option value="" > CADASTRO DE PRODUTOS Agro Fauna Filial 18</option>
																<option value="" > CADASTRO DE FORNECEDORES Agro Fauna Comercio de Insumos Ltda Filial</option>
																<option value="" > CADASTRO DE FORNECEDORES Agro Fauna Filial 18</option>
																<option value="" > CADASTRO DE MOVIMENTOS Agro Fauna Comercio de Insumos Ltda Filial</option>
																<option value="" > CADASTRO DE MOVIMENTOS Agro Fauna Filial 18</option>
																<option value="" > CFG Agro Fauna Comercio de Insumos Ltda Filial</option>
																<option value="" > CFG Agro Fauna Filial 18</option>
																<option value="" > CFG Agro Fauna</option>
																<option value="" > LOTES Agro Fauna Comercio de Insumos Ltda Filial</option>
																<option value="" > LOTES Agro Fauna Filial 18</option>
																<option value="" > HABILITACAO PRODUTOS Agro Fauna Comercio de Insumos Ltda Filial</option>
																<option value="" > HABILITACAO PRODUTOS Agro Fauna Filial 18</option>
																<option value="" > HABILITACAO PRODUTOS Agro Fauna</option>
														  </select>
												    </td>
													
												</tr>
						</tbody>
				   </table>
				</form>
			 </div>
			 <div class="modal-footer">
				<button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
				<button class="btn btn-primary" onclick="cadastrarProduto()">
				<i class="fas fa-save"></i> &nbsp; Salvar
				</button>
			 </div>
		  </div>
	   </div>
	</div>
	<!-- /.modal-content --> 				

    
    
    <!-- /.modal-content DELETE --> 
    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title m-t-10" id="exampleModalLongTitle"><i class="fas fa-trash-alt fa-3x"></i>&nbsp;&nbsp;&nbsp;Delete os dados de seu Colaborador</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
				<div class="modal-body">
					<p class="text-center"> Tem certeza de que deseja excluir este Colaborador?</p>
				</div>
                <div class="modal-footer">
				      <button class="btn btn-primary" onclick="cadastrarProduto()">Sim</button>
					  <button type="button" class="btn btn-light" data-dismiss="modal">Não</button>
                 </div>
			</div>
		</div>
	</div>
	<!-- /.modal-content --> 


    <!-- jquery 3.3.1 -->
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="assets/vendor/jquery/jquery.mask.min.js"></script>
	<script src="assets/libs/js/form-mask.js"></script>
	
	    <!-- bootstap bundle js -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
	<!-- datatables js -->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="assets/vendor/datatables/js/dataTables.bootstrap4.min.js"></script>
    <script src="../../../../../cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script src="assets/vendor/datatables/js/buttons.bootstrap4.min.js"></script>
    <script src="assets/vendor/datatables/js/data-table.js"></script>
	
    <!-- slimscroll js -->
    <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
	<!-- multi-select js -->
	<script src="assets/vendor/multi-select/js/jquery.multi-select.js"></script>
    <!-- main js -->
    <script src="assets/libs/js/main-js.js"></script>
    <!-- chart chartist js -->
    <script src="assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
    <!-- sparkline js -->
    <script src="assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <!-- morris js -->
    <script src="assets/vendor/charts/morris-bundle/raphael.min.js"></script>
    <script src="assets/vendor/charts/morris-bundle/morris.js"></script>
    <!-- chart c3 js -->
    <script src="assets/vendor/charts/c3charts/c3.min.js"></script>
    <script src="assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
    <script src="assets/vendor/charts/c3charts/C3chartjs.js"></script>
    <script src="assets/libs/js/dashboard-ecommerce.js"></script>
	<!-- parsley js -->
	<script src="assets/vendor/parsley/parsley.js"></script>
	
	<!-- Optional JavaScript -->
	<script>
		$('#my-select, #pre-selected-options').multiSelect()
    </script>
	<script>
    $('#callbacks').multiSelect({
        afterSelect: function(values) {
            alert("Select value: " + values);
        },
        afterDeselect: function(values) {
            alert("Deselect value: " + values);
        }
    });
    </script>
    <script>
    $('#keep-order').multiSelect({ keepOrder: true });
    </script>
    <script>
    $('#public-methods').multiSelect();
    $('#select-all').click(function() {
        $('#public-methods').multiSelect('select_all');
        return false;
    });
    $('#deselect-all').click(function() {
        $('#public-methods').multiSelect('deselect_all');
        return false;
    });
    $('#select-100').click(function() {
        $('#public-methods').multiSelect('select', ['elem_0', 'elem_1'..., 'elem_99']);
        return false;
    });
    $('#deselect-100').click(function() {
        $('#public-methods').multiSelect('deselect', ['elem_0', 'elem_1'..., 'elem_99']);
        return false;
    });
    $('#refresh').on('click', function() {
        $('#public-methods').multiSelect('refresh');
        return false;
    });
    $('#add-option').on('click', function() {
        $('#public-methods').multiSelect('addOption', { value: 42, text: 'test 42', index: 0 });
        return false;
    });
    </script>
    <script>
    $('#optgroup').multiSelect({ selectableOptgroup: true });
    </script>
    <script>
    $('#disabled-attribute').multiSelect();
    </script>
    <script>
    $('#custom-headers').multiSelect({
        selectableHeader: "<div class='custom-header'>Selectable items</div>",
        selectionHeader: "<div class='custom-header'>Selection items</div>",
        selectableFooter: "<div class='custom-header'>Selectable footer</div>",
        selectionFooter: "<div class='custom-header'>Selection footer</div>"
    });
    </script>
	<script>
		$(document).ready(function() {
			$('#fornecedor').DataTable( {
				"language":{ //Altera o idioma do DataTable para o português do Brasil
				"url": "https://cdn.datatables.net/plug-ins/1.10.12/i18n/Portuguese-Brasil.json"
				},
			} );
			
			$.getJSON('estados_cidades.json', function (data) {
				var items = [];
				var options = '<option value="">escolha um estado</option>';	
				$.each(data, function (key, val) {
					options += '<option value="' + val.nome + '">' + val.nome + '</option>';
				});					
				$("#estados").html(options);				
				
				$("#estados").change(function () {				
				
					var options_cidades = '';
					var str = "";					
					
					$("#estados option:selected").each(function () {
						str += $(this).text();
					});
					
					$.each(data, function (key, val) {
						if(val.nome == str) {							
							$.each(val.cidades, function (key_city, val_city) {
								options_cidades += '<option value="' + val_city + '">' + val_city + '</option>';
							});							
						}
					});
					$("#cidades").html(options_cidades);
					
				}).change();		
			
			});
		} );
		
	</script>
	
</body>
 
</html>