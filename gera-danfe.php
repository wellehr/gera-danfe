<?php
	//ini_set('display_errors', 'On');
	include_once 'bootstrap.php';

	use NFePHP\NFe\ToolsNFe;
	use NFePHP\Extras\Danfe;
	use NFePHP\Extras\Dacce;
	use NFePHP\Common\Files\FilesFolders;

	if (isset($_FILES['anexo'])) { 
		$extensao_permitida  = array('.xml'); // array para tipo de arquivo
		$extensao  = strrchr($_FILES['anexo']['name'], '.'); // verifica extensao

		if (in_array($extensao, $extensao_permitida)===true) {

			$extensao  = $_FILES['anexo']['name']; // pega extensao do arquivo
			$novo_nome = $extensao; //nome do arquivo 
			$diretorio = ""; //diretorio 

			move_uploaded_file($_FILES['anexo']['tmp_name'], $diretorio.$novo_nome); 


			if (substr($novo_nome, -11) == 'proccce.xml') {
				$docxml = FilesFolders::readFile($novo_nome);
				$dacce = new Dacce($docxml, 'P', 'A4', '', 'I');
				$id = $dacce->chNFe . '-CCE';
				$testec = $dacce->printDACCE($id.'.pdf', 'I');	
			} else {
				$docxml = FilesFolders::readFile($novo_nome);
				$danfe = new Danfe($docxml, 'P', 'A4', '', 'I', ''); //instancia o obj
				$id = $danfe->montaDANFE(); // chama o metodo para gerar a danfe
				$teste = $danfe->printDANFE($id.'.pdf', 'I'); // imprime a danfe
			}		 
		} else {
			echo "<script>alert('Arquivo invalido! Verifique se o mesmo possui a extensão .xml !')</script>";
			echo "<script>location.href='index.php'</script>";
		}	
	} else {
		//var_dump($novo_nome); 
		echo "<script>alert('Nenhum arquivo foi selecionado!')</script>";
	}
?> 
<html>
	<body>
	 	<div>
	    	<object data="<?=$novo_nome?>.pdf" type="application/pdf" width="800" height="400">
	    	alt : <a href="<?=$novo_nome?>.pdf">Download</a>
	    	</object>
	  	</div>
	</body>
</html>