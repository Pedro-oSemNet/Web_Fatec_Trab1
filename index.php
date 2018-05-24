<!DOCTYPE html>
<html lang="pt_br">
    
<head>
  
  <?php
    include_once ('pages/header.php');  
  ?>

</head>

<body class="back-page">


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
      <a class="navbar-brand" href="C:/xampp/htdocs/meu_perfil/index.php"><i class="fa fa-optin-monster fa-2x"></i> <b> Meu Perfil</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="pages/formacao.php"><i class="fa fa-user fa-2x"></i><b> Formação Acadêmica</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>



<div class="opacity">

  
<div class="text-color"> <h2>Bem vindo a meu site! </h2>

<p> Meu nome é Pedro A. da Silva, nasci no ano de 1995. Esse sitefoi desenvolvido no ano de 2018 para a materia de Programação Web, onde deveria
ser montado um portifólio sobre a nossa vida profissional, um currículo, por assim dizer, e montei ele com o intuito de poder utilizar do mesmo no meu futuro e atualiza-lo sempre que for necessário.
Você que visita meu perfil online, prazer em conhece-lo e obrigado por utilizar um pouco de seu tempo buscando conhecer um pouco sobre quem sou.
</div>

<p>
<p>
<hr class="hr"></hr>
<p>
<p>

<div class="text-color">

<table class="talbe-index">

<tr><td class="text-center"><i>Um pouco sobre quem sou</td></tr>
<tr>
  <td>Gosto de jogos eletrônicos, livros e tecnologia, talvez seja por isso que desde pequeno me interessei por computadores e videogames.</td>
</tr>

<tr>
  <td><p><p>Durante meu ensino médio fui aprendiz em uma empresa que produzia equipamentos para extração de petróleo, fui menor aprendiz na mesma por 2 anos 
    uma das melhores experiências que tive, visto que entrei na mesma quando estava fazendo 15 anos, a experiência que ganhei dentro da empresa me ajudou a amadurecer mentalmente.
    Aprendi muito sobre a vida profissional nesse tempo que passei por lá. </td>
</tr>
</table>

<p>
<p>
<hr class="hr"></hr>
<p>
<p>

<h2>Contato</h2>
<p>
  Pedro A. da Silva
</p>
<p>
  Email: pedro.asilva32@outlook.com
</p>

</div>

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
      include_once('pages/js.php');
    ?>

</body>

</html>