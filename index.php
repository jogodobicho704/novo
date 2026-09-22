<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Playstore - Software do Jogo do Bicho</title>
  <!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Jogo do Bicho - Google Play</title>
<!-- Developer www.agencianaweb.com.br -->
<meta http-equiv="Content-Language" content="pt-br">
<meta name="document-classification" content="Site Institucional">
<meta name="REVISIT-AGENCIANAWEB" content="1 days">
<meta name="LANGUAGE" content="Portuguese">
<meta name="COPYRIGHT" content="www.agencianaweb.com.br">
<meta name="robots" content="all"/>
<meta name="googlebot" content="all"/>
<meta name="audience" content="all">
<meta name="copyright" content="Copyright (c) Agencia na Web. Todos os Direitos Reservados.">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
<!-- og seo www.agencianaweb.com.br -->
<meta property="og:locale" content="pt_BR" />
<meta property="og:type" content="website" />
<meta property="og:image" content="imagens/logo.png"/>
<meta property="og:image:type" content="image/jpeg" />
<meta property="og:image:width" content="600" />
<meta property="og:image:height" content="315" />
<meta property="og:url" content="/">
<meta property="og:site_name" content="Software do Jogo do Bicho " />
<meta property="og:title" content="Software do Jogo do Bicho  | Play Now On iOS &amp; Android" />
<meta property="og:description" content="© Baixe e instale o aplicativo em seu dispositivo.">
<meta property="twitter:card" content="summary_large_image" />
<meta property="twitter:title" content="Software do Jogo do Bicho  | Play Now On iOS &amp; Android" />
<meta property="twitter:description" content="© Baixe e instale o aplicativo em seu dispositivo." />
<meta property="twitter:image" content="imagens/logo.png" />
<!-- favicon seo www.agencianaweb.com.br -->
<link rel="apple-touch-icon" sizes="180x180" href="imagens/favicon.png">
<link rel="icon" type="image/png" sizes="32x32" href="imagens/favicon.png">
<link rel="icon" type="image/png" sizes="16x16" href="imagens/favicon.png">
<link rel="icon" type="image/x-icon" href="imagens/favicon.png">
<!-- pwa www.agencianaweb.com.br -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Moved styles for Install Button */
        #install-button {
            cursor: pointer;
        }

        /* Moved styles for iOS Instructions */
        #ios-instructions {
            display: none;
            position: fixed;
            bottom: 20px;
            left: 70px;
            padding: 20px;
            background-color: #f7f7f7;
            border: 1px solid #ddd;
            border-radius: 5px;
            max-width: 300px;
        }

        /* Moved styles for iOS Close Button */
        #ios-close-btn {
            padding: 5px 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
