<?php

include('cabecalho.php');

if(!isset($_SESSION['login'])){
		echo('<h1>Acesso Negado!</h1>');
		echo('<meta http-equiv="refresh" content="1; url=index.php">');
}else{

?>

 <section class="titulo22"> <h1 class="letra34"> Minhas Resenhas: </h1> </section>

 <section class="coluna_cat_L">.</section>


<section class="lista_categoria">


    <div class="ui special cards">
        <div class=" borda_cate">
        <section class="bordas_index cor_bord"></section>
        <section class="bordas_index cor_bord1"></section>
        <section class="bordas_index cor_bord2"></section>
        <section class="bordas_index cor_bord3"></section>
        <section class="bordas_index cor_bord4"></section>
        <section class="bordas_index cor_bord5"></section>
        </div>

        
      <div class="card">
        <div class="blurring dimmable image">
          <div class="ui dimmer">
            <div class="content">
              <div class="center">
                <a href="especifico.php" class="ui button cor_visu">Visualizar</a>
              </div>
            </div>
          </div>
          <img class="imagem_catego" src="img/tracer.png">
        </div>
        <div class="content">
          <div class="header cor_titulo_jogo_L">Overwatch</div>
          <div class="meta">
            <span class="date">Escrita em 2018</span>
          </div>
        </div>
        <div class="extra content">
        </div>

        <div class="icone1_T">
        <i class="heart outline icon"></i>
    	</div>

    	<div class="icone2_T">
        <i class="edit icon edit_icon_T"></i>
    	</div>
    	
    	<div class="icone3_T">
        <i class="trash alternate outline icon"></i>
    	</div>

        <div class="ui star rating margem_bot" data-rating="5"  data-max-rating="5"></div>
      </div>

    </div>

</section>

<section class="lista_categoria">

  <div class="ui special cards">
    <div class=" borda_cate">
    <section class="bordas_index cor_bord"></section>
      <section class="bordas_index cor_bord1"></section>
      <section class="bordas_index cor_bord2"></section>
      <section class="bordas_index cor_bord3"></section>
      <section class="bordas_index cor_bord4"></section>
      <section class="bordas_index cor_bord5"></section>
    </div>

    <div class="card">
      <div class="blurring dimmable image">
        <div class="ui dimmer">
          <div class="content">
            <div class="center">
              <a href="" class="ui button cor_visu">Visualizar</a>
            </div>
          </div>
        </div>
        <img class="imagem_catego" src="img/thesims3.png">
      </div>
      <div class="content">
        <a class="header cor_titulo_jogo_L">The sims 3</a>
        <div class="meta">
          <span class="date">Escrita em 2018</span>
        </div>
      </div>
      <div class="extra content">
      </div>
      <div class="ui star rating margem_bot" data-rating="5"  data-max-rating="5"></div>
    </div>
  </div>

</section>

<section class="lista_categoria">

  <div class="ui special cards">
    <div class=" borda_cate">
    <section class="bordas_index cor_bord"></section>
      <section class="bordas_index cor_bord1"></section>
      <section class="bordas_index cor_bord2"></section>
      <section class="bordas_index cor_bord3"></section>
      <section class="bordas_index cor_bord4"></section>
      <section class="bordas_index cor_bord5"></section>
    </div>

    <div class="card">
      <div class="blurring dimmable image">
        <div class="ui dimmer">
          <div class="content">
            <div class="center">
              <a href="" class="ui button cor_visu">Visualizar</a>
            </div>
          </div>
        </div>
        <img class="imagem_catego" src="img/tomb.png">
      </div>
      <div class="content">
        <a class="header cor_titulo_jogo_L">Tomb Raider</a>
        <div class="meta">
          <span class="date">Escrita em 2018</span>
        </div>
      </div>
      <div class="extra content">
      </div>
      <div class="ui star rating margem_bot" data-rating="5"  data-max-rating="5"></div>
    </div>
  </div>

</section>

<section class="lista_categoria">


  <div class="ui special cards">
    <div class=" borda_cate">
    <section class="bordas_index cor_bord"></section>
      <section class="bordas_index cor_bord1"></section>
      <section class="bordas_index cor_bord2"></section>
      <section class="bordas_index cor_bord3"></section>
      <section class="bordas_index cor_bord4"></section>
      <section class="bordas_index cor_bord5"></section>
    </div>

    
    <div class="card">
      <div class="blurring dimmable image">
        <div class="ui dimmer">
          <div class="content">
            <div class="center">
              <a href="especifico.php" class="ui button cor_visu">Visualizar</a>
            </div>
          </div>
        </div>
        <img class="imagem_catego" src="img/lol.png">
      </div>
      <div class="content">
        <div class="header cor_titulo_jogo_L">League of Legends</div>
        <div class="meta">
          <span class="date">Escrita em 2018</span>
        </div>
      </div>
      <div class="extra content">
      </div>
      <div class="ui star rating margem_bot" data-rating="5"  data-max-rating="5"></div>
    </div>
  </div>

</section>



<section class="lista_categoria2">

  <div class="ui special cards">
    <div class=" borda_cate">
    <section class="bordas_index cor_bord"></section>
      <section class="bordas_index cor_bord1"></section>
      <section class="bordas_index cor_bord2"></section>
      <section class="bordas_index cor_bord3"></section>
      <section class="bordas_index cor_bord4"></section>
      <section class="bordas_index cor_bord5"></section>
    </div>

    <div class="card">
      <div class="blurring dimmable image">
        <div class="ui dimmer">
          <div class="content">
            <div class="center">
              <a href="" class="ui button cor_visu">Visualizar</a>
            </div>
          </div>
        </div>
        <img class="imagem_catego" src="img/fifa.jpg">
      </div>
      <div class="content">
        <a class="header cor_titulo_jogo_L">FIFA 18</a>
        <div class="meta">
          <span class="date">Escrita em 2018</span>
        </div>
      </div>
      <div class="extra content">
      </div>
      <div class="ui star rating margem_bot" data-rating="5"  data-max-rating="5"></div>
    </div>
  </div>

</section>

<?php
}
?>