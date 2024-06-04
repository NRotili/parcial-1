<?php

// Ejercicio 13: Crea una función llamada contarCaracteres que tome una cadena de texto y un carácter como parámetros, y devuelva el número de veces que aparece el carácter en la cadena. Por ejemplo, si se llama a la función con la cadena "Hola mundo" y el carácter "o", debería devolver el valor 2, ya que el carácter "o" aparece dos veces en la cadena.

// Complejidad: ALTA (3 puntos)

// Pista: Puedes usar la función strlen para obtener la longitud de una cadena. Por ejemplo, strlen("Hola") devolvería el valor 4.

function contarCaracteres($cadena, $caracter) {
    // Tu código aquí
}

// Tests
assert(contarCaracteres("Hola mundo", "o") == 2);
assert(contarCaracteres("La casa es roja", "a") == 3);
assert(contarCaracteres("La casa es roja", "z") == 0);

echo "Todas las pruebas pasaron";