<?php
/*
* Template name: Página inicial
*/
get_header(); ?>

<!-- Banner principal -->
<section id="bannerPrincial" class="carousel slide banner-principal" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="lazy d-block w-100" data-src="<?php bloginfo('template_url'); ?>/images/banner.jpg" alt="Primeiro Slide">

      <div class="container d-flex justify-content-center">
        <div class="carousel-caption">
          <h1 class="text-soft-green text-uppercase shadow-sm">Vamos jogar tênis?</h1>
          <p class="lead">Aprenda tênis com quem mais entende do esporte em Belo Horizonte, e o melhor, com flexibilidade de horários e profissionais qualificados.</p>

          <div class="conversao">
            <a href="#" type="button" class="btn btn-md btn-outline btn-success" data-toggle="modal" data-target="#modalConversao">Faça uma aula grátis</a>
            <p class="small">Agende uma aula de tênis experimental <strong>gratuita</strong>.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="carousel-item">
      <img class="lazy d-block w-100" data-src="<?php bloginfo('template_url'); ?>/images/banner.jpg" alt="Primeiro Slide">

      <div class="container d-flex justify-content-center">
        <div class="carousel-caption">
          <h1 class="text-soft-green text-uppercase shadow-sm">Vamos jogar tennis?</h1>
          <p class="lead">Aprenda tênis com quem mais entende do esporte em Belo Horizonte, e o melhor, com flexibilidade de horários e profissionais qualificados.</p>

          <div class="conversao">
            <a href="#" type="button" class="btn btn-md btn-outline btn-success" data-toggle="modal" data-target="#modalConversao">Faça uma aula grátis</a>
            <p class="small">Agende uma aula experimental gratuitamente.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="rolar">
      <a href="#sobre-nos"><i class="fas fa-arrow-down"></i><span class="text-hide">Rolar para baixo</span></a>
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
<section id="sobre-nos" class="sobre-nos">
  <div class="container">
    <div class="row d-flex justify-content-center">
      <div class="col-10 text-center">
        <h2 class="text-uppercase">Porque jogar na <span class="text-success">Fast Tennis</span></h2>
      </div>
    </div>

    <div class="row d-flex justify-content-center">
      <div class="card-deck">
        <div class="card">
          <img data-src="<?php bloginfo('template_url'); ?>/images/aula-tenis-criancas.jpg" class="lazy card-img-top" alt="Aula de tênis para crianças">
          <p>Aulas de tênis para crianças, adultos e idosos, de todos os níveis de aprendizado.</p>
        </div>

        <div class="card">
          <img data-src="<?php bloginfo('template_url'); ?>/images/aula-tenis-criancas.jpg" class="lazy card-img-top" alt="Agende sua aula de tênis">
          <p>Agende suas aulas de acordo com sua necessidades e remarque sempre que precisar.</p>
        </div>

        <div class="card">
          <img data-src="<?php bloginfo('template_url'); ?>/images/aula-tenis-criancas.jpg" class="lazy card-img-top" alt="Professores de tênis experientes e qualificados">
          <p>Professores com mais de 10 anos de experiência, qualificados e capacitados.</p>
        </div>

        <div class="card">
          <img data-src="<?php bloginfo('template_url'); ?>/images/aula-tenis-criancas.jpg" class="lazy card-img-top" alt="Equipamentos de tênis para treinos e estrutura completa">
          <p>Toda estrutura, equipamentos e planos de treinos para o seu desenvolvimento.</p>
        </div>
      </div>
    </div>

    <div class="row d-flex justify-content-center py-5">
      <div class="col-10 col-md-5">
        <p class="lead">Não perca tempo, agende uma aula experimental e sem compromisso.</p>
      </div>

      <div class="col-10 col-md-3 conversao">
        <a href="#" type="button" class="btn btn-md btn-outline-light shadow-sm w-100" data-toggle="modal" data-target="#modalConversao">Faça uma aula grátis</a>
        <p class="small">Agende uma aula de tênis experimental <strong>gratuita</strong>.</p>
      </div>
    </div>
  </div>
</section>

