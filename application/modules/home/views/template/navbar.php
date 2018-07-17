<!-- Navbar -->
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
<!-- Brand -->
<a class="navbar-brand" href="#" id="logo-menu">
<img src="<?php echo base_url('assets/img/logo.png'); ?>" alt="Jazz Logo" style="width:90px;">
</a>

<!-- Toggler/collapsibe Button -->
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu">
  <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbar-menu">
<!-- Links -->
<div class="mr-auto">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#" id="home-menu">Home</a>
    </li>
    <?php if($this->session->userdata('l') == 'administrator' || $this->session->userdata('l') == 'operator'): ?>
    <li class="nav-item" id="reservation-container">
      <a class="nav-link" href="#" id="reservation-menu">Reservation</a>
    </li>
  <?php endif; ?>

    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="service" data-toggle="dropdown">
        Services
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Restaurant</a>
        <a class="dropdown-item" href="#">Rooms</a>
        <a class="dropdown-item" href="#">Salon & Spa</a>
        <a class="dropdown-item" href="#">Barber Shop</a>
        <a class="dropdown-item" href="#">Others</a>
      </div>
    </li>

    <!-- Dropdown -->
    <?php if($this->session->userdata('l') == 'administrator'):  ?>
    <li class="nav-item dropdown" id="master-data-container">
      <a class="nav-link dropdown-toggle" href="#" id="master-data-menu" data-toggle="dropdown">
        Master Data
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" id="emp-submenu">Employees</a>
        <a class="dropdown-item" id="rooms-submenu">Rooms</a>
      </div>
    </li>
  <?php endif; ?>

    <li class="nav-item"><a href="#" class="nav-link">About</a></li>
    <li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
  </ul>
</div>

<div class="ml-auto">
  <ul class="navbar-nav">
    <form class="form-inline" action="#">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" id="search">
    </form>

    <?php if($this->session->userdata('l') == 'operator' || $this->session->userdata('l') == 'administrator'):  ?>
    <li class="nav-item">
      <a class="nav-link finger" role="button" id="setting-menu"  title="Setting">
        <span class="octicon octicon-tools"></span>
      </a>
    </li>
  <?php endif; ?>

    <li class="nav-item">
      <a class="nav-link finger" role="button" id="user-welcome">
        <span class="small" id="user-profile" style="">Welcome,<br /> <?php echo ($this->session->userdata('n')) ? $this->session->userdata('n') : 'Guest'; ?></span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link finger" role="button" id="<?php echo ($this->session->userdata('n')) ? 'log-out' : 'log-in' ?>" title="Sign <?php echo ($this->session->userdata('n')) ? 'out' : 'in'; ?>">
        <span class="octicon <?php echo ($this->session->userdata('n')) ? 'octicon-sign-out' : 'octicon-sign-in'; ?>"></span>
      </a>
    </li>
  </ul>
</div>

</div>
</nav>
<!-- End of Navbar -->
