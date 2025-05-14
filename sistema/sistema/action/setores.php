<?php
// include dos arquivos
include_once   '../include/logado.php';
include_once   '../include/conexao.php';

// captura a acao dos dados
$acao = $_REQUEST['acao'];
$id = $_REQUEST['id'];

// validacao
switch ($acao) {
    case 'excluir':
        $sql = "DELETE FROM setor WHERE SetorID = ".$id;
        mysqli_query($conn,$sql);
    
        break;
    
    case 'salvar':
        
        $nome = $_POST['nomeSetor'];
        $andar = $_POST['andar'];
        $cor = $_POST['cor'];

        #validação se o ID foi informado, declarado e numerico
        if ( isset($id) && !empty($id) && is_numeric($id)) {
            exit('aqui vc faz UPDATE');
        }
        else{
            exit('aqui vc faz INSERT INTO');
        }
        break;


    default:
        # code...
        break;
}
header('Location: ../lista-setores.php');
?>