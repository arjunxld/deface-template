<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Hacked by ARJUN-X001</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="https://raw.githubusercontent.com/pukixploit/shell-backdoor/main/logo.png" type="image/x-icon">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@600&display=swap');

    html, body {
      margin: 0;
      padding: 0;
      height: 100%;
      font-family: 'Orbitron', sans-serif;
      overflow: hidden;
    }

    body {
      background-color: #0a0a0a;
      color: #e63946;
      position: relative;
    }

    .bg {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: url('https://i.pinimg.com/originals/76/0c/28/760c285aeabe1ffbe36496a9306f56f6.gif') no-repeat center center;
      background-size: cover;
      z-index: 0;
      filter: brightness(0.4);
    }

    /* Glitch background effects only */
    .bg::before, .bg::after {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: url('https://i.pinimg.com/originals/76/0c/28/760c285aeabe1ffbe36496a9306f56f6.gif') no-repeat center center;
      background-size: cover;
      opacity: 0;
      z-index: 0;
    }

    .bg::before {
      animation: glitch-bg-1 8s infinite;
      clip-path: polygon(0 0, 100% 0, 100% 45%, 0 45%);
    }

    .bg::after {
      animation: glitch-bg-2 8s infinite;
      clip-path: polygon(0 60%, 100% 60%, 100% 100%, 0 100%);
    }

    @keyframes glitch-bg-1 {
      0%, 100% { opacity: 0; transform: translate(0); }
      10% { opacity: 0.3; transform: translate(-5px, -3px); }
      20% { opacity: 0; transform: translate(0); }
      30% { opacity: 0.3; transform: translate(5px, 3px); }
      40% { opacity: 0; transform: translate(0); }
      50% { opacity: 0.3; transform: translate(-4px, -2px); }
      60% { opacity: 0; transform: translate(0); }
      70% { opacity: 0.3; transform: translate(4px, 2px); }
      80% { opacity: 0; transform: translate(0); }
      90% { opacity: 0.3; transform: translate(-3px, -1px); }
    }

    @keyframes glitch-bg-2 {
      5%, 95% { opacity: 0; transform: translate(0); }
      15% { opacity: 0.3; transform: translate(5px, 3px); }
      25% { opacity: 0; transform: translate(0); }
      35% { opacity: 0.3; transform: translate(-5px, -3px); }
      45% { opacity: 0; transform: translate(0); }
      55% { opacity: 0.3; transform: translate(4px, 2px); }
      65% { opacity: 0; transform: translate(0); }
      75% { opacity: 0.3; transform: translate(-4px, -2px); }
      85% { opacity: 0; transform: translate(0); }
    }

    .vignette {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: radial-gradient(ellipse at center, rgba(0,0,0,0) 60%, rgba(128,128,128,0.07) 100%);
      z-index: 1;
      pointer-events: none;
    }

    .top-label {
      position: absolute;
      top: 20px;
      width: 100%;
      text-align: center;
      font-size: 1.8em;
      color: #bbbbbb;
      z-index: 3;
      text-shadow: 0 0 8px #444;
    }

    .content {
      position: relative;
      z-index: 2;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: flex-end;
      text-align: center;
      height: 100%;
      padding: 20px;
      padding-bottom: 60px;
    }

    p {
      color: #ddd;
      max-width: 700px;
      font-size: 1.1em;
      line-height: 1.6;
      background: rgba(0, 0, 0, 0.45);
      padding: 15px 25px;
      border-radius: 10px;
      backdrop-filter: blur(2px);
      box-shadow: 0 0 15px rgba(255, 255, 255, 0.05);
    }

    .teams {
      margin-top: 20px;
      font-size: 1em;
      color: #aaa;
      z-index: 2;
    }

    .teams span {
      margin: 0 8px;
      color: #aaa;
    }

    footer {
      margin-top: 25px;
      font-size: 0.85em;
      color: #666;
    }
  </style>
</head>
<body>
  <div class="bg"></div>
  <div class="vignette"></div>

  <div class="top-label">Hacked by ARJUN-X001</div>

  <div class="content">
    <p>
      Like love, zero-click doesn't knock. It enters silently,<br>
      takes control without permission, and leaves a mark you'll never forget.
    </p>

    <div class="teams">kejearmy.ninja045@passinbox.com<br>✯ KEJE ARMY <span>✯</span> JogjaXploit ✯</div>

    <footer>© 2025 | ARJUN-X001 | Security Awareness</footer>
  </div>

  <!-- Music Sir -->
  <audio id="bgmusic" src="https://g.top4top.io/m_3432aqzyp1.mp3" preload="auto"></audio>

  <script>
    const bgmusic = document.getElementById('bgmusic');
    const enableAudio = () => {
      bgmusic.play().catch(() => {});
      document.removeEventListener('click', enableAudio);
    };
    document.addEventListener('click', enableAudio);
  </script>
</body>
</html>
