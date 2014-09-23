
<?php require $_SERVER["DOCUMENT_ROOT"]."/templates/header.php"; ?>
    <!-- ESTILOS PERSONALIZADOS -->
  </head>
  <body>
<?php require $_SERVER["DOCUMENT_ROOT"]."/templates/menu.php"; ?>
    <!-- CONTEÚDO -->
<div class="container endo_top"> 
  <div class="row featurette">
    <div class="col-xs-12">
      <h3 class="text-justify">Nós, da<font face="Endo"> Endogênese Soluções</font>, estamos disponíveis para atender sua empresa, bem como prestar mais informações sobre nossos serviços!</h4>
      <h4><span class="text-muted">Fique à vontade para entrar em contato:</span></h4>
    </div>
    <div class="col-md-7 col-sm-7 col-xs-12">
      <div class="endo-box"  style="font-size:16px">
       <p><span class="glyphicon glyphicon-home endo-icon"></span> <strong>Escritório: </strong>Rua Lázaro de Almeira Baima, 1014 - Jardim das Araras - Itaituba - PA, CEP 68.180-130</p>
       <p><span class="glyphicon glyphicon-phone endo-icon"></span> <strong>Celulares:</strong> (93) 9122-0569 | (93) 8119-8050</p>
       <p><span class="glyphicon glyphicon-earphone endo-icon"></span> <strong>Telefone:</strong> (93) 3518-1625 (recados)</p>
       <p><span class="glyphicon glyphicon-envelope endo-icon"></span> <strong>E-mail:</strong> endogenese@gmail.com</p>
      </div>
    </div>
    <div class="col-md-5 col-sm-5 endo_img hidden-xs ">
      <img class="featurette-image img-responsive " style="margin-top:20px;" src="/img/geral/consultoria/contato_geral.png" alt="Contato">
    </div>
  </div>
  <div class="row">
    <div class="col-md-7 col-sm-7 col-xs-12">
      <div class="endo-box"  style="font-size:16px">
        <span class="glyphicon glyphicon-map-marker endo-icon"></span> <strong>Onde estamos:</strong><br/><br/>
        <iframe class="endo-mapa" width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/ms?msa=0&amp;msid=203815559016864751127.0004ff7cd23a2fa0978ae&amp;hl=pt-BR&amp;ie=UTF8&amp;t=m&amp;z=17&amp;output=embed"></iframe><br />
      </div>
    </div>
    <div class="col-md-5 col-sm-5 col-xs-12">
      <div class="endo-box" style="font-size:16px">
        <form name="formulario" action="/complementos/php/form-contato.php" method="post" class="endo_img">
          <input type=hidden name="destino" value="EmailQueVaiReceberAsMensagens">
          <input type=hidden name="enviado" value="">
          <span class="glyphicon glyphicon-comment endo-icon"></span> <strong>Envie uma mensagem</strong>
          <p></p>
          <div class="input-group">
            <span class="input-group-addon">Nome</span>
            <input class="form-control" type="text" name="tNome" size="45">
          </div><br/>
          <div class="input-group">
            <span class="input-group-addon">E-mail</span>
            <input class="form-control" type="email" name="tEmail" size="45"><br>
          </div><br/>
          <div class="input-group">
            <span class="input-group-addon">Telefone</span>
            <input class="form-control" type="tel" name="tTelefone" size="45"><br>
          </div><br/>
          <div class="input-group">
            <span class="input-group-addon">Assunto</span>
            <input class="form-control" type="text" name="tAssunto" size="45"><br>
          </div>
          <span class="input-group-addon">Mensagem</span>
          <textarea class="endo_img form-control" placeholder="Mensagem..." name="tMenssagem" rows="6" cols="43" wrap="virtual"></textarea><br>
          <input class="endo_img btn btn-success" type="submit" name="enviar" value="Enviar Email"> <input class="endo_img btn btn-default" type="reset" value="Limpar Formulário">
        </form>
      </div>
    </div>
  </div>
</div>
<?php require $_SERVER["DOCUMENT_ROOT"]."/templates/footer.php"; ?>