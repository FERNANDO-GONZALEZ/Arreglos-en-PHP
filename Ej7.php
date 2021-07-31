<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
      <p><b>El valor de la compra es: $</b>
            <?php
                /* En este programa se tiene la variable $valor la cual se 
                 * utiliza en varios segmentos del mismo código pudiendo
                 * modificar su contenido debido a que su ámbito se mantiene
                 * dentro del mismo archivo en el que fue declarada
                 */
                $valor = 1000; //Declaración e inicialización de $valor
                echo "$valor";
            ?>
        </p>
        <p><b>M&aacute;s el IVA: $</b>
            <?php
                $valor = $valor * 1.19; //Modificación de $valor
                echo "$valor";
            ?>
        </p>
        <p><b>M&eacute;nos el descuento de 5%: $</b>
            <?php
                $valor = $valor * 0.95; //Modificación de $valor
                echo "$valor";
            ?>
        </p>          
    </body>
</html>
