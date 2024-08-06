<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NAMES RP</title>
    <style>
section {
    position: absolute;
    width: 100vw;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 2px;
    flex-wrap: wrap;
    overflow: hidden;
}

section::before {
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    background: linear-gradient(#000,#0f0,#000);
    animation: animate 5s linear infinite;
}

@keyframes animate {
  0%
  {
    transform: translateY(-100%);
  }
  100%
  {
    transform: translateY(100%);
  }
}
section span 
{
  position: relative;
  display: block;
  width: calc(6.25vw - 2px);
  height: calc(6.25vw - 2px);
  background: #181818;
  z-index: 2;
  transition: 1.5s;
}
    section span:hover {
        background: #0f0;
        transition: 0s;
}

    body {
        background-color: #121212; /* Темный фон */
        color: white;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
            font-family: Arial, sans-serif;
        }
        .container {
            text-align: center;
            position: relative;
        }
        .title {
            font-size: 72px;
            font-weight: bold;
            background: linear-gradient(45deg, #ff0066, #ffcc00, #33cc33, #3366ff);
            -webkit-background-clip: text;
            color: transparent;
            animation: gradient 5s infinite;
        }
        @keyframes gradient {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        .button {
            background-color: #444;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 10px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            border-radius: 12px; /* Закругленные углы */
        }
        .button:hover, .button:focus {
            background-color: #666;
            box-shadow: 0 0 15px red; /* Красная тень при наведении */
        }
        .forum {
            position: absolute;
            bottom: 100px;
            left: 50%;
            transform: translateX(-50%);
        }
        .news {
            position: absolute;
            top: 50%;
            left: -50%;
            transform: translateY(-50%);
        }
        .donate {
            position: absolute;
            top: 50%;
            right: -155px;
            transform: translateY(-50%);
        }
        .play {
            position: absolute;
            bottom: -100px; /* Опустить кнопку ниже */
            left: 50%;
            transform: translateX(-50%);
        }
        /* Медиазапросы для адаптации под мобильные устройства */
        @media (max-width: 768px) {
        .title {
            font-size: 48px; /* Уменьшить размер шрифта на мобильных устройствах */
        }
        .button {
            padding: 10px 20px; /* Уменьшить размер кнопок на мобильных устройствах */
            font-size: 14px;
            }
        .forum {
            position: absolute;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
        }
        .news {
            position: absolute;
            top: 50%;
            left: 0;
            transform: translateY(-50%);
        }
        .donate {
            position: absolute;
            top: 50%;
            right: 0;
            transform: translateY(-50%);
        }
        .play {
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
        }
        }
    </style>
