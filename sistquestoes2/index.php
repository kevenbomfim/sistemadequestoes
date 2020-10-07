<?php 

include 'header.php';

?>
<br>
<div class="container col-md-6 offset-md-3">
	<h1 align="center">Sistema de Questões</h1>
	<p align="center">por Keven Bomfim&copy;</p>
	<form method="POST" action="salvar.php">
		<div class="row">
			<div class="col">
				<input name="nome" type="text" class="form-control" placeholder="Nome">
			</div>
			<div class="col">
				<select name="curso" type="text" class="form-control" placeholder="Curso">
					<option></option>
					<option>Administração</option>
					<option>Comercio</option>
					<option>Enfermagem</option>
					<option>Informática</option>
				</select>
			</div>
			<div class="col">
				<input name="data" type="date" class="form-control">
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
		</div> <br> <br>
		<button type="submit" class="btn btn-primary col-md-6 offset-md-3">Enviar Respostas</button>
	</div>
</form>
</body>
</html>