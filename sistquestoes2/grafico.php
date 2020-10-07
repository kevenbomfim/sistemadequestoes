<?php include 'header.php'; ?>
<html>
<head>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load('current', {'packages':['bar']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ['Cursos', 'Total de Alunos por Curso'],

        <?php 
        include 'conexao.php';
        $sql = mysqli_query($connection, "SELECT curso, count(curso) as quantidade FROM questoes WHERE curso LIKE 'Adm%' GROUP BY curso UNION SELECT curso, count(curso) as quantidade FROM questoes WHERE curso LIKE 'Com%' GROUP BY curso UNION SELECT curso, count(curso) as quantidade FROM questoes WHERE curso LIKE 'Enf%' GROUP BY curso UNION SELECT curso, count(curso) as quantidade FROM questoes WHERE curso LIKE 'Inf%' GROUP BY curso ORDER BY quantidade ASC");
        while($dados = mysqli_fetch_array($sql)){
          $curso = $dados['curso'];
          $total = $dados['quantidade'];
          ?>

          ['<?php echo $curso ?>', '<?php echo $total ?>'],
          <?php } ?>
          ]);

      var options = {
        chart: {
          title: 'Gráfico Sistema 2020',
          subtitle: 'Quantidade de alunos por Curso -  2020',
        }
      };

      var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

      chart.draw(data, google.charts.Bar.convertOptions(options));
    }
  </script>
</head>
<body>
  <div id="columnchart_material" style="width: 800px; height: 500px;"></div>
</body>
</html>

