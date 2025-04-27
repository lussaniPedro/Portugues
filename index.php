<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Site informativo sobre dignidade menstrual">
    <meta name="author" content="Pedro Lussani">
    <title>Pobreza Menstrual - Informação e Combate</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
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

            .nav-links {
                display: flex;
                justify-content: center;
                gap: 0.5rem;
                margin-top: 0.5rem;
            }

            .nav-links a {
                color: white;
                text-decoration: none;
                font-weight: bold;
                padding: 0.1rem 0.3rem;
                border-radius: 4px;
                transition: all 0.3s ease;
            }

            .footer-section {
                flex: 100%;
                text-align: center;
                margin-right: 0 !important;
            }

            .footer-section h3 {
                display: block;
            }

            .footer-section.links ul {
                display: inline-block;
                text-align: left;
            }

            h1 {
                font-size: 2rem;
            }

            .stat-box {
                flex-direction: column;
            }
        }
    </style>
</head>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-LX31VSM2HN"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'G-LX31VSM2HN');
</script>

<body>
    <header>
        <div class="container">
            <h1>Pobreza Menstrual no Brasil</h1>
            <p>Informação, conscientização e estratégias de combate</p>
            <br>
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
            <p>A pobreza menstrual é definida como a falta de acesso a recursos, infraestrutura e informações
                necessárias para o manejo adequado da menstruação. Isso inclui:</p>

            <ul>
                <li><strong>Produtos de higiene menstrual:</strong> como absorventes descartáveis, coletores, ou
                    calcinhas absorventes.</li>
                <li><strong>Infraestrutura básica:</strong> acesso à água potável, saneamento (banheiros funcionais e
                    privacidade) e descarte adequado de resíduos.</li>
                <li><strong>Educação e conhecimento:</strong> compreensão do ciclo menstrual, cuidados de saúde e
                    combate a tabus culturais.</li>
            </ul>

            <div class="highlight">
                <p>A Organização das Nações Unidas (ONU) reconhece o tema como uma questão de saúde pública e direitos
                    humanos, destacando seu caráter multidimensional, que envolve desigualdades sociais, econômicas e de
                    gênero.</p>
            </div>
        </section>

        <section id="implicacoes">
            <h2>Implicações da pobreza menstrual</h2>

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
                <li><strong>Faltas às aulas:</strong> No Brasil, 1 em cada 4 meninas falta à escola durante a
                    menstruação por não ter absorventes ou acesso a banheiros adequados. Em média, perdem até 45 dias
                    letivos por ano.</li>
                <li><strong>Estrutura escolar deficiente:</strong> Mais de 4 milhões de estudantes frequentam escolas
                    sem itens básicos de higiene, como papel higiênico e sabonete.</li>
            </ul>

            <h3>C. Vulnerabilidade econômica e social</h3>
            <ul>
                <li><strong>Custo financeiro:</strong> Estima-se que uma pessoa gaste entre R$ 3 mil e R$ 8 mil com
                    absorventes ao longo da vida, valor proibitivo para famílias de baixa renda (13% da população
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

            <ul>
                <li><strong>Distribuição gratuita de produtos:</strong> Projetos de lei propõem a entrega de absorventes
                    em escolas, postos de saúde e presídios.</li>
                <li><strong>Redução de impostos:</strong> Tributação elevada sobre absorventes (ICMS) é criticada por
                    tratar itens essenciais como supérfluos.</li>
                <li><strong>Educação menstrual:</strong> Campanhas para desmistificar o tema e promover
                    autoconhecimento, como o movimento #PraQuemMenstrua.</li>
                <li><strong>Infraestrutura básica:</strong> Investimento em saneamento e banheiros dignos,
                    principalmente em regiões Norte e Nordeste, onde o déficit é maior.</li>
            </ul>
        </section>

        <section id="dados">
            <h2>Dados estatísticos relevantes</h2>

            <div class="stat-box">
                <div class="stat-card">
                    <h3>População que menstrua</h3>
                    <div class="stat-number">30%</div>
                    <p>da população brasileira menstrua (≈60 milhões de pessoas).</p>
                </div>

                <div class="stat-card">
                    <h3>Sem banheiro em casa</h3>
                    <div class="stat-number">1.5M</div>
                    <p>de brasileiras vivem sem banheiro em casa.</p>
                </div>

                <div class="stat-card">
                    <h3>Dificuldade nas escolas</h3>
                    <div class="stat-number">37%</div>
                    <p>dos jovens têm dificuldade de acesso a itens de higiene em escolas.</p>
                </div>
            </div>
        </section>

        <section id="grafico">
            <h2>Visualização dos Dados</h2>
            <div id="chartContainer" style="height: 370px; width: 100%; margin: 2rem 0;"></div>

            <?php
            $dadosGrafico = [
                ["label" => "População que menstrua", "y" => 30],
                ["label" => "Sem banheiro em casa", "y" => 1.5],
                ["label" => "Dificuldade nas escolas", "y" => 37]
            ];

            $dadosJson = json_encode($dadosGrafico, JSON_NUMERIC_CHECK);
            ?>
        </section>
        <?php
        echo '<div class="highlight">';
        echo '<p><strong>Última atualização:</strong> ' . date('d/m/Y') . '</p>';
        echo '<p>Este conteúdo é atualizado regularmente com informações sobre pobreza menstrual no Brasil.</p>';
        echo '</div>';
        ?>

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
                    <li><a href="https://sanarmed.com/pobreza-menstrual-muito-alem-de-um-ciclo-colunistas/"
                            target="_blank">Sanarmed</a></li>
                    <li><a href="https://www12.senado.leg.br/noticias/infomaterias/2021/07/o-que-e-pobreza-menstrual-e-por-que-ela-afasta-estudantes-das-escolas"
                            target="_blank">Senado</a></li>
                    <li><a href="https://comsefaz.org.br/novo/agendas-para-o-combate-a-pobreza-menstrual/"
                            target="_blank">Comsefaz</a></li>
                    <li><a href="https://www.unicef.org/brazil/comunicados-de-imprensa/37-por-cento-de-adolescentes-e-jovens-que-menstruam-tem-dificuldades-de-acesso-itens-de-higiene"
                            target="_blank">UNICEF</a></li>
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
            <p>&copy;
                2025 Pedro Lussani. Todos os direitos reservados.
            </p>
        </div>
    </footer>

    <script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
    <script>
        window.onload = function () {
            var chart = new CanvasJS.Chart("chartContainer", {
                theme: "light2",
                backgroundColor: "transparent",
                animationEnabled: true,
                title: {
                    text: "Indicadores de Pobreza Menstrual",
                    fontFamily: "'Segoe UI', Tahoma, Geneva, Verdana, sans-serif",
                    fontWeight: "normal"
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
                    dataPoints: <?php echo $dadosJson; ?>
                }]
            });
            chart.render();
        }

        document.addEventListener('DOMContentLoaded', function () {
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (event) {
                    event.preventDefault();

                    const targetId = this.getAttribute('href');
                    const targetElement = document.querySelector(targetId);

                    if (targetElement) {
                        const headerHeight = document.querySelector('header')?.offsetHeight || 80;
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