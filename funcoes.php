<?php


 function salvar_usuarios($parametro_array_usuarios){
    $json = json_encode($parametro_array_usuarios, JSON_PRETTY_PRINT);
    file_put_contents('usuarios.json', $json);
}


function cadastrar($contatos_json){
	$usuario_array = json_decode($contatos_json, true);
           
            $novoUsuario = [
                "nome"  => $_POST['nome'],
                "nick"	=> $_POST['nick'],
                "email"  => $_POST['email'],
                "senha"  => $_POST['senha'],               
            ];

            $usuario_array[] = $novoUsuario;

            salvar_usuarios($usuario_array);

}



function logar($contatos_json){
	$usuario_array = json_decode($contatos_json, true);
        $Logado = [
            "nick"	=> $_POST['nick'],
            "senha"  => $_POST['senha'],               
            ];

    foreach ($usuario_array as $posicao => $info) {
    	
            if($Logado['nick'] == $usuario_array[$posicao]['nick']){
            	if($Logado['senha'] == $usuario_array[$posicao]['senha']){
            		$_SESSION['login'] = $Logado['nick'];	
            		echo('<meta http-equiv="refresh" content="0; url=index.php">');
            		break;

            	}else{
            		echo('<h1 class="mensagem_login">Senha Incorreta!</h1>');
				
				}
			
			}
	}

}


function listar_resenhas($categoria){
    $todos  = file_get_contents('jogos.json');
    $todos_array = json_decode($todos, true);
    $jogos_categoria = array();
           
        foreach ($todos_array as $posicao => $informacao) {
           if($categoria == $todos_array[$posicao]['gênero']){
            $jogos_categoria[] = $todos_array[$posicao];
           }
        }
            return $jogos_categoria;

}