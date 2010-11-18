<?php

/**
 * Proposta
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    monomanager
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class Proposta extends BaseProposta
{
    const NAO_ANALISADO = 0;
    const LIBERADO = 1;
    const APROVADO = 2;
    const REPROVADO = 3;

    static $status = array(
        self::NAO_ANALISADO => "Não analisado",
        self::LIBERADO => "Liberado",
        self::APROVADO => "Aprovado",
        self::REPROVADO => "Reprovado"
    );
}