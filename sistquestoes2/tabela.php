<?php
include 'header.php';
?>
<?php include 'conexao.php'; ?>
<?php include 'listar.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

  <title> Tabela de Gabaritos </title>
  
</head>
<body>
  <br>
  <div class="container table-responsive">
    <h3>Lista de Gabaritos</h3>
    <table  class="table table-hover">
      <thead>
        <tr>
          <th>Id</th>
          <th>Alternativas</th>
          <th>Nome</th>
          <th>Curso</th>
          <th>Data de Cadastro</th>
          <th>Ações</th>
        </tr>
      </thead>
      <?php while($questoes = mysqli_fetch_assoc($sql)) { ?>
        <tbody>
        <tr>
          <th><?php echo $questoes['id']; ?></th>
          <td><?php echo $questoes['alternativa']; ?></td>
          <td><?php echo $questoes['nome']; ?></td>
          <td><?php echo $questoes['curso']; ?></td>
          <td><?php echo $questoes['data']; ?></td>
          <td>
            <a href="editar.php?id=<?php echo $questoes['id']; ?>" class="btn btn-sm btn-warning ">Editar</a>
            <a href="deletar.php?id=<?php echo $questoes['id']; ?>" class="btn btn-sm btn-danger " >Excluir</a>
          </td>
        </tr>
      </tbody>
      <?php } ?>
    </table>
    <a class="btn btn-sm btn-primary" href="index.php">Voltar</a>
  </div>
</body>
</html>