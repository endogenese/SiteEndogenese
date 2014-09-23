<?php require $_SERVER["DOCUMENT_ROOT"]."/templates/header.php"; ?>
    <!-- ESTILOS PERSONALIZADOS -->
    <link href="/css/carousel.css" rel="stylesheet">
  </head>
  <body>
<?php require $_SERVER["DOCUMENT_ROOT"]."/templates/menu.php"; ?>
<!-- CONTEÚDO -->
<!-- Carousel================================================== -->
    <div id="myCarousel" class="carousel slide hidden-xs asd" data-ride="carousel" data-interval="6000">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner ">
        <div class="item active">
         <img class="visible-sm" src="/img/banner_home/banner_pri/banner1.png" width="100%" > <img class="visible-md" src="/img/banner_home/banner_pri/banner2.png" >    <img class="visible-lg" src="/img/banner_home/banner_pri/banner3.png"  >  </div>
        <div class="item">
          <img class="visible-sm" src="/img/banner_home/localx/750x400.jpg" >  <img class="visible-md" src="/img/banner_home/localx/970x400.jpg" >    <img class="visible-lg" src="/img/banner_home/localx/1170x400.jpg"  >  <div class="carousel-caption">Projeto Econômico para implantação, reforma, ampliação e modernização de empresas.</div> </div>
        <div class="item">
          <img class="visible-sm" src="/img/banner_home/spa_dpil/750x400.jpg" >  <img class="visible-md" src="/img/banner_home/spa_dpil/970x400.jpg" >    <img class="visible-lg" src="/img/banner_home/spa_dpil/1170x400.jpg"  ><div class="carousel-caption"> Plano de Negócios para aquisição de máquinas, veículos, equipamentos e móveis.</div>  </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->
<div class="visible-xs endo_top" style="margin-bottom:50px"> <img src="/img/banner_home/banner_pri/banner1.png" width="100%" alt="Endogênese Soluções"> </div> <!-- imagem estática para dispositivos pequenos. -->
    <div class="container marketing">
      <!-- Três colunas de texto -->
      <div class="row">
        <div class="col-lg-4 col-md-4"><!-- coluna 1 -->
          <a href="/empresa/consultoria_empresarial.php"><img class="img-circle endo_circulo_index" src="/img/geral/home/icone_emp.png" alt="Generic placeholder image"></a>
          <h2>Consultoria Empresarial</h2>
          <p class="text-justify">Estamos todos buscando "um lugar ao sol" nesse mercado tão competitivo. E nem sempre você; tem tempo para planejar(ou projetar) ações para melhoria do seu negócio. Talvez possamos ajudar você! e talvez você precise saber como...</p>
        </div>
        <div class="col-lg-4 col-md-4"><!-- coluna 2 -->
          <a href="/empresa/consultoria_em_ti.php"><img class="img-circle endo_circulo_index" src="/img/geral/home/icone_ti.png" alt="Generic placeholder image"></a>
          <h2>Consultoria em TI</h2>
          <p class="text-justify">A Tecnologia da Informação é imprescindível para o bom desempenho das empresas. Parece clichê, mas nem todo mundo se deu conta disso. Dispomos de serviços em TI que ajudarão sua empresa a se manter eficiente e competitiva no mercado.</p>
        </div>
        <div class="col-lg-4 col-md-4"><!-- coluna 3 -->
          <a href="/empresa/contatos.php" ><img class="img-circle endo_circulo_index" src="/img/geral/home/icone_blog.png" alt="Generic placeholder image"></a>
          <h2>Contato</h2>
          <p class="text-justify">Entre em contato conosco via telefone, e-mail ou agende uma visita! Estamos disponíveis para prestar esclarecimentos sobre nossos serviços, e demonstrar como a <font face="Endo"> Endogênese Soluções</font> pode auxiliar sua empresa a se destacar no seu ramo de atuação!  </p>
          <!--<h2>Novidades</h2>
          <p class="text-justify">Fique por dentro das principais novidades relacionadas ao seguimento empresarial do mercado regional, além de temas correlatos à nossa empresa. Você pode nos acompanhar ainda pelas redes sociais! Visite nosso blog e deixe seu comentário! </p>
         -->
        </div>
      </div><!-- /.row -->
     </div><!-- fim do container -->
<?php require $_SERVER["DOCUMENT_ROOT"]."/templates/footer.php"; ?>