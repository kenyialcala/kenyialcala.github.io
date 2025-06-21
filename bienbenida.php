<?php
// Puedes agregar aquí lógica PHP si lo necesitas en el futuro
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Bienvenido a Gian Store</title>
  <link rel="stylesheet" href="style.css" />
  <style>
    .bienvenida {
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      justify-content: flex-start;
      align-items: center;
      background: #000000;
      text-align: center;
      padding-top: 40px;
    }
    .logo-gian {
      margin-top: 10px;
      margin-bottom: 24px;
      width: 180px;
      max-width: 80vw;
      height: auto;
      border-radius: 16px;
      box-shadow: 0 2px 12px rgba(0,0,0,0.18);
      background: #fff;
      object-fit: contain;
    }
    .bienvenida h1 {
      font-size: 2.2rem;
      color: #f0f0f0;
      margin-bottom: 18px;
    }
    .bienvenida p {
      font-size: 1.1rem;
      margin-bottom: 28px;
      color: #e0e0e0;
    }
    .btn-catalogo {
      background: #54495a;
      color: #fff;
      padding: 13px 26px;
      border: none;
      border-radius: 25px;
      font-size: 1.1rem;
      cursor: pointer;
      transition: background 0.2s;
      text-decoration: none;
      display: inline-block;
    }
    .btn-catalogo:hover {
      background: #635c69;
    }
    @media (min-width: 600px) {
      .logo-gian {
        width: 240px;
        margin-top: 30px;
      }
      .bienvenida h1 {
        font-size: 3rem;
      }
      .bienvenida p {
        font-size: 1.3rem;
      }
      .btn-catalogo {
        font-size: 1.2rem;
        padding: 15px 30px;
      }
    }
  </style>
</head>
<body>
  <div class="bienvenida">
    <img src="ImagenTienda/logogianstore/logobienbenida.png" alt="Logo Gian Store" class="logo-gian" />
    <h1>¡Bienvenido a Gian Store!</h1>
    <p>Explora nuestro catálogo de moda juvenil y encuentra lo mejor para ti.</p>
    <a class="btn-catalogo" href="catalogo.php">Ir al Catálogo</a>
  </div>
</body>
</html>