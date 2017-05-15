<?php

class adminController{
    private $model;
    public function __contruct() {
        try {
        $this->model=new admin();
        } catch (Exception $ex) {
            die($ex->getMessage());
        }
    }


    public function admin(){
        
        require_once ('view/all/header.php');
        require_once ('view/admin/navbar.php');
        require_once ('view/admin/rename.php');
        require_once ('view/admin/companions.php');
        require_once ('view/admin/file.php');
        require_once ('view/admin/registry.php');
        require_once ('view/admin/history.php');
        require_once ('view/admin/entrada.php');
        require_once ('view/admin/bahia.php');
        require_once ('view/all/footer.php');
        
      }
      
      public function ultimo(){
          require_once ('view/all/header.php');
          require_once ('view/all/navbar.php');
          require_once ('view/admin/ultimoingreso.php');
          require_once ('view/all/footer.php');
      }
      
      public function actividad() {
          require_once ('view/all/header.php');
          require_once ('view/all/navbar.php');
          require_once ('view/admin/activity.php');
          require_once ('view/all/footer.php');
      }
      
      public function tipo() {
          require_once ('view/all/header.php');
          require_once ('view/all/navbar.php');
          require_once ('view/admin/atencion-al-usuario.php');
          require_once ('view/all/footer.php');
      }
      
      public function problem() {
          require_once ('view/all/header.php');
          require_once ('view/all/navbar.php');
          require_once ('view/admin/tablaproblem.php');
          require_once ('view/all/footer.php');
      }
      
      public function vehiculo() {
          require_once ('view/all/header.php');
          require_once ('view/all/navbar.php');
          require_once ('view/admin/tablavehiculo.php');
          require_once ('view/all/footer.php');
      }
}

 
