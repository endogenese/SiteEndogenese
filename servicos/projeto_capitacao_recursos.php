<?php require $_SERVER["DOCUMENT_ROOT"]."/templates/header.php"; ?>
    <!-- ESTILOS PERSONALIZADOS -->
    <link href="/css/offcanvas.css" rel="stylesheet">
    <link href="/jquery/stellar/test/jquery.stellar.css" rel="stylesheet">
    <script src="/jquery/stellar/jquery.stellar.min.js"></script>
    <script>
       $(function() {
          $.stellar();
        });
    </script>
  </head>
  <body>
<?php require $_SERVER["DOCUMENT_ROOT"]."/templates/menu.php"; ?>
  <!-- CONTEÚDO -->
  <div class="container">
    <div>
      <div class="endo_conteudo_servico">
        <h2 class="featurette-heading endo_topo_texto">Precisando de Recursos Financeiros?<br> </h2>
        <h3><span class="text-muted">Entenda como você pode obter financiamento em condições ideais para seu negócio!</span></h3>
        <br/>
      </div>
      <div class="endo_img_servico" data-stellar-ratio="0.2"><img class="endo_img endo_topo_texto endo_img_desc_serv"  src="/img/geral/servicos/img_serv_01.png" alt="Generic placeholder image"></div>
      <div class="endo_conteudo_servico">
          <p class="lead text-justify">Somos uma empresa cadastrada e reconhecida pelo Banco da Amazônia como parceiros, auxiliando as empresas na elaboração de planos de negócios e projetos econômicos no crédito urbano, que envolve comércio, indústria e serviços. </p>
          <p class="lead text-justify">Tais projetos objetivam a realização de investimentos para as mais diversificadas  finalidades, como construção, reformas, aquisição de terrenos, máquinas, equipamentos e capital de giro. Os recursos são captados por meio do Fundo Constitucional de Financiamento do Norte - FNO, que em 2013  atingiu a marca de  R$ 4,7 bilhões em investimentos na Região Norte. </p>
          <p class="lead text-justify">Os fundos constitucionais foram criados pela Constituição Federal de 1988, que estabeleceu em seu artigo 159, inciso I, alínea “c”, a obrigação de a União destinar 3% da arrecadação do IR (Imposto sobre a Renda) e IPI (Imposto sobre Produtos Industrializados) para serem aplicados em programas de financiamento aos setores produtivos das Regiões Norte, Nordeste e Centro-Oeste.</p>
          <p class="lead text-justify">A Lei nº 7.827, de 27.09.89, alterada pela Lei nº 9.126, de 10.11.95, regulamentou o referido artigo, e assim, para a Região Norte foi criado o Fundo Constitucional de Financiamento do Norte - FNO, tendo como objetivo contribuir para a promoção do desenvolvimento econômico e social da Região, através de programas de financiamento aos setores produtivos privados.</p>
          <p class="lead text-justify">Os recursos do FNO, provenientes de 0,6% da arrecadação do IR e IPI, são administrados pelo <a href="http://www.bancoamazonia.com.br" target="_blank">Banco da Amazônia</a>, Instituição Financeira Pública Federal, vinculada ao Ministério da Fazenda, que os aplica através de programas elaborados, anualmente, de acordo com a realidade ambiental, social e econômica da Região. </p>
          <p class="lead text-justify">Atualmente o FNO  possui linhas de crédito destinadas ao financiamento de:</p>
        <div class="panel-group endo_panel-group_serv" id="accordion">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Bens de Capital:</a>
              </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse">
              <div class="panel-body">
                Máquinas, Equipamentos, Veículos, Móveis e Utensílios de forma isolada.<br><br>
                Para empresas com faturamento até de 90 milhões: 5,30% a.a. (Com bônus de adimplência de 15%, fica 4,51% a.a.)<br>
                Para empresas com faturamento acima de 90 milhões: 7,06% a.a. (Com bônus de adimplência de 15%, fica 6,00% a.a.)<br>
             </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Investimento:</a>
              </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse">
              <div class="panel-body">
                Construções civis, obras de infraestrutura, associado ou não com bens de capital e capital de giro.<br><br>
                Para empresas com faturamento até de 90 milhões: 6,48% a.a. (Com bônus de adimplência de 15%, fica 5,51% a.a.)<br>
                Para empresas com faturamento acima de 90 milhões: 8,24% a.a. (Com bônus de adimplência de 15%, fica 7,00% a.a.)<br>
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Capital de Giro:</a>
              </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse">
              <div class="panel-body">
                Recursos destinados à formação e manutenção de estoques de forma isolada.<br><br>
                Para empresas com faturamento até de 90 milhões: 10,59% a.a. (Com bônus de adimplência de 15%, fica 9,00% a.a.)<br>
                Para empresas com faturamento acima de 90 milhões: 12,36% a.a. (Com bônus de adimplência de 15%, fica 10,51% a.a.)<br>
              </div>
            </div>
          </div>
        </div>
        <p class="lead text-justify">&nbsp;</p>
        <p class="lead text-justify">Para obter mais informações sobre como a sua empresa pode ser beneficiada pelo FNO, entre em <a href="/empresa/contatos.php">CONTATO</a> conosco. Agendaremos o melhor horário para esclarecer suas dúvidas!</p>
      </div>
    </div>
  </div>
  <div class="container"><a class="btn btn-primary" href="/servicos/"> Voltar para Serviços</a></div>
<?php require $_SERVER["DOCUMENT_ROOT"]."/templates/footer.php"; ?>