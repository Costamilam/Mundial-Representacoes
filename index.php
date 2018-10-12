<html lang="pt-br">
<head>
    <title>Mundial Representações</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="./images/globe.ico">

    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-red.min.css" />
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>

    <script defer src="https://swc.cdn.skype.com/sdk/v1/sdk.min.js"></script>

    <link type="text/css" rel="stylesheet" href="./style.css">
    <link type="text/css" rel="stylesheet" href="./animate.css">
    <?php
        require './vendor/autoload.php';

        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\Exception;

        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $mail = new PHPMailer();
            $mail->isSMTP();
            $mail->Host = ''; 
            $mail->SMTPAuth = true;
            $mail->Username = '';
            $mail->Password = '';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            $mail->setFrom('atendimento@mundialr.com.br', 'mundialr.com.br');
            //$mail->addAddress('mundialr.representacoes@gmail.com', 'Eu');
            $mail->addAddress('atendimento@mundialr.com.br', 'Patricia');
            $mail->addAddress('mundialr@mundialr.com.br', 'Carla');

            $mail->isHTML(false);
            $mail->Subject = 'Contato Site';

            $name = isset($_POST['name']) ? $_POST['name'] : '';
            $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
            $email = isset($_POST['email']) ? $_POST['email'] : '';
            $city = isset($_POST['city']) ? $_POST['city'] : '';
            $message = isset($_POST['message']) ? $_POST['message'] : '';

            $mail->Body = "
                Nome: $name; 
                Telefone: $phone; 
                Email: $email; 
                Cidade: $city; 
                Mensagem: $message; 
            ";

            if($mail->send()) {
                echo "<script>alert('Sua mensagem foi enviada!');</script>";
            } else {
                echo "alert('Algum erro ocorreu, sua mensagem não foi enviada! Entre em contato conosco pelo telefone (51) 3392-9020');</script>";
            }
        }
    ?>
