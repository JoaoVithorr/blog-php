<?php
  include_once("helpers/url.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index.php</title>
    <!-- Estilos -->
    <link rel="stylesheet" href="<?= $BASE_URL ?>/css/style.css"> 
    <!-- Fontes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <a href="<?= $BASE_URL ?>" id="logo">
      <img src="<?= $BASE_URL ?>/img/logo.svg" alt="Logo do site">
    </a>
    <nav>
      <ul class="nav-bar">
        <li><a href="<?= $BASE_URL ?>">Home</a></li>
        <li><a href="#"></a>Categorias</li>
        <li><a href="#">Sobre</a></li>
        <li><a href="<?= $BASE_URL ?>/contact.php">Contato</a></li>
      </ul>
    </nav>
