<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Productos - Monster House</title>
  <style>

    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

 
    header {
      background-image: linear-gradient(to right, #8b008b, #4b0082);
      color: white;
      padding: 20px;
      text-align: center;
    }

    header h1 {
      margin: 0;
      font-size: 36px;
    }


    nav {
      background-color: #333;
      display: flex;
      justify-content: center;
      padding: 10px 0;
    }

    nav a {
      color: white;
      text-decoration: none;
      padding: 10px 20px;
      margin: 0 10px;
    }

    nav a:hover {
      background-color: #555;
    }
    
    .product-section {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 20px;
      padding: 20px;
    }

    .product {
      background-color: #f1f1f1;
      padding: 20px;
      text-align: center;
    }

    .product img {
      max-width: 100%;
      height: auto;
    }

    .product h3 {
      margin-top: 10px;
      font-size: 18px;
    }

    .product p {
      margin-top: 5px;
      font-size: 16px;
      color: #888;
    }
  </style>
</head>
<body>
  <header>
    <h1>Monster House - Productos</h1>
  </header>

  <nav>
    <a href="sucursales.html">Sucursales</a>
  </nav>

  <section class="product-section">
    <h2>Mascaras</h2>
    <div class="product">
      <img src="xo.jpg" alt="Accesorio 1">
      <h3>Mascara 1</h3>
      <p>$500.00</p>
      <button><a href="enviar.php">comprar</a></button>
    </div>
    <div class="product">
      <img src="am.jpg" alt="Accesorio 2">
      <h3>Mascara 2</h3>
      <p>$800.00</p>
      <button><a href="enviar.php">comprar</a></button>
    </div>
    <div class="product">
        <img src="cr7.jpg" alt="Accesorio 2">
        <h3>Mascara 3</h3>
        <p>$800.00</p>
        <button><a href="enviar.php">comprar</a></button>
      </div>
      <div class="product">
        <img src="leo.webp" alt="Accesorio 2">
        <h3>Mascara 4</h3>
        <p>$800.00</p>
        <button><a href="enviar.php">comprar</a></button>
      </div>
    <h2>Disfraces</h2>
    <div class="product">
      <img src="d1.jpg" alt="Disfraz 1">
      <h3>Disfraz 1</h3>
      <p>$2,500.00</p>
      <button><a href="enviar.php">comprar</a></button>
    </div>
    <div class="product">
      <img src="d2.jpg" alt="Disfraz 2">
      <h3>Disfraz 2</h3>
      <p>$2,800.00</p>
      <button><a href="enviar.php">comprar</a></button>    </div>
    <div class="product">
      <img src="d3.jpg" alt="Disfraz 2">
      <h3>Disfraz 3</h3>
      <p>$2,800.00</p>
      <button><a href="enviar.php">comprar</a></button>
    </div>
    <div class="product">
      <img src="d4.jpg" alt="Disfraz 2">
      <h3>Disfraz 4</h3>
      <p>$2,800.00</p>
      <button><a href="enviar.php">comprar</a></button>
    </div>
  </section>
</body>
</html>