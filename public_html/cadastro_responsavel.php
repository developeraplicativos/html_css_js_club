<?php
	require_once("config.php");
		if($_SERVER["REQUEST_METHOD"]==="POST"){
			if(isset($_POST["enviarCadastroUs"])){
				/*
				$emp = new controle_responsavel();
				if(($emp->insert($_POST["cpf"],$_POST["nome"],$_POST["nomeemail"],$_POST["nomecelular"],$_POST["nomesenha"],$_POST["nomecnpj_empresa"],$_POST["nomeid_eventos"])!=0)){//diferente de 0
					echo '
						<script>
							alert("seu cadastro foi realizado com sucesso! ");
						</script>
					';
				}
				*/
			}

			if(isset($_POST["Login"])){

			}
		}
?>
<!DOCTYPE HTML>
<html lang="pt-br">


<head>



	<TITLE>CLUB VIP</TITLE>
	<meta  charset="content-type";"UTF-8"; "text/html">
	<link rel="stylesheet" href="css/web.css" >
	<link rel="stylesheet" href="css/celular.css" media="(max-width: 980px) ">
	<link rel="stylesheet" href="css/poup.css">


	<meta http-equiv="author"
	content="Emerson Rodrigues"
	/>

	<meta name="description"
	content="cadastro no clubvip, aplicativo android integrando html, para empresa / boate,
	fornecendo a ela uma vantagem de mais clientes com baixo investimento"
	/>

	<meta name="keywords"
	content="curtição, cadastro, boate, cliente, lucro, investimento"
	/>


	<!--[if IE]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="javascript/jq_menu.js"></script>
	<script src="javascript/jq_formulario.js"></script>
	<!--script src="javascript/Validarcadastro.js"></script-->


</head>
<body>

<div id="interface" >


	<header id="cabecalho" >
		<div id="backg"></div>
		<nav id="textomenu" >
		<h1> menu principal</h1>
			<ul >

				<li> <a href="index.html">PRINCIPAL   </a> </li>
				<li> <a href="saiba.html">SAIBA MAIS  </a> </li>
				<li> <a href="usuario.html">USUÁRIO    </a> </li>
				<li> <a href="contato.html">FALE CONOSCO</a> </li>

			</ul>
		</nav>
	</header>



<fieldset class="caixa">


<!--                                       CONTEUDO                                 -->



