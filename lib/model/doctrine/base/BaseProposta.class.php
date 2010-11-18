<?php

/**
 * BaseProposta
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $projeto_id
 * @property integer $status
 * @property string $comentarios
 * @property date $data_submissao
 * @property date $data_feedback
 * @property string $documento
 * @property Projeto $Projeto
 * 
 * @method integer  getProjetoId()      Returns the current record's "projeto_id" value
 * @method integer  getStatus()         Returns the current record's "status" value
 * @method string   getComentarios()    Returns the current record's "comentarios" value
 * @method date     getDataSubmissao()  Returns the current record's "data_submissao" value
 * @method date     getDataFeedback()   Returns the current record's "data_feedback" value
 * @method string   getDocumento()      Returns the current record's "documento" value
 * @method Projeto  getProjeto()        Returns the current record's "Projeto" value
 * @method Proposta setProjetoId()      Sets the current record's "projeto_id" value
 * @method Proposta setStatus()         Sets the current record's "status" value
 * @method Proposta setComentarios()    Sets the current record's "comentarios" value
 * @method Proposta setDataSubmissao()  Sets the current record's "data_submissao" value
 * @method Proposta setDataFeedback()   Sets the current record's "data_feedback" value
 * @method Proposta setDocumento()      Sets the current record's "documento" value
 * @method Proposta setProjeto()        Sets the current record's "Projeto" value
 * 
 * @package    monomanager
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseProposta extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('proposta');
        $this->hasColumn('projeto_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('status', 'integer', 1, array(
             'type' => 'integer',
             'length' => 1,
             ));
        $this->hasColumn('comentarios', 'string', null, array(
             'type' => 'string',
             ));
        $this->hasColumn('data_submissao', 'date', null, array(
             'type' => 'date',
             ));
        $this->hasColumn('data_feedback', 'date', null, array(
             'type' => 'date',
             ));
        $this->hasColumn('documento', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Projeto', array(
             'local' => 'projeto_id',
             'foreign' => 'id'));
    }
}