</head>
<body>
    <span class="skype-button bubble" data-contact-id="patricia.mundial"></span>

    <main class="mdl-layout mdl-js-layout">
        <div class="mdl-layout__content">
            <div id="layout-padding" class="mdl-cell mdl-cell--8-col-desktop mdl-cell--2-offset-desktop mdl-cell--12-col-tablet mdl-cell--0-offset-tablet">
                <article class="fadeInUp delay-1s">
                    <figure style="background-color: transparent; max-height: none;" class="mdl-card__media">
                        <img style="max-height: none;" class="article-image" src="images/logo_transparente.png" alt="Logo Mundial Representações">
                    </figure>
                </article>

                <article class="fadeInUp delay-2s mdl-cell mdl-cell--12-col mdl-card mdl-shadow--4dp">
                    <hgroup style="margin: 0 auto;" class="mdl-card__title">
                        <h2 class="mdl-card__title-text">Quem Somos</h2>
                    </hgroup>
                    <section class="mdl-card__supporting-text">
                        A Mundial é um escritório de representação comercial de peças para veículos automotores, atuando a mais de 15 anos nesse ramo e representando algumas das melhores Fábricas de peças automotivas em todo o estado do Rio Grande do Sul. Dispomos de uma equipe capacitada para atender com agilidade e eficiência os nossos clientes a fim de esclarecer  qualquer tipo de dúvida  quanto aos produtos que trabalhamos.
                    </section>
                </article>

                <article id="mvv" class="mdl-cell mdl-cell--12-col mdl-grid">
                    <section class="fadeInUp delay-3s mdl-cell mdl-cell--4-col-desktop mdl-cell--12-col-tablet mdl-card mdl-shadow--4dp">
                        <hgroup class="mdl-card__title">
                            <h2 class="mdl-card__title-text">Missão</h2>
                        </hgroup>
                        <section class="mdl-card__supporting-text">
                            Oferecer produtos de qualidade aos nossos clientes proporcionando satisfação e tranquilidade.
                        </section>
                    </section>
            
                    <section class="fadeInUp delay-3s mdl-cell  mdl-cell--4-col-desktop mdl-cell--12-col-tablet mdl-card mdl-shadow--4dp">
                        <hgroup class="mdl-card__title">
                            <h2 class="mdl-card__title-text">Visão</h2>
                        </hgroup>
                        <section class="mdl-card__supporting-text">
                            Ser referência no mercado de auto peças atendendo nossos clientes com agilidade e competencia.
                        </section>
                    </section>
            
                    <section class="fadeInUp delay-3s mdl-cell mdl-cell--4-col-desktop mdl-cell--12-col-tablet mdl-card mdl-shadow--4dp">
                        <hgroup class="mdl-card__title">
                            <h2 class="mdl-card__title-text">Valores</h2>
                        </hgroup>
                        <section class="mdl-card__supporting-text">
                            Buscar a confiança dos nossos clientes através da ética e transparência nas negociações.
                        </section>
                    </section>
                </article>

                <article class="mdl-grid mdl-cell mdl-cell--12-col">
                    <section class="fadeInUp delay-4s mdl-cell mdl-cell--6-col-desktop mdl-cell--12-col-tablet mdl-card mdl-shadow--4dp">
                        <figure class="mdl-card__media">
                            <a href="http://mercopartsjuntas.com.br" title="mercopartsjuntas.com.br" target="_blank">
                                <img class="article-image" src="./images/merco.png" border="0" alt="">
                            </a>
                        </figure>
                        <section class="mdl-card__supporting-text">
                            A Merco Part's é uma empresa brasileira fabricante de Juntas automotivas, estando a mais de 16 anos no mercado, com produtos de ótima qualidade, devido à utilização de matéria prima de primeira linha, equipamentos modernos e profissionais qualificados, atendendo sempre as especificações técnicas da indústria automotiva. Temos uma Linha completa de juntas e Retentores para vans, pick - ups, linha leve nacional e importada. Dentre os produtos comercializados, podemos citar jogos de juntas completos, kit juntas superiores, juntas do cabeçote, tampa de válvulas, coletores de escape/admissão, saídas de escapamentos, cárter.
                        </section>
                        <section class="mdl-card__actions mdl-card--border">
                            <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="./catalogos/mercoparts.pdf" target="_blank">Ver Catálogo</a>
                        </section>
                    </section>

                    <section class="fadeInUp delay-4s mdl-cell mdl-cell--6-col-desktop mdl-cell--12-col-tablet mdl-card mdl-shadow--4dp">
                        <figure class="mdl-card__media">
                            <a href="http://yiming.com.br" title="yiming.com.br" target="_blank">
                                <img class="article-image" src="./images/yiming.jpeg" border="0" alt="">
                            </a>
                        </figure>
                        <section class="mdl-card__supporting-text">
                            A YIMING PARTS é uma indústria de auto peças fundada em 1996 que possui uma equipe altamente qualificada com profundo conhecimento dos produtos que fabrica, desenvolvendo soluções inovadoras com o apoio de equipamentos de ultima geração, incluindo um rígido controle da matéria prima utilizada na fabricação dos seus produtos. Seus produtos tais como bomba d'água, amortecedor, junta homocinética, bandejas, cruzetas, trizetas, mola gás e terminais são fabricados visando qualidade e bom desempenho. A YIMING PARTS tem como objetivo o compromisso com a qualidade, não só de seus produtos, mas na totalidade de seus processos industriais e comerciais, visando sempre à satisfação constante de seus clientes.
                        </section>
                        <section class="mdl-card__actions mdl-card--border">
                            <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="./catalogos/yimingparts.pdf" target="_blank">Ver Catálogo</a>
                        </section>
                    </section>

                    <section class="fadeInUp delay-4-2s mdl-cell mdl-cell--6-col-desktop mdl-cell--12-col-tablet mdl-card mdl-shadow--4dp">
                        <figure class="mdl-card__media">
                            <a href="http://notus.ind.br" title="notus.ind.br" target="_blank">
                                <img class="article-image" src="./images/notus.png" border="0" alt="">
                            </a>
                        </figure>
                        <section class="mdl-card__supporting-text">
                            A Notus é uma empresa especializada nas áreas de arrefecimento e climatização de veículos automotores, oferecendo, a mais de 10 anos, atendimento personalizado, através de suporte técnico, desenvolvimento de estratégias para atender as necessidades do mercado nacional e internacional.
                        </section>
                        <section class="mdl-card__actions mdl-card--border">
                            <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="./catalogos/notus_radiadores.pdf" target="_blank">Radiadores</a>
                            <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="./catalogos/notus_eletro.pdf" target="_blank">Eletroventiladores</a>
                        </section>
                    </section>

                    <section class="fadeInUp delay-4-2s mdl-cell mdl-cell--6-col-desktop mdl-cell--12-col-tablet mdl-card mdl-shadow--4dp">
                        <figure class="mdl-card__media">
                            <img class="article-image" src="./images/metan.png" border="0" alt="">
                        </figure>
                        <section class="mdl-card__supporting-text">
                            A Metan trabalha a mais de 40 anos com solida experiência no mercado de peças de reposição, na linha de cabeçotes Volkswagem.
                        </section>
                        <section class="mdl-card__actions mdl-card--border">
                            <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="./catalogos/metan.pdf" target="_blank">Ver Catálogo</a>
                        </section>
                    </section>

                    <section class="fadeInUp delay-4-4s mdl-cell mdl-cell--6-col-desktop mdl-cell--12-col-tablet mdl-card mdl-shadow--4dp">
                        <figure class="mdl-card__media">
                            <img class="article-image" src="./images/brunko.jpeg" border="0" alt="">
                        </figure>
                        <section class="mdl-card__supporting-text">
                            A Brunko é fabricante de blocos e cabeçotes Mercedes, sendo referência em qualidade e atendimento. Possui infra-estrutura precisa e o conhecimento das necessidades de seus consumidores para atender e superar suas expectativas.
                        </section>
                        <section class="mdl-card__actions mdl-card--border">
                            <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="./catalogos/brunko.pdf" target="_blank">Ver Catálogo</a>
                        </section>
                    </section>

                    <section class="fadeInUp delay-4-4s mdl-cell mdl-cell--6-col-desktop mdl-cell--12-col-tablet mdl-card mdl-shadow--4dp">
                        <figure class="mdl-card__media">
                            <a href="http://ndflex.com.br" title="ndflex.com.br" target="_blank">
                                <img class="article-image" src="./images/ndflex.jpeg" border="0" alt="">
                            </a>
                        </figure>
                        <section class="mdl-card__supporting-text">
                            A NDflex é uma indústria de Mangueiras e Tubos Flexíveis para a Linha Automotiva e Industrial. Em constante evolução, desenvolve mangueiras para sistemas de alimentação e retorno de combustíveis (gasolina, etanol, diesel) para veículos automotivos, além de produtos para indústria como mangueiras e tubos para sistemas pneumáticos e hidráulicos.
                        </section>
                        <section class="mdl-card__actions mdl-card--border">
                            <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="./catalogos/ndflex.pdf" target="_blank">Ver Catálogo</a>
                        </section>
                    </section>

                    <section class="fadeInUp delay-4-6s mdl-cell mdl-cell--6-col-desktop mdl-cell--3-offset-desktop mdl-cell--12-col-tablet mdl-card mdl-shadow--4dp">
                        <figure class="mdl-card__media">
                            <img class="article-image" src="./images/fortmetal.png" border="0" alt="">
                        </figure>
                        <section class="mdl-card__supporting-text">
                            A FortMetal fabrica bandejas de suspensão dentro dos mais rígidos padrões de qualidade e com materiais de primeira linha.
                        </section>
                        <section class="mdl-card__actions mdl-card--border">
                            <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="./catalogos/fortmetal.pdf" target="_blank">Ver Catálogo</a>
                        </section>
                    </section>
                </article>

                <article id="contact" class="fadeInUp delay-5s mdl-cell mdl-cell--12-col mdl-card mdl-shadow--4dp">
                    <hgroup style="margin: 0 auto;" class="mdl-card__title">
                        <h2 class="mdl-card__title-text">Contato</h2>
                    </hgroup>
                    <section class="mdl-card__supporting-text">
                        <p>Solicite uma cotação ou tire suas dúvidas, será um prazer atende-lo.</p>

                        <form action="./" method="POST">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="text" id="name" name="name" required pattern="^[^0-9_!¡?÷?¿/\\+=@#$%ˆ&*(){}|~<>;:[\],.]{2,}$">
                                <label class="mdl-textfield__label" for="name">Nome *</label>
                            </div>

                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="email" id="email" name="email">
                                <label class="mdl-textfield__label" for="email">Email</label>
                            </div>

                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="tel" id="phone" name="phone" required pattern="^\(?(\d{2})?\)?[\s-]?9?\d{4}[ \.\-]?\d{4}$">
                                <label class="mdl-textfield__label" for="phone">Telefone *</label>
                            </div>

                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="text" id="city" name="city" required pattern="^[^0-9_!¡?÷?¿/\\+=@#$%ˆ&*(){}|~<>;:[\],.]{2,}$">
                                <label class="mdl-textfield__label" for="city">Cidade *</label>
                            </div>

                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <textarea class="mdl-textfield__input" type="text" rows="5" id="message" name="message" required minlength="10"></textarea>
                                <label class="mdl-textfield__label" for="message">Mensagem *</label>
                            </div>

                            <button class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">Enviar Mensagem</button>
                        </form>
                    </section>
                </article>

                <article class="fadeInUp mdl-cell mdl-cell--12-col mdl-card delay-6s">
                    <figure>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d863.7100792308112!2d-51.165210579522686!3d-30.012741195612332!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x658bd70047944ff7!2sGiovani+Paiva+Costamilan+Cia!5e0!3m2!1spt-BR!2sbr!4v1530468577194" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </figure>
                </article>
            </div>

            <footer class="mdl-mega-footer mdl-cell--12-col">
                <article class="mdl-mega-footer__top-section">
                    <section class="mdl-mega-footer__left-section ">
                        <a title="Página no Facebook" href="https://www.facebook.com/mundial.representacoes?hc_ref=ARSZ_HX42E256niFIY-K4n4HhQIMbymdGOTc6hzeDtjr3NjDOIuc4GUrzEQM8cpEUGg&fref=nf" target="_blank" class="fa fa-facebook mdl-mega-footer__social-btn"></a>
                        <a title="Página no Linkedin" href="https://www.linkedin.com/company/mundial-representacoes/" target="_blank" class="fa fa-linkedin mdl-mega-footer__social-btn"></a>
                    </section>
    
                    <section style="padding-right: 50px;" class="mdl-mega-footer__right-section">
                        <span style="white-space: nowrap;">
                            <i class="fa fa-envelope mdl-mega-footer__social-btn"></i>
                            mundialr@mundialr.com.br
                        </span>
                        <span style="white-space: nowrap;">
                            <i class="fa fa-phone mdl-mega-footer__social-btn"></i>
                            (51) 3392-9020
                        </span>
                    </section>
                </article>
    
                <article class="mdl-mega-footer__bottom-section">
                    <section style="text-align: center;" class="mdl-mega-footer__middle-section">
                        Developed by <a style="text-decoration: none; color: #FFFFFF;" href="https://pt.stackoverflow.com/users/91006/guilherme-costamilam?tab=profile">Guilherme Costamilam</a>
                    </section>
                </article>
            </footer>
        </div>
    </main>
</body>
</html>