<div class="esquerda">

	<form id="formCadastro" method="post"  onsubmit="return valida_form(this)" name="usuarioCadastro">
		<p class="tituloForm" >Cadastro Responsável</p>
		<label>Nome: </label>				<input type="text" 	name="nome"  for="nomeCadastro"		maxlength="40" id="nomeCadastro" 		placeholder="Nome Completo" /> </br>
		<label>Telefone:  </label>			<input type="text" 	name="telefone"  	maxlength="11" id="telefoneCadastro" 	placeholder="Telefone pessoal"/> </br>
		<label>Cpf:  </label> 			<input type="number"  	name="cpf" 			maxlength="11" id = "cpfCadastro"  placeholder="000.000.000-00" /> </br>

		<label>Email:  </label>				<input type="email" name="email" 		maxlength="30" id="emailCadastro" placeholder="Exemplo@hotmail.com"/> </br>
		<label for="estado">Estado:  </label>
			<select name="estado">
				<optgroup label="Região Norte">
					<option value="AM">		Amazonas		</option>
					<option value="RR">		Roraima			</option>
					<option value="AP">		Amapá			</option>
					<option value="PA">		Pará			</option>
					<option value="TO">		Tocantins		</option>
					<option value="RO">		Rondônia		</option>
					<option value="AC">		Acre			</option>
				</optgroup>

				<optgroup label="Região Nordeste">
					<option value="MA">		Maranhão		</option>
					<option value="CE">		Ceará			</option>
					<option value="PI">		Piauí			</option>
					<option value="RN">		Rio Grande do Norte	</option>
					<option value="PE" selected>	Pernambuco		</option>
					<option value="PB">		Paraíba			</option>
					<option value="SE">		Sergipe			</option>
					<option value="AL">		Alagoas  		</option>
					<option value="BA">		Bahia			</option>
				</optgroup>

				<optgroup label="Região Centro-Oeste">
					<option value="MT">		Mato Grosso		</option>
					<option value="MS">		Mato Grosso do Sul	</option>
					<option value="GO">		Goiás			</option>
					<option value="DF">		Distrito Federal	</option>
				</optgroup>

				<optgroup label="Região Sudeste">
					<option value="SP">São Paulo </option>
					<option value="RJ">Rio de Janeiro </option>
					<option value="ES">Espírito Santo </option>
					<option value="MG">Minas Gerais </option>
				</optgroup>

				<optgroup label="Região Sul">
					<option value="PR">		Paraná			</option>
					<option value="RS">		Rio Grande do Sul	</option>
					<option value="SC">		Santa Catarina 		</option>

				</optgroup>


			</select> </br>
		<label>Cidade:  </label>			<input type="text" name="cid" id="icid" list="cidades" /> </br>
			<datalist id="cidades">
				<option value="Recife"></option>
				<option value="Olinda"></option>
				<option value="Jaboatão dos Guararapes"></option>
				<option value="Parnamirim"></option>
				<option value="Galpão 29"></option>
				<option value="Fortaleza"></option>
				<option value="Parnaiba"></option>
				<option value="Itaim Bibi"></option>
				<option value="Jardim Paulista"></option>
				<option value="Pinheiros"></option>
				<option value="Brooklin"></option>
				<option value="São Paulo"></option>
				<option value="Salvador"></option>
				<option value="Porto Seguro"></option>
				<option value="Brasilia"></option>
				<option value="Maceió"></option>
				<option value="Macapá"></option>
				<option value="Salvador"></option>
				<option value="Rio de Janeiro"></option>
			</datalist>
		<label>Endereço:  		</label>		<input type="text" placeholder="Bairro" 			name="end" 	id = "enderecoCadastro" 	maxlength="60" 	/> </br>
		<label>Complemento:  	</label>		<input type="text" 									name="comp" id = "complementoCadastro"	maxlength="50"  /> </br>
		</br>
		<label>Senha:  			</label>		<input type="password" name="senhaCadastro" 	maxlength="8" id="senhaCadastro" onBlur= "avalaiar('senha', this.value , 'senhaCadastro' )" /> </br>
		<label>Confirme Senha:  </label>		<input type="password" name="confsenhaCadastro" maxlength="8" id="confSenhaCadastro" onBlur= "confirmacaoSenha( this.value )"  /> </br>


		<div id="check">
			<input type="checkbox" name="aceito" id="concordo"/>
			<p id="caixaContrato"> Eu concordo com os termos do ClubVip </p>
		</div>

		<p class="butt">
			<input  class="botaoCell" type="submit" name="enviarCadastroUs" class="button" id="botaoConfirm" value="Enviar" onclick="avalaiar(texto, nome )">
			<input  class="botaoCell" type="submit" class="button" id="botaoLimpar"  value="Limpar">
		</p>


	</form>

</div>

<div class="direita" height="300px">


	<form id="formCadastro" method="post"  onsubmit="return valida_form(this)" name="usuarioLogin">
		<p class="tituloForm">Login de Responsável</p>
		<label>Email:  </label> 	<input type="email" name="email" id="emailLogin"  maxlength="30" onBlur= "avalaiar('email', this.value , 'emailLogin' )" /> </br>
		<label>Senha:  </label> 	<input type="password" name="senhaLog" id="senhaLogin"  maxlength="8" onBlur= "avalaiar('email', this.value , 'senhaLogin' )" /> </br>
		</p>
		<span><a href="#" onclick="recuperaSenha(true)"> esqueceu a senha ? </a></span>

		<p class="butt">
			<input class="botaoCell" name="Login" type="submit" class="button" value="Enviar">
			<input class="botaoCell" type="submit" class="button" value="Limpar">
		</p>

	</form>
</div>

<div id="poup">
	<a href="#" id="fechar" onclick="recuperaSenha(false)"> fechar</a>
	<p>Email:  <input type="email" placeholder="email cadastrado para envio da senha"> </input>  <input id="solicitarSenha" type="button" value="solicitar" ></input> </p>

</div>

<div id="USUARIO">
	<p  id="downloadContrato" > <a href="text/termos_club.pdf" > donwload do contrato </a> </p>
	<iframe id="contrato" src="texto/termos_club.html"></iframe>
</div>








</fieldset>

</div>

</br>


<footer>

	<p>Produzido por Emerson Rodrigues </p>
	<span>
	<img src="imagens/icons_rodape.png" usemap="#iconmap"></img>
	<map name="iconmap">
		<area shape="rect" coords="0,0,47,40" href="sun.html" alt="webs" >
		<area shape="rect" coords="47,0,94,40" href="sun1.html" alt="apps" >
		<area shape="rect" coords="94,0,141,40" href="sun2.html" alt="youtube" >
		<area shape="rect" coords="141,0,188,40" href="sun3.html" alt="faces" >
		<area shape="rect" coords="188,0,237,40" href="sun4.html" alt="links" >
	</map>
	</span>


</footer>



</body>
</html>
