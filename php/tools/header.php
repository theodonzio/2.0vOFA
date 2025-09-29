    <header>
    
    <div class="sidebar-wrapper d-flex flex-column flex-shrink-0 p-3 bg-dark" style="width: 280px;">
        <div class="logo">
            <img src="img/ofalogos/fulltextpositivo.png">
        </div>

    <!--Este es el listado de opciones\links a los diferentes apartados-->
        <ul class="nav nav-pills flex-column mb-auto">
            <p class="mt-3">General</p>
                <li class="nav-item">
                    <a href="#" class="nav-link active" aria-current="page"><img src="../img/icons/home_icon.png" class="_icon">Inicio</a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link link-light"><img src="../img/icons/timetable_icon.png" class="_icon">Horarios</a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link link-light"><img src="../img/icons/space_icon.png" class="_icon">Espacios</a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link link-light"><img src="../img/icons/teach_icon.png" class="_icon">Docentes</a>
                </li>

            <p class="mt-3">Herramientas</p>
                <li class="nav-item">
                    <a href="#" class="nav-link link-light"><img src="../img/icons/inbox_icon.png" class="_icon">Mensajes</a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link link-light"><img src="../img/icons/alert_icon.png" class="_icon">Alertar</a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link link-light"><img src="../img/icons/config_icon.png" class="_icon">Configuración</a>
                </li>

            <p class="mt-3">Cuenta</p>
                <li class="nav-item">
                    <a href="#" class="nav-link link-light"><img src="../img/icons/maleuser_icon.png" class="_icon">Perfil</a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link link-light"><img src="../img/icons/exit_icon.png" class="_icon">Salir</a>
                </li>
        </ul>
    </div>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>

            <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>

            <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
</header>

<!-- Bootstrap Bundle JS (dropdown y tooltip) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous" ></script>
<!-- Inicialización de tooltips -->
<script>
    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
    const tooltipList = [...tooltipTriggerList].map(el => new bootstrap.Tooltip(el));
</script>

<script src="../js/app.js"></script>
