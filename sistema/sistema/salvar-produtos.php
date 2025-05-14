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

    <div id="produtos" class="tela">
        <form class="crud-form" action="" method="post">
          <input type="hidden" name="acao" value="salvar">
          <input type="hidden" name="id" value="<?php echo $id;?>">

          <h2>Cadastro de Produtos</h2>
          <input type="text" name="nomeProduto" placeholder="Nome do Produto">
          <input type="number" name="preco" placeholder="Preço">
          <input type="number" name="peso" placeholder="Peso (g)">
          <textarea placeholder="Descrição"></textarea>
          <select>
            <option value="">Categoria</option>
          </select>
          <button type="submit">Salvar</button>
        </form>
      </div>


   
  </main>

  <?php 
  // include dos arquivox
  include_once './include/footer.php';
  ?>