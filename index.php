

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>PROMOÇÃO Pendrive 64GB</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Segoe UI', sans-serif;
      background: linear-gradient(135deg, #1e1e2f, #23232e);
      color: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 20px;
      min-height: 100vh;
    }

    .card {
      background: #2c2c3a;
      border-radius: 15px;
      padding: 25px;
      max-width: 400px;
      width: 100%;
      text-align: center;
      box-shadow: 0 0 25px rgba(255, 255, 255, 0.05);
      animation: pulse 3s infinite;
    }

    @keyframes pulse {
      0% { box-shadow: 0 0 20px rgba(255, 0, 102, 0.3); }
      50% { box-shadow: 0 0 40px rgba(255, 0, 102, 0.6); }
      100% { box-shadow: 0 0 20px rgba(255, 0, 102, 0.3); }
    }

    .card img {
      max-width: 100%;
      border-radius: 10px;
      margin-bottom: 20px;
    }

    h1 {
      font-size: 24px;
      margin-bottom: 10px;
      color: #ff0066;
    }

    .descricao {
      font-size: 16px;
      margin-bottom: 20px;
      color: #ddd;
    }

    .preco {
      font-size: 28px;
      font-weight: bold;
      color: #00ff99;
      margin-bottom: 10px;
    }

    .btn-compra {
      display: inline-block;
      background-color: #25d366;
      color: #fff;
      padding: 15px 20px;
      border-radius: 50px;
      font-size: 18px;
      text-decoration: none;
      margin-top: 15px;
      transition: background 0.3s ease;
    }

    .btn-compra:hover {
      background-color: #1ebe5d;
    }

    .promo-label {
      background: #ff0066;
      color: white;
      padding: 5px 15px;
      border-radius: 20px;
      display: inline-block;
      font-size: 14px;
      margin-bottom: 15px;
      animation: blink 1.2s infinite;
    }

    @keyframes blink {
      0%, 100% { opacity: 1; }
      50% { opacity: 0.5; }
    }

    .timer {
      margin-top: 10px;
      font-size: 16px;
      color: #ffcc00;
    }
  </style>
</head>
<body>

  <div class="card">
    <div class="promo-label">🔥 Promoção Relâmpago!</div>
    <img src="pendrive.webp" alt="Pendrive 64GB" />
    <h1>Pendrive 64GB USB 3.0</h1>
    <p class="descricao">Alta velocidade, compatível com PCs, TVs, som automotivo e mais! Armazene vídeos, fotos e documentos com praticidade.</p>
    <div class="preco">De <s>R$ 59,90</s> por R$ 39,90</div>
    <div class="timer">Promoção termina em: <span id="countdown">--:--:--</span></div>
    <a href="https://wa.me/5545991174316?text=Olá!%20Vi%20o%20anúncio%20do%20Pendrive%2064GB%20e%20quero%20garantir%20o%20meu%20por%20R$39,90!%20Ainda%20está%20disponível?" class="btn-compra" target="_blank">
      Comprar no WhatsApp
    </a>
  </div>

    <script>
     document.addEventListener("DOMContentLoaded", function () {
       const countdownEl = document.getElementById("countdown");
       const deadline = new Date().getTime() + 24 * 60 * 60 * 1000;

       const updateCountdown = () => {
         const now = new Date().getTime();
         const distance = deadline - now;

         if (distance < 0) {
           countdownEl.innerHTML = "Encerrado";
           return;
         }

         const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
         const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
         const seconds = Math.floor((distance % (1000 * 60)) / 1000);

         countdownEl.innerHTML =
           `${String(hours).padStart(2, '0')}:${String(minutes).padStart(2, '0')}:${String(seconds).padStart(2, '0')}`;
       };

       updateCountdown();
       setInterval(updateCountdown, 1000);
     });
    </script>


</body>
</html>
