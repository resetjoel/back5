<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //1. Almacenar en un array los 10 primeros números pares y mostrar en pantalla uno debajo del otro.

    $numerosPares = [2,4,6,8,10,12,14,16,18,20];
    print "<pre><br>";
    print $numerosPares[0];
    print "<br>";
    print $numerosPares[1];
    print "<br>";
    print $numerosPares[2];
    print "<br>";
    print $numerosPares[3];
    print "<br>";
    print $numerosPares[4];
    print "<br>";
    print $numerosPares[5];
    print "<br>";
    print $numerosPares[6];
    print "<br>";
    print $numerosPares[7];
    print "<br>";
    print $numerosPares[8];
    print "<br>";
    print $numerosPares[9];
    print "<br>";

    //2. Crear un array e introducir los siguientes valores: Pedro, Ana, 34 y 1, sin asignar el índice de la matriz. 
    //Mostrar el esquema del array con print_r().

    $arrayRandom = ["Pedro", "Ana", 34, 1];
    print "<pre><br>";
    print_r($arrayRandom);
    print "<br>";

    //3. Crear un array asociativo e introducir los siguientes valores:
    
    $tarjetaDePresentacion = [
        'Nombre:' => 'Pedro',
        'Apellido:' => 'Torres',
        'Direccion:' => 'Av. Mayor 3703',
        'Telefono:' => 1122334455, 
    ];

    //4. Crear un array introduciendo las ciudades: Madrid, Barcelona, Londres, New York, Los Ángeles y Chicago, sin asignar índices al array. 
    //A continuación, muestra el contenido del array.
    //Ejemplo: La ciudad con el índice 0 tiene el nombre Madrid.

    $ciudades = ["Madrid", "Barcelona", "Londres", "New York", "Los Ángeles", "Chicago"];

    print "<pre><br>";
    print "La ciudad con el índice 0 tiene el nombre: ";
    print $ciudades[0];
    print "<br>";
    print "La ciudad con el índice 1 tiene el nombre: ";
    print $ciudades[1];
    print "<br>";
    print "La ciudad con el índice 2 tiene el nombre: ";
    print $ciudades[2];
    print "<br>";
    print "La ciudad con el índice 3 tiene el nombre: ";
    print $ciudades[3];
    print "<br>";
    print "La ciudad con el índice 4 tiene el nombre: ";
    print $ciudades[4];
    print "<br>";
    print "La ciudad con el índice 5 tiene el nombre: ";
    print $ciudades[5];
    print "<br>";

    //5. Repite el ejercicio anterior pero ahora se ha de crear índices, MD para Madrid, BCL para Barcelona, LD para Londres, NY para New York, LA para Los Ángeles y CCG para Chicago. 
    
    $city = [
        'MD' => 'Madrid',
        'BCL' => 'Barcelona',
        'LD' => 'Londres',
        'NY' => 'New York',
        'LA' => 'Los Angeles',
        'CCG' => 'Chicago',

    ];
    
    print "<pre><br>";
    print "La ciudad con el índice MD tiene el nombre: ";
    print $city['MD'];
    print "<br>";
    print "La ciudad con el índice BCL tiene el nombre: ";
    print $city['BCL'];
    print "<br>";
    print "La ciudad con el índice LD tiene el nombre: ";
    print $city['LD'];
    print "<br>";
    print "La ciudad con el índice NY tiene el nombre: ";
    print $city['NY'];
    print "<br>";
    print "La ciudad con el índice LA tiene el nombre: ";
    print $city['LA'];
    print "<br>";
    print "La ciudad con el índice CCG tiene el nombre: ";
    print $city['CCG'];
    ?>
</body>
</html>