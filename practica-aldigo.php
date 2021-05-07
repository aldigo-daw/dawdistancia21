<?php

/**
 * Esta función Suma, resta y multiplica dos números dados
 *
 * @author Ángel Luis Díaz González
 * @version 1.2
 * @param integer $n1 primer valor a calcular
 * @param integer $n2 segundo valor a calcular
 * @param string $operacion escriba una de las siguientes operaciones
 * 		Sumar, Restar, Multiplicar
 * @return integer $resultado numero resultante de resolver las operaciones
 * @access private
 * {@internal añadir en próxima implementación la división.}}
 */
function operaciones($n1, $n2, $operacion) {
	$resultado = 0;
	if($operacion == "Sumar") {
		$resultado = $n1 + $n2;
		}else if($operacion == "Restar") {
			$resultado = $n1 - $n2;
				}else if($operacion == "Multiplicar") {
					$resultado = $n1 * $n2;
				}

	return $resultado; // Devolver el resultado
}

/**
 * Imprime en pantalla el resultado de la variable $r
 * esta variable almacena el resultado devuelto por la 
 * función operaciones
 *
 * @author Ángel Luis Díaz González
 * @param integer $r resultado de la función operaciones
 * @version 1.3
 * @access private
*/
function imprimePantalla($r) {
	echo $r . "<br>";
}


/**
 * Aquí empezamos a invocar funciones
 * @access public
*/

$r = operaciones(5, 7, "Sumar");
imprimePantalla($r);
?>
