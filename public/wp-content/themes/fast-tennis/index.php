<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fast Tennis</title>

  <link rel="stylesheet" href="css/critical.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
      <div class="container">
        <a class="navbar-brand" href="#">Fast Tennis</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navegacao" aria-controls="navegacao" aria-expanded="false" aria-label="Alterna navegação">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navegacao">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item"><a class="nav-link" href="#">Sobre nós</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Equipe</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Unidades</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Planos</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Reserve uma quadra</a></li>
          </ul>

          <a href="#" type="button" class="btn btn-lg btn-outline btn-success" data-toggle="modal" data-target="#modalConversao">Faça uma aula grátis</a>
        </div>
      </div>
    </nav>
  </header>

  <!-- Banner principal -->
  <section id="bannerPrincial" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src=".../800x400?auto=yes&bg=777&fg=555&text=Primeiro Slide" alt="Primeiro Slide">

        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-10">
              <h1>Vamos jogar tennis?</h1>
              <p class="lead">Aprenda tênis com quem mais entende do esporte em Belo Horizonte, e o melhor, com flexibilidade de horários e profissionais qualificados.</p>

              <div class="conversao">
                <a href="#" type="button" class="btn btn-lg btn-outline btn-success" data-toggle="modal" data-target="#modalConversao">Faça uma aula grátis</a>
                <p class="small">Agende uma aula experimental gratuitamente.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="carousel-item">
        <img class="d-block w-100" src=".../800x400?auto=yes&bg=777&fg=555&text=Primeiro Slide" alt="Primeiro Slide">

        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-10">
              <h1>Vamos jogar tennis?</h1>
              <p class="lead">Aprenda tênis com quem mais entende do esporte em Belo Horizonte, e o melhor, com flexibilidade de horários e profissionais qualificados.</p>

              <div class="conversao">
                <a href="#" type="button" class="btn btn-lg btn-outline btn-success" data-toggle="modal" data-target="#modalConversao">Faça uma aula grátis</a>
                <p class="small">Agende uma aula experimental gratuitamente.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <a class="carousel-control-prev" href="#bannerPrincial" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#bannerPrincial" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Próximo</span>
    </a>
  </section>

  <!-- Sobre nos -->
  <section class="sobre-nos">
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="col-10 text-center">
          <h2>Porque jogar na <span>Fast Tennis</span></h2>
        </div>
      </div>

      <div class="row d-flex justify-content-center text-center">
        <div class="col-10 col-md-3">
          <img src="#" alt="">
          <p>Aulas de tênis para crianças, adultos e idosos, de todos os níveis de aprendizado.</p>
        </div>

        <div class="col-10 col-md-3">
          <img src="#" alt="">
          <p>Agende suas aulas de acordo com sua necessidades e remarque sempre que precisar.</p>
        </div>

        <div class="col-10 col-md-3">
          <img src="#" alt="">
          <p>Professores com mais de 10 anos de experiência, qualificados e capacitados.</p>
        </div>

        <div class="col-10 col-md-3">
          <img src="#" alt="">
          <p>Toda estrutura, equipamentos e planos de treinos para o seu desenvolvimento.</p>
        </div>
      </div>

      <div class="row d-flex justify-content-center">
        <div class="col-10 col-md-6">
          <p class="lead">Não perca tempo, agende uma aula experimental e sem compromisso.</p>
        </div>

        <div class="col-10 col-md-4 conversao">
          <a href="#" type="button" class="btn btn-lg btn-outline btn-success" data-toggle="modal" data-target="#modalConversao">Faça uma aula grátis</a>
          <p class="small">Agende uma aula experimental gratuitamente.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Planos -->
  <section class="planos">
    <div class="container">
      <div class="row d-flex justify-content-center justify-content-md-start">
        <div class="col-10 col-md-8">
          <h2>Conheça nossos <span>planos</span></h2>
        </div>
      </div>

      <div class="row boxes-planos">
        <div class="col-10 col-md-4 plano-grupo">
          <h3>Aulas em grupo</h3>

          <div class="preco">
            <p>
              <small>R$</small>
              55
              <span>/aula</span>
            </p>
          </div>

          <div class="matricula">
            Matrícula grátis
          </div>

          <ul class="list-unstyled">
            <li>» Até 4 alunos por aula</li>
            <li>» Raquetes e bolas disponíveis</li>
            <li>» Manhã, tarde e noite</li>
            <li>» Método de ensino Todi Nadal</li>
            <li>» Aulas especiais de fundamentos</li>
            <li>» Descontos para locação de quadra</li>
          </ul>

          <div class="conversao">
            <a href="#" type="button" class="btn btn-lg btn-outline btn-success">Contratar</a>
          </div>
        </div>

        <div class="col-10 col-md-4 plano-individual">
          <h3>Aulas individual</h3>

          <div class="preco">
            <p>
              <small>R$</small>
              99
              <span>/aula</span>
            </p>
          </div>

          <div class="matricula">
            Matrícula grátis
          </div>

          <ul class="list-unstyled">
            <li>» Professor dedicado</li>
            <li>» Raquetes e bolas disponíveis</li>
            <li>» Manhã, tarde e noite</li>
            <li>» Método de ensino Todi Nadal</li>
            <li>» Aulas especiais de fundamentos</li>
            <li>» Descontos para locação de quadra</li>
          </ul>

          <div class="conversao">
            <a href="#" type="button" class="btn btn-lg btn-outline btn-success">Contratar</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Unidades -->
  <section class="unidades">
    <div id="slideUnidades" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="#" alt="Primeiro Slide">
          <div class="container">
            <div class="row d-flex justify-content-end">
              <div class="col-6">
                <h3>Belvedere 1 - Quadra de Saibro</h3>
                <p>Avenida Professor Cristóvam dos Santos, 185<br />
                  Belvedere - Belo Horizonte/MG</p>
              </div>
            </div>
          </div>
        </div>

        <div class="carousel-item">
          <img class="d-block w-100" src="#" alt="Primeiro Slide">
          <div class="container">
            <div class="row d-flex justify-content-end">
              <div class="col-6">
                <h3>Belvedere 1 - Quadra de Saibro</h3>
                <p>Avenida Professor Cristóvam dos Santos, 185<br />
                  Belvedere - Belo Horizonte/MG</p>
              </div>
            </div>
          </div>
        </div>

        <div class="carousel-item">
          <img class="d-block w-100" src="#" alt="Primeiro Slide">
          <div class="container">
            <div class="row d-flex justify-content-end">
              <div class="col-6">
                <h3>Belvedere 1 - Quadra de Saibro</h3>
                <p>Avenida Professor Cristóvam dos Santos, 185<br />
                  Belvedere - Belo Horizonte/MG</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <a class="carousel-control-prev" href="#slideUnidades" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
      </a>
      <a class="carousel-control-next" href="#slideUnidades" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Próximo</span>
      </a>
    </div>
  </section>

  <!-- Conversao -->
  <section class="conversao">
    <div class="container">
      <div class="row">
        <div class="col-10 col-md-10">
          <p class="lead">Clique aqui para saber mais informações sobre os planos, aulas, metodologia ou precisa de horários flexíveis para sua rotina. Se preferir, agende aula experimental gratuita.</p>

          <div class="conversao">
            <a href="#" type="button" class="btn btn-lg btn-outline btn-success" data-toggle="modal" data-target="#modalConversao">Faça uma aula grátis</a>
            <p class="small">Agende uma aula experimental gratuitamente.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Aluguel -->
  <section class="aluguel">
    <div class="container">
      <div class="row">
        <div class="col-10 col-md-4">
          <h2>Alugue nossas quadras de tênis e divirta-se com seus amigos</h2>
        </div>

        <div class="col-10 col-md-5">
          <p class="lead">Na Fast Tennis você pode alugar nossas quadras por hora. As reservas são feitas por telefone ou whatsapp. Você também tem a flexibilidade de cancelar seus agendamentos ou remarca-los para um novo dia e horário.</p>
        </div>

        <div class="col-10 col-md-3">
          <a href="#" type="button" class="btn btn-lg btn-outline btn-success">Alugue nossas quadras</a>
          <p class="small">Consulte nossas unidades</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Modal -->
  <div class="modal fade" id="modalConversao" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Título do modal</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
          <button type="button" class="btn btn-primary">Salvar mudanças</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-3">
          <a href="#">Fast Tennis</a>
        </div>

        <div class="col-3">
          <ul class="list-unstyled">
            <li><a href="#">Sobre nós</a></li>
            <li><a href="#">Equipe</a></li>
            <li><a href="#">Unidades</a></li>
            <li><a href="#">Planos</a></li>
            <li><a href="#">Reserve uma quadra</a></li>
            <li><a href="#">Trabalhe conosco</a></li>
            <li><a href="#">Contato</a></li>
          </ul>
        </div>

        <div class="col-3">
          <ul class="list-unstyled">
            <li><a href="#">(31) 99684-0450</a></li>
            <li><a href="tel:3125269690">(31) 2526-9690</a></li>
          </ul>
        </div>

        <div class="col-3">
          <ul class="list-unstyled">
            <li><a href="#">Facebook</a></li>
            <li><a href="#">Instagram</a></li>
            <li><a href="#">YouTube</a></li>
          </ul>
        </div>
      </div>

      <div class="row">
        <div class="col-10">
          <p>2019 - Copyright. Todos os direitos reservados. Fast Tennis Academia.</p>
        </div>
      </div>
    </div>
  </footer>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>