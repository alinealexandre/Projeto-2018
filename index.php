<?php 

include("cabecalho.php");

    $jogadores_json  = file_get_contents('jogadores.json');
    $jogadores_array = json_decode($jogadores_json, true); 

?>

<body>
    <section class="imagem_princi">
        <section class="coluna_titulo">.</section>
        <section class="nome_princi cor_menu"> Arcadia Games </section>  
        <section class="coluna_titulo2">.</section> 

        <section class="coluna_sub">.</section>
        <section class="nome_sub cor_menu"> Resenhas de Jogos </section>  
        <section class="coluna_sub2">.</section> 
    </section>

        <div class="borda_cate_Index">
    <section class="bordas_index cor_bord"></section>
      <section class="bordas_index cor_bord1"></section>
      <section class="bordas_index cor_bord2"></section>
      <section class="bordas_index cor_bord3"></section>
      <section class="bordas_index cor_bord4"></section>
      <section class="bordas_index cor_bord5"></section>

</div>

 <section class="titulo22"> <h1 class="letra34"> Top 5 Resenhas: </h1> </section>

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

        

        <?php foreach ($jogadores_array as $jogo): ?>
        <div id="jogo" >

      <div class="card">
        <div class="blurring dimmable image">
          <div class="ui dimmer">
            <div class="content">
              <div class="center">
                <a href="especifico.php?id_jogo=<?= $jogo['id_jogo'] ?>" class="ui button cor_visu">Visualizar</a>
              </div>
            </div>
          </div>
          <img class="imagem_catego" src="img/<?= $jogo['img'] ?>">
        </div>
        <div class="content">
          <div class="header cor_titulo_jogo_L"><?= $jogo['titulo'] ?></div>
          <div class="meta">
            <span class="date"><?= $jogo['Ano de lançamento'] ?></span>
          </div>
        </div>
        <div class="extra content">
        </div>
        <div class="ui star rating margem_bot" data-rating="5"  data-max-rating="5"></div>
      </div>
    </div>
        <?php endforeach; ?>


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
              <a href="especifico_teste.php" class="ui button cor_visu">Visualizar</a>
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
              <a href="especifico_teste2.php" class="ui button cor_visu">Visualizar</a>
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
<!---->
<!--<section class="lista_categoria">-->
<!---->
<!---->
<!--  <div class="ui special cards">-->
<!--    <div class=" borda_cate">-->
<!--    <section class="bordas_index cor_bord"></section>-->
<!--      <section class="bordas_index cor_bord1"></section>-->
<!--      <section class="bordas_index cor_bord2"></section>-->
<!--      <section class="bordas_index cor_bord3"></section>-->
<!--      <section class="bordas_index cor_bord4"></section>-->
<!--      <section class="bordas_index cor_bord5"></section>-->
<!--    </div>-->
<!---->
<!---->
<!--    <div class="card">-->
<!--      <div class="blurring dimmable image">-->
<!--        <div class="ui dimmer">-->
<!--          <div class="content">-->
<!--            <div class="center">-->
<!--              <a href="especifico.php" class="ui button cor_visu">Visualizar</a>-->
<!--            </div>-->
<!--          </div>-->
<!--        </div>-->
<!--        <img class="imagem_catego" src="img/lol.png">-->
<!--      </div>-->
<!--      <div class="content">-->
<!--        <div class="header cor_titulo_jogo_L">League of Legends</div>-->
<!--        <div class="meta">-->
<!--          <span class="date">Escrita em 2018</span>-->
<!--        </div>-->
<!--      </div>-->
<!--      <div class="extra content">-->
<!--      </div>-->
<!--      <div class="ui star rating margem_bot" data-rating="5"  data-max-rating="5"></div>-->
<!--    </div>-->
<!--  </div>-->
<!---->
<!--</section>-->
<!---->
<!---->
<!---->
<!--<section class="lista_categoria2">-->
<!---->
<!--  <div class="ui special cards">-->
<!--    <div class=" borda_cate">-->
<!--    <section class="bordas_index cor_bord"></section>-->
<!--      <section class="bordas_index cor_bord1"></section>-->
<!--      <section class="bordas_index cor_bord2"></section>-->
<!--      <section class="bordas_index cor_bord3"></section>-->
<!--      <section class="bordas_index cor_bord4"></section>-->
<!--      <section class="bordas_index cor_bord5"></section>-->
<!--    </div>-->
<!---->
<!--    <div class="card">-->
<!--      <div class="blurring dimmable image">-->
<!--        <div class="ui dimmer">-->
<!--          <div class="content">-->
<!--            <div class="center">-->
<!--              <a href="" class="ui button cor_visu">Visualizar</a>-->
<!--            </div>-->
<!--          </div>-->
<!--        </div>-->
<!--        <img class="imagem_catego" src="img/fifa.jpg">-->
<!--      </div>-->
<!--      <div class="content">-->
<!--        <a class="header cor_titulo_jogo_L">FIFA 18</a>-->
<!--        <div class="meta">-->
<!--          <span class="date">Escrita em 2018</span>-->
<!--        </div>-->
<!--      </div>-->
<!--      <div class="extra content">-->
<!--      </div>-->
<!--      <div class="ui star rating margem_bot" data-rating="5"  data-max-rating="5"></div>-->
<!--    </div>-->
<!--  </div>-->
<!---->
<!--</section>-->
<!---->
<!--<section class="coluna_cat_L">.</section>-->
<!---->
<!---->
<!---->
<!---->
<!-- <div class=" borda_cate_Index2">-->
<!--    <section class="bordas_index cor_bord"></section>-->
<!--      <section class="bordas_index cor_bord1"></section>-->
<!--      <section class="bordas_index cor_bord2"></section>-->
<!--      <section class="bordas_index cor_bord3"></section>-->
<!--      <section class="bordas_index cor_bord4"></section>-->
<!--      <section class="bordas_index cor_bord5"></section>-->
<!--</div>-->
<!---->
<!-- <section class="titulo22"> <h1 class="letra34"> Resenhas Recentes: </h1> </section>-->
<!---->
<!---->
<!-- <section class="coluna_cat_L">.</section>-->
<!---->
<!---->
<!--<section class="lista_categoria">-->
<!---->
<!---->
<!--  <div class="ui special cards">-->
<!---->
<!---->
<!--    <div class="card">-->
<!--      <div class="blurring dimmable image">-->
<!--        <div class="ui dimmer">-->
<!--          <div class="content">-->
<!--            <div class="center">-->
<!--              <a href="especifico.php" class="ui button cor_visu">Visualizar</a>-->
<!--            </div>-->
<!--          </div>-->
<!--        </div>-->
<!--        <img class="imagem_quad_T" src="img/uncharted.png">-->
<!--      </div>-->
<!--      <div class="content">-->
<!--        <div class="header cor_titulo_jogo_L">Uncharted 4</div>-->
<!--        <div class="meta">-->
<!--          <span class="date">Escrita em 2018</span>-->
<!--        </div>-->
<!--      </div>-->
<!--      <div class="extra content">-->
<!--      </div>-->
<!--      <div class="ui star rating margem_bot" data-rating="3"  data-max-rating="5"></div>-->
<!--    </div>-->
<!--  </div>-->
<!---->
<!--</section>-->
<!---->
<!---->
<!--<section class="lista_categoria">-->
<!---->
<!--  <div class="ui special cards">-->
<!---->
<!--    <div class="card">-->
<!--      <div class="blurring dimmable image">-->
<!--        <div class="ui dimmer">-->
<!--          <div class="content">-->
<!--            <div class="center">-->
<!--              <a href="" class="ui button cor_visu">Visualizar</a>-->
<!--            </div>-->
<!--          </div>-->
<!--        </div>-->
<!--        <img class="imagem_quad_T" src="img/thesims.png">-->
<!--      </div>-->
<!--      <div class="content">-->
<!--        <a class="header cor_titulo_jogo_L">The Sims 4</a>-->
<!--        <div class="meta">-->
<!--          <span class="date">Escrita em 2018</span>-->
<!--        </div>-->
<!--      </div>-->
      <div class="extra content">
