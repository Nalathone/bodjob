<?php 
  $mn_dashboard="";
  $mn_Mmain="";
  $mn_Mmain1="";
  $mn_employee="";
  $mn_product="";
  $mn_customer="";
  $mn_exchange="";
  $mn_supplier="";


  
  


  if ($_GET['d'] =='index') {
    $mn_dashboard="active";
  } else if ($_GET['d'] =='master/company') {
    $mn_Mmain="menu-open";
    $mn_Mmain1="active";
    $mn_company="active";
  } 
  else if ($_GET['d'] =='master/employee') {
    $mn_Mmain="menu-open";
    $mn_Mmain1="active";
    $mn_employee="active";
  } else if ($_GET['d'] =='master/product') {
    $mn_Mmain="menu-open";
    $mn_Mmain1="active";
    $mn_product="active";
  }  
  else if ($_GET['d'] =='master/customer') {
    $mn_Mmain="menu-open";
    $mn_Mmain1="active";
    $mn_customer="active";
  } else if ($_GET['d'] =='master/exchange') {
    $mn_Mmain="menu-open";
    $mn_Mmain1="active";
    $mn_exchange="active";
  } else if ($_GET['d'] =='master/supplier') {
    $mn_Mmain="menu-open";
    $mn_Mmain1="active";
    $mn_supplier="active";
  }  
    
  
?>
<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
     
      <span class="brand-text font-weight-light">Demo System</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <!-- <div class="image">
          <?php 
          // $imagePath = "dist/img/users/".$_SESSION['EGTKCOINuser_pic'];
          // if (!file_exists($imagePath) || $_SESSION['EGTKCOINuser_pic']=='') {           
          //   $imagePath = "dist/img/users/userImage.png";
          // }
          ?>
          <img src="<?=$imagePath?>" class="img-circle elevation-2" alt="User Image">
        </div> -->
        <div class="info">
          <a href="#" class="d-block"><?=$_SESSION['name'].' '.$_SESSION['surname']?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">        
          <li class="nav-item">
            <a href="index.php?d=index" class="nav-link <?=$mn_dashboard?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard               
              </p>
            </a>
          </li>   
             
          <li class="nav-item has-treeview <?=$mn_Mmain?>">
            <a href="#" class="nav-link <?=$mn_Mmain1?>">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Master Data
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?d=master/employee" class="nav-link <?=$mn_employee ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Employee</p>
                </a>
              </li>
             
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?d=master/product" class="nav-link <?=$mn_product ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Product</p>
                </a>
              </li>
             
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?d=master/customer" class="nav-link <?=$mn_customer ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Customer</p>
                </a>
              </li>
             
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?d=master/exchange" class="nav-link <?=$mn_exchange ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>exchange</p>
                </a>
              </li>
             
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?d=master/supplier" class="nav-link <?=$mn_supplier ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>supplier</p>
                </a>
              </li>
             
            </ul>
            
            
          </li>   

         
             
            </ul>
          </li>   
       
        
                           
        </ul>

      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>