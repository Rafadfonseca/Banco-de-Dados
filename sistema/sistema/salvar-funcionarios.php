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

    <div id="funcionarios" class="tela">
        <form class="crud-form" action="./action/funcionarios.php">
          <input type="hidden" name="acao" value="salvar">
          <input type="hidden" name="id" value="<?php echo $id;?>">

          <h2>Cadastro de Funcionários</h2>
          <input type="text" name="nomeFuncionario" placeholder="Nome">
          <input type="date" name="dataNascimento" placeholder="Data de Nascimento">
          <input type="email" name="email" placeholder="Email">
          <input type="number" name="salario" placeholder="Salário">
          <select>
            <option value="">Sexo</option>
            <option value="M">Masculino</option>
            <option value="F">Feminino</option>
          </select>
          <input type="text" placeholder="CPF">
          <input type="text" placeholder="RG">
          <select>
            <option value="">Cargo</option>
          </select>
          <select>
            <option value="">Setor</option>
          </select>
          <button type="submit">Salvar</button>
        </form>
      </div>


   
  </main>

  <?php 
  // include dos arquivox
  include_once './include/footer.php';
  ?>
