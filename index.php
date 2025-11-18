<?php

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/css/style.css">

    <title>Dra Diandra Carvalhal - Urologista</title>

    <link rel="icon" type="image/png" href="favicon.png"/>
    <?php include_once 'include/cdns.php'?>
    <?php include_once 'include/infos.php'?>
</head>
<body>
    <header>
        <nav id="mainNavbar" class="navbar navbar-expand-lg fixed-top navbar-light shadow">
            <div class="container">
                <a class="navbar-brand text-white" href="#sobre-mim"><img src="img/logo-nav.png" alt="" style="width: 48px"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end" id="navbarContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link " href="#atuacao">Atuação</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#sobre-mim">Sobre mim</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#agendamento">Agendamento</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#depoimentos">Depoimentos</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <section id="hero">

            <div class="container hero-content-container">
                <div class="row min-vh-100 align-items-center">

                    <div class="col-lg-7">
                        <div class="hero-content">
                            <h3 class="hero-title">Urologia</h3>
                            <h1 class="hero-title">Dra. Diandra Carvalhal</h1>
                            <p class="hero-info">CRM: 32941-BA / RQE: 27507</p>
                            <p class="hero-tagline">
                                Cuidado especializado em urologia com dedicação e humanidade.
                            </p>
                            <a href="https://wa.me/+557197103059" target="_blank" class="btn-hero">
                                <i class="bi bi-whatsapp me-2"></i>Entre em contato
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-5 ">
                    </div>

                </div>
            </div>

            <div class="hero-background-wrapper">
                <div class="container-fluid g-0">
                    <div class="row g-0 min-vh-100">

                        <div class="col-lg-7">
                            <div class="hero-bg-green"></div>
                        </div>

                        <div class="col-lg-5 d-lg-block d-none">
                            <div class="hero-bg-image"></div>
                        </div>

                    </div>
                </div>
            </div>

        </section>
        <section id="atuacao" class="py-5 py-md-6">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-12 text-center">
                        <h3 class="section-subtitle">Minhas Especialidades</h3>
                        <h2 class="section-title">Atendimento amplo para melhor te auxiliar</h2>
                    </div>
                </div>

                <div class="row align-items-stretch justify-content-between">

                    <div class="col-lg-6 mb-4 mb-lg-0">
                        <div class="row">
                            <?php
                            // O array $especialidades está vindo do 'include/infos.php'
                            foreach ($especialidades as $index => $especialidade):

                                // Cria 2 colunas (col-md-6)
                                $column_classes = "col-md-6 mb-4";
                                ?>

                                <div class="<?= $column_classes ?>">
                                    <div class="especialidade-card">
                                        <img src="img/icons/<?= htmlspecialchars($especialidade['icon']) ?>"
                                             alt="<?= htmlspecialchars($especialidade['alt']) ?>"
                                             class="especialidade-icon">
                                        <h6 class="especialidade-label"><?= htmlspecialchars($especialidade['label']) ?></h6>
                                    </div>
                                </div>

                            <?php endforeach; ?>
                        </div>
                    </div>

                    <div class="col-lg-5 d-flex justify-content-center align-items-center">
                        <div class="card-descricao">
                            <h4 class="card-descricao-title">Cuidado urológico completo</h4>
                            <p class="card-descricao-text">
                                Atenção especializada em cada fase da sua saúde.
                                Minha especialidade é cuidado humano, tecnologia avançada e acompanhamento
                                próximo para que você se sinta sempre seguro e acolhido.
                            </p>
                            <a href="https://wa.me/+557197103059" target="_blank" class="btn mt-auto">
                                Agende sua consulta
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <section id="cta" class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Cuidado Humanizado, Foco em Você</h5>
                                <p class="card-text">
                                    “Minha missão é criar um ambiente seguro e de total confiança, onde você seja ouvida com respeito e acolhida sem julgamentos.” - Dra. Diandra Carvalhal
                                </p>
                                <a href="https://wa.me/+557197103059" class="btn" target="_blank">
                                    <i class="bi bi-whatsapp me-2"></i>Agende sua consulta
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="sobre-mim" class="py-5 py-md-6">

            <div class="angled-background"></div>

            <div class="container">
                <div class="row">

                    <div class="col-lg-7">
                        <div class="sobremim-content">
                            <div>
                                <h3 class="sobremim-subtitle">Olá, eu sou</h3>
                                <h2 class="sobremim-title">Dra. Diandra Carvalhal</h2>
                            </div>
                            <ul class="sobremim-list">
                                <li>Médica formada pela Faculdade de Medicina da Bahia – FMB/UFBA (Conclusão em 2018).</li>
                                <li>Urologia – Hospital Santo Antônio – Obras Sociais Irmã Dulce (Concluído em 2025).</li>
                                <li>Aréa Básica Cirúrgica – Hospital Santa Izabel – Santa Casa de Misericórdia da Bahia (Concluído em 2020).</li>
                                <li>Certificação em Cirurgia Robótica pela Intuitive.</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-5 d-flex justify-content-center align-items-center">
                        <img src="img/foto-sobremim.png" alt="Dra. Diandra Carvalhal" class="img-fluid img-sobremim">
                    </div>

                </div>
            </div>
        </section>
        <section id="agendamento" class="py-5 py-md-6">
            <div class="container">

                <div class="row mb-5">
                    <div class="col-12 text-center">
                        <h3 class="section-subtitle">Locais de Atendimento</h3>
                        <h2 class="section-title">Encontre o consultório mais próximo e<br>tenha cuidado especializado ao seu alcance.</h2>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-12 text-center">
                        <h2 class="cidade-title">Aracaju</h2>
                    </div>
                </div>

                <div class="row mb-4">
                    <?php foreach ($locais_aracaju as $local): ?>
                        <div class="col-lg-6 mb-4">

                            <div class="card local-card h-100">
                                <div class="row g-0 h-100">

                                    <div class="col-md-5 local-card-img-wrapper">
                                        <img src="img/locais-atendimento/aracaju/<?= htmlspecialchars($local['img']) ?>"
                                             alt="<?= htmlspecialchars($local['alt']) ?>" class="img-fluid local-card-img">
                                    </div>

                                    <div class="col-md-7">
                                        <div class="card-body local-card-body">
                                            <h5 class="local-card-title"><?= htmlspecialchars($local['titulo']) ?></h5>
                                            <p class="local-card-info">
                                                <i class="bi bi-geo-alt-fill me-2"></i><?= htmlspecialchars($local['endereco']) ?>
                                            </p>
                                            <p class="local-card-info">
                                                <i class="bi bi-telephone-fill me-2"></i><?= htmlspecialchars($local['telefone']) ?>
                                            </p>
                                            <div class="local-card-buttons">
                                                <a href="https://wa.me/557197103059" target="_blank" class="btn-local btn-local-primary">Agende sua consulta</a>

                                                <?php if ($local['id'] != 'horizonte'): ?>
                                                    <a href="#" class="btn-local btn-local-secondary"
                                                       data-bs-toggle="modal"
                                                       data-bs-target="#modal-<?= htmlspecialchars($local['id']) ?>">
                                                        Consultar convênios
                                                    </a>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <div class="row mb-4">
                    <div class="col-12 text-center">
                        <h2 class="cidade-title">Salvador</h2>
                    </div>
                </div>

                <div class="row">
                    <?php foreach ($locais_salvador as $local): ?>
                        <div class="col-lg-6 mb-4">

                            <div class="card local-card h-100">
                                <div class="row g-0 h-100">

                                    <div class="col-md-5 local-card-img-wrapper">
                                        <img src="img/locais-atendimento/salvador/<?= htmlspecialchars($local['img']) ?>"
                                             alt="<?= htmlspecialchars($local['alt']) ?>" class="img-fluid local-card-img">
                                    </div>

                                    <div class="col-md-7">
                                        <div class="card-body local-card-body">
                                            <h5 class="local-card-title"><?= htmlspecialchars($local['titulo']) ?></h5>
                                            <p class="local-card-info">
                                                <i class="bi bi-geo-alt-fill me-2"></i><?= htmlspecialchars($local['endereco']) ?>
                                            </p>
                                            <p class="local-card-info">
                                                <i class="bi bi-telephone-fill me-2"></i><?= htmlspecialchars($local['telefone']) ?>
                                            </p>
                                            <div class="local-card-buttons">
                                                <a href="https://wa.me/557197103059" target="_blank" class="btn-local btn-local-primary">Agende sua consulta</a>

                                                <a href="#" class="btn-local btn-local-secondary"
                                                   data-bs-toggle="modal"
                                                   data-bs-target="#modal-<?= htmlspecialchars($local['id']) ?>">
                                                    Consultar convênios
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

            </div>
        </section>
        <section id="depoimentos" class="py-5">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-12 mb-5 text-center">
                        <h2 class="depoimentos-title">A voz de quem confia</h2>
                        <p class="depoimentos-text">
                            Histórias reais de uma parceria baseada em respeito e atenção em cada etapa do tratamento. A sua jornada de saúde é minha prioridade. Vamos começar? Agende sua consulta!
                        </p>

                        <a href="https://wa.me/+557197103059" target="_blank" class="link-agendamento"> <i class="bi bi-calendar-check me-2"></i>Agende sua consulta
                        </a>
                    </div>

                    <div class="col-12">
                        <div class="owl-carousel owl-theme">

                            <?php
                            foreach ($depoimentos as $depoimento):
                                ?>

                                <div class="item">
                                    <div class="testimonial-card">
                                        <div class="card-header">
                                            <i class="bi bi-person-circle me-3"></i>
                                            <div>
                                                <strong><?= htmlspecialchars($depoimento['nome']) ?>, <?= htmlspecialchars($depoimento['idade']) ?></strong>
                                                <span><?= htmlspecialchars($depoimento['local']) ?></span>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <i class="bi bi-quote quote-icon"></i>
                                            <p class="card-text">
                                                <?= htmlspecialchars($depoimento['depoimento']) ?>
                                            </p>
                                        </div>
                                        <div class="card-author">
                                            <img src="img/logo-nav.png" alt="" class="testimonial-header-logo">
                                            <strong>Dra. Diandra</strong>
                                        </div>
                                    </div>
                                </div>

                            <?php endforeach; ?>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include_once 'include/scripts.php'?>
    <?php
    // Junta os dois arrays de locais em um só
    $todos_locais = array_merge($locais_aracaju, $locais_salvador);

    // Faz um único loop para gerar todos os modais
    foreach ($todos_locais as $local):
        ?>

        <div class="modal fade" id="modal-<?= htmlspecialchars($local['id']) ?>" tabindex="-1" aria-labelledby="label-<?= htmlspecialchars($local['id']) ?>" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="label-<?= htmlspecialchars($local['id']) ?>">Convênios - <?= htmlspecialchars($local['titulo']) ?></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center">
                        <img src="img/convenios/<?= htmlspecialchars($local['img_convenio']) ?>" alt="Convênios - <?= htmlspecialchars($local['titulo']) ?>" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>

    <?php endforeach; ?>
</body>
</html>
