<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Mudas</title>
		<link rel="stylesheet" type="text/css" href="_css/estilo.css"/>
		<link href="http://necolas.github.io/normalize.css/+Sans:300,400,600,700,800"; rel="stylesheet"; type="text/css";/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
		
	<script type="text/javascript" src="js/jquery-2.1.0.js"></script>

	<script type="text/javascript">
	$(document).ready(function(){

    //Aqui a ativa a imagem de load
    function loading_show(){
		$('#loading').html("<img src='img/loading.gif'/>").fadeIn('fast');
    }
    
    //Aqui desativa a imagem de loading
    function loading_hide(){
        $('#loading').fadeOut('fast');
    }       
    
    
    // aqui a função ajax que busca os dados em outra pagina do tipo html, não é json
    function load_dados(valores, page, div)
    {
        $.ajax
            ({
                type: 'POST',
                dataType: 'html',
                url: page,
                beforeSend: function(){//Chama o loading antes do carregamento
		              loading_show();
				},
                data: valores,
                success: function(msg)
                {
                    loading_hide();
                    var data = msg;
			        $(div).html(data).fadeIn();				
                }
            });
    }
    
    //Aqui eu chamo o metodo de load pela primeira vez sem parametros para pode exibir todos
    load_dados(null, 'pesquisa.php', '#MostraPesq');
    
    
    //Aqui uso o evento key up para começar a pesquisar, se valor for maior q 0 ele faz a pesquisa
    $('#pesquisaCliente').keyup(function(){
        
        var valores = $('#form_pesquisa').serialize()//o serialize retorna uma string pronta para ser enviada
        
        //pegando o valor do campo #pesquisaCliente
        var $parametro = $(this).val();
        
        if($parametro.length >= 4)
        {
            load_dados(valores, 'pesquisa.php', '#MostraPesq');
        }else
        {
            load_dados(null, 'pesquisa.php', '#MostraPesq');
        }
    });

	});
	</script>	
</head>
<body>

<div id="interface">

 <header id="cabecalho">
	<?php include 'header.php'; ?>
 </header>

 
 

	<div id="bordatp">
		<h1 id="tituloprodutos">Produtos em Destaque</h1>
	</div>
	
 <div id="escopoprod">
 
		<?php include 'categorias.php'; ?>
			
	<div id="produtos">
		<div id="esquerda">
		
			<hgroup>
			</hgroup>

			<figure  id="foto-legenda">
					<a href="Bambus/bambumosso.php"><img   id="tamimagem" src="_imagens/Bambu-mosso"/><a/>
				<figcaption>
						<a href=".php"><h1>Bambu mosso</br><span id="promocao" style="text-decoration: line-through;"> R$ 18,90</span> R$ 16,90</br></h1><a/>
				</figcaption>
			</figure>

			<figure class="foto-legenda" id="foto-legenda">
					<a href="".php><img id="tamimagem" src="_imagens/Bambu-barriga3"/><a/>
				<figcaption>
						<a href=".php"><h1> . </br><span id="promocao" style="text-decoration: line-trough;"> R$ ,</span> R$ ,</br></h1><a/>
				</figcaption>
			</figure>
	
			<figure class="foto-legenda" id="foto-legenda">
					<a href="Bambus/bambumosso.php"><<img id="tamimagem" src="_imagens/roseiratigrevermelhologo"/><a/>
				<figcaption>
						<a href=".php"><h1> . </br><span id="promocao" style="text-decoration: line-trough;"> R$ ,</span> R$ ,</br></h1><a/>
				</figcaption>
			</figure>
		
			<figure class="foto-legenda" id="foto-legenda">
					<a href="Bambus/bambumosso.php"><img id="tamimagem" src="_imagens/Bambu-japones4"/></a>
				<figcaption>
						<a href=".php"><h1> . </br><span id="promocao" style="text-decoration: line-trough;"> R$ ,</span> R$ ,</br></h1><a/>
				</figcaption>
			</figure>
	
			<figure class="foto-legenda" id="foto-legenda">
					<a href="Bambus/bambumosso.php"><img id="tamimagem" src="_imagens/Goiaba2"/></a>
				<figcaption>
						<a href=".php"><h1> . </br><span id="promocao" style="text-decoration: line-trough;"> R$ ,</span> R$ ,</br></h1><a/>
				</figcaption>
			</figure></br></br></br>
				
		</div>		
		
		<div id="centro">
				<figure class="foto-legenda" id="foto-legenda">
						<a href="Bambus/bambumosso.php"><img id="tamimagem" src="_imagens/Bambu-japones4"/></a>
					<figcaption>
							<a href=".php"><h1> . </br><span id="promocao" style="text-decoration: line-trough;"> R$ ,</span> R$ ,</br></h1></a>
					</figcaption>
				</figure>

		</div>
				
		
		<div id="direita">
		
				<figure class="foto-legenda" id="foto-legenda">
						<a href="Bambus/bambumosso.php"><img id="tamimagem" src="_imagens/Bambu-japones4"/></a>
					<figcaption>
							<a href=".php"><h1> . </br><span id="promocao" style="text-decoration: line-trough;"> R$ ,</span> R$ ,</br></h1></a>
					</figcaption>
				</figure>

		</div>

	 
	</div>
	
 </div>	
	
 <?php include 'footer.php'; ?>
	
</div>
</body>
</html>