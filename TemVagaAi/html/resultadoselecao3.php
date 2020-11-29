<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes - Tem Vaga Ai!</title>
    <link id="temaPrincipal" rel="stylesheet" href="../css/IdentidadeVisual.css">
    <link id="temaSecundario" rel="stylesheet" href="../css/folhaDeEstiloPagina03.css">
    <script src="../scripts/funcoes.js"></script>
    <script>
        function resultadosVagas(){
            document.getElementById('entrada').submit();
        }
    </script>
</head>

<body>
    <!-- div aviso do covid-19 -->
    <div id="aviso">
        <div class="AvisoEsquerda" id="AvisoEsquerda">
            COVID-2019: Seguimos todas as medidas de segurança à risca.
            Saiba mais clicando
            <a href="https://coronavirus.saude.gov.br/">aqui.</a>
        </div>
        <div class="AvisoDireita">
            <button id="BotaoAvisoCovid" onclick="fecharAvisoCovid()">X</button>
        </div>
    </div>
    <!-- div topo da pagina-->
    <div id="cabecalho">
        <a href="../index.html">
            <img id="logo" src="../imagens/LOGO TEM VAGA AI.png" alt="logo">
        </a>        

        <form action="paginaresultados2.php" id="entrada" method="POST">
            <input type="text" id="pesquisa" name="pesquisa" placeholder="Buscar..." class="TextoPesquisar">
            <select id="cidade" name="cidade" form="entrada">
                <!-- Se chegou nessa pagina por meio de uma pesquisa, pega os valores anteriores-->
                <option selected value="qualquer">Qualquer localização</option>
                <option value="rio">Rio Paranaiba</option>                
            </select>
            <input type='button' onclick='resultadosVagas();' value='Buscar' id="botaoTopo"> 
        </form>

        <ul id="BotoesMenu">
            <li class="Menu"> <a class="Menu" href="http://localhost/TemVagaAiProjeto/TemVagaAi/html/crud/crud1.php">Cadastro</a> </li>
            <li class="Menu"> <a class="Menu"  onclick="trocaCss('../css/IdentidadeVisual.css','../css/folhaDeEstiloPagina03.css')">Tema1</a> </li>
            <li class="Menu"> <a class="Menu" onclick="trocaCss('../css/IdentidadeVisualStile02.css','../css/folhaDeEstiloPagina03Stile02.css')">Tema2</a> </li>
        </ul>
    </div>
    <div class="Resultados">
        <div class="DivImagensSlide">
            <input type="radio" class="slide-controller" name="slide" checked />
            <input type="radio" class="slide-controller" name="slide" />
            <input type="radio" class="slide-controller" name="slide" />
            <input type="radio" class="slide-controller" name="slide" />
            <div class="slide-show">
                <ul class="slides-list">
                    <li class="slide">
                        <img src="../imagens/apartamento1/1.png" alt="Apartamentos Praia">
                    </li>
                    <li class="slide">
                        <img src="../imagens/apartamento1/2.png" alt="Apartamentos Praia">
                    </li>
                    <li class="slide">
                        <img src="../imagens/apartamento1/3.png" alt="Apartamentos Praia">
                    </li>
                    <li class="slide">
                        <img src="../imagens/apartamento1/4.png" alt="Apartamentos Praia">
                    </li>
                </ul>
            </div>
        </div>
        <div class="linha"></div>
        <!-- Aqui vai ter as informacoes da tela anterio + um campo de informacao grande-->
        <div id="grid-container">
            <div class="left">
                <h1>Apartamento Praia</h1>
                <h2>Diaria: R$400,00</h2>
                <h3>Balneário Camboriú SC</h3>
                <p>Apartamento com vista pro mar</p>
                <!-- texto aleatorio-->
                <p>
                    Lorem ipsum nisl vehicula elementum netus curabitur egestas porttitor, morbi orci sagittis eleifend
                    nisi
                    volutpat lorem curabitur, mi dictum purus mattis sit arcu malesuada.
                    pulvinar dapibus bibendum dictum erat leo consectetur convallis lacinia, aenean varius nunc aliquet
                    posuere
                    pretium sed consequat, senectus enim tristique eget nulla etiam tempus.
                    mattis a dui nisi fames malesuada libero, interdum eget magna nunc erat netus mattis, lectus gravida
                    taciti
                    posuere vitae.
                    leo turpis netus aenean suspendisse proin molestie interdum feugiat placerat commodo, convallis quis
                    maecenas id metus amet hac magna adipiscing.
                    amet convallis ultrices placerat feugiat consequat ultrices egestas, fermentum ante dapibus rutrum
                    ipsum.
                </p>
            </div>
            <div class="middle">
                <div class="datas">
                    <div class="data-chegada">
                        <form action="alugar.html" class="datas-form">
                            <label for="dtIncio" class="label-data"><strong>Data de Chegada</strong></label>
                            <input id="dateI" type="date" class="inputdate">
                        </form>
                    </div>
                    <div class="data-saida">
                        <form action="alugar.html" class="datas-form">
                            <label for="dFim" class="label-data"><strong>Data Final</strong></label>
                            <input id="dateF" type="date" class="inputdate">
                        </form>
                    </div>
                </div>
                <div class="botao-alugar">
                    <input id="botao-alugar" type="submit" value="Alugar" class="cor-botao">
                </div>
                <div class="duvida">
                    <form action="#retorno" id="duvida">
                        <textarea name="mensagem" id="Mensagens" rows="2" placeholder="Envie sua duvida:"></textarea>

                        <input type="submit" value="Enviar" id="botao-duvida" class="cor-botao">
                    </form>
                </div>
            </div>
            <div class="right">
                <img src="../imagens/cara_pessoa.png" alt="carapessoa">
                <h1>Ze sem Criatividade</h1>
                <h2>18 anos.</h2>
                <h3>Balneário Camboriú SC</h3>
                <p>Gostei muito da casa, bla bla bla bla bla blabla bla blabla bla blabla bla blabla bla blabla bla
                    blabla bla blabla bla blabla bla blabla bla blabla bla blabla bla blabla bla bla
                    bla bla bla bla bla blabla bla blabla bla blabla bla blabla bla blabla bla blabla bla blabla bla
                    blabla bla blabla bla blabla bla blabla bla blabla bla bla
                    bla bla bla bla bla blabla bla blabla bla blabla bla blabla bla blabla bla blabla bla blabla bla
                    blabla bla blabla bla blabla bla blabla bla blabla bla bla
                </p>
            </div>
        </div>

    </div>
    <!-- div de rodape-->
    <div id="rodape">
        <ul class="rodape">
            <li class="rodape">Sobre</li>
            <li class="rodape"><a href="sobreTemVagaAi.html">Tem Vaga Ai</a></li> 
            <li class="rodape"><a href="sobreDesenvolvedor.html">Desenvolvido</a></li> 
        </ul>
    </div>

</body>

</html>