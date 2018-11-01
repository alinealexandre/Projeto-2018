<?php 

include("cabecalho.php");
include("funcoes.php");

    // $json = file_get_contents('jogos.json');
    // $array_jogos = json_decode($json, true);


    // $id = $array_jogos['id'];
    // $jogo_especifico = null;

    // foreach ($array_jogos as $jogo){
    //     if ($jogo['id'] == $id){
    //         $jogo_especifico = $jogo;
    //     }
    // }

function listaInformacao(){

  $json= file_get_contents('jogos.json');
  $array_jogos = json_decode($json, true);

  foreach ($json as $posicao => $valor) {
    if ($posicao !=0) {
      $array_jogos['id'] =$posição[$valor[0]];
      $array_jogos['titulo'] =$posição[$valor[1]];
      $array_jogos['sinopse'] =$posição[$valor[2]];
      $array_jogos['img'] =$posição[$valor[3]];
      $array_jogos['classificacao'] =$posição[$valor[4]];
      $array_jogos['gênero'] =$posição[$valor[5]];
      $array_jogos['Ano de lancamento'] =$posição[$valor[6]];
      $array_jogos['Platafroma'] =$posição[$valor[7]];
      $array_jogos['numero de players'] =$posição[$valor[8]];
      $array_jogos['desenvolvedora'] =$posição[$valor[9]];
      $informacoes[]=$array_jogos;
    }
      
  }
  return $informacoes;
}


  function buscaInformacao($codigo){

    $informacao= array();

    $json= file_get_contents('jogos.json');
    $array_jogos = json_decode($json, true);

    foreach ($dados as $linha) {
      $colunas= explode(";",$linha);
      if($posição[$valor[0]]==$codigo){
          $informacao['id'] =$posição[$valor[0]];
          $informacao['titulo'] =$posição[$valor[1]];
          $informacao['sinopse'] =$posição[$valor[2]];
          $informacao['img'] =$posição[$valor[3]];
          $informacao['classificacao'] =$posição[$valor[4]];
          $informacao['gênero'] =$posição[$valor[5]];
          $informacao['Ano de lancamento'] =$posição[$valor[6]];
          $informacao['Platafroma'] =$posição[$valor[7]];
          $informacao['numero de players'] =$posição[$valor[8]];
          $informacao['desenvolvedora'] =$posição[$valor[9]];    }
      }
    return $informacao;
    }


$cod = $_GET['cod'];
$jogo= buscaInformacao($cod);



?>

<body>

	<div class="coluna_esq_A"></div>


		<section class="especifico_A">
		<section class="bordas_index_A cor_bord_A">.</section>
	    <section class="bordas_index_A cor_bord1_A">.</section>
	    <section class="bordas_index_A cor_bord2_A">.</section>
	    <section class="bordas_index_A cor_bord3_A">.</section>
	    <section class="bordas_index_A cor_bord4_A">.</section>
	    <section class="bordas_index_A cor_bord5_A">.</section>

		    <section class="coluna1_A">

		    	
		    	<section class="img_esp_A">
		    			<img src="img/<?= $jogo_especifico['img'] ?>" class="img_esp_A"/>
		    	</section>

				
		    </section>


		    <section class="coluna2_A">

		    	<div class="ui piled segment largura1_A">
				  <h4 class="ui header tamanho_letra1_A"><?= $array_jogos['titulo'] ?></h4>
				  <p><?= $jogo['sinopse'] ?></p>
				



        <section class="nota_A">
            <h3 class="ui header tamanho_letra2a_A">Nota Autor: </h3>
            <div class="ui mini star rating  estrela_A" data-rating="<?= $jogo_especifico['classificacao'] ?>" data-max-rating="5"></div>
        </section>
          

			 <section class="botaos_A">

          <button class="ui primary button">
            Favoritar
          </button>
          <button class="ui button">
            <a href="editar.php" class="item">Editar</a>
          </button>
          <button class="ui button">
            <a href="excluir.php" class="item">Excluir</a>
          </button>

        </section>


      </section>

      <div class="espaço_A">
        .
      </div>

      <section class="colunab_A">
      
        <div class="ui list ">

            <div class="item">
              <div class="content letra2d_A">
                <div class="header letra2_A">Lançamento</div>
                <div class="description letra2c_A"><?= $jogo_especifico['Ano de lancamento'] ?></div>
              </div>
            </div>

            <div class="item">
              <div class="content letra2_A">
                <div class="header letra2_A">Plataforma</div>
                <div class="description letra2c_A"><?= $jogo_especifico['Plataforma'] ?></div>
              </div>
            </div>

            <div class="item">
              <div class="content letra2_A">
                <div class="header letra2_A">Players</div>
                <div class="description letra2c_A"><?= $jogo_especifico['numero de players'] ?></div>
              </div>
            </div>

            <div class="item">
              <div class="content letra2_A">
                <div class="header letra2_A">Desenvolvedor</div>
                <div class="description letra2c_A"><?= $jogo_especifico['titulo'] ?></div>
              </div>
            </div>
          </div>



      </section>

			<section class="comentarios_A">

        
			<div class="ui small comments lado_A">
          <h3 class="ui dividing header lado2_A">Comentários</h3>
          <div class="comment">
            <a class="avatar">
              <img src="img/tracer.png">
            </a>
            <div class="content">
              <a class="author">Matt</a>
              <div class="metadata">
                <span class="date">Today at 5:42PM</span>
              </div>
              <div class="text">
                How artistic!
              </div>
              <div class="actions">
                <a class="reply">Reply</a>
              </div>
            </div>
          </div>
          <div class="comment">
            <a class="avatar">
              <img src="img/tracer.png">
            </a>
            <div class="content">
              <a class="author">Elliot Fu</a>
              <div class="metadata">
                <span class="date">Yesterday at 12:30AM</span>
              </div>
              <div class="text">
                <p>This has been very useful for my research. Thanks as well!</p>
              </div>
              <div class="actions">
                <a class="reply">Reply</a>
              </div>
            </div>
            <div class="comments">
              <div class="comment">
                <a class="avatar">
                  <img src="img/tracer.png">
                </a>
                <div class="content">
                  <a class="author">Jenny Hess</a>
                  <div class="metadata">
                    <span class="date">Just now</span>
                  </div>
                  <div class="text">
                    Elliot you are always so right :)
                  </div>
                  <div class="actions">
                    <a class="reply">Reply</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="comment">
            <a class="avatar">
              <img src="img/tracer.png">
            </a>
            <div class="content">
              <a class="author">Joe Henderson</a>
              <div class="metadata">
                <span class="date">5 days ago</span>
              </div>
              <div class="text">
                Dude, this is awesome. Thanks so much
              </div>
              <div class="actions">
                <a class="reply">Reply</a>
              </div>
            </div>
          </div>
          <form class="ui reply form ">
            <div class="field">
              <textarea class="caixares_A"></textarea>
            </div>
            <button class="ui toggle button botao_coment">Comentar</button>
          </form>
        </div>

			</section>
			<div class="risco_A">.</div>

			

		</section>




	<div class="coluna_dir_A"></div>

</body>