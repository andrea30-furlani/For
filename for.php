    <?php include "cabecalho.php"; ?>
        <h1>For</h1>
              
        <div class="p">
          <p>A instrução for cria um loop que consiste em três expressões opcionais, dentro de parênteses e separadas por ponto e vírgula, seguidas por uma declaração 
            ou uma sequência de declarações executadas em sequência.
          switchdeclaração - seleciona um dos muitos blocos de código a serem executados.</p>
          Exemplo: for ([inicialização]; [condição]; [expressão final])    declaração
        </div>
        

            <div id=conteudo>
              <h2>For - Estrutura de repetição</h2>
              <p class="txt">Repete um bloco de código porém com uma sintaxe.</p>


                <div class="forlist">
                    <?php
                    $lista = array("Pietro","Maria","João","Luis");
                    for ($i=0; $i < count($lista); $i++) {

                    echo "<li>".$lista[$i]."</li>";

                  }
                 
                          
              ?> 
              </div>  
            </div>
        
    <?php include "rodape.php"; ?>


