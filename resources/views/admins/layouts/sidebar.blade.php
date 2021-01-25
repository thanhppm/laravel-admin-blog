<div class="sidebar" data-color="rose" data-background-color="white" data-image="{{ asset('assets/img/sidebar-1.jpg') }}">
	<!-- 
    Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"
		Tip 2: you can also add an image using data-image tag 
  -->
  <div class="logo">
      <a href="{{ route('admin.dashboard') }}" class="simple-text logo-mini">  </a>
      <a href="{{ route('admin.dashboard') }}" class="simple-text logo-normal"> ADMINISTRATOR </a>
  </div>
  <div class="sidebar-wrapper">
    <div class="user">
      <div class="photo">
        <img src="{{ asset('assets/img/faces/avatar.jpg') }}" />
      </div>
      <div class="user-info">
        <a data-toggle="collapse" href="#collapseExample" class="username">
          <span>{{ Auth::user()->name }}</span>
        </a>
      </div>
    </div>
    <ul class="nav">
      <?php
        $url_current = explode('/',url()->current());
        isset($url_current[6]) ? $model = $url_current[6] : $model = '';
        isset($url_current[7]) ? $model_child = $url_current[7] : $model_child = '';
      ?>
      <li
        @if( $model == '' && $model_child == '' )
          class="nav-item active"
        @else
          class="nav-item"
        @endif
      >
        <a class="nav-link" href="{{ route('admin.dashboard') }}">
          <i class="material-icons">home</i>
          <p> Bảng điều khiển </p>
        </a>
      </li>

      <li 
        @if( $model == 'system' )
          class="nav-item active"
        @else
          class="nav-item"
        @endif
      >
        <a class="nav-link" data-toggle="collapse" href="#pagesExamples">
          <i class="material-icons">verified_user</i>
          <p> Quản trị hệ thống
            <b class="caret"></b>
          </p>
        </a>
        <div id="pagesExamples" 
          @if( $model == 'system' )
              class="collapse show"
          @else
              class="collapse"
          @endif
        >
          <ul class="nav">
            <li 
              @if( $model_child == 'user' )
                  class="nav-item active"
              @else
                  class="nav-item"
              @endif
            >
              <a class="nav-link" href="{{ route('admin.system.user.index') }}">
                <span class="sidebar-mini"> U </span>
                <span class="sidebar-normal"> Người dùng hệ thống </span>
              </a>
            </li>
            
            <li
              @if( $model_child == 'role' )
                  class="nav-item active"
              @else
                  class="nav-item"
              @endif
            >
              <a class="nav-link" href="{{ route('admin.system.role.index') }}">
                <span class="sidebar-mini"> R </span>
                <span class="sidebar-normal"> Nhóm và phân quyền </span>
              </a>
            </li>

            <li
                @if( $model_child == 'permission' )
                    class="nav-item active"
                @else
                    class="nav-item"
                @endif
              >
                <a class="nav-link" href="{{ route('admin.system.permission.index') }}">
                  <span class="sidebar-mini"> Q </span>
                  <span class="sidebar-normal"> Quản lý quyền </span>
                </a>
              </li>
          </ul>
        </div>
      </li>
    </ul>
  </div>
</div>