<!-- Planos -->
<section class="planos">
  <div class="container">
    <div class="row d-flex justify-content-center justify-content-md-start">
      <div class="col-10 col-md-7 text-center">
        <h2 class="text-uppercase">Conheça nossos <span class="text-success">planos</span></h2>
      </div>
    </div>

    <div class="row boxes-planos text-center d-flex justify-content-center justify-content-md-start">
      <div class="col-10 col-md-8 text-center">
        <div class="card-deck">
          <div class="card plano-grupo">
            <h3 class="card-title">
              <span class="small text-nowrap">Aulas de tênis</span><br />
              em grupo
            </h3>

            <div class="preco">
              <p>
                <span class="cifrao">R$</span> 55
                <span class="aula">/aula</span>
              </p>
            </div>

            <div class="matricula">
              Matrícula grátis
            </div>

            <ul class="list-unstyled beneficios">
              <li><span class="text-success font-weight-bold">»</span> Até 4 alunos por aula</li>
              <li><span class="text-success font-weight-bold">»</span> Raquetes e bolas disponíveis</li>
              <li><span class="text-success font-weight-bold">»</span> Manhã, tarde e noite</li>
              <li><span class="text-success font-weight-bold">»</span> Método de ensino Todi Nadal</li>
              <li><span class="text-success font-weight-bold">»</span> Aulas especiais de fundamentos</li>
              <li><span class="text-success font-weight-bold">»</span> Descontos para locação de quadra</li>
            </ul>

            <div class="conversao">
              <a href="#" type="button" class="btn btn-lg btn-success w-100">Contratar</a>
            </div>
          </div>

          <div class="card plano-individual">
            <h3 class="card-title">
              <span class="small text-nowrap">Aulas de tênis</span><br />
              individual
            </h3>

            <div class="preco">
              <p>
                <span class="cifrao">R$</span> 99
                <span class="aula">/aula</span>
              </p>
            </div>

            <div class="matricula">
              Matrícula grátis
            </div>

            <ul class="list-unstyled beneficios">
              <li><span class="text-success font-weight-bold">»</span> Professor dedicado</li>
              <li><span class="text-success font-weight-bold">»</span> Raquetes e bolas disponíveis</li>
              <li><span class="text-success font-weight-bold">»</span> Manhã, tarde e noite</li>
              <li><span class="text-success font-weight-bold">»</span> Método de ensino Todi Nadal</li>
              <li><span class="text-success font-weight-bold">»</span> Aulas especiais de fundamentos</li>
              <li><span class="text-success font-weight-bold">»</span> Descontos para locação de quadra</li>
            </ul>

            <div class="conversao">
              <a href="#" type="button" class="btn btn-lg btn-success w-100">Contratar</a>
            </div>
          </div>
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
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3749.8775213245185!2d-43.93787598508466!3d-19.97165243658037!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa698199696028f%3A0xc9ac46bfe674bf73!2sAv.%20Professor%20Crist%C3%B3vam%20dos%20Santos%2C%20185%20-%20Belvedere%2C%20Belo%20Horizonte%20-%20MG%2C%2030320-510!5e0!3m2!1spt-BR!2sbr!4v1594511378802!5m2!1spt-BR!2sbr" width="100%" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

        <div class="container">
          <div class="row d-flex justify-content-end">
            <div class="col-6 box-unidade">
              <h3>Belvedere 1 - Quadra de Saibro</h3>
              <p>Avenida Professor Cristóvam dos Santos, 185<br />
                Belvedere - Belo Horizonte/MG</p>
            </div>
          </div>
        </div>
      </div>

      <div class="carousel-item">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3749.8775213245185!2d-43.93787598508466!3d-19.97165243658037!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa698199696028f%3A0xc9ac46bfe674bf73!2sAv.%20Professor%20Crist%C3%B3vam%20dos%20Santos%2C%20185%20-%20Belvedere%2C%20Belo%20Horizonte%20-%20MG%2C%2030320-510!5e0!3m2!1spt-BR!2sbr!4v1594511378802!5m2!1spt-BR!2sbr" width="100%" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

        <div class="container">
          <div class="row d-flex justify-content-end">
            <div class="col-6 box-unidade">
              <h3>Belvedere 2 - Quadra de Saibro</h3>
              <p>Avenida Professor Cristóvam dos Santos, 185<br />
                Belvedere - Belo Horizonte/MG</p>
            </div>
          </div>
        </div>
      </div>

      <div class="carousel-item">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3749.8775213245185!2d-43.93787598508466!3d-19.97165243658037!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa698199696028f%3A0xc9ac46bfe674bf73!2sAv.%20Professor%20Crist%C3%B3vam%20dos%20Santos%2C%20185%20-%20Belvedere%2C%20Belo%20Horizonte%20-%20MG%2C%2030320-510!5e0!3m2!1spt-BR!2sbr!4v1594511378802!5m2!1spt-BR!2sbr" width="100%" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

        <div class="container">
          <div class="row d-flex justify-content-end">
            <div class="col-6 box-unidade">
              <h3>Belvedere 3 - Quadra de Saibro</h3>
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
    <div class="row d-flex justify-content-center">
      <div class="col-10 col-md-8 text-center">
        <p class="lead">Clique aqui para saber mais informações sobre os planos, aulas, metodologia ou precisa de horários flexíveis para sua rotina. Se preferir, agende aula experimental gratuita.</p>

        <div class="conversao">
          <a href="#" type="button" class="btn btn-lg btn-outline btn-success" data-toggle="modal" data-target="#modalConversao">Faça uma aula grátis</a>
          <p class="small">Agende uma aula experimental <strong>gratuitamente</strong>.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Aluguel -->
<section class="aluguel">
  <div class="container">
    <div class="row d-flex align-items-center">
      <div class="col-10 col-md-4">
        <h2 class="text-white">Alugue nossas quadras de tênis e divirta-se com seus amigos</h2>
      </div>

      <div class="col-10 col-md-5">
        <p class="lead text-white">Na Fast Tennis você pode alugar nossas quadras por hora. As reservas são feitas por telefone ou whatsapp. Você também tem a flexibilidade de cancelar seus agendamentos ou remarca-los para um novo dia e horário.</p>
      </div>

      <div class="col-10 col-md-3 text-center">
        <a href="#" type="button" class="btn btn-md btn-outline-light w-100 p-3">Alugue nossas quadras</a>
        <p class="small text-white">Consulte nossas unidades</p>
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

<?php get_footer(); ?>