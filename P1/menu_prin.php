
    <?php
    
    class Menu {
      private $enlaces=array();
      private $titulos=array();
      private $ditems=array();
     
      public function cargarOpcion($en,$tit,$dit)
      {
        $this->enlaces[]=$en;
        $this->titulos[]=$tit;
        $this->ditems[]=$dit;
      }
     
      
      public function mostrarHorizontal()
      {
        for($f=0;$f<count($this->enlaces);$f++)
        {
          echo "<section>";
          echo "<nav>";
          echo '<ul class="menuItems">';
          echo "<li>";
          echo '<a href="'.$this->enlaces[$f].'" data-item="'.$this->ditems[$f].'">'.$this->titulos[$f].'</a>';
                  
         echo "</li>";
         echo "</ul>";
          echo "</nav>";
          echo "</section>";
        }
      }
     
      public function mostrarVertical()
      {
        for($f=0;$f<count($this->enlaces);$f++)
        {
          echo "<section>";
          echo "<nav>";
          echo '<ul class="menuItems">';
          echo "<li>";
          echo '<a href="'.$this->enlaces[$f].'">'.$this->titulos[$f].'</a>';
          
          
          echo "</li>";
          echo "</ul>";
          echo "</nav>";
          echo "</section>";
        }
      }
    }
     

    $menu1=new Menu();
  
    $menu1->cargarOpcion('../index.php','Home', 'Home');
    $menu1->cargarOpcion('estadistica.php','Estadistica','Estadistica');
    $menu1->cargarOpcion('informatica.php','Informatica','Informatica');
    $menu1->cargarOpcion('matematica.php','Matematica','Matematica');
    $menu1->cargarOpcion('login.php','Login','Login');
     
   
    //$menu1->mostrarVertical();
    echo "<hr>";
    $menu1->mostrarHorizontal();
    echo "<hr>";
    ?>
  
   