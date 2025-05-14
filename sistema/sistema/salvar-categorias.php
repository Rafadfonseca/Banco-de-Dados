<?php 
// include dos arquivox
include_once './include/logado.php';
include_once './include/conexao.php';
include_once './include/header.php';

$id = '';
if( isset($_GET['id']) && !empty($_GET['id'])){
  $id = $_GET['id'];
}

?>
  <main>

    <div id="categorias" class="tela">
        <form class="crud-form" method="post" action="./action/categorias.php">
          <input type="hidden" name="acao" value="salvar">
          <input type="hidden" name="id" value="<?php echo $id;?>">
      
          <h2>Cadastro de Categorias</h2>
          <input type="text" name="nomeCategoria" placeholder="Nome da Categoria">
          <textarea placeholder="Descrição"></textarea>
          <button type="submit">Salvar</button>
        </form>
      </div>


   
  </main>

  <?php 
  // include dos arquivox
  include_once './include/footer.php';
  ?>
