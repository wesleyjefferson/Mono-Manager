<?php

/**
 * Usuario
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    monomanager
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class Usuario extends BaseUsuario
{
  const ESTUDANTE = 'estudante';
  const PROFESSOR = 'professor';
  const COMISSAO = 'comissao';
  const ADMIN = 'admin';

  public function getFullname(){
    return $this->getFirstName() . " " . $this->getLastName();
  }

  public static function parseUser(sfGuardUser $user){
    $usuario = UsuarioTable::getInstance()->find($user->getId());
    return $usuario;
  }

  public function isEstudante(){
    return (boolean)$this->getEstudante()->exists();
  }

  public function isProfessor(){
    return (boolean)$this->getProfessor()->exists();
  }

  public function isComissao(){
    if($this->isProfessor()){
      return $this->getProfessor()->isComissao();
    }
    return false;
  }

  public function isSubstituto(){
    if($this->isProfessor()){
      return $this->getProfessor()->isSubstituto();
    }
    return false;
  }

}
