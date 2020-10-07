<?php include 'header.php'; ?>
<?php 
include 'conexao.php';

if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$sql = mysqli_query($connection, "SELECT * FROM questoes WHERE id=$id");

	$count = (is_array($sql)) ? count($sql) :1 ;
	if ($count) {
		$n = mysqli_fetch_array($sql);
		$alternativa = $n['alternativa'];
		$nome = $n['nome'];
		$curso = $n['curso'];
		$data = $n['data'];
	}
}

if(isset($_POST['editar'])){
	$id = $_GET["id"];
	$nome = $_POST["nome"];
	$curso = $_POST["curso"];
	$data = $_POST["data"];
	$alternativa = $_POST['alternativa'];
	$alternativa_implode = implode(",", $_POST['alternativa']);
	$query = "UPDATE questoes SET alternativa = '$alternativa_implode', nome = '$nome', curso= '$curso', data = '$data' WHERE id = $id ";

	$consulta = mysqli_query($connection, $query);

	header('location: tabela.php');
}

?>

<br>
<div class="container col-md-6 offset-md-3">
	<h1 align="center">Sistema de Questões</h1>
	<p align="center">por Keven Bomfim&copy;</p>
	<form method="POST">
		<div class="row">
			<div class="col">
				<input name="nome" type="text" class="form-control" value="<?php echo $nome;?>"></input>
			</div>
			<div class="col">
				<select name="curso" type="text" class="form-control" placeholder="Curso">
					<option></option>
					<option value="Administração" <?=($curso == 'Administração')? 'selected': ''?> >Administração</option>
					<option value="Comércio" <?=($curso == 'Comércio')? 'selected': ''?> >Comércio</option>
					<option value="Enfermagem" <?=($curso == 'Enfermagem')? 'selected': ''?> >Enfermagem</option>
					<option value="Informática" <?=($curso == 'Informática')? 'selected': ''?> >Informática</option>
				</select>
			</div>
			<div class="col">
				<input name="data" type="date" class="form-control" value="<?php echo $data;?>"></input>
			</div>
		</div>
		<div id="accordion">
			<h3>Questão 1</h3>
			<div>
				<p>
					<h2>Questão 1</h2>
					<legend>Marque uma alternativa: </legend>
					<label>A</label>
					<input type="radio" name="alternativa[0]" value="1. letra:A"> <br>
					<label>B</label>
					<input type="radio" name="alternativa[0]" value="1. letra:B"> <br>
					<label>C</label>
					<input type="radio" name="alternativa[0]" value="1. letra:C"> <br>
					<label>D</label>
					<input type="radio" name="alternativa[0]" value="1. letra:D">
				</p>
			</div>
			<h3>Questão 2</h3>
			<div>
				<p>
					<h2>Questão 2</h2>
					<legend>Marque uma alternativa: </legend>
					<label>A</label>
					<input type="radio" name="alternativa[1]" value="2. letra:A"> <br>
					<label>B</label>
					<input type="radio" name="alternativa[1]" value="2. letra:B"> <br>
					<label>C</label>
					<input type="radio" name="alternativa[1]" value="2. letra:C"> <br>
					<label>D</label>
					<input type="radio" name="alternativa[1]" value="2. letra:D">
				</p>
			</div>
			<h3>Questão 3</h3>
			<div>
				<p>
					<h2>Questão 3</h2>
					<legend>Marque uma alternativa: </legend>
					<label>A</label>
					<input type="radio" name="alternativa[2]" value="3. letra:A"> <br>
					<label>B</label>
					<input type="radio" name="alternativa[2]" value="3. letra:B"> <br>
					<label>C</label>
					<input type="radio" name="alternativa[2]" value="3. letra:C"> <br>
					<label>D</label>
					<input type="radio" name="alternativa[2]" value="3. letra:D">
				</p>
			</div>
			<h3>Questão 4</h3>
			<div>
				<p>
					<h2>Questão 4</h2>
					<legend>Marque uma alternativa: </legend>
					<label>A</label>
					<input type="radio" name="alternativa[3]" value="4. letra:A"> <br>
					<label>B</label>
					<input type="radio" name="alternativa[3]" value="4. letra:B"> <br>
					<label>C</label>
					<input type="radio" name="alternativa[3]" value="4. letra:C"> <br>
					<label>D</label>
					<input type="radio" name="alternativa[3]" value="4. letra:D">
				</p>
			</div>
		</div> <br>
		<button name="editar" type="submit" class="btn btn-primary col-md-6 offset-md-3">Atualizar</button>
	</form> <br>
	<a href="tabela.php">
		<button name="editar" type="submit" class="btn btn-danger col-md-6 offset-md-3">Cancelar </button>
	</a>
</div>
</div>
</body>
</html>