<!--      </div>-->
<!--      <div class="ui star rating margem_bot" data-rating="4"  data-max-rating="5"></div>-->
<!--    </div>-->
<!--  </div>-->
<!---->
<!--</section>-->
<!---->
<!--<section class="lista_categoria">-->
<!---->
<!--  <div class="ui special cards">-->
<!---->
<!---->
<!--    <div class="card">-->
<!--      <div class="blurring dimmable image">-->
<!--        <div class="ui dimmer">-->
<!--          <div class="content">-->
<!--            <div class="center">-->
<!--              <a href="" class="ui button cor_visu">Visualizar</a>-->
<!--            </div>-->
<!--          </div>-->
<!--        </div>-->
<!--        <img class="imagem_quad_T" src="img/dota.png">-->
<!--      </div>-->
<!--      <div class="content">-->
<!--        <a class="header cor_titulo_jogo_L">Dota</a>-->
<!--        <div class="meta">-->
<!--          <span class="date">Escrita em 2018</span>-->
<!--        </div>-->
<!--      </div>-->
<!--      <div class="extra content">-->
<!--      </div>-->
<!--      <div class="ui star rating margem_bot" data-rating="1"  data-max-rating="5"></div>-->
<!--    </div>-->
<!--  </div>-->
<!---->
<!--</section>-->
<!---->
<!---->
<!--<section class="lista_categoria">-->
<!---->
<!--  <div class="ui special cards">-->
<!---->
<!---->
<!--    <div class="card">-->
<!--      <div class="blurring dimmable image">-->
<!--        <div class="ui dimmer">-->
<!--          <div class="content">-->
<!--            <div class="center">-->
<!--              <a href="" class="ui button cor_visu">Visualizar</a>-->
<!--            </div>-->
<!--          </div>-->
<!--        </div>-->
<!--        <img class="imagem_quad_T" src="img/untildawn.png">-->
<!--      </div>-->
<!--      <div class="content">-->
<!--        <a class="header cor_titulo_jogo_L">Until Dawn</a>-->
<!--        <div class="meta">-->
<!--          <span class="date">Escrita em 2018</span>-->
<!--        </div>-->
<!--      </div>-->
<!--      <div class="extra content">-->
<!--      </div>-->
<!--      <div class="ui star rating margem_bot" data-rating="3"  data-max-rating="5"></div>-->
<!--    </div>-->
<!--  </div>-->
<!---->
<!--</section>-->
<!---->
<!---->
<!--<section class="lista_categoria2">-->
<!---->
<!--  <div class="ui special cards">-->
<!---->
<!---->
<!--    <div class="card">-->
<!--      <div class="blurring dimmable image">-->
<!--        <div class="ui dimmer">-->
<!--          <div class="content">-->
<!--            <div class="center">-->
<!--              <a href="" class="ui button cor_visu">Visualizar</a>-->
<!--            </div>-->
<!--          </div>-->
<!--        </div>-->
<!--        <img class="imagem_quad_T" src="img/battlefield.png">-->
<!--      </div>-->
<!--      <div class="content">-->
<!--        <a class="header cor_titulo_jogo_L">Battlefield 4</a>-->
<!--        <div class="meta">-->
<!--          <span class="date">Escrita em 2018</span>-->
<!--        </div>-->
<!--      </div>-->
<!--      <div class="extra content">-->
<!--      </div>-->
<!--      <div class="ui star rating margem_bot" data-rating="5"  data-max-rating="5"></div>-->
<!--    </div>-->
<!--  </div>-->
<!---->
<!--</section>-->
<!---->
<!--<section class="coluna_cat_L">.</section>-->
<!---->
<!---->
<!--<section class="coluna_cat_L">.</section>-->
<!---->
<!--<section class="lista_categoria">-->
<!---->
<!--  <div class="ui special cards">-->
<!---->
<!---->
<!--    <div class="card">-->
<!--      <div class="blurring dimmable image">-->
<!--        <div class="ui dimmer">-->
<!--          <div class="content cor_content_T">-->
<!--            <div class="center">-->
<!--              <a href="" class="ui button cor_visu">Visualizar</a>-->
<!--            </div>-->
<!--          </div>-->
<!--        </div>-->
<!--        <img class="imagem_quad_T" src="img/rainbow.png">-->
<!--      </div>-->
<!--      <div class="content">-->
<!--        <a class="header cor_titulo_jogo_L">Rainbow Six Siege</a>-->
<!--        <div class="meta">-->
<!--          <span class="date">Escrita em 2018</span>-->
<!--        </div>-->
<!--      </div>-->
<!--      <div class="extra content">-->
<!--      </div>-->
<!--      <div class="ui star rating margem_bot" data-rating="2"  data-max-rating="5"></div>-->
<!--    </div>-->
<!--  </div>-->
<!---->
<!--</section>-->
<!---->
<!---->
<!--<section class="lista_categoria">-->
<!---->
<!--  <div class="ui special cards">-->
<!---->
<!---->
<!--    <div class="card">-->
<!--      <div class="blurring dimmable image">-->
<!--        <div class="ui dimmer">-->
<!--          <div class="content">-->
<!--            <div class="center">-->
<!--              <a href="" class="ui button cor_visu">Visualizar</a>-->
<!--            </div>-->
<!--          </div>-->
<!--        </div>-->
<!--        <img class="imagem_quad_T" src="img/halo.png">-->
<!--      </div>-->
<!--      <div class="content">-->
<!--        <a class="header cor_titulo_jogo_L">Halo CE</a>-->
<!--        <div class="meta">-->
<!--          <span class="date">Escrita em 2018</span>-->
<!--        </div>-->
<!--      </div>-->
<!--      <div class="extra content">-->
<!--      </div>-->
<!--      <div class="ui star rating margem_bot" data-rating="4"  data-max-rating="5"></div>-->
<!--    </div>-->
<!--  </div>-->
<!---->
<!--</section>-->
<!---->
<!---->
<!--<section class="lista_categoria">-->
<!---->
<!--  <div class="ui special cards">-->
<!---->
<!---->
<!--    <div class="card">-->
<!--      <div class="blurring dimmable image">-->
<!--        <div class="ui dimmer">-->
<!--          <div class="content">-->
<!--            <div class="center">-->
<!--              <a href="" class="ui button cor_visu">Visualizar</a>-->
<!--            </div>-->
<!--          </div>-->
<!--        </div>-->
<!--        <img class="imagem_quad_T" src="img/destiny.png">-->
<!--      </div>-->
<!--      <div class="content">-->
<!--        <a class="header cor_titulo_jogo_L">Destiny</a>-->
<!--        <div class="meta">-->
<!--          <span class="date">Escrita em 2018</span>-->
<!--        </div>-->
<!--      </div>-->
<!--      <div class="extra content">-->
<!--      </div>-->
<!--      <div class="ui star rating margem_bot" data-rating="3"  data-max-rating="5"></div>-->
<!--    </div>-->
<!--  </div>-->
<!---->
<!--</section>-->
<!---->
<!---->
<!---->
<!--<section class="lista_categoria">-->
<!---->
<!--  <div class="ui special cards">-->
<!---->
<!---->
<!--    <div class="card">-->
<!--      <div class="blurring dimmable image">-->
<!--        <div class="ui dimmer">-->
<!--          <div class="content">-->
<!--            <div class="center">-->
<!--              <a href="" class="ui button cor_visu">Visualizar</a>-->
<!--            </div>-->
<!--          </div>-->
<!--        </div>-->
<!--        <img class="imagem_quad_T" src="img/leftdead.png">-->
<!--      </div>-->
<!--      <div class="content">-->
<!--        <a class="header cor_titulo_jogo_L">Left 4 Dead</a>-->
<!--        <div class="meta">-->
<!--          <span class="date">Escrita em 2018</span>-->
<!--        </div>-->
<!--      </div>-->
<!--      <div class="extra content">-->
<!--      </div>-->
<!--      <div class="ui star rating margem_bot" data-rating="1"  data-max-rating="5"></div>-->
<!--    </div>-->
<!--  </div>-->
<!---->
<!--</section>-->
<!---->
<!---->
<!--<section class="lista_categoria2">-->
<!---->
<!--  <div class="ui special cards">-->
<!---->
<!---->
<!--    <div class="card">-->
<!--      <div class="blurring dimmable image">-->
<!--        <div class="ui dimmer">-->
<!--          <div class="content">-->
<!--            <div class="center">-->
<!--              <a href="" class="ui button cor_visu">Visualizar</a>-->
<!--            </div>-->
<!--          </div>-->
<!--        </div>-->
<!--        <img class="imagem_quad_T" src="img/bioshock.png">-->
<!--      </div>-->
<!--      <div class="content">-->
<!--        <a class="header cor_titulo_jogo_L">Bioshock</a>-->
<!--        <div class="meta">-->
<!--          <span class="date">Escrita em 2018</span>-->
<!--        </div>-->
<!--      </div>-->
<!--      <div class="extra content">-->
<!--      </div>-->
<!--      <div class="ui star rating margem_bot" data-rating="5"  data-max-rating="5"></div>-->
<!--    </div>-->
<!--  </div>-->
<!---->
<!--</section>-->

<section class="coluna_cat_L">.</section>
        </body>


<?php
/* Quadrados coloridos

		for($i=0; $i<25; $i++){


	<section class="quadrado_index">.</section>
    <section class="quadrado2_index">.</section>
    <section class="quadrado5_index">.</section>
    <section class="quadrado2_index">.</section>

}



		for($i=0; $i<25; $i++){


	<section class="quadrado4_index">.</section>
	<section class="quadrado3_index">.</section>
	<section class="quadrado4_index">.</section>
    <section class="quadrado6_index">.</section>

}
*/
?>

   
</body>

