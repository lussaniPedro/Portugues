<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Site informativo sobre dignidade menstrual e pobreza menstrual nos presídios">
    <meta name="author" content="Pedro Lussani">
    <title>Pobreza Menstrual - Informação e Combate</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href='https://i.ibb.co/FL6bSzbc/menstrual-cycle.png' rel='icon' type='image/x-icon' />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Montserrat:wght@400;600;700&display=swap"
        rel="stylesheet">
    <style>
        :root {
            --primary-color: #e91e63;
            --secondary-color: #9c27b0;
            --dark-color: #673ab7;
            --light-color: #f5f5f5;
            --text-color: #333;
            --bg-gradient: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            --card-shadow: 0 8px 30px rgba(0, 0, 0, 0.12);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--light-color);
            color: var(--text-color);
            line-height: 1.7;
            overflow-x: hidden;
        }

        header {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 6rem 0 4rem;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('https://i.ibb.co/4nW7y0GB/4280825.jpg') center/cover;
            opacity: 0.15;
            z-index: 0;
        }

        .header-content {
            position: relative;
            z-index: 1;
            max-width: 800px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 3rem 0;
        }

        h1 {
            font-family: 'Montserrat', sans-serif;
            font-size: 3.2rem;
            margin-bottom: 1.5rem;
            font-weight: 700;
            line-height: 1.2;
        }

        h2 {
            font-family: 'Montserrat', sans-serif;
            color: var(--dark-color);
            margin: 3rem 0 1.5rem;
            font-size: 2.2rem;
            font-weight: 700;
            position: relative;
            display: inline-block;
        }

        h2::after {
            content: '';
            position: absolute;
            bottom: -8px;
            left: 0;
            width: 60px;
            height: 4px;
            background: var(--primary-color);
            border-radius: 2px;
        }

        h3 {
            color: var(--secondary-color);
            margin: 2rem 0 1rem;
            font-size: 1.5rem;
            font-weight: 600;
        }

        p {
            margin-bottom: 1.5rem;
            font-size: 1.1rem;
        }

        .intro-text {
            font-size: 1.3rem;
            line-height: 1.8;
            margin-bottom: 2rem;
        }

        .nav-links {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 1rem;
            margin-top: 2rem;
        }

        .nav-links a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            padding: 0.6rem 1.5rem;
            border-radius: 50px;
            transition: all 0.3s ease;
            border: 2px solid rgba(255, 255, 255, 0.3);
        }

        .nav-links a:hover {
            background-color: rgba(255, 255, 255, 0.2);
            border-color: rgba(255, 255, 255, 0.5);
        }

        /* Content Sections */
        .content-section {
            background-color: white;
            padding: 4rem 0;
            position: relative;
        }

        .content-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }

        .content-card {
            background: white;
            border-radius: 12px;
            padding: 2rem;
            box-shadow: var(--card-shadow);
            transition: transform 0.3s ease;
            border-top: 4px solid var(--primary-color);
        }

        .content-card:hover {
            transform: translateY(-10px);
        }

        .content-card h3 {
            margin-top: 0;
            display: flex;
            align-items: center;
            gap: 0.8rem;
        }

        .content-card i {
            font-size: 1.8rem;
            color: var(--primary-color);
        }

        /* Stats Section */
        .stats-section {
            background: linear-gradient(135deg, var(--dark-color), #5e35b1);
            color: white;
            padding: 4rem 0;
            text-align: center;
        }

        .stats-section h2 {
            color: white;
        }

        .stats-section h2::after {
            background: var(--primary-color);
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .stat-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 12px;
            padding: 2rem;
            transition: all 0.3s ease;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .stat-card:hover {
            transform: scale(1.05);
            background: rgba(255, 255, 255, 0.15);
        }

        .stat-number {
            font-size: 3rem;
            font-weight: 700;
            margin: 1rem 0;
            background: linear-gradient(to right, #ff8a00, #e52e71);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-family: 'Montserrat', sans-serif;
        }

        /* Prison Focus Section */
        .prison-focus {
            background-color: #f9f9f9;
            padding: 4rem 0;
        }

        .prison-content {
            display: flex;
            gap: 3rem;
            align-items: center;
            margin-top: 2rem;
        }

        .prison-text {
            flex: 1;
        }

        .prison-image {
            flex: 1;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: var(--card-shadow);
        }

        .prison-image img {
            width: 100%;
            height: auto;
            display: block;
            transition: transform 0.5s ease;
        }

        .prison-image:hover img {
            transform: scale(1.05);
        }

        /* Image Pair */
        .image-pair {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
            justify-content: center;
            margin: 2rem 0;
        }

        .image-pair img {
            width: calc(50% - 0.5rem);
            border-radius: 8px;
            object-fit: cover;
            height: 200px;
            box-shadow: var(--card-shadow);
        }

        /* Highlight Box */
        .highlight {
            background-color: rgba(233, 30, 99, 0.1);
            padding: 2rem;
            border-radius: 12px;
            margin: 2rem 0;
            border-left: 4px solid var(--primary-color);
            font-size: 1.1rem;
        }

        /* Chart Section */
        .chart-section {
            padding: 4rem 0;
            background-color: #f5f5f5;
        }

        .chart-container {
            background: white;
            border-radius: 12px;
            padding: 2rem;
            box-shadow: var(--card-shadow);
            margin-top: 2rem;
        }

        /* Footer */
        footer {
            background: #1a1a1a;
            color: white;
            padding: 4rem 0 2rem;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .footer-column h3 {
            color: white;
            margin-bottom: 1.5rem;
            font-size: 1.3rem;
            position: relative;
            padding-bottom: 0.5rem;
        }

        .footer-column h3::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 40px;
            height: 2px;
            background: var(--primary-color);
        }

        .footer-links {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 0.8rem;
        }

        .footer-links a {
            color: #ccc;
            text-decoration: none;
            transition: color 0.3s ease;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .footer-links a:hover {
            color: white;
        }

        .footer-links i {
            width: 20px;
            text-align: center;
        }

        .social-links {
            display: flex;
            gap: 1rem;
            margin-top: 1.5rem;
        }

        .social-links a {
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            color: white;
            transition: all 0.3s ease;
        }

        .social-links a:hover {
            background: var(--primary-color);
            transform: translateY(-3px);
        }

        .footer-bottom {
            text-align: center;
            padding-top: 3rem;
            margin-top: 2rem;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            font-size: 0.9rem;
            color: #aaa;
        }

        /* Responsive */
        @media (max-width: 768px) {
            h1 {
                font-size: 2.5rem;
            }

            h2 {
                font-size: 1.8rem;
            }

            .prison-content {
                flex-direction: column;
            }

            .nav-links {
                flex-direction: column;
                align-items: center;
            }

            .image-pair img {
                width: 100%;
            }
        }

        /* Animations */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .fade-in {
            animation: fadeIn 1s ease forwards;
        }

        .delay-1 {
            animation-delay: 0.2s;
        }

        .delay-2 {
            animation-delay: 0.4s;
        }

        .delay-3 {
            animation-delay: 0.6s;
        }
    </style>
</head>

<body>
    <header>
        <div class="header-content">
            <h1 class="fade-in">Pobreza Menstrual no Brasil</h1>
            <p class="intro-text fade-in delay-1">Informação, conscientização e estratégias de combate à pobreza
                menstrual em todo o território nacional</p>
            <div class="nav-links fade-in delay-2">
                <a href="#conceito">Conceito</a>
                <a href="#implicacoes">Implicações</a>
                <a href="#estrategias">Estratégias</a>
                <a href="#presidios">Presídios</a>
                <a href="#dados">Dados</a>
            </div>
        </div>
    </header>

    <section id="conceito" class="content-section">
        <div class="container">
            <h2 class="fade-in">Conceito de pobreza menstrual</h2>
            <p class="fade-in delay-1" style="font-size: 18px">A pobreza menstrual é definida como a falta de acesso a
                recursos, infraestrutura e informações necessárias para o manejo adequado da menstruação. Isso inclui:
            </p>

            <div class="content-grid">
                <div class="content-card fade-in delay-1">
                    <h3><i class="fas fa-female"></i> Produtos de higiene</h3>
                    <p>Como absorventes descartáveis, coletores, ou calcinhas absorventes, que muitas mulheres não podem
                        adquirir devido ao alto custo.</p>
                </div>

                <div class="content-card fade-in delay-2">
                    <h3><i class="fas fa-toilet"></i> Infraestrutura básica</h3>
                    <p>Acesso à água potável, saneamento (banheiros funcionais e privacidade) e descarte adequado de
                        resíduos, especialmente em escolas e comunidades carentes.</p>
                </div>

                <div class="content-card fade-in delay-3">
                    <h3><i class="fas fa-book"></i> Educação e conhecimento</h3>
                    <p>Compreensão do ciclo menstrual, cuidados de saúde e combate a tabus culturais que perpetuam o
                        estigma em torno da menstruação.</p>
                </div>
            </div>

            <div class="highlight fade-in delay-2">
                <p><strong>A Organização das Nações Unidas (ONU)</strong> reconhece o tema como uma questão de saúde
                    pública e direitos humanos, destacando seu caráter multidimensional, que envolve desigualdades
                    sociais, econômicas e de gênero.</p>
            </div>
        </div>
    </section>

    <section id="implicacoes" class="content-section">
        <div class="container">
            <h2 class="fade-in">Implicações da pobreza menstrual</h2>

            <div class="image-pair fade-in delay-1">
                <img src="https://i.ibb.co/7dcFFmT3/pobreza-menstrual.png" alt="Impactos da pobreza menstrual">
                <img src="https://img.freepik.com/vetores-premium/conjunto-de-jovens-deprimidas-infelizes-sentadas-mulher-de-diferentes-etnias-conceito-de-transtorno-mental-ilustracao-vetorial-colorida-em-estilo-cartoon-plana_356415-2.jpg?ga=GA1.1.964986803.1746105788&semt=ais_hybrid&w=740"
                    alt="Evasão escolar">
            </div>

            <h3 class="fade-in delay-2">A. Impactos na saúde física e mental</h3>
            <ul class="fade-in delay-2">
                <li><strong>Riscos à saúde:</strong> Uso de materiais improvisados (panos sujos, jornal, miolo de pão)
                    pode causar infecções urogenitais, alergias e até a Síndrome do Choque Tóxico, condição
                    potencialmente fatal.</li>
                <li><strong>Saúde mental:</strong> Estresse, vergonha e ansiedade devido à falta de recursos e ao
                    estigma social, prejudicando a autoestima e o bem-estar emocional.</li>
            </ul>

            <h3 class="fade-in delay-3">B. Evasão escolar e desigualdade educacional</h3>
            <ul class="fade-in delay-3">
                <li><strong>Ausência nas aulas:</strong> No Brasil, 1 em cada 4 meninas falta à escola durante a
                    menstruação por não ter absorventes ou acesso a banheiros adequados. Em média, essas estudantes
                    perdem até 45 dias letivos por ano.</li>
                <li><strong>Estrutura escolar deficiente:</strong> Mais de 4 milhões de estudantes frequentam escolas
                    sem itens básicos de higiene, como papel higiênico e sabonete.</li>
            </ul>

            <h3 class="fade-in delay-1">C. Vulnerabilidade econômica e social</h3>
            <ul class="fade-in delay-1">
                <li><strong>Custo financeiro:</strong> Estima-se que uma pessoa gaste entre R$ 3 mil e R$ 8 mil com
                    absorventes ao longo da vida, custo muito elevado para famílias de baixa renda (13% da população
                    brasileira vive com menos de R$ 246/mês).</li>
                <li><strong>Populações marginalizadas:</strong> Mulheres em situação de rua, encarceradas ou em
                    comunidades rurais enfrentam acesso ainda mais restrito a produtos e infraestrutura.</li>
            </ul>

            <h3 class="fade-in delay-2">D. Reforço de estigmas e desigualdades de gênero</h3>
            <ul class="fade-in delay-2">
                <li><strong>Tabus culturais:</strong> A menstruação é associada a vergonha e impureza, limitando
                    discussões públicas e políticas. Em escolas, 77% dos jovens relatam constrangimento por menstruar.
                </li>
                <li><strong>Desigualdade estrutural:</strong> A falta de políticas públicas perpetuam ciclos de pobreza,
                    especialmente para mulheres negras e periféricas, que são as mais afetadas.</li>
            </ul>
        </div>
    </section>

    <section id="estrategias" class="content-section">
        <div class="container">
            <h2 class="fade-in">Estratégias para enfrentamento</h2>

            <div class="content-grid">
                <div class="content-card fade-in delay-1">
                    <h3><i class="fas fa-box-open"></i> Distribuição gratuita</h3>
                    <p>Projetos de lei propõem a entrega de absorventes em escolas, postos de saúde e presídios para
                        garantir acesso universal.</p>
                </div>

                <div class="content-card fade-in delay-2">
                    <h3><i class="fas fa-percentage"></i> Redução de impostos</h3>
                    <p>Campanhas para reduzir a tributação sobre absorventes (ICMS), atualmente tratados como itens
                        supérfluos.</p>
                </div>

                <div class="content-card fade-in delay-3">
                    <h3><i class="fas fa-graduation-cap"></i> Educação menstrual</h3>
                    <p>Campanhas para desmistificar o tema e promover autoconhecimento, como o movimento
                        #PraQuemMenstrua.</p>
                </div>
            </div>

            <div class="highlight fade-in delay-2">
                <p>Iniciativas como a <strong>Lei Federal 14.214/2021</strong>, que institui o Programa de Proteção e
                    Promoção da Saúde Menstrual, já são um avanço no <strong>combate à pobreza menstrual no
                        Brasil.</strong></p>
            </div>
        </div>
    </section>

    <section id="presidios" class="prison-focus">
        <div class="container">
            <h2 class="fade-in">Pobreza Menstrual nos Presídios</h2>
            <p class="fade-in delay-1">Um problema grave e frequentemente negligenciado, afetando diretamente a
                dignidade e a saúde das mulheres encarceradas</p>

            <div class="prison-content">
                <div class="prison-text">
                    <h3 class="fade-in delay-1">A realidade carcerária</h3>
                    <p class="fade-in delay-2">As mulheres encarceradas enfrentam desafios específicos quando se trata
                        de higiene menstrual. A pobreza menstrual nos presídios brasileiros é causada por:</p>
                    <ul class="fade-in delay-2">
                        <li>Falta de acesso regular a absorventes e produtos de higiene íntima</li>
                        <li>Distribuição insuficiente ou irregular feita pelos estabelecimentos prisionais</li>
                        <li>Dependência de doações externas para suprir a demanda</li>
                        <li>Uso de materiais improvisados, como papel higiênico, panos ou miolo de pão, comprometendo a
                            saúde</li>
                        <li>Descaso institucional e invisibilidade dessas mulheres na formulação de políticas públicas
                        </li>
                    </ul>

                    <h3 class="fade-in delay-3">Custo da dignidade</h3>
                    <p class="fade-in delay-3">Apenas R$ 2 milhões do orçamento de R$ 21,7 bilhões ao sistema carcerário
                        seriam suficientes para fornecer absorventes adequados para toda a população carcerária feminina
                        do país, que é de 28.770 pessoas, segundo dados do Sisdepen.</p>
                </div>
                <div class="prison-image fade-in delay-2">
                    <img src="https://www.justicadesaia.com.br/wp-content/uploads/2021/07/1aefe910-menstruac%CC%A7a%CC%83o_v.jpeg"
                        alt="Mulheres no sistema carcerário">
                </div>
            </div>
        </div>
    </section>

    <section id="dados" class="stats-section">
        <div class="container">
            <h2 class="fade-in">Dados estatísticos relevantes</h2>
            <p class="fade-in delay-1">Os números que revelam a dimensão da pobreza menstrual no Brasil</p>

            <div class="stats-grid">
                <div class="stat-card fade-in delay-1">
                    <i class="fas fa-female" style="font-size: 2.5rem; color: #ff8a00;"></i>
                    <div class="stat-number">30%</div>
                    <p>da população brasileira menstrua (≈60 milhões de pessoas)</p>
                </div>

                <div class="stat-card fade-in delay-2">
                    <i class="fas fa-money-bill-wave" style="font-size: 2.5rem; color: #e52e71;"></i>
                    <div class="stat-number">R$ 2M</div>
                    <p>Necessários para fornecer absorventes a todas as presas (do orçamento de R$ 21,7 bi do sistema
                        prisional)</p>
                </div>

                <div class="stat-card fade-in delay-3">
                    <i class="fas fa-school" style="font-size: 2.5rem; color: #9c27b0;"></i>
                    <div class="stat-number">37%</div>
                    <p>dos jovens têm dificuldade de acesso a itens de higiene em escolas</p>
                </div>
            </div>
        </div>
    </section>

    <section id="graficos" class="chart-section">
        <div class="container">
            <h2 class="fade-in">Visualização dos Dados</h2>
            <p class="fade-in delay-1">Gráficos que mostram a realidade da pobreza menstrual no Brasil</p>

            <div class="chart-container fade-in delay-2">
                <div id="chartContainer" style="height: 400px; width: 100%;"></div>
            </div>
        </div>

        <div class="container">
            <p class="fade-in delay-1">Visualização dos dados sobre pobreza menstrual no sistema carcerário</p>

            <div class="chart-container fade-in delay-2">
                <div id="grafContainer" style="height: 400px; width: 100%;"></div>
            </div>
        </div>
    </section>

    <footer>
        <div class="footer-content">
            <div class="footer-column">
                <h3>Sobre o Projeto</h3>
                <p>Site informativo sobre pobreza menstrual no Brasil e no sistema carcerário, apresentando dados
                    estatísticos, impactos sociais e estratégias de combate.</p>
                <div class="social-links">
                    <a href="https://www.instagram.com/pedro.lussani/"><i class="fab fa-instagram"></i></a>
                    <a href="https://github.com/lussaniPedro"><i class="fab fa-github"></i></a>
                </div>
            </div>

            <div class="footer-column">
                <h3>Links Rápidos</h3>
                <ul class="footer-links">
                    <li><a href="#conceito"><i class="fas fa-chevron-right"></i> Conceito</a></li>
                    <li><a href="#implicacoes"><i class="fas fa-chevron-right"></i> Implicações</a></li>
                    <li><a href="#estrategias"><i class="fas fa-chevron-right"></i> Estratégias</a></li>
                    <li><a href="#presidios"><i class="fas fa-chevron-right"></i> Presídios</a></li>
                    <li><a href="#dados"><i class="fas fa-chevron-right"></i> Dados</a></li>
                    <li><a href="#graficos"><i class="fas fa-chevron-right"></i> Gráficos</a></li>
                </ul>
            </div>

            <div class="footer-column">
                <h3>Referências</h3>
                <ul class="footer-links">
                    <li><a href="https://brasilescola.uol.com.br/geografia/pobreza-menstrual.htm" target="_blank"><i
                                class="fas fa-external-link-alt"></i> Brasil Escola</a></li>
                    <li><a href="https://www.unicef.org/brazil/dignidade-menstrual" target="_blank"><i
                                class="fas fa-external-link-alt"></i> UNICEF</a></li>
                    <li><a href="https://www.cnj.jus.br/sisdepen/" target="_blank"><i
                                class="fas fa-external-link-alt"></i> Sisdepen</a></li>
                    <li><a href="https://www.gov.br/depen/pt-br" target="_blank"><i
                                class="fas fa-external-link-alt"></i> DEPEN</a></li>
                </ul>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; 2025 Pedro Lussani. Todos os direitos reservados.</p>
        </div>
    </footer>

    <script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
    <script>
        window.onload = function () {
            // Animação de scroll suave
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();

                    const targetId = this.getAttribute('href');
                    const targetElement = document.querySelector(targetId);

                    if (targetElement) {
                        window.scrollTo({
                            top: targetElement.offsetTop - 100,
                            behavior: 'smooth'
                        });
                    }
                });
            });

            // Configuração do gráfico
            var chartGeneral = new CanvasJS.Chart("chartContainer", {
                animationEnabled: true,
                theme: "light2",
                title: {
                    text: "Indicadores de Pobreza Menstrual no Brasil",
                    fontFamily: "Montserrat, sans-serif",
                    fontSize: 20
                },
                axisY: {
                    title: "Percentual (%)",
                    titleFontFamily: "Poppins, sans-serif",
                    labelFontFamily: "Poppins, sans-serif",
                    suffix: "%"
                },
                toolTip: {
                    shared: true,
                    fontFamily: "Poppins, sans-serif"
                },
                data: [{
                    type: "column",
                    name: "Indicadores",
                    showInLegend: false,
                    color: "#e91e63",
                    dataPoints: [
                        { label: "População que menstrua", y: 30 },
                        { label: "Sem banheiro em casa", y: 1.5 },
                        { label: "Dificuldade nas escolas", y: 37 },
                        { label: "Presas sem acesso", y: 85 }
                    ]
                }]
            });

            var chartPrisions = new CanvasJS.Chart("grafContainer", {
                animationEnabled: true,
                theme: "light2",
                title: {
                    text: "Pobreza Menstrual no Sistema Carcerário",
                    fontFamily: "Montserrat, sans-serif",
                    fontSize: 20
                },
                axisY: {
                    title: "Valores",
                    titleFontFamily: "Poppins, sans-serif",
                    labelFontFamily: "Poppins, sans-serif"
                },
                toolTip: {
                    shared: true,
                    fontFamily: "Poppins, sans-serif"
                },
                legend: {
                    cursor: "pointer",
                    itemclick: toggleDataSeries,
                    fontFamily: "Poppins, sans-serif"
                },
                data: [
                    {
                        type: "column",
                        name: "População Carcerária Feminina",
                        showInLegend: true,
                        color: "#e91e63",
                        dataPoints: [
                            { label: "Total de Mulheres", y: 28770 },
                            { label: "Sem acesso a absorventes", y: 24455 }
                        ]
                    },
                    {
                        type: "column",
                        name: "Custos Anuais",
                        showInLegend: true,
                        color: "#9c27b0",
                        axisYType: "secondary",
                        dataPoints: [
                            { label: "Orçamento Prisional (bi)", y: 21.7 },
                            { label: "Custo Absorventes (mi)", y: 2 }
                        ]
                    }
                ]
            });

            chartGeneral.render();
            chartPrisions.render();

            function toggleDataSeries(e) {
                if (typeof (e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
                    e.dataSeries.visible = false;
                } else {
                    e.dataSeries.visible = true;
                }
                chartPrisions.render();
            }

            // Animação ao scroll
            const fadeElements = document.querySelectorAll('.fade-in');

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = 1;
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, { threshold: 0.1 });

            fadeElements.forEach(element => {
                element.style.opacity = 0;
                element.style.transform = 'translateY(20px)';
                element.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
                observer.observe(element);
            });
        }
    </script>
</body>
</html>