<?php

/*classe texpression
* classe abstrata para gerenciar expressões
*/
 abstract texpression {
    // operadores lógicos 
    const AND_OPERATOR = 'AND';
    const OR_OPERATOR = 'OR';

    //marc método dump cono obrigatório

    abstract public function dump(l);
 }