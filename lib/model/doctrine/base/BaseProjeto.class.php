<?php

/**
 * BaseProjeto
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $titulo
 * @property integer $estudante_id
 * @property integer $professor_id
 * @property string $coorientadores
 * @property integer $semestre_id
 * @property integer $tipo_colacao
 * @property Estudante $Estudante
 * @property Professor $Professor
 * @property Semestre $Semestre
 * @property Proposta $Proposta
 * @property Defesa $Defesa
 * 
 * @method string    getTitulo()         Returns the current record's "titulo" value
 * @method integer   getEstudanteId()    Returns the current record's "estudante_id" value
 * @method integer   getProfessorId()    Returns the current record's "professor_id" value
 * @method string    getCoorientadores() Returns the current record's "coorientadores" value
 * @method integer   getSemestreId()     Returns the current record's "semestre_id" value
 * @method integer   getTipoColacao()    Returns the current record's "tipo_colacao" value
 * @method Estudante getEstudante()      Returns the current record's "Estudante" value
 * @method Professor getProfessor()      Returns the current record's "Professor" value
 * @method Semestre  getSemestre()       Returns the current record's "Semestre" value
 * @method Proposta  getProposta()       Returns the current record's "Proposta" value
 * @method Defesa    getDefesa()         Returns the current record's "Defesa" value
 * @method Projeto   setTitulo()         Sets the current record's "titulo" value
 * @method Projeto   setEstudanteId()    Sets the current record's "estudante_id" value
 * @method Projeto   setProfessorId()    Sets the current record's "professor_id" value
 * @method Projeto   setCoorientadores() Sets the current record's "coorientadores" value
 * @method Projeto   setSemestreId()     Sets the current record's "semestre_id" value
 * @method Projeto   setTipoColacao()    Sets the current record's "tipo_colacao" value
 * @method Projeto   setEstudante()      Sets the current record's "Estudante" value
 * @method Projeto   setProfessor()      Sets the current record's "Professor" value
 * @method Projeto   setSemestre()       Sets the current record's "Semestre" value
 * @method Projeto   setProposta()       Sets the current record's "Proposta" value
 * @method Projeto   setDefesa()         Sets the current record's "Defesa" value
 * 
 * @package    monomanager
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseProjeto extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('projeto');
        $this->hasColumn('titulo', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('estudante_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('professor_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('coorientadores', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('semestre_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('tipo_colacao', 'integer', 1, array(
             'type' => 'integer',
             'length' => 1,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Estudante', array(
             'local' => 'estudante_id',
             'foreign' => 'id'));

        $this->hasOne('Professor', array(
             'local' => 'professor_id',
             'foreign' => 'id'));

        $this->hasOne('Semestre', array(
             'local' => 'semestre_id',
             'foreign' => 'id'));

        $this->hasOne('Proposta', array(
             'local' => 'id',
             'foreign' => 'projeto_id',
             'cascade' => array(
             0 => 'delete',
             )));

        $this->hasOne('Defesa', array(
             'local' => 'id',
             'foreign' => 'projeto_id',
             'cascade' => array(
             0 => 'delete',
             )));
    }
}