<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="style.css" rel="stylesheet" type="text/css" />

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>

  <nav class="menu-lateral">

    <div class="btn-expandir">
      <i class="bi bi-list" id="btn-exp"></i>
    </div>

    <ul>
      <li class="item-menu">
        <a href="index.php">
          <span class="icon"><i class="bi bi-house"></i></span>
          <span class="txt-link">Home</span>
        </a>
      </li>
      <li class="item-menu ativo">
        <a href="Projetos_recentes.php">
          <span class="icon"><i class="bi bi-projector"></i></span>
          <span class="txt-link">Projetos Recentes</span>
        </a>
      </li>
    </ul>
  </nav>

  <header>
    <div class="fundo">
      <h2>Projetos Recentes</h2>
    </div>
  </header>
  
    <?php
    // Loop para gerar as tags img

    for ($i = 2; $i <= 43; $i++) {
        echo "<div class='img'><img src='Imagens/{$i}.jpg' alt='Projeto {$i}'></div>";
    }
    ?>

</body>
<script src="script.js"></script>

</html>