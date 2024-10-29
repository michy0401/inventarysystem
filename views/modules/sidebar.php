<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="dashboard" class="brand-link">
    <img src="views/dist/img/pill.png" alt="img pill" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Inventory System</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
          
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
        <li class="nav-item menu-open">
          <a href="dashboard" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>

        <li class="nav-item menu-open">
          <a href="user" class="nav-link">
            <i class="nav-icon fas fa-solid fa-user"></i>
            <p>
              User
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="product" class="nav-link">
            <i class="nav-icon fas fa-solid fa-pills"></i>
            <p>
              Productos
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="product" class="nav-link">
                <i class="fas fa-solid fa-syringe nav-icon"></i>
                <p>Base de datos</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="product" class="nav-link">
                <i class="fas fa-solid fa-syringe nav-icon"></i>
                <p>Agregar Producto</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="product" class="nav-link">
                <i class="fas fa-solid fa-syringe nav-icon"></i>
                <p>Eliminar Producto</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="product" class="nav-link">
                <i class="fas fa-solid fa-syringe nav-icon"></i>
                <p>Fixed Sidebar</p>
              </a>
            </li>
            
          </ul>
        </li>
          

      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>

  
<!-- /.sidebar -->
</aside>
