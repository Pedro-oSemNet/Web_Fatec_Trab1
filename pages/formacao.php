<!DOCTYPE html>
<html lang="pt-br">

<head>

    <?php
        include_once('header.php');
    ?>

</head>

<body  class="back-formacao">

<div class="opacity">

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="../index.php"><i class="fa fa-optin-monster fa-2x"></i><b> Meu Perfil</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="../index.php"><i class="fa fa-home fa-2x"></i><b> Home</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="text-color">

<h2>Formação Acadêmica</h2>   

<table class="table table-condensed">
    <tr>
        <td><i>Nome do Curso</td>
        <td><i>Duração</td>
        <td><i>Ano de Conclusão</td>
    </tr>
    
    <tr>
        <td>Técnico em Informática</td>
        <td>2 anos</td>
        <td>2016</td>
    </tr>

    <tr>
        <td>Análise e Desenvolvimento de Sistemas</td>
        <td>3 anos</td>
        <td>Cursando</td>
    </tr>

    <tr>
        <td>Empreendedor em Pequenos Negócios</td>
        <td>1 mês</td>
        <td>2015</td>
    </tr>
</table >

<p>
<p>
<hr class="hr"></hr>
<p>
<p>

<h2 class="text-right">Experiência Profissional</h2> 

<table class="table table-condensed">
    <tr>
        <td><i>Empresa</td>
        <td><i>Função</td>
        <td><i>Ano de Conclusão</td>
    </tr>
    <tr>
        <td>Cameron do Brasil Ltda.</td>
        <td>Menor Aprendiz</td>
        <td>2012</td>
    </tr>

</table>


</div>
<footer class="main-footer footer-landpage">
    
    <div class="pull-right hidden-xs">
      <div style="text-align: right">
          <strong>Curso de Análise e Desenvolvimento de Sistemas&nbsp; &nbsp; &nbsp;</strong>
          <br>
          Desenvolvido por: Pedro A. da Silva&nbsp; &nbsp; &nbsp;
      </div>
    </div>
    <strong>
      &nbsp; &nbsp; &nbsp;Fatec Taubaté
    </strong>
    <br>
  
    &nbsp; &nbsp; &nbsp;&copy; <?php echo date ('Y'); ?>. Todos os direitos reservados.
  
  </footer>

    <?php
        include_once('js.php');
    ?>

</div>    
</body>

</html>