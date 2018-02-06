<!-- 
	Name: Gerador de Danfe online
	Author: Wellisson Ribeiro
	Version: 1.0
	Api: NFePHP
-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="title" content="Gerador de Danfe">
	<meta name="description" content="">
	<meta name="author" content="Wellisson">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Gerador de Danfe Online</title>
	<link rel="icon" href="images/favicon.png">
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
</head>
<body class="body" style="padding: 0; margin: 0; width: 100%">
	<div class="container" style="padding-top: 5%">
		<div class="row">
			<div class="col-md-12">
				<center>
					<h1 style="font-size: 5em">DANFEOnline</h1>
					<p>Repositório de NF-e, validador de NF-e, gerador de DANFE.</p>
				</center>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8 col-md-offset-4">
				<div class="panel-body">
					<ul class="nav nav-tabs">
                        <li class="active">
                        	<a href="#xml" data-toggle="tab">XML</a>
                        </li>
                        <li>
                        	<a href="#chave" data-toggle="tab">Chave de Acesso</a>
                        </li>
                    </ul>
					<div class="tab-content">
	                	<div class="tab-pane fade in active" id="xml">
							<form class="form-inline form-group" action="gera-danfe.php" method="POST" enctype="multipart/form-data">
								<div class="col-md-8 col-md-offset-0">
									<div class="form-group">
										<input type="file" name="anexo" id="anexo" required="">
										<br>
									</div>
									<div class="row">
										<div class="form-group">
											<input type="submit" class="form-control btn btn-info" name="envia" value="Gerar Danfe">
										</div>
									</div>
								</div>
							</form>
						</div>
						<div class="tab-pane fade in" id="chave">
							<form class="form-inline form-group" action="gera_danfe.php" method="POST">
								<div class="col-md-12">
									<div class="form-control">
										<input type="text" name="chave" required="">
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>	
			</div>
		</div>
	</div>
	<br><br><br><br><br><br><br><br><br><br>
	<footer style="bottom: 0">
		<center>
			by: <a href="mailto:welleh10@gmail.com" style="text-decoration: none">Wellisson Ribeiro</a>
		</center>
	</footer>
</body>
</html>