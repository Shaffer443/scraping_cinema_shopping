<?php
    echo "<h1>Shopping Recife</h1>";
    #echo "\n\n";
    echo "<br><br>";
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

    echo "<br><br>";
    echo("Descrição: \n\n\n");
    echo "<br><br>";

    echo strip_tags ($pagesala02[0][0]);
    #echo "<br><br>";
    
    #echo("Tema:");
    echo "<br><br>";

    echo strip_tags ($pagesala02[0][1]);

    #echo("Elenco:");
    echo "<br><br>";

    echo strip_tags ($pagesala02[0][2]);

    #echo("Diretor:");
    echo "<br><br>";

    echo strip_tags ($pagesala02[0][3]);


    #print_r($pagesala02);

    echo "<br><br>";

    #preg_match_all('/<div class="row">(.*?)<\/div>/s', $sala02, $descricaosala02);
    
    #echo("Descrição: \n\n\n");
    #echo "<br><br>";

    #echo strip_tags ($descricaosala02[0][2]);


    #echo "<br><br>";
    #echo strip_tags ($pagesala02[0][1]);

    #print_r($pagesala02);


    #echo $sala02;


    #-----------------------------------------------------------------------------------#
    preg_match_all('/<div class="col">(.*?)<\/div>/s', $sala02, $horariosala02);

    echo "<br><br>";
    #print_r($horariosala02);
    echo("Datas:");
    echo $horariosala02[0][0];

    #-----------------------------------------------------------------------------------#
    preg_match_all('/<div class="c-card-col">(.*?)<\/div>/s', $sala02, $infosala02);

    echo "<br><br>";
    echo $infosala02[0][0];
    echo $infosala02[0][1];
    echo $infosala02[0][2];

    #print_r($horariosala02);
    #echo("Datas:");
    #echo $infosala02[0][0];

    #print_r($infosala02);
?>