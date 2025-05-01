<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Site informativo sobre dignidade menstrual">
    <meta name="author" content="Pedro Lussani">
    <title>Pobreza Menstrual - Informação e Combate</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href='https://i.ibb.co/FL6bSzbc/menstrual-cycle.png' rel='icon' type='image/x-icon' />
    <style>
        :root {
            --primary-color: #ff6b9d;
            --secondary-color: #9d4edd;
            --dark-color: #3a0ca3;
            --light-color: #f8f9fa;
            --text-color: #333;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: var(--light-color);
            color: var(--text-color);
            line-height: 1.6;
        }

        header {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 2rem 0;
            text-align: center;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .container {
            width: 85%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem 0;
        }

        .definicao-container {
            display: flex;
            gap: 40px;
            align-items: flex-start;
            margin: 2rem 0;
        }

        .texto-content {
            flex: 1;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .definicao-lista {
            flex: 1;
            margin-top: 18px;
            padding-right: 20px;
            font-size: 17.2px;
            list-style-position: outside;
        }

        .highlight {
            flex: none;
            background-color: rgba(255, 107, 157, 0.2);
            padding: 1.5rem;
            border-radius: 8px;
            border-left: 4px solid var(--primary-color);
        }

        .definicao-imagem {
            flex: 1;
            width: 660px;
            height: 490px;
            object-fit: cover;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            align-self: stretch;
        }

        .definicao-imagem.vertical {
            max-height: 500px;
            object-fit: contain;
        }

        .estrategias-container {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .estrategias-superior {
            display: flex;
            gap: 40px;
            align-items: flex-start;
        }

        .estrategias-lista {
            flex: 1;
            margin-top: 22px;
            font-size: 17px;
            list-style-position: outside;
            padding-right: 20px;
        }

        .estrategias-imagem {
            flex: 1;
            min-width: 40%;
            max-height: 300px;
            object-fit: contain;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            align-self: center;
        }

        .estrategias-destaque {
            margin-top: 20px;
            width: 100%;
        }

        h1 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }

        h2 {
            color: var(--dark-color);
            margin: 2rem 0 1rem;
            font-size: 1.8rem;
            border-bottom: 2px solid var(--primary-color);
            padding-bottom: 0.5rem;
        }

        h3 {
            color: var(--secondary-color);
            margin: 1.5rem 0 0.5rem;
        }

        p {
            margin-bottom: 1rem;
        }

        ul,
        ol {
            margin-left: 2rem;
            margin-bottom: 1.5rem;
        }

        li {
            margin-bottom: 0.5rem;
        }

        .highlight {
            background-color: rgba(255, 107, 157, 0.2);
            padding: 1.5rem;
            border-radius: 8px;
            margin: 1.5rem 0;
            border-left: 4px solid var(--primary-color);
        }

        .stat-box {
            display: flex;
            flex-wrap: wrap;
            gap: 1.5rem;
            margin: 2rem 0;
        }

        .stat-card {
            flex: 1 1 300px;
            background: white;
            padding: 1.5rem;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-top: 4px solid var(--secondary-color);
        }

        .stat-card h3 {
            color: var(--dark-color);
        }

        .stat-number {
            font-size: 2.5rem;
            font-weight: bold;
            color: var(--primary-color);
            margin: 0.5rem 0;
        }

        .content-image {
            width: 100%;
            max-width: 600px;
            border-radius: 8px;
            margin: 1.5rem auto;
            display: block;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

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
        }

        footer {
            background: linear-gradient(135deg, var(--dark-color), #2a075f);
            color: white;
            padding: 40px 0 20px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .footer-content {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .footer-section {
            flex: 1;
            min-width: 250px;
            margin-bottom: 20px;
            padding: 0 15px;
        }

        .footer-section h3 {
            color: var(--primary-color);
            font-size: 1.3rem;
            margin-bottom: 15px;
            border-bottom: 2px solid var(--primary-color);
            padding-bottom: 5px;
            display: inline-block;
        }

        .footer-section p {
            line-height: 1.6;
            font-size: 0.95rem;
        }

        .footer-section.links ul {
            list-style: none;
            padding: 0;
        }

        .footer-section.links li {
            margin-bottom: 10px;
        }

        .footer-section.links a {
            color: white;
            text-decoration: none;
            transition: color 0.3s;
        }

        .footer-section.links a:hover {
            color: var(--primary-color);
        }

        .social-icons a {
            display: block;
            color: white;
            text-decoration: none;
            margin-bottom: 10px;
            transition: transform 0.3s;
        }

        .social-icons a:hover {
            transform: translateX(5px);
            color: var(--primary-color);
        }

        .social-icons i {
            margin-right: 10px;
            width: 20px;
            text-align: center;
        }

        .footer-bottom {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            margin-top: 20px;
            font-size: 0.9rem;
        }

        .nav-links {
            display: flex;
            justify-content: center;
            gap: 1.5rem;
            margin-top: 1rem;
        }

        .nav-links a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            padding: 0.5rem 1rem;
            border-radius: 4px;
            transition: all 0.3s ease;
        }

        .nav-links a:hover {
            background-color: rgba(255, 255, 255, 0.2);
        }

        .canvasjs-chart-credit {
            display: none !important;
        }

        #chartContainer {
            background-color: white;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .canvasjs-chart-title {
            color: #3a0ca3 !important;
            font-size: 1.5rem !important;
        }

        @media (max-width: 768px) {
            .container {
                width: 95%;
            }

            .definicao {
                flex-direction: column;
            }

            .definicao-container {
                flex-direction: column;
            }

            .definicao-imagem {
                width: 100%;
                max-height: 300px;
            }

            .definicao ul,
            .definicao img {
                min-width: 100%;
            }

            .estrategias-superior {
                flex-direction: column;
            }

            .estrategias-imagem {
                width: 100%;
                max-height: 250px;
            }

            .nav-links {
                flex-direction: column;
                gap: 0.5rem;
            }

            .nav-links a {
                padding: 0.3rem 0.5rem;
            }

            .image-pair img {
                width: 100%;
            }

            .footer-section {
                flex: 100%;
                text-align: center;
            }
        }
    </style>
</head>

<body>
    <header>
        <div class="container">
            <h1>Pobreza Menstrual no Brasil</h1>
            <p>Informação, conscientização e estratégias de combate</p>
            <nav class="nav-links">
                <a href="#conceito">Conceito</a>
                <a href="#implicacoes">Implicações</a>
                <a href="#estrategias">Estratégias</a>
                <a href="#dados">Dados</a>
            </nav>
        </div>
    </header>

    <main class="container">
        <section id="conceito">
            <h2>Conceito de pobreza menstrual</h2>
            <p style="font-size: 18px">A pobreza menstrual é definida como a falta de acesso a recursos, infraestrutura
                e informações necessárias para o manejo adequado da menstruação. Isso inclui:</p>
            <div class="definicao-container">
                <div class="texto-content">
                    <ul class="definicao-lista">
                        <li><strong>Produtos de higiene menstrual:</strong> como absorventes descartáveis, coletores, ou
                            calcinhas absorventes.</li>
                        <li><strong>Infraestrutura básica:</strong> acesso à água potável, saneamento (banheiros
                            funcionais e privacidade) e descarte adequado de resíduos.</li>
                        <li><strong>Educação e conhecimento:</strong> compreensão do ciclo menstrual, cuidados de saúde
                            e combate a tabus culturais.</li>
                    </ul>

                    <div class="highlight">
                        <p><strong>A Organização das Nações Unidas (ONU)</strong> reconhece o tema como uma questão de
                            saúde pública e
                            direitos humanos, destacando seu caráter multidimensional, que envolve desigualdades
                            sociais, econômicas e de gênero.</p>
                    </div>
                </div>

                <img src="https://i.ibb.co/4nW7y0GB/4280825.jpg" alt="Conceito de pobreza menstrual"
                    class="definicao-imagem">
            </div>
        </section>

        <section id="implicacoes">
            <h2>Implicações da pobreza menstrual</h2>

            <div class="image-pair">
                <img src="https://i.ibb.co/7dcFFmT3/pobreza-menstrual.png" alt="Impactos da pobreza menstrual">
                <img src="https://img.freepik.com/vetores-premium/conjunto-de-jovens-deprimidas-infelizes-sentadas-mulher-de-diferentes-etnias-conceito-de-transtorno-mental-ilustracao-vetorial-colorida-em-estilo-cartoon-plana_356415-2.jpg?ga=GA1.1.964986803.1746105788&semt=ais_hybrid&w=740"
                    alt="Evasão escolar">
            </div>

            <h3>A. Impactos na saúde física e mental</h3>
            <ul>
                <li><strong>Riscos à saúde:</strong> Uso de materiais improvisados (panos sujos, jornal, miolo de pão)
                    pode causar infecções urogenitais, alergias e até a Síndrome do Choque Tóxico, condição
                    potencialmente fatal.</li>
                <li><strong>Saúde mental:</strong> Estresse, vergonha e ansiedade devido à falta de recursos e ao
                    estigma social, prejudicando a autoestima e o bem-estar emocional.</li>
            </ul>

            <h3>B. Evasão escolar e desigualdade educacional</h3>
            <ul>
                <li><strong>Ausência nas aulas:</strong> No Brasil, 1 em cada 4 meninas falta à escola durante a
                    menstruação por não ter absorventes ou acesso a banheiros adequados. Em média, essas estudantes
                    perdem até 45 dias letivos por ano.</li>
                <li><strong>Estrutura escolar deficiente:</strong> Mais de 4 milhões de estudantes frequentam escolas
                    sem itens básicos de higiene, como papel higiênico e sabonete.</li>
            </ul>

            <h3>C. Vulnerabilidade econômica e social</h3>
            <ul>
                <li><strong>Custo financeiro:</strong> Estima-se que uma pessoa gaste entre R$ 3 mil e R$ 8 mil com
                    absorventes ao longo da vida, custo muito elevado para famílias de baixa renda (13% da população
                    brasileira vive com menos de R$ 246/mês).</li>
                <li><strong>Populações marginalizadas:</strong> Mulheres em situação de rua, encarceradas ou em
                    comunidades rurais enfrentam acesso ainda mais restrito a produtos e infraestrutura.</li>
            </ul>

            <h3>D. Reforço de estigmas e desigualdades de gênero</h3>
            <ul>
                <li><strong>Tabus culturais:</strong> A menstruação é associada a vergonha e impureza, limitando
                    discussões públicas e políticas. Em escolas, 77% dos jovens relatam constrangimento por menstruar.
                </li>
                <li><strong>Desigualdade estrutural:</strong> A falta de políticas públicas perpetuam ciclos de pobreza,
                    especialmente para mulheres negras e periféricas, que são as mais afetadas.</li>
            </ul>
        </section>

        <section id="estrategias">
            <h2>Estratégias para enfrentamento</h2>

            <div class="estrategias-container">
                <div class="estrategias-superior">
                    <ul class="estrategias-lista">
                        <li><strong>Distribuição gratuita de produtos:</strong> Projetos de lei propõem a entrega de
                            absorventes em escolas, postos de saúde e presídios.</li>
                        <li><strong>Redução de impostos:</strong> Tributação elevada sobre absorventes (ICMS) é
                            criticada por tratar itens essenciais como supérfluos.</li>
                        <li><strong>Educação menstrual:</strong> Campanhas para desmistificar o tema e promover
                            autoconhecimento, como o movimento #PraQuemMenstrua.</li>
                        <li><strong>Infraestrutura básica:</strong> Investimento em saneamento e banheiros dignos,
                            principalmente em regiões Norte e Nordeste, onde o déficit é maior.</li>
                    </ul>

                    <img src="https://img.freepik.com/vetores-gratis/ilustracao-de-menopausa-design-plano_23-2149375318.jpg?semt=ais_hybrid&w=740"
                        alt="Estratégias de combate" class="estrategias-imagem">
                </div>

                <div class="highlight estrategias-destaque">
                    <p>Iniciativas como a <strong>Lei Federal 14.214/2021</strong>, que institui o Programa de Proteção
                        e Promoção da
                        Saúde Menstrual, já são um avanço no <strong>combate à pobreza menstrual no Brasil.</strong></p>
                </div>
            </div>
        </section>

        <section id="dados">
            <h2>Dados estatísticos relevantes</h2>

            <div class="stat-box">
                <div class="stat-card">
                    <img src="https://i.ibb.co/LhY4F1F6/menstrual-pain.png" alt="Ícone estatístico"
                        style="width: 65px; margin-bottom: 1rem;">
                    <h3>População que menstrua</h3>
                    <div class="stat-number">30%</div>
                    <p>da população brasileira menstrua (≈60 milhões de pessoas).</p>
                </div>

                <div class="stat-card">
                    <img src="https://i.ibb.co/mVDkWMm7/bathroom.png" alt="Ícone banheiro"
                        style="width: 60px; margin-bottom: 1rem;">
                    <h3>Sem banheiro em casa</h3>
                    <div class="stat-number">1.5M</div>
                    <p>de brasileiras vivem sem banheiro em casa.</p>
                </div>

                <div class="stat-card">
                    <img src="https://i.ibb.co/VYHXZ9Sp/school.png" alt="Ícone escola"
                        style="width: 60px; margin-bottom: 1rem;">
                    <h3>Dificuldade nas escolas</h3>
                    <div class="stat-number">37%</div>
                    <p>dos jovens têm dificuldade de acesso a itens de higiene em escolas.</p>
                </div>
            </div>
        </section>

        <section id="grafico">
            <h2>Visualização dos Dados</h2>
            <div id="chartContainer" style="height: 370px; width: 100%; margin: 2rem 0;"></div>
        </section>
    </main>

    <footer>
        <div class="footer-content">
            <div style="margin-right: 70px;" class="footer-section about">
                <h3>Sobre o Projeto</h3>
                <p>Este site informativo aborda a pobreza menstrual no Brasil, apresentando dados estatísticos, impactos
                    sociais e estratégias de combate. Nosso objetivo é conscientizar e promover mudanças.</p>
            </div>
            <div class="footer-section links">
                <h3>Links Rápidos</h3>
                <ul>
                    <li><a href="#conceito">Conceito</a></li>
                    <li><a href="#implicacoes">Implicações</a></li>
                    <li><a href="#estrategias">Estratégias</a></li>
                    <li><a href="#dados">Dados Estatísticos</a></li>
                </ul>
            </div>
            <div class="footer-section links">
                <h3>Referências</h3>
                <ul>
                    <li><a href="https://brasilescola.uol.com.br/geografia/pobreza-menstrual.htm" target="_blank">Brasil
                            Escola</a></li>
                    <li><a href="https://www.unicef.org/brazil/dignidade-menstrual" target="_blank">UNICEF</a></li>
                    <li><a href="https://cdd.org.br/noticias/vamos-falar-sobre-dignidade-menstrual/"
                            target="_blank">CDD</a></li>
                </ul>
            </div>
            <div class="footer-section social">
                <h3>Redes Sociais</h3>
                <div class="social-icons">
                    <a href="https://www.instagram.com/pedro.lussani" target="_blank"><i class="fab fa-instagram"></i>
                        Instagram</a>
                    <a href="https://github.com/lussaniPedro" target="_blank"><i class="fab fa-github"></i> Github</a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2025 Pedro Lussani. Todos os direitos reservados.</p>
        </div>
    </footer>

    <script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
    <script>
        window.onload = function () {
            var chart = new CanvasJS.Chart("chartContainer", {
                theme: "light2",
                animationEnabled: true,
                title: {
                    text: "Indicadores de Pobreza Menstrual",
                    fontFamily: "'Segoe UI', Tahoma, Geneva, Verdana, sans-serif"
                },
                axisY: {
                    title: "Percentual (%)",
                    suffix: "%"
                },
                data: [{
                    type: "column",
                    indexLabel: "{y}%",
                    indexLabelPlacement: "outside",
                    indexLabelFontWeight: "bold",
                    indexLabelFontColor: "#3a0ca3",
                    color: "#9d4edd",
                    dataPoints: [
                        { label: "População que menstrua", y: 30 },
                        { label: "Sem banheiro em casa", y: 1.5 },
                        { label: "Dificuldade nas escolas", y: 37 }
                    ]
                }]
            });
            chart.render();
        }

        document.addEventListener('DOMContentLoaded', function () {
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();

                    const targetId = this.getAttribute('href');
                    const targetElement = document.querySelector(targetId);

                    if (targetElement) {
                        const headerHeight = document.querySelector('header').offsetHeight;
                        const targetPosition = targetElement.getBoundingClientRect().top + window.pageYOffset - headerHeight;

                        window.scrollTo({
                            top: targetPosition,
                            behavior: 'smooth'
                        });

                        if (history.pushState) {
                            history.pushState(null, null, targetId);
                        } else {
                            window.location.hash = targetId;
                        }
                    }
                });
            });
        });
    </script>
</body>

</html>