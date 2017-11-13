<?php

/*

  Tenemos una tienda que vende tres artículos

  ID| REF       | Articulo              |  PRECIO
  ------------------------------------------------
  1 | TAZA      | Taza logo ticmedia    |   5.00€
  2 | CAMISETA  | Camiseta ticmedia     |  20.00€
  3 | LIBRETA   | Libreta ticmedia      |   7.50€


  Tenemos los siguientes descuentos (se pueden aplicar todos a la vez)
 * 3x2 en camisetas ( compras 3 pagas 2)
 * 3x4 en tazas (compras 4, pagas 3)
 * Si compras más de 3 libretas su precio baja a 6.50€
 * Si el precio del ticket sube de 50€ tienes un 10% de descuentos


  Debes implementar un sistema para calcular el precio, si recibes un array con
  la compra realizada según pasa or el lector

  Examplos:

  $aCompra = [ 'TAZA','TAZA','TAZA','TAZA' ];
  Total: 15,00€

  $aCompra = [ 'LIBRETA','LIBRETA','LIBRETA','TAZA' ];
  Total: 24,50€

  $aCompra = [ 'CAMISETA','CAMISETA','LIBRETA','TAZA','CAMISETA','LIBRETA','TAZA','CAMISETA','LIBRETA','LIBRETA','LIBRETA' ];
  Total: 92,25€

Para realizar los test hemos definido constantes


 * 
 */

class supermercado {


    function __constructor() {
        
    }

    function calcula_precio($aCompra = array()) {
        
    }

}
