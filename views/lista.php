<!DOCTYPE hmtl>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Nome do Site</title>
        <!--Meus arquivos-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>static/css/style.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>static/css/styleindex2.css"/>
        <!--Bootstrap Arquivos-->
        
    </head>
    <body>
        <div id="interface">
            <header id="cabecalho">
                <hgroup>
                    <h1>Título</h1>
                    <h2>Subtítulo</h2>
                </hgroup>
                
                IMAGEM LOGO
                
                <nav id="menu">
                    <ul>
                        <li>menu1</li>
                        <li>menu2</li>
                        <li>menu3</li>
                        <li>menu4</li>
                        <li>menu5</li>
                        <li>menu6</li>
                    </ul>
                </nav>
            </header>
            <section id="conteudo">
                <article id="principal">
                    <h1>Usuários</h1>
                    <?php
                        echo "<table id=tabela" . ">";
                        echo "<tr><td>Nome</td><td>Email</td><td>Data de Nascimento</td></tr>";
                        foreach ($usuarios as $u) {
                            echo "<tr><td>" . $u->nome . "</td><td>" . $u->email . "</td><td>" . $u->nascimento . "</td></tr>";
                        }
                        echo "</table>";
                    ?>
                    <button onclick="ola()">Ok</button>
                </article>
            </section>
            <footer id="rodape">
                </p></p>
            </footer>
        </div>
    </body>
</html>