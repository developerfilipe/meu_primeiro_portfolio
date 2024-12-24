<section class=" flex gap-x-3">

    <!-- 
    *w-2/3 oculpa dois terços do tamonho do elemento pai
-->
    <!-- Titulo e descrição
 * flex-wrap possibilita a quebra para linha de baixo
-->
    <div class="flex flex-wrap items-center justify-between w-full">
        <!-- Texto de apresentação -->
        <div class="w-full lg:w-2/3 mb-6 lg:mb-0">
            <!-- 
          * text-3xl: Tamanho da fonte do título
          * font-bold: Título em negrito
      -->
            <h1 class="text-3xl font-bold">Olá, sou Filipe.</h1>

            <!-- 
          * text-xl: Aumenta o tamanho do texto
          * leading-6: Espaçamento entre as linhas do parágrafo
          * mt-6: Espaço superior de 6 unidades (aproximadamente 1.5rem)
      -->
            <p class="text-xl leading-6 mt-6">
                Desenvolvedor web e mobile com experiência em criar soluções
                tecnológicas eficientes e de alto impacto.
                Ao longo da minha carreira, tenho me especializado em desenvolver
                aplicações que combinam desempenho, usabilidade e escalabilidade.
            </p>

            <!-- Links de redes sociais -->
            <ul class="flex gap-x-3 mt-4">
                <li>
                    <a href="https://github.com/developerfilipe" target="_blank">
                        <img class="h-8 hover:animate-bounce" src="./assets/github.png" alt="Github Logo">
                    </a>
                </li>
                <li>
                    <a href="https://www.linkedin.com/in/filipe-souza-santos25/" target="_blank">
                        <img class="h-8 hover:animate-bounce" src="./assets/linkedin.png" alt="Linkedin Logo">
                    </a>
                </li>
                <li>
                    <a href="" target="_blank">
                        <img class="h-8 hover:animate-bounce" src="./assets/whatsapp.png" alt="Whatsapp Logo">
                    </a>
                </li>
            </ul>
        </div>

        <!-- Imagem -->
        <div class="w-full lg:w-1/3 flex items-center justify-center">
            <img src="./assets/minha_foto.jpeg" alt="Imagem redonda"
                class="hover:animate-pulse p-1 w-24 h-24 sm:w-32 sm:h-32 md:w-40 md:h-40 rounded-full border-4 border-slate-800">
        </div>
    </div>


</section>