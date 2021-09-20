<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fast Tennis</title>

  <?php /* <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/critical.css"> */ ?>
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css">
</head>

<body>
  <header class="fixed-top">
    <div class="container">
      <div class="flex-row">
        <nav class="navbar navbar-expand-lg justify-content-end">
          <div class="marca">
            <a class="navbar-brand" href="#"><img src="<?php bloginfo('template_url'); ?>/images/marca-fast-tennis.svg" alt="<?php bloginfo('name'); ?>" /></a>
          </div>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navegacao" aria-controls="navegacao" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse d-flex justify-content-end" id="navegacao">
            <ul class="navbar-nav">
              <li class="nav-item"><a class="nav-link" href="#">Sobre nós</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Equipe</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Unidades</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Planos</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Reserve uma quadra</a></li>
              <li class="nav-item cta"><a class="nav-link btn btn-lg btn-outline-success" data-toggle="modal" data-target="#modalConversao">Faça uma aula grátis</a></li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
  </header>