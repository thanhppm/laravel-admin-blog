<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-transparent fixed-top text-white" style="background-color: rgba(0, 0, 0, 0.44)!important;">
  <div class="container">
    <div class="navbar-wrapper">
      <a class="navbar-brand" href="{{ route('home') }}">LARAVEL 5.8</a>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
      <span class="sr-only">Toggle navigation</span>
      <span class="navbar-toggler-icon icon-bar"></span>
      <span class="navbar-toggler-icon icon-bar"></span>
      <span class="navbar-toggler-icon icon-bar"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end">
      <ul class="navbar-nav">
        <li class="nav-item ">
          <a href="{{ route('bank') }}" class="nav-link">
            <i class="material-icons">account_balance</i> Ngân hàng
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.dashboard') }}" class="nav-link">
            <i class="material-icons">dashboard</i> Quản trị
          </a>
        </li>
        @guest
          <li class="nav-item">
            <a href="{{ route('register') }}" class="nav-link">
              <i class="material-icons">person_add</i> Đăng ký
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('login') }}" class="nav-link">
              <i class="material-icons">fingerprint</i> Đăng nhập
            </a>
          </li>
        @else
          <li class="nav-item dropdown">
            <a class="nav-link" href="#" id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="material-icons">person</i> {{ Auth::user()->name }}
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Profile</a>
              <a class="dropdown-item" href="#">Settings</a>

              <div class="dropdown-divider"></div>

              <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  {{ __('Log out') }}
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
            </div>
          </li>
        @endguest
      </ul>
    </div>
  </div>
</nav>
<!-- End Navbar -->