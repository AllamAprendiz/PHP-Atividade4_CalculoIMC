<?php
    //CRIA AS VARIÁVEIS DO PESO E ALTURA E DEPOIS CALCULA
    $Peso_php = filter_input(INPUT_POST,"Peso_name");
    $Altura_php = filter_input(INPUT_POST,"Altura_name");
    $ResultadoIMC_php = $Peso_php / ($Altura_php * $Altura_php);

        //CONDICIONAIS QUE ENTREGA O RELATORIO SOBRE O IMC
        if($ResultadoIMC_php < 18.5){
            $Magreza = 'Magro';
            echo "IMC é : ". $ResultadoIMC_php . " Resultado ". $Magreza;
        }
        if($ResultadoIMC_php >= 18.5 && $ResultadoIMC_php < 25){
            $PesoNormal = 'Peso Normal';
            echo "IMC é : ". $ResultadoIMC_php . " Resultado ". $PesoNormal;
        
        }
        if($ResultadoIMC_php >= 25 && $ResultadoIMC_php < 30){
            $SobrePeso = 'Excesso De Peso';
            echo "IMC é : ". $ResultadoIMC_php . " Resultado ". $SobrePeso;
    
        }
        if($ResultadoIMC_php >= 30 && $ResultadoIMC_php < 35){
            $Obesidade_Grau1 = 'Obesidade Grau 1';
            echo "IMC é : ". $ResultadoIMC_php . " Resultado ". $Obesidade_Grau1;
        }
        if($ResultadoIMC_php >= 35 && $ResultadoIMC_php < 40){
            $Obesidade_Grau2 = 'Obesidade Grau 2';
            echo "IMC é : ". $ResultadoIMC_php . " Resultado ". $Obesidade_Grau2;
        }
        if($ResultadoIMC_php >= 40){
         $Obesidade_Grau3 = 'Obesidade Grau 3';
         echo "IMC é : ". $ResultadoIMC_php . " Resultado ". $Obesidade_Grau3;
    }
?>