<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="css/header.css">
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    
    <header>



        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/header/BrandPersona_Marca-03 1.png" alt="Logo">

        <nav>
            <a href="#">HOME</a>
            <a href="#">POR QUE BRAND PERSONA</a>
            <a href="#">O MERCADO</a>
            <a href="#">VANTAGENS</a>
            <a href="#">COMO FUNCIONA</a>
            <a href="#">O COMBO</a>
            <a href="#">CONTATO</a>
        </nav>

    </header>

    <article id="prin">

        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/header/be-removebg-preview 2.png" alt="">
    
        <article id="Caixa-orga">
            <article id="Caixa-informa">
                <p>leve sua empresa para a nova realidade digital</p>
                <h1>A sua persona virtual com alta performance</h1>
                <p>Para marcas inovadoras: Brand Persona PYXYS + Ilustraria  é o primeiro combo do Brasil
                de construção de avatares 3D, com tecnologia de ponta em computação gráfica, combinada à mais completa Estratégia de  Content, Growth e Performance Data-driven</p>

                <button type="button"><a href="">QUERO SABER MAIS</a></button>
            </article>
            
            <article id="Caixa-produto">
                <p>Um produto:</p>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/header/image 1.png" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/header/image 2.jpg" alt="">
            </article>
        </article>

        <div class="elemento-opaco"></div>
        <div id="elemento-solido"></div>
        <div id="elemento-linha"></div>
    
    </article>

    <?php include get_template_directory() . '/partes/Um-novo-mercado.php';
; ?>