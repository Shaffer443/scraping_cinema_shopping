<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="index.css" rel="stylesheet">

    <title>Horários Cinemas Shoppings</title>

</head>
<body>

    <main>
        <h1>Filmes em Cartaz - Shoppings</h1>
    </main>

    <!-- bloco 01 -->
    <section>
        <div class="shopping-bloco-base">

            <div class="cartaz"> <!--Alterar o link do cartaz-->
                <img src="https://dx35vtwkllhj9.cloudfront.net/lionsgateus/plane/images/regions/us/onesheet.jpg" 
                title=“em_cartaz_sala_02” alt=“cartaz_filme_sala_02”>
            </div>

            <div class="dados-bloco">

                <?php
                    //alterar o link para pegar as informações do filme alvo
                    #--------------------------------------------------------------------------------------------------------#
                    $sala02 = file_get_contents('https://www.shoppingrecife.com.br/cinema/alerta-maximo');

                    # --------------------------------------------------------------------------------------------------------#

                    preg_match_all('/<div class="nth-child(1)">(.*?)<\/div>/s', $sala02, $imgsala02);

                    #echo "<br><br>";
                    #echo $imgsala02[0][0];
                    #print_r($imgsala02);

                    #-------------------------------------------------------------------------------------------------------#

                    preg_match_all('/<h2 class="c-detalhes__title">(.*?)<\/h2>/s', $sala02, $titlesala02);

                    #echo strip_tags ($titlesala02[1][0]);

                    echo $titlesala02[0][0];
                    #print_r($titlesala02);


                    # Rodando como esperado, não mexer aqui para baixo

                    preg_match_all('/<p class="c-detalhes__description">(.*?)<\/p>/s', $sala02, $pagesala02);

                    #echo "<br>";
                    echo("Descrição:");
                    echo "<br><br>";

                    echo strip_tags ($pagesala02[0][0]);
                    
                    echo "<br><br>";

                    echo strip_tags ($pagesala02[0][1]);

                    #echo("Elenco:");
                    echo "<br><br>";

                    echo strip_tags ($pagesala02[0][2]);

                    #echo("Diretor:");
                    echo "<br><br>";

                    echo strip_tags ($pagesala02[0][3]);


                    #print_r($pagesala02);

                    echo "<br>";

                    #-----------------------------------------------------------------------------------#
                    preg_match_all('/<div class="col">(.*?)<\/div>/s', $sala02, $horariosala02);

                    echo "<br>";
                    #print_r($horariosala02);
                    echo("Datas:");
                    echo $horariosala02[0][0];

                    #-----------------------------------------------------------------------------------#
                    preg_match_all('/<div class="c-card-col">(.*?)<\/div>/s', $sala02, $infosala02);

                    echo "<br>";
                    
                    $info1 = $infosala02[0][0];
                    $info2 = $infosala02[0][1];
                    $info3 = $infosala02[0][2];
                
                ?>

                    <div class="sala-horario">
        
                        <div id="info01">
                            <?php
                                
                                preg_match_all('/<div class="c-card-col">(.*?)<\/div>/s', $sala02, $infosala02);

                                echo "<br><br>";

                                $info = $infosala02[0][0];

                                echo $info;
                            ?>
                        </div>

                        <div id="info02">
                            <?php
                                
                                preg_match_all('/<div class="c-card-col">(.*?)<\/div>/s', $sala02, $infosala02);

                                echo "<br><br>";

                                $info = $infosala02[0][1];

                                echo $info;
                            ?>
                        </div>

                        <div id="info03">
                            <?php
                                
                                preg_match_all('/<div class="c-card-col">(.*?)<\/div>/s', $sala02, $infosala02);

                                echo "<br><br>";

                                $info = $infosala02[0][2];

                                echo $info;
                            ?>
                        </div>

                    </div>

            
            </div>

        </div>
    </section>

        <!-- bloco 02 -->
        <section>
            <div class="shopping-bloco-base">

                <div class="cartaz">
                    <img src="https://walt-disney-studios.s3.amazonaws.com/AVATAR_2_1_SHT_DIGITAL_PAYOFF_s_RGB_Simple_Layered_V4_219f7eddb1.jpg" 
                    title=“cartaz_bloco_02” alt=“cartaz_filme_bloco_02”>
                </div>

                <div class="dados-bloco">

                    <?php
                        /*echo "<h1>Shopping Recife - Sala 02</h1>";
                        echo "<br>";*/
                        #--------------------------------------------------------------------------------------------------------#
                        $sala02 = file_get_contents('https://www.shoppingrecife.com.br/cinema/avatar-o-caminho-da-agua');

                        # --------------------------------------------------------------------------------------------------------#

                        preg_match_all('/<div class="nth-child(1)">(.*?)<\/div>/s', $sala02, $imgsala02);

                        #echo "<br><br>";
                        #echo $imgsala02[0][0];
                        #print_r($imgsala02);

                        #-------------------------------------------------------------------------------------------------------#

                        preg_match_all('/<h2 class="c-detalhes__title">(.*?)<\/h2>/s', $sala02, $titlesala02);

                        #echo strip_tags ($titlesala02[1][0]);

                        echo $titlesala02[0][0];
                        #print_r($titlesala02);


                        # Rodando como esperado, não mexer aqui para baixo

                        preg_match_all('/<p class="c-detalhes__description">(.*?)<\/p>/s', $sala02, $pagesala02);

                        #echo "<br>";
                        echo("Descrição:");
                        echo "<br><br>";

                        echo strip_tags ($pagesala02[0][0]);
                        
                        echo "<br><br>";

                        echo strip_tags ($pagesala02[0][1]);

                        #echo("Elenco:");
                        echo "<br><br>";

                        echo strip_tags ($pagesala02[0][2]);

                        #echo("Diretor:");
                        echo "<br><br>";

                        echo strip_tags ($pagesala02[0][3]);


                        #print_r($pagesala02);

                        echo "<br>";

                        #-----------------------------------------------------------------------------------#
                        preg_match_all('/<div class="col">(.*?)<\/div>/s', $sala02, $horariosala02);

                        echo "<br>";
                        #print_r($horariosala02);
                        echo("Datas:");
                        echo $horariosala02[0][0];

                        #-----------------------------------------------------------------------------------#
                        preg_match_all('/<div class="c-card-col">(.*?)<\/div>/s', $sala02, $infosala02);

                        echo "<br>";
                        
                        $info1 = $infosala02[0][0];
                        $info2 = $infosala02[0][1];
                        $info3 = $infosala02[0][2];
                    
                    ?>

                        <div class="sala-horario">

                            <div id="info01">
                                <?php
                                    
                                    preg_match_all('/<div class="c-card-col">(.*?)<\/div>/s', $sala02, $infosala02);

                                    echo "<br><br>";

                                    $info = $infosala02[0][0];

                                    echo $info;
                                ?>
                            </div>

                            <div id="info02">
                                <?php
                                    
                                    preg_match_all('/<div class="c-card-col">(.*?)<\/div>/s', $sala02, $infosala02);

                                    echo "<br><br>";

                                    $info = $infosala02[0][1];

                                    echo $info;
                                ?>
                            </div>

                            <div id="info03">
                                <?php
                                    
                                    preg_match_all('/<div class="c-card-col">(.*?)<\/div>/s', $sala02, $infosala02);

                                    echo "<br><br>";

                                    $info = $infosala02[0][2];

                                    echo $info;
                                ?>
                            </div>

                        </div>


                </div>

            </div>
        </section>

          <!-- bloco 03 -->
          <section>
            <div class="shopping-bloco-base">

                <div class="cartaz">
                    <img src="https://www.paramountexibidor.com.br/fotos/poster_filme/98.jpg" 
                    title=“cartaz_bloco_03” alt=“cartaz_filme_bloco_03”>
                </div>

                <div class="dados-bloco">

                    <?php
                        /*echo "<h1>Shopping Recife - Sala 02</h1>";
                        echo "<br>";*/
                        #--------------------------------------------------------------------------------------------------------#
                        $sala02 = file_get_contents('https://www.shoppingrecife.com.br/cinema/babilonia');

                        # --------------------------------------------------------------------------------------------------------#

                        preg_match_all('/<div class="nth-child(1)">(.*?)<\/div>/s', $sala02, $imgsala02);

                        #echo "<br><br>";
                        #echo $imgsala02[0][0];
                        #print_r($imgsala02);

                        #-------------------------------------------------------------------------------------------------------#

                        preg_match_all('/<h2 class="c-detalhes__title">(.*?)<\/h2>/s', $sala02, $titlesala02);

                        #echo strip_tags ($titlesala02[1][0]);

                        echo $titlesala02[0][0];
                        #print_r($titlesala02);


                        # Rodando como esperado, não mexer aqui para baixo

                        preg_match_all('/<p class="c-detalhes__description">(.*?)<\/p>/s', $sala02, $pagesala02);

                        #echo "<br>";
                        echo("Descrição:");
                        echo "<br><br>";

                        echo strip_tags ($pagesala02[0][0]);
                        
                        echo "<br><br>";

                        echo strip_tags ($pagesala02[0][1]);

                        #echo("Elenco:");
                        echo "<br><br>";

                        echo strip_tags ($pagesala02[0][2]);

                        #echo("Diretor:");
                        echo "<br><br>";

                        echo strip_tags ($pagesala02[0][3]);


                        #print_r($pagesala02);

                        echo "<br>";

                        #-----------------------------------------------------------------------------------#
                        preg_match_all('/<div class="col">(.*?)<\/div>/s', $sala02, $horariosala02);

                        echo "<br>";
                        #print_r($horariosala02);
                        echo("Datas:");
                        echo $horariosala02[0][0];

                        #-----------------------------------------------------------------------------------#
                        preg_match_all('/<div class="c-card-col">(.*?)<\/div>/s', $sala02, $infosala02);

                        echo "<br>";
                        
                        $info1 = $infosala02[0][0];
                        $info2 = $infosala02[0][1];
                        $info3 = $infosala02[0][2];
                    
                    ?>

                        <div class="sala-horario">

                            <div id="info01">
                                <?php
                                    
                                    preg_match_all('/<div class="c-card-col">(.*?)<\/div>/s', $sala02, $infosala02);

                                    echo "<br><br>";

                                    $info = $infosala02[0][0];

                                    echo $info;
                                ?>
                            </div>

                            <div id="info02">
                                <?php
                                    
                                    preg_match_all('/<div class="c-card-col">(.*?)<\/div>/s', $sala02, $infosala02);

                                    echo "<br><br>";

                                    $info = $infosala02[0][1];

                                    echo $info;
                                ?>
                            </div>

                            <div id="info03">
                                <?php
                                    
                                    preg_match_all('/<div class="c-card-col">(.*?)<\/div>/s', $sala02, $infosala02);

                                    echo "<br><br>";

                                    $info = $infosala02[0][2];

                                    echo $info;
                                ?>
                            </div>

                        </div>


                </div>

            </div>
        </section>

  
</body>
</html>