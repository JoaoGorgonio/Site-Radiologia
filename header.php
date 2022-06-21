<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=<?php echo get_template_directory_uri() . "/assets/css/bootstrap.css" ?>>
    <link rel="stylesheet" href=<?php echo get_template_directory_uri() . "/style.css" ?>>
    <link rel="stylesheet" href=<?php echo get_template_directory_uri() . "/lib/OwlCarousel/dist/assets/owl.carousel.min.css"?>>
    <link rel="stylesheet" href=<?php echo get_template_directory_uri() . "/lib/OwlCarousel/dist/assets/owl.theme.default.min.css"?>>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href=<?php echo get_template_directory_uri() . "/assets/img/favicon.png"?>>

    <title>Uniero - <?php echo get_the_title(''); ?></title>
</head>

<body>
    <header>
        <section class="header-topo d-lg-flex d-none">
            <div class="container">
                <div class="navbar navbar-expand-xl navbar-dark">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <nav class="navbar-topo collapse navbar-collapse justify-content-between align-items-center" id="navbarSupportedContent">
                        <div class="horario-funcionamento d-flex justify-content-center align-items-center">
                            <img class="" id="" src=<?php echo get_template_directory_uri() . "/assets/img/icon-horario.svg"?>>
                            <p class="ms-2 mt-3">Segunda à sexta - 08:00 às 18:00h</p>
                        </div>
                        <div class="unidade-sp d-flex justify-content-center align-items-center">
                            <img class="" id="" src=<?php echo get_template_directory_uri() . "/assets/img/icon-mapa.svg"?>>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropSP" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    São Paulo
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropSP" id="dropSPMenu">
                                    <a class="dropdown-item" href="#">Artur Alvim</a>
                                    <a class="dropdown-item" href="#">Mooca</a>
                                    <a class="dropdown-item" href="#">Tatuapé</a>
                                    <a class="dropdown-item" href="#">Vila Formosa</a>
                                    <a class="dropdown-item" href="#">Vila Mariana</a>
                                </div>
                            </div>

                        </div>
                        <div class="unidade-baixada d-flex justify-content-center align-items-center">
                            <img class="" id="" src=<?php echo get_template_directory_uri() . "/assets/img/icon-mapa.svg"?>>
                            <div class="dropdown ui">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropBaixada" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Baixada Santista
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropBaixada" id="dropBaixadaMenu">
                                    <a class="dropdown-item" href="#">Santos</a>
                                    <a class="dropdown-item" href="#">São Vicente</a>
                                    <a class="dropdown-item" href="#">Praia Grande</a>
                                    <a class="dropdown-item" href="#">Guarujá</a>
                                </div>
                            </div>
                        </div>

                        <div class="header-redes d-flex justify-content-around align-items-center gap-3">
                            <a href="https://www.youtube.com/channel/UCrnUhqPH6LsC4tRuJa1Fs8Q" target="_blank">
                                <img class="svg-redes" id="" src=<?php echo get_template_directory_uri() . "/assets/img/icon-youtube.svg"?>>
                            </a>
                            <a href="https://www.facebook.com/uniero/" target="_blank">
                                <img class="svg-redes" id="" src=<?php echo get_template_directory_uri() . "/assets/img/icon-linkedin.svg"?>>
                            </a>
                            <a href="https://www.facebook.com/uniero/" target="_blank">
                                <img class="svg-redes" id="" src=<?php echo get_template_directory_uri() . "/assets/img/icon-facebook.svg"?>>
                            </a>
                            <a href="https://www.instagram.com/unieroradiologia/?hl=en" target="_blank">
                                <img class="svg-redes" id="" src=<?php echo get_template_directory_uri() . "/assets/img/icon-instagram.svg"?>>
                            </a>
                        </div>
                        <div class="agendar-exame justify-content-center align-items-center">
                            <a href="#" class="botao-agendar d-flex justify-content-center align-items-center px-4">
                                <img class="" id="" src=<?php echo get_template_directory_uri() . "/assets/img/icon-whats.svg"?>>
                                <p class="mt-3 ms-2" style="text-decoration: none;">Agende seu exame</p>
                            </a>
                        </div>
                    </nav>
                </div>
            </div>
        </section>

        <section class="navbar-mobile">
            <nav id="mobile" class="navbar navbar-expand-lg navbar-light p-0 d-lg-none d-block">
                <div class="container-fluid m-0 p-0">
                    <a href="<?php echo get_site_url() ?>" class="ms-3">
                        <img class="logo" src="<?php echo get_template_directory_uri() . "/assets/img/logo-uniero-mobile.png"?>">
                    </a>

                    <button class="navbar-toggler ms-1 me-1 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContentMobile" aria-controls="navbarSupportedContentMobile" aria-expanded="false" aria-label="Toggle navigation" id="opcaoMobile">
                        <span class="fa-solid fa-bars"></span>
                    </button>

                    <div class="midia d-flex align-items-center justify-content-around">
                        <button class="navbar-toggler me-2 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContentMobile2" aria-controls="navbarSupportedContentMobile2" aria-expanded="false" aria-label="Toggle navigation" id="opcaoMobile2">
                            <img class="logoIcon" src="<?php echo get_template_directory_uri() . "/assets/img/icon-mapa.svg"?>">
                        </button>

                        <button class="navbar-toggler me-2 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContentMobile3" aria-controls="navbarSupportedContentMobile3" aria-expanded="false" aria-label="Toggle navigation" id="opcaoMobile3">
                            <img class="logoIcon" src="<?php echo get_template_directory_uri() . "/assets/img/nossas-unidades/icon-individual-unidade-telefone.svg"?>">
                        </button>

                        <button class="navbar-toggler me-2 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContentMobile4" aria-controls="navbarSupportedContentMobile2" aria-expanded="false" aria-label="Toggle navigation" id="opcaoMobile4">
                            <img class="logoIcon" src="<?php echo get_template_directory_uri() . "/assets/img/nossas-unidades/icon-individual-unidade-whats.svg"?>">
                        </button>
                    </div>
                </div>

                <div class="collapse navbar-collapse" id="navbarSupportedContentMobile">
                    <ul id="scroll" class="navbar-nav color-white me-auto  mb-lg-0 d-flex align-items-start">
                        <li class="nav-item ">
                            <a class="nav-link active items-nav" aria-current="page" href="<?php echo get_site_url();?>">Home</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link active items-nav" aria-current="page"
                                href="<?php echo get_site_url(). "/quem-somos"?>">Quem somos</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link active items-nav" aria-current="page"
                                href="<?php echo get_site_url(). "/corpo-clinico"?>">Corpo clínico</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link active items-nav" aria-current="page"
                                href="<?php echo get_site_url(). "/servicos"?>">Nossos Parceiros</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link active items-nav" aria-current="page"
                                href="<?php echo get_site_url(). "/requisicao-online"?>">Requisição Online</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link active items-nav" aria-current="page"
                                href="<?php echo get_site_url(). "/noticias"?>">Notícias</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link active items-nav" aria-current="page"
                                href="<?php echo get_site_url(). "/convenios"?>">Convênios</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link active items-nav" aria-current="page"
                                href="https://concepts.summercomunicacao.com.br/ortho-x/#all-unit">Unidades</a>
                        </li>
                        <li class="nav-item" style="border: none;">
                            <a class="nav-link active items-nav" aria-current="page"
                                href="<?php echo get_site_url(). "/contatos"?>">Contatos</a>
                        </li>
                    </ul>

                    <div class="container-fluid social">
                        <div class="row">
                            <div class="col-3">
                                <a href="" class="me-3">
                                    <img class="svg-redes" id="" src=<?php echo get_template_directory_uri() . "/assets/img/icon-youtube.svg"?>>
                                </a>
                            </div>

                            <div class="col-3">
                                <a href="https://www.facebook.com/Ortho-X-Radiologia-Odontol%C3%B3gica-106560848474040"
                                    target="_blank" class="me-3">
                                    <img class="svg-redes" id="" src=<?php echo get_template_directory_uri() . "/assets/img/icon-linkedin.svg"?>>
                                </a>
                            </div>

                            <div class="col-3">
                                <a href="https://www.instagram.com/orthoxradiologia/" target="_blank" class="me-3">
                                    <img class="svg-redes" id="" src=<?php echo get_template_directory_uri() . "/assets/img/icon-facebook.svg"?>>
                                </a>
                            </div>

                            <div class="col-3">
                                <a href="https://www.instagram.com/orthoxradiologia/" target="_blank" class="me-3">
                                    <img class="svg-redes" id="" src=<?php echo get_template_directory_uri() . "/assets/img/icon-instagram.svg"?>>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="container-fluid exames">
                        <div class="row d-flex justify-content-between">
                            <div class="col-6 mt-2">
                                <a href="http://docviewer.com.br/layform.php?dominio=examesunieroradiologia.com.br"
                                    class="d-flex align-items-center">
                                    <img class="me-2" src="<?php echo get_template_directory_uri() . "/assets/img/icon-resultados.svg"?>">
                                    Resultados<br>de exames
                                </a>
                            </div>

                            <div class="col-6 mt-2">
                                <a href="<?php echo get_site_url(). "/convenios"?>" target="_blank" class="d-flex align-items-center">
                                    <img class="me-2" src="<?php echo get_template_directory_uri() . "/assets/img/icon-convenios.svg"?>">
                                    Convênios<br>Parceiros
                                </a>
                            </div>

                        </div>
                    </div>

                    <div class="container-fluid exames">
                        <div class="row d-flex justify-content-between">
                            <div class="col-6">
                                <a href="<?php echo get_site_url(). "/requisicao-online"?>" class="d-flex align-items-center">
                                    <img class="mb-1 me-2 iconeRequisicaoHeader" src="<?php echo get_template_directory_uri() . "/assets/img/icon-requisicao.svg"?>">Requisição<br>Online
                                </a>
                            </div>

                            <div class="col-6">
                                <a href="<?php echo get_site_url(). "/downloads"?>" class="d-flex align-items-center">
                                    <img class="mb-1 me-2" src="<?php echo get_template_directory_uri() . "/assets/img/icon-downloads.svg"?>">
                                    Download
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="collapse navbar-collapse" id="navbarSupportedContentMobile2">
                    <ul id="scroll" class="navbar-nav color-cyan me-auto mb-lg-0 d-flex align-items-start pb-4">
                        <button class="unidades-button d-flex justify-content-start align-items-center" id="unidadeSPbotao" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSP" aria-controls="collapseSP" aria-expanded="false" aria-label="Toggle navigation">
                            <h1>Unidades São Paulo</h1>
                        </button>
                        <ul class="collapse p-0" id="collapseSP" style="list-style: none;">
                            <li class="nav-item uni ps-3">
                                <div class="container p-0">
                                    <div class="row p-0  d-flex align-items-center">
                                        <div class="col-lg-1 col-1 me-4 p-0 location">
                                            <img class="logoIcon" src="<?php echo get_template_directory_uri() . "/assets/img/icon-mapa.svg"?>">
                                        </div>

                                        <div class="col-lg-10 col-10 p-0">
                                            <a class="d-block texto"
                                                href="<?php echo get_site_url()?>">
                                                <h1>Unidade - Artur Alvim</h1>
                                                <p>São Paulo</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="nav-item uni ps-3">
                                <div class="container p-0">
                                    <div class="row p-0  d-flex align-items-center">
                                        <div class="col-lg-1 col-1 me-4 p-0 location">
                                            <img class="logoIcon" src="<?php echo get_template_directory_uri() . "/assets/img/icon-mapa.svg"?>">
                                        </div>

                                        <div class="col-lg-10 col-10 p-0">
                                            <a class="d-block texto"
                                                href="<?php echo get_site_url()?>">
                                                <h1>Unidade - Mooca</h1>
                                                <p>São Paulo</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>


                            <li class="nav-item uni ps-3">
                                <div class="container p-0">
                                    <div class="row p-0  d-flex align-items-center">
                                        <div class="col-lg-1 col-1 me-4 p-0 location">
                                            <img class="logoIcon" src="<?php echo get_template_directory_uri() . "/assets/img/icon-mapa.svg"?>">
                                        </div>
                                        <div class="col-lg-10 col-10 p-0">
                                            <a class="d-block texto"
                                                href="<?php echo get_site_url()?>">
                                                <h1>Unidade - Tatuapé</h1>
                                                <p>São Paulo</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="nav-item uni ps-3">
                                <div class="container p-0">
                                    <div class="row p-0  d-flex align-items-center">
                                        <div class="col-lg-1 col-1 me-4 p-0 location">
                                            <img class="logoIcon" src="<?php echo get_template_directory_uri() . "/assets/img/icon-mapa.svg"?>">
                                        </div>

                                        <div class="col-lg-10 col-10 p-0">
                                            <a class="d-block texto"
                                                href="<?php echo get_site_url()?>">
                                                <h1>Unidade - Vila Formosa</h1>
                                                <p>São Paulo</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="nav-item uni ps-3">
                                <div class="container p-0">
                                    <div class="row p-0  d-flex align-items-center">
                                        <div class="col-lg-1 col-1 me-4 p-0 location">
                                            <img class="logoIcon" src="<?php echo get_template_directory_uri() . "/assets/img/icon-mapa.svg"?>">
                                        </div>

                                        <div class="col-lg-10 col-10 p-0">
                                            <a class="d-block texto"
                                                href="<?php echo get_site_url()?>">
                                                <h1>Unidade - Vila Mariana</h1>
                                                <p>São Paulo</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>

                        <button class="unidades-button d-flex justify-content-start align-items-center" type="button" data-bs-toggle="collapse" data-bs-target="#collapseLitoral" aria-controls="collapseLitoral" aria-expanded="false" aria-label="Toggle navigation" id="unidadeLitoralbotao">
                            <h1>Unidades Baixada Santista</h1>
                        </button>

                        <ul class="collapse p-0" id="collapseLitoral" style="list-style: none;">
                            <li class="nav-item uni ps-3">
                                <div class="container p-0">
                                    <div class="row p-0  d-flex align-items-center">
                                        <div class="col-lg-1 col-1 me-4 p-0 location">
                                            <img class="logoIcon" src="<?php echo get_template_directory_uri() . "/assets/img/icon-mapa.svg"?>">
                                        </div>

                                        <div class="col-lg-10 col-10 p-0">
                                            <a class="d-block texto"
                                                href="<?php echo get_site_url()?>">
                                                <h1>Unidade - Guarujá</h1>
                                                <p>Baixada Santista</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="nav-item uni ps-3">
                                <div class="container p-0">
                                    <div class="row p-0  d-flex align-items-center">
                                        <div class="col-lg-1 col-1 me-4 p-0 location">
                                            <img class="logoIcon" src="<?php echo get_template_directory_uri() . "/assets/img/icon-mapa.svg"?>">
                                        </div>

                                        <div class="col-lg-10 col-10 p-0">
                                            <a class="d-block texto"
                                                href="<?php echo get_site_url()?>">
                                                <h1>Unidade - Praia Grande</h1>
                                                <p>Baixada Santista</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>


                            <li class="nav-item uni ps-3">
                                <div class="container p-0">
                                    <div class="row p-0  d-flex align-items-center">
                                        <div class="col-lg-1 col-1 me-4 p-0 location">
                                            <img class="logoIcon" src="<?php echo get_template_directory_uri() . "/assets/img/icon-mapa.svg"?>">
                                        </div>
                                        <div class="col-lg-10 col-10 p-0">
                                            <a class="d-block texto"
                                                href="<?php echo get_site_url()?>">
                                                <h1>Unidade - Santos</h1>
                                                <p>Baixada Santista</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="nav-item uni ps-3 mb-3">
                                <div class="container p-0">
                                    <div class="row p-0  d-flex align-items-center">
                                        <div class="col-lg-1 col-1 me-4 p-0 location">
                                            <img class="logoIcon" src="<?php echo get_template_directory_uri() . "/assets/img/icon-mapa.svg"?>">
                                        </div>
                                        <div class="col-lg-10 col-10 p-0">
                                            <a class="d-block texto"
                                                href="<?php echo get_site_url()?>">
                                                <h1>Unidade - São Vicente</h1>
                                                <p>Baixada Santista</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </ul>
                </div>

                <div class="collapse navbar-collapse" id="navbarSupportedContentMobile3">
                    <ul id="scroll" class="navbar-nav color-cyan me-auto mb-lg-0 d-flex align-items-start pb-4">
                        <button class="unidades-button d-flex justify-content-start align-items-center" id="unidadeSPbotao" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSP" aria-controls="collapseSP" aria-expanded="false" aria-label="Toggle navigation">
                            <h1>Unidades São Paulo</h1>
                        </button>
                        <ul class="collapse p-0" id="collapseSP" style="list-style: none;">
                            <li class="nav-item uni ps-3">
                                <div class="container p-0">
                                    <div class="row p-0  d-flex align-items-center">
                                        <div class="col-lg-1 col-1 me-4 p-0 location">
                                            <img class="logoIcon" src="<?php echo get_template_directory_uri() . "/assets/img/nossas-unidades/icon-individual-unidade-telefone.svg"?>">
                                        </div>

                                        <div class="col-lg-10 col-10 p-0">
                                            <a class="d-block texto"
                                                href="<?php echo get_site_url()?>">
                                                <h1>Unidade - Artur Alvim</h1>
                                                <p>São Paulo</p>
                                            </a>
                                            <a href="tel:+551128946740" class="tel-unidades">(11) 2894-6740</a><span class="divisor-telefone"> | </span><a href="tel:+551128946740" class="tel-unidades">(11) 2254-4972</a>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="nav-item uni ps-3">
                                <div class="container p-0">
                                    <div class="row p-0  d-flex align-items-center">
                                        <div class="col-lg-1 col-1 me-4 p-0 location">
                                            <img class="logoIcon" src="<?php echo get_template_directory_uri() . "/assets/img/nossas-unidades/icon-individual-unidade-telefone.svg"?>">
                                        </div>

                                        <div class="col-lg-10 col-10 p-0">
                                            <a class="d-block texto"
                                                href="<?php echo get_site_url()?>">
                                                <h1>Unidade - Mooca</h1>
                                                <p>São Paulo</p>
                                            </a>
                                            <a href="tel:+551120768380" class="tel-unidades">(11) 2076-8380</a><span class="divisor-telefone"> | </span><a href="tel:+551143298078" class="tel-unidades">(11) 4329-8078</a>
                                        </div>
                                    </div>
                                </div>
                            </li>


                            <li class="nav-item uni ps-3">
                                <div class="container p-0">
                                    <div class="row p-0  d-flex align-items-center">
                                        <div class="col-lg-1 col-1 me-4 p-0 location">
                                            <img class="logoIcon" src="<?php echo get_template_directory_uri() . "/assets/img/nossas-unidades/icon-individual-unidade-telefone.svg"?>">
                                        </div>
                                        <div class="col-lg-10 col-10 p-0">
                                            <a class="d-block texto"
                                                href="<?php echo get_site_url()?>">
                                                <h1>Unidade - Tatuapé</h1>
                                                <p>São Paulo</p>
                                            </a>
                                            <a href="tel:+551120976739" class="tel-unidades">(11) 2097-6739</a>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="nav-item uni ps-3">
                                <div class="container p-0">
                                    <div class="row p-0  d-flex align-items-center">
                                        <div class="col-lg-1 col-1 me-4 p-0 location">
                                            <img class="logoIcon" src="<?php echo get_template_directory_uri() . "/assets/img/nossas-unidades/icon-individual-unidade-telefone.svg"?>">
                                        </div>

                                        <div class="col-lg-10 col-10 p-0">
                                            <a class="d-block texto"
                                                href="<?php echo get_site_url()?>">
                                                <h1>Unidade - Vila Formosa</h1>
                                                <p>São Paulo</p>
                                            </a>
                                            <a href="tel:+551127812425" class="tel-unidades">(11) 2781-2425</a><span class="divisor-telefone"> | </span><a href="tel:+551123897325" class="tel-unidades">(11) 2389-7325</a>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="nav-item uni ps-3">
                                <div class="container p-0">
                                    <div class="row p-0  d-flex align-items-center">
                                        <div class="col-lg-1 col-1 me-4 p-0 location">
                                            <img class="logoIcon" src="<?php echo get_template_directory_uri() . "/assets/img/nossas-unidades/icon-individual-unidade-telefone.svg"?>">
                                        </div>

                                        <div class="col-lg-10 col-10 p-0">
                                            <a class="d-block texto"
                                                href="<?php echo get_site_url()?>">
                                                <h1>Unidade - Vila Mariana</h1>
                                                <p>São Paulo</p>
                                            </a>
                                            <a href="tel:+551155850383" class="tel-unidades">(11) 5585-0383</a><span class="divisor-telefone"> | </span><a href="tel:+551129259983" class="tel-unidades">(11) 2925-9983</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>

                        <button class="unidades-button d-flex justify-content-start align-items-center" type="button" data-bs-toggle="collapse" data-bs-target="#collapseLitoral" aria-controls="collapseLitoral" aria-expanded="false" aria-label="Toggle navigation" id="unidadeLitoralbotao">
                            <h1>Unidades Baixada Santista</h1>
                        </button>

                        <ul class="collapse p-0" id="collapseLitoral" style="list-style: none;">
                            <li class="nav-item uni ps-3">
                                <div class="container p-0">
                                    <div class="row p-0  d-flex align-items-center">
                                        <div class="col-lg-1 col-1 me-4 p-0 location">
                                            <img class="logoIcon" src="<?php echo get_template_directory_uri() . "/assets/img/nossas-unidades/icon-individual-unidade-telefone.svg"?>">
                                        </div>

                                        <div class="col-lg-10 col-10 p-0">
                                            <a class="d-block texto"
                                                href="<?php echo get_site_url()?>">
                                                <h1>Unidade - Guarujá</h1>
                                                <p>Baixada Santista</p>
                                            </a>
                                            <a href="tel:+551333717677" class="tel-unidades">(13) 3371-7677</a><span class="divisor-telefone"> | </span><a href="tel:+551333834777" class="tel-unidades">(13) 3383-4777</a>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="nav-item uni ps-3">
                                <div class="container p-0">
                                    <div class="row p-0  d-flex align-items-center">
                                        <div class="col-lg-1 col-1 me-4 p-0 location">
                                            <img class="logoIcon" src="<?php echo get_template_directory_uri() . "/assets/img/nossas-unidades/icon-individual-unidade-telefone.svg"?>">
                                        </div>

                                        <div class="col-lg-10 col-10 p-0">
                                            <a class="d-block texto"
                                                href="<?php echo get_site_url()?>">
                                                <h1>Unidade - Praia Grande</h1>
                                                <p>Baixada Santista</p>
                                            </a>
                                            <a href="tel:+551333714280" class="tel-unidades">(13) 3371-4280</a><span class="divisor-telefone"> | </span><a href="tel:+551334745327" class="tel-unidades">(13) 3474-5327</a>
                                        </div>
                                    </div>
                                </div>
                            </li>


                            <li class="nav-item uni ps-3">
                                <div class="container p-0">
                                    <div class="row p-0  d-flex align-items-center">
                                        <div class="col-lg-1 col-1 me-4 p-0 location">
                                            <img class="logoIcon" src="<?php echo get_template_directory_uri() . "/assets/img/nossas-unidades/icon-individual-unidade-telefone.svg"?>">
                                        </div>
                                        <div class="col-lg-10 col-10 p-0">
                                            <a class="d-block texto"
                                                href="<?php echo get_site_url()?>">
                                                <h1>Unidade - Santos</h1>
                                                <p>Baixada Santista</p>
                                            </a>
                                            <a href="tel:+551332882232" class="tel-unidades">(13) 3288-2232</a><span class="divisor-telefone"> | </span><a href="tel:+551333263756" class="tel-unidades">(13) 3326-3756</a>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="nav-item uni ps-3 mb-3">
                                <div class="container p-0">
                                    <div class="row p-0  d-flex align-items-center">
                                        <div class="col-lg-1 col-1 me-4 p-0 location">
                                            <img class="logoIcon" src="<?php echo get_template_directory_uri() . "/assets/img/nossas-unidades/icon-individual-unidade-telefone.svg"?>">
                                        </div>
                                        <div class="col-lg-10 col-10 p-0">
                                            <a class="d-block texto"
                                                href="<?php echo get_site_url()?>">
                                                <h1>Unidade - São Vicente</h1>
                                                <p>Baixada Santista</p>
                                            </a>
                                            <a href="tel:+551333243296" class="tel-unidades">(13) 3324-3296</a><span class="divisor-telefone"> | </span><a href="tel:+551335612156" class="tel-unidades">(13) 3561-2156</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </ul>
                </div>

                <!-- Whats -->
                <div class="collapse navbar-collapse" id="navbarSupportedContentMobile4">
                    <ul id="scroll" class="navbar-nav color-cyan me-auto mb-lg-0 d-flex align-items-start pb-4">
                        <button class="unidades-button d-flex justify-content-start align-items-center" id="unidadeSPbotao" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSP" aria-controls="collapseSP" aria-expanded="false" aria-label="Toggle navigation">
                            <h1>Unidades São Paulo</h1>
                        </button>
                        <ul class="collapse p-0" id="collapseSP" style="list-style: none;">
                            <li class="nav-item uni ps-3">
                                <div class="container p-0">
                                    <div class="row p-0  d-flex align-items-center">
                                        <div class="col-lg-1 col-1 me-4 p-0 location">
                                            <img class="logoIcon" src="<?php echo get_template_directory_uri() . "/assets/img/nossas-unidades/icon-individual-unidade-whats.svg"?>">
                                        </div>

                                        <div class="col-lg-10 col-10 p-0">
                                            <a class="d-block texto"
                                                href="<?php echo get_site_url()?>">
                                                <h1>Unidade - Artur Alvim</h1>
                                                <p>São Paulo</p>
                                            </a>
                                            <a href="https://api.whatsapp.com/send?phone=5511945297711" class="tel-unidades">(11) 94529-7711</a>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="nav-item uni ps-3">
                                <div class="container p-0">
                                    <div class="row p-0  d-flex align-items-center">
                                        <div class="col-lg-1 col-1 me-4 p-0 location">
                                            <img class="logoIcon" src="<?php echo get_template_directory_uri() . "/assets/img/nossas-unidades/icon-individual-unidade-whats.svg"?>">
                                        </div>

                                        <div class="col-lg-10 col-10 p-0">
                                            <a class="d-block texto"
                                                href="<?php echo get_site_url()?>">
                                                <h1>Unidade - Mooca</h1>
                                                <p>São Paulo</p>
                                            </a>
                                            <a href="https://api.whatsapp.com/send?phone=5511945302124" class="tel-unidades">(11) 94530-2124</a>
                                        </div>
                                    </div>
                                </div>
                            </li>


                            <li class="nav-item uni ps-3">
                                <div class="container p-0">
                                    <div class="row p-0  d-flex align-items-center">
                                        <div class="col-lg-1 col-1 me-4 p-0 location">
                                            <img class="logoIcon" src="<?php echo get_template_directory_uri() . "/assets/img/nossas-unidades/icon-individual-unidade-whats.svg"?>">
                                        </div>
                                        <div class="col-lg-10 col-10 p-0">
                                            <a class="d-block texto"
                                                href="<?php echo get_site_url()?>">
                                                <h1>Unidade - Tatuapé</h1>
                                                <p>São Paulo</p>
                                            </a>
                                            <a href="https://api.whatsapp.com/send?phone=5511945302124" class="tel-unidades">(11) 94530-2124</a>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="nav-item uni ps-3">
                                <div class="container p-0">
                                    <div class="row p-0  d-flex align-items-center">
                                        <div class="col-lg-1 col-1 me-4 p-0 location">
                                            <img class="logoIcon" src="<?php echo get_template_directory_uri() . "/assets/img/nossas-unidades/icon-individual-unidade-whats.svg"?>">
                                        </div>

                                        <div class="col-lg-10 col-10 p-0">
                                            <a class="d-block texto"
                                                href="<?php echo get_site_url()?>">
                                                <h1>Unidade - Vila Formosa</h1>
                                                <p>São Paulo</p>
                                            </a>
                                            <a href="https://api.whatsapp.com/send?phone=5511945300923" class="tel-unidades">(11) 94530-0923</a>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="nav-item uni ps-3">
                                <div class="container p-0">
                                    <div class="row p-0  d-flex align-items-center">
                                        <div class="col-lg-1 col-1 me-4 p-0 location">
                                            <img class="logoIcon" src="<?php echo get_template_directory_uri() . "/assets/img/nossas-unidades/icon-individual-unidade-whats.svg"?>">
                                        </div>

                                        <div class="col-lg-10 col-10 p-0">
                                            <a class="d-block texto"
                                                href="<?php echo get_site_url()?>">
                                                <h1>Unidade - Vila Mariana</h1>
                                                <p>São Paulo</p>
                                            </a>
                                            <a href="https://api.whatsapp.com/send?phone=5511999270383" class="tel-unidades">(11) 99927-0383</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>

                        <button class="unidades-button d-flex justify-content-start align-items-center" type="button" data-bs-toggle="collapse" data-bs-target="#collapseLitoral" aria-controls="collapseLitoral" aria-expanded="false" aria-label="Toggle navigation" id="unidadeLitoralbotao">
                            <h1>Unidades Baixada Santista</h1>
                        </button>

                        <ul class="collapse p-0" id="collapseLitoral" style="list-style: none;">
                            <li class="nav-item uni ps-3">
                                <div class="container p-0">
                                    <div class="row p-0  d-flex align-items-center">
                                        <div class="col-lg-1 col-1 me-4 p-0 location">
                                            <img class="logoIcon" src="<?php echo get_template_directory_uri() . "/assets/img/nossas-unidades/icon-individual-unidade-whats.svg"?>">
                                        </div>

                                        <div class="col-lg-10 col-10 p-0">
                                            <a class="d-block texto"
                                                href="<?php echo get_site_url()?>">
                                                <h1>Unidade - Guarujá</h1>
                                                <p>Baixada Santista</p>
                                            </a>
                                            <a href="https://api.whatsapp.com/send?phone=5511999270383" class="tel-unidades">(11) 99927-0383</a>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="nav-item uni ps-3">
                                <div class="container p-0">
                                    <div class="row p-0  d-flex align-items-center">
                                        <div class="col-lg-1 col-1 me-4 p-0 location">
                                            <img class="logoIcon" src="<?php echo get_template_directory_uri() . "/assets/img/nossas-unidades/icon-individual-unidade-whats.svg"?>">
                                        </div>

                                        <div class="col-lg-10 col-10 p-0">
                                            <a class="d-block texto"
                                                href="<?php echo get_site_url()?>">
                                                <h1>Unidade - Praia Grande</h1>
                                                <p>Baixada Santista</p>
                                            </a>
                                            <a href="https://api.whatsapp.com/send?phone=5513974021440" class="tel-unidades">(13) 97402-1440</a>
                                        </div>
                                    </div>
                                </div>
                            </li>


                            <li class="nav-item uni ps-3">
                                <div class="container p-0">
                                    <div class="row p-0  d-flex align-items-center">
                                        <div class="col-lg-1 col-1 me-4 p-0 location">
                                            <img class="logoIcon" src="<?php echo get_template_directory_uri() . "/assets/img/nossas-unidades/icon-individual-unidade-whats.svg"?>">
                                        </div>
                                        <div class="col-lg-10 col-10 p-0">
                                            <a class="d-block texto"
                                                href="<?php echo get_site_url()?>">
                                                <h1>Unidade - Santos</h1>
                                                <p>Baixada Santista</p>
                                            </a>
                                            <a href="https://api.whatsapp.com/send?phone=5513992082772" class="tel-unidades">(13) 99208-2772</a>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="nav-item uni ps-3 mb-3">
                                <div class="container p-0">
                                    <div class="row p-0  d-flex align-items-center">
                                        <div class="col-lg-1 col-1 me-4 p-0 location">
                                            <img class="logoIcon" src="<?php echo get_template_directory_uri() . "/assets/img/nossas-unidades/icon-individual-unidade-whats.svg"?>">
                                        </div>
                                        <div class="col-lg-10 col-10 p-0">
                                            <a class="d-block texto"
                                                href="<?php echo get_site_url()?>">
                                                <h1>Unidade - São Vicente</h1>
                                                <p>Baixada Santista</p>
                                            </a>
                                            <a href="https://api.whatsapp.com/send?phone=5513974147573" class="tel-unidades">(13) 97414-7573</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </ul>
                </div>
            </nav>
        </section>

        <section class="navbar-home">
            <div class="container">
                <div class="row">
                    <div class="navbar home-navbar justify-content-between align-items-center my-2">
                        <div class="nav-logo d-flex justify-content-center align-items-center">
                            <a href="<?php echo get_site_url(); ?>">
                                <img class="logo-nav" id="" src=<?php echo get_template_directory_uri() . "/assets/img/logo.svg"?>>
                            </a>
                        </div>
                        <div class="nav-a-uniero d-flex justify-content-center align-items-center mt-2">
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="drop-a-uniero" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    A Uniero
                                </button>
                                <div class="dropdown-menu" aria-labelledby="drop-a-uniero" id="drop-a-unieroMenu">
                                    <a class="dropdown-item" href="#">Quem Somos</a>
                                    <a class="dropdown-item" href="#">Corpo Clínico</a>
                                    <a class="dropdown-item" href="#">Downloads</a>
                                    <a class="dropdown-item" href="#">Nossos Parceiros</a>
                                </div>
                            </div>
                        </div>
                        <div class="nav-exames d-flex justify-content-center align-items-center mt-2">
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="drop-exames" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Exames
                                </button>
                                <div class="dropdown-menu" aria-labelledby="drop-exames" id="drop-examesMenu">
                                    <a class="dropdown-item" href="#">Requisição Online</a>
                                </div>
                            </div>
                        </div>
                        <div class="nav-noticias d-flex justify-content-center align-items-center mt-2">
                            <a href="#">
                                Notícias
                            </a>
                        </div>
                        <div class="nav-convenios d-flex justify-content-center align-items-center mt-2">
                            <a href="#">
                                Convênios
                            </a>
                        </div>
                        <div class="nav-unidades d-flex justify-content-center align-items-center mt-2">
                            <a href="#">
                                Unidades
                            </a>
                        </div>
                        <div class="nav-contato d-flex justify-content-center align-items-center mt-2">
                            <a href="#">
                                Contato
                            </a>
                        </div>
                        <div class="nav-search d-flex justify-content-center align-items-center mt-2">
                            <form class=" d-flex" style="position: relative;">
                                <input class="pesquisa form-control" type="search" placeholder="Pesquisar" aria-label="Search">
                                <img class="search-icon" id="" src=<?php echo get_template_directory_uri() . "/assets/img/icon-search.svg"?>>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="owl-carousel owl-theme banner-home mt-3">
                        <div class="item col-12 d-flex align-items-center justify-content-center flex-wrap">
                            <div class="col-12 col-lg-7 offset-lg-1 align-items-center justify-content-start text-center text-lg-start">
                                <h1 class="title-carousel ms-lg-3 ms-xl-0 px-md-5 px-lg-0"><span id="title-carousel">Conheça a</span><br>Uniero Radiologia Odontológica</h1>
                                <p class="text-carousel mt-4 px-2 px-md-0 ms-lg-3 ms-xl-0">Agende uma consulta agora mesmo com nossos especialistas</p>
                                <div class="col-12 d-flex col-lg-9 col-xxl-7 mt-3 flex-wrap ms-lg-3 ms-xl-0">
                                    <div class="botao-carousel col-12 col-md-5 offset-md-1 offset-lg-0 col-lg-6 mt-3 mt-lg-0">
                                        <a href="#">
                                            <input type="button" class="btn btn-primary px-4 px-md-4 py-2" value="Agendar Consultas">
                                        </a>
                                    </div>
                                    <div class="botao-carousel2 col-12 col-md-5 col-lg-6 mt-3 mt-lg-0">
                                        <a href="#">
                                            <input type="button" class="btn btn-primary px-5 px-md-5 py-2" value="Ver Unidades">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4 d-flex align-items-center justify-content-center mt-4 mt-lg-0">
                                <img class="" id="" src=<?php echo get_template_directory_uri() . "/assets/img/home-doutor.png"?>>
                            </div>
                        </div>

                        <div class="item col-12 d-flex align-items-center justify-content-center flex-wrap">
                            <div class="col-12 col-lg-7 offset-lg-1 align-items-center justify-content-start text-center text-lg-start">
                                <h1 class="title-carousel ms-lg-3 ms-xl-0 px-md-5 px-lg-0"><span id="title-carousel">Conheça a</span><br>Uniero Radiologia Odontológica</h1>
                                <p class="text-carousel mt-4 px-2 px-md-0 ms-lg-3 ms-xl-0">Agende uma consulta agora mesmo com nossos especialistas</p>
                                <div class="col-12 d-flex col-lg-9 col-xxl-7 mt-3 flex-wrap ms-lg-3 ms-xl-0">
                                    <div class="botao-carousel col-12 col-md-5 offset-md-1 offset-lg-0 col-lg-6 mt-3 mt-lg-0">
                                        <a href="#">
                                            <input type="button" class="btn btn-primary px-4 px-md-4 py-2" value="Agendar Consultas">
                                        </a>
                                    </div>
                                    <div class="botao-carousel2 col-12 col-md-5 col-lg-6 offset-lg-0 mt-3 mt-lg-0">
                                        <a href="#">
                                            <input type="button" class="btn btn-primary px-5 px-md-5 py-2" value="Ver Unidades">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4 d-flex align-items-center justify-content-center mt-4 mt-lg-0">
                                <img class="" id="" src=<?php echo get_template_directory_uri() . "/assets/img/home-doutor.png"?>>
                            </div>
                        </div>

                    </div>
                </div>
        </section>

        <section class="menu-home">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex justify-content-center align-items-center menu-opcoes flex-wrap mt-lg-0 mt-5">
                        <div class="col-lg-3 col-11 col-md-7 opcoes-menu opcao-resultados d-flex justify-content-center align-items-center text-center py-4">
                            <a href="#" style="text-decoration: none;" class="d-flex justify-content-center align-items-center text-center">
                                <img class="" id="" src=<?php echo get_template_directory_uri() . "/assets/img/icon-resultados.svg"?>>
                                <p class="mt-3 ms-2">Resultado de Exames</p>
                            </a>
                        </div>
                        <div class="col-lg-3 col-11 col-md-7 opcoes-menu opcao-convenio d-flex justify-content-center align-items-center text-center py-4 mt-lg-0 mt-5">
                            <a href="#" style="text-decoration: none;" class="d-flex justify-content-center align-items-center text-center">
                                <img class="" id="" src=<?php echo get_template_directory_uri() . "/assets/img/icon-convenios.svg"?>>
                                <p class="mt-3 ms-2">Convênios Parceiros</p>
                            </a>
                        </div>
                        <div class="col-lg-3 col-11 col-md-7 opcoes-menu opcao-download d-flex justify-content-center align-items-center text-center py-4 mt-lg-0 mt-5">
                            <a href="#" style="text-decoration: none;" class="d-flex justify-content-center align-items-center text-center">
                                <img class="" id="" src=<?php echo get_template_directory_uri() . "/assets/img/icon-downloads.svg"?>>
                                <p class="mt-3 ms-2">Download</p>
                            </a>
                        </div>
                        <div class="col-lg-3 col-11 col-md-7 opcoes-menu opcao-requisicao d-flex justify-content-center align-items-center text-center py-4 mt-lg-0 mt-5">
                            <a href="#" style="text-decoration: none;" class="d-flex justify-content-center align-items-center text-center">
                                <img class="" id="" src=<?php echo get_template_directory_uri() . "/assets/img/icon-requisicao.svg"?>>
                                <p class="mt-3 ms-2">Requisição Online</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </header>