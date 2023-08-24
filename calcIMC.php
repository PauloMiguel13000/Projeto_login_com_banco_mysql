
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>IMC</title>
  <link rel="stylesheet" href="/css2/style2.css">
</head>
<body>
  <main>
    <h2>Calculo IMC</h2>
    <div class="divAltura">
      <label for="altura">Altura (M)</label>
      <input type="number" id="altura" />
    </div>
    <div class="divPeso">
      <label for="peso">Peso (KG)</label>
      <input type="number" id="peso" />
    </div>

    <div class="divCalc">
      <button onclick="calcIMC()">Calcular</button>
    </div>
    
    <span id="resultado"></span>
  </main>

  <script src="assets/js/script.js"></script>
</body>
</html>