<!-- css www.agencianaweb.com.br -->
<style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #ffffff;
            color: #202124;
            padding-bottom: 80px; /* Space for bottom nav */
        }

        /* Warna Hijau Khas Google Play */
        .text-play-green { color: #01875f; }
        .bg-play-green { background-color: #01875f; }

        /* App Header */
        .app-icon {
            width: 72px;
            height: 72px;
            border-radius: 15px;
            object-fit: cover;
            box-shadow: 0 1px 2px rgba(0,0,0,0.2);
        }
        .app-title { font-size: 24px; font-weight: 500; margin-bottom: 0; line-height: 1.2; }
        .dev-name { font-size: 14px; font-weight: 500; color: #01875f; text-decoration: none; }
        .badge-check { color: #007bff; font-size: 14px; margin-left: 5px; }

        /* Stats Row */
        .stat-label { font-size: 12px; color: #5f6368; }
        .stat-value { font-size: 14px; font-weight: 500; display: flex; align-items: center; justify-content: center; }
        .separator { border-right: 1px solid #dadce0; height: 24px; }

        /* Install Button */
        .btn-install {
            background-color: #01875f;
            color: white;
            font-weight: 500;
            border: none;
            border-radius: 8px;
            padding: 10px;
            width: 100%;
        }
        .btn-install:hover { background-color: #016e4d; color: white; }

        /* Action Buttons (Share/Wishlist) */
        .action-btn { color: #01875f; font-size: 14px; text-decoration: none; font-weight: 500; }
        
        /* Screenshot Carousel */
        .scrolling-wrapper {
            display: flex;
            flex-wrap: nowrap;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
            gap: 15px;
            padding-bottom: 10px;
        }
        .scrolling-wrapper::-webkit-scrollbar { display: none; }
        .screenshot-img {
            width: 180px; /* Sesuai rasio portrait */
            height: 360px;
            border-radius: 10px;
            object-fit: cover;
            flex-shrink: 0;
            box-shadow: 0 1px 3px rgba(0,0,0,0.2);
        }

        /* Section Titles */
        .section-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
            margin-top: 25px;
        }
        .section-title { font-size: 18px; font-weight: 500; margin: 0; }
        
        /* Pills */
        .pill-wrapper { display: flex; gap: 10px; margin-bottom: 20px; }
        .filter-pill {
            border: 1px solid #dadce0;
            border-radius: 20px;
            padding: 5px 15px;
            font-size: 14px;
            color: #5f6368;
            background: white;
        }
        .filter-pill.active { background: #e8f0fe; color: #01875f; border-color: #e8f0fe; }

        /* Ratings */
        .big-rating { font-size: 48px; font-weight: 400; line-height: 1; }
        .progress { height: 10px; border-radius: 5px; background-color: #e3e3e3; margin-bottom: 8px; }
        .progress-bar { background-color: #01875f; border-radius: 5px; }
        
        /* Review Cards */
        .review-avatar {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            background-color: #e8eaed; /* Default avatar color */
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 500;
            color: #5f6368;
            font-size: 14px;
        }
        .review-name { font-size: 13px; font-weight: 500; margin-bottom: 0; }
        .review-stars { font-size: 10px; color: #01875f; margin-right: 5px; }
        .review-date { font-size: 12px; color: #5f6368; }
        .review-text { font-size: 13px; color: #5f6368; line-height: 1.5; margin-top: 5px; }

        /* Data Safety Card */
        .safety-card { border: 1px solid #dadce0; border-radius: 8px; padding: 15px; margin-bottom: 10px; }
        .safety-item { display: flex; gap: 15px; margin-bottom: 15px; }
        .safety-icon { width: 20px; text-align: center; color: #5f6368; }
        .safety-text { font-size: 13px; color: #5f6368; }
        .safety-title { font-weight: 500; display: block; color: #202124; margin-bottom: 2px;}

        /* Bottom Navbar */
        .bottom-nav {
            position: fixed;
            bottom: 0;
            width: 100%;
            background: white;
            border-top: 1px solid #dadce0;
            padding: 10px 0;
            display: flex;
            justify-content: space-around;
            z-index: 1000;
        }
        .nav-item-custom {
            text-align: center;
            font-size: 10px;
            color: #5f6368;
            text-decoration: none;
        }
        .nav-item-custom i { font-size: 20px; display: block; margin-bottom: 4px; }
        .nav-item-custom.active { color: #01875f; }
        
        /* Chips/Tags */
        .chip {
            display: inline-block;
            padding: 5px 15px;
            border: 1px solid #dadce0;
            border-radius: 16px;
            font-size: 13px;
            color: #5f6368;
            margin-right: 5px;
            margin-bottom: 10px;
        }
</style>
</head>
<body>
    <nav class="navbar navbar-light bg-white sticky-top shadow-sm mb-3">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="imagens/play.png" alt="Google Play" height="24">
            </a>
            <i class="fa fa-search text-secondary"></i>
        </div>
    </nav>

    <div class="container">
        <div class="d-flex align-items-start mb-3">
            <img src="imagens/logo.png" alt="App Icon" class="app-icon me-3">
            
            <div class="flex-grow-1">
                <h1 class="app-title">Software do Jogo do Bicho<i class="fas fa-check-circle badge-check"></i></h1>
                <a href="#" class="dev-name">Agência na Web</a>
                <div style="font-size: 12px; color: #5f6368;" class="mt-1">
                    <i class="fas fa-certificate text-warning"></i> Apostas Online
                </div>
            </div>
        </div>

        <div class="row text-center mb-4 align-items-center">
            <div class="col-4">
                <div class="stat-value">4.5 <i class="fas fa-star ms-1" style="font-size: 10px;"></i></div>
                <div class="stat-label">957 avaliações</div>
            </div>
            <div class="col-1 separator d-flex justify-content-center p-0"></div>
            <div class="col-3">
                <div class="stat-value">10 K+</div>
                <div class="stat-label">Downloads</div>
            </div>
            <div class="col-1 separator d-flex justify-content-center p-0"></div>
            <div class="col-3">
                <div class="stat-value"><i class="fa-solid fa-users"></i></div>
                <div class="stat-label">Classificação +18</div>
            </div>
        </div>

        <div class="mb-4">
<a href="/JB-Cambista-v3.0.2.apk">
    <button class="btn btn-install shadow-sm"  id="install-button">
        Baixar o Aplicativo
    </button>
</a>
            <div style="text-align: center; font-size: 11px; color: #5f6368; margin-top: 5px;">
                <i class="fas fa-bolt text-warning"></i> Download em 1.6m
            </div>
        </div>

        <div class="d-flex justify-content-center gap-5 mb-4">
            <a href="#" class="action-btn"><i class="fas fa-share-nodes me-2"></i>Compartilhe</a>
            <a href="#" class="action-btn"><i class="far fa-bookmark me-2"></i>Add Favoritos</a>
        </div>

        <div class="scrolling-wrapper mb-4">
            <img src="imagens/screen1.jpg" class="screenshot-img">
            <img src="imagens/screen2.jpg" class="screenshot-img">
            <img src="imagens/screen3.jpg" class="screenshot-img">
            <img src="imagens/screen4.jpg" class="screenshot-img">
            <img src="imagens/screen5.jpg" class="screenshot-img">
            <img src="imagens/screen6.jpg" class="screenshot-img">
        </div>

        <div class="section-header">
            <h2 class="section-title">Sobre este app</h2>
            <i class="fas fa-arrow-right text-secondary"></i>
        </div>
        <p style="font-size: 13px; color: #5f6368;">
Com o aplicativo você pode acompanhar e apostar no tradicional jogo do bicho. Com uma interface simples, rápida e intuitiva.<br><br>
Funcionalidades Principais:<br><br>
            1️⃣ Resultados em tempo real: consulte online assim que os resultados são divulgados<br>
			2️⃣ Diversas apurações de loterias do Brasil todo para fornecer o melhor resultado possível aos usuários<br>
            3️⃣ Sistema de afilados online e cambsitas<br>
            4️⃣ Bônus de depósitos e apostas diariamente<br>
            5️⃣ Saque automático e rápido<br>
            6️⃣ Suporte e contato em horário comercial todos os dias<br>
            <br>
            Facebook: Itajb Oficial
        </p>

        <div class="mb-3">
            <div style="font-size: 13px; font-weight: 500;">Atualizado em</div>
            <div style="font-size: 13px; color: #5f6368;">Maio 11, 2025</div>
        </div>

        <div class="mb-4">
            <span class="chip">Cash</span>
            <span class="chip">Casino</span>
            <span class="chip">Game</span>
            <span class="chip">Slots</span>
        </div>

        <div class="section-header">
            <h2 class="section-title">Segurança dos dados</h2>
            <i class="fas fa-arrow-right text-secondary"></i>
        </div>
        <p style="font-size: 13px; color: #5f6368; margin-bottom: 15px;">
            Sua segurança começa quando você entende como os desenvolvedores coletam e compartilham seus dados. As práticas de segurança e privacidade de dados podem variar de acordo com o uso, a região e a idade. O desenvolvedor forneceu as informações a seguir, que podem ser atualizadas ao longo do tempo.
        </p>
        <div class="safety-card">
            <div class="safety-item">
                <div class="safety-icon"><i class="fas fa-share-nodes"></i></div>
                <div class="safety-text">
                    <span class="safety-title">Este app pode compartilhar estes tipos de dados com terceiros
Local e Atividade no app</span>

                </div>
            </div>
            <div class="safety-item">
                <div class="safety-icon"><i class="fas fa-cloud-upload-alt"></i></div>
                <div class="safety-text">
                    <span class="safety-title">Este app pode compartilhar estes tipos de dados com terceiros</span>
                    Localização, informações pessoais e muito mais
                </div>
            </div>
            <div class="safety-item">
                <div class="safety-icon"><i class="fas fa-unlock-alt"></i></div>
                <div class="safety-text">
                    <span class="safety-title">Este app pode coletar estes tipos de dados</span>
					Local, Informações financeiras e mais 2
                </div>
            </div>
            <div class="safety-item mb-0">
                <div class="safety-icon"><i class="far fa-trash-alt"></i></div>
                <div class="safety-text">
                    <span class="safety-title">Os dados são criptografados em trânsito</span>
                </div>
            </div>
        </div>

        <div class="section-header">
            <h2 class="section-title">Classificações e resenhas</h2>
            <i class="fas fa-arrow-right text-secondary"></i>
        </div>
        <p style="font-size: 12px; color: #5f6368;">Classificações e avaliações são verificadas. <i class="fas fa-info-circle"></i></p>

        <div class="pill-wrapper">
            <div class="filter-pill active"><i class="fas fa-mobile-alt me-1"></i> Telefone</div>
            <div class="filter-pill"><i class="fas fa-tablet-alt me-1"></i> Tablet</div>
            <div class="filter-pill"><i class="fas fa-laptop me-1"></i> Chromebook</div>
        </div>

        <div class="row align-items-center mb-4">
            <div class="col-4 text-center">
                <div class="big-rating">4.50</div>
                <div style="color: #01875f; font-size: 12px;">
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                </div>
                <div style="font-size: 12px; color: #5f6368;">957</div>
            </div>
            <div class="col-8">
                <div class="d-flex align-items-center mb-1">
                    <span style="font-size: 10px; width: 10px; margin-right: 5px;">5</span>
                    <div class="progress flex-grow-1"><div class="progress-bar" style="width: 85%"></div></div>
                </div>
                <div class="d-flex align-items-center mb-1">
                    <span style="font-size: 10px; width: 10px; margin-right: 5px;">4</span>
                    <div class="progress flex-grow-1"><div class="progress-bar" style="width: 10%"></div></div>
                </div>
                <div class="d-flex align-items-center mb-1">
                    <span style="font-size: 10px; width: 10px; margin-right: 5px;">3</span>
                    <div class="progress flex-grow-1"><div class="progress-bar" style="width: 0%"></div></div>
                </div>
                <div class="d-flex align-items-center mb-1">
                    <span style="font-size: 10px; width: 10px; margin-right: 5px;">2</span>
                    <div class="progress flex-grow-1"><div class="progress-bar" style="width: 0%"></div></div>
                </div>
                <div class="d-flex align-items-center mb-1">
                    <span style="font-size: 10px; width: 10px; margin-right: 5px;">1</span>
                    <div class="progress flex-grow-1"><div class="progress-bar" style="width: 5%"></div></div>
                </div>
            </div>
        </div>

        <div class="mb-4">
            <div class="d-flex align-items-center mb-2">
                <div class="review-avatar me-3" style="background-color: #5c6bc0; color: white;">A</div>
                <div class="review-name">Miguel Andrade</div>
                <i class="fas fa-ellipsis-v ms-auto text-secondary"></i>
            </div>
            <div class="d-flex align-items-center mb-1">
                <div class="review-stars">
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                </div>
                <span class="review-date">Junho 21, 2026</span>
            </div>
            <div class="review-text">
Estava precisando modernizar minha operação, procurei algo que me atendesse mais não como os online, no software da agencia na web consegui dar o starter que a minha operação precisava e modernizar todos meus pontos de forma muito fácil e eficiente... esta aprovado !
            </div>
        </div>

        <div class="mb-4">
            <div class="d-flex align-items-center mb-2">
                <div class="review-avatar me-3" style="background-color: #d84315; color: white;">D</div>
                <div class="review-name">Angelo Goulard</div>
                <i class="fas fa-ellipsis-v ms-auto text-secondary"></i>
            </div>
            <div class="d-flex align-items-center mb-1">
                <div class="review-stars">
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                </div>
                <span class="review-date">Maio 07, 2026</span>
            </div>
            <div class="review-text">
                100% !! E perfeito para meus cambistas e meus recolhes... com o software consegui ampliar minha rede de bancas e coletas deixando tudo ao meu alcance, chega de papelada e calculadoras, posso viajar e continuo acompanhando tudo online.
            </div>
        </div>

        <div class="mb-4">
            <div class="d-flex align-items-center mb-2">
                <div class="review-avatar me-3" style="background-color: #78909c; color: white;">R</div>
                <div class="review-name">Moacir Jr.</div>
                <i class="fas fa-ellipsis-v ms-auto text-secondary"></i>
            </div>
            <div class="d-flex align-items-center mb-1">
                <div class="review-stars">
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                </div>
                <span class="review-date">Março 14, 2026</span>
            </div>
            <div class="review-text">
Essa plataforma é a melhor entre as que já testei! A interface é bonita e fácil de usar. usava uma defasada e antiga nas maquinas GETNET, horríveis e travavam direto... substitui o sistema em todas as bancas e subi de nível. Recomendo!            </div>
        </div>
        
    </div>

    <div class="bottom-nav">
        <a href="#" class="nav-item-custom">
            <i class="fas fa-gamepad"></i>Games
        </a>
        <a href="#" class="nav-item-custom active">
            <i class="fas fa-th-large"></i>Apps
        </a>
        <a href="#" class="nav-item-custom">
            <i class="fas fa-film"></i>Movies & TV
        </a>
        <a href="#" class="nav-item-custom">
            <i class="fas fa-book"></i>Books
        </a>
        <a href="#" class="nav-item-custom">
            <i class="far fa-star"></i>Kids
        </a>
    </div>
<div style="display:none;"><a href="https://www.agencianaweb.com.br">Agencia na Web</a></div>
  </body>
  </html>
