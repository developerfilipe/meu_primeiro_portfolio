<!DOCTYPE html>
<html lang="pt_br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filipe's portfolio | Fullstack developer</title>

    <!-- tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    

    <!-- Fonte awesome CDN -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"> -->

</head>
<!-- 
bg-slate-950 -- muda a cor do background
text-white -- muda a cor da fonte
-->

<body class="bg-slate-950  text-gray-300">

    <?php include('./components/header.php'); ?>
    <!-- 
    INICIO DO MAIN 
    *flex - torna o contanner pai Flex o que possibilita tirar o comportamento de block colocando na lateral
    obs:  o comportamento de bloc é padrão para todas as DIVs e coloca width de 100% e height 0 o flex coloca o conteudo filho em linha
    *mx-auto - coloca margins laterais autoimaticas no elemento pai
    *max-w-screen-lg - permite colocar um tamanho maximo para a largura(no caso aqui esta setado como tamanho maximo pre configurado no tail wind)
    *px-3 - padding interna no eixo x(horizontal) de 3 rems
    *py-6 - padding interna no eixo y(vertical) de 3 rems
    *items-center - força os elementos filhos a ficarem centralizados
    *justify-between - força um espaaço entre os elementos posicionando nos cantos do elemnto pai
    *min-h-20 - tamanho do eixo y minimo de 20
    -->
    <main class="  min-h-20 mx-auto max-w-screen-lg px-3 gap-y-6 py-8 items-center ">
        <!-- Hero -->
        <?php
        include('./components/hero.php');
        ?>

        <!-- Inicio dos projetos -->
        <?php
        include('./components/projetos.php');
        ?>
    </main>

    <footer class="  mt-3 mx-auto max-w-screen-lg px-3 py-6 items-center py-6">
        <!-- 
            *border-t - adiona borda top de 1px
            *border-gray-600 seleciona cor da borda
         -->
        <div class="border-t border-gray-600 pt-6 px-3 text-gray-500">
            <p>&copy; <?= date('Y') ?>. Construido 🤍 por mim mesmo :) .</p>
        </div>
    </footer>
</body>

</html>