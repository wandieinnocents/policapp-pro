@if (Auth::check())
    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        @include('backpack::inc.sidebar_user_panel')

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
          {{-- <li class="header">{{ trans('backpack::base.administration') }}</li> --}}
          <!-- ================================================ -->
          <!-- ==== Recommended place for admin menu items ==== -->
          <!-- ================================================ -->
          <li><a href="{{ backpack_url('dashboard') }}"><i class="fa fa-dashboard"></i> <span>{{ trans('backpack::base.dashboard') }}</span></a></li>

          <li><a href="{{ backpack_url('crime') }}"><i class="fa fa-gavel"></i> <span>Crimes</span></a></li>
          <li><a href="{{ backpack_url('criminalreport') }}"><i class="fa fa-cloud"></i> <span>Criminal Reports</span></a></li>
          {{-- <li><a href="{{ backpack_url('casefeed') }}"><i class="fa fa-comments"></i> <span>Case Feeds</span></a></li> --}}

          <!-- Messages -->
         {{--  <li class="treeview">
              <a href="#"><i class="fa fa-envelope"></i> <span>Messages</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="{{ backpack_url('message') }}"><i class="fa fa-envelope"></i> <span>Messages</span></a></li>
                <li><a href="{{ backpack_url('participant') }}"><i class="fa fa-group"></i> <span>Participants</span></a></li>
                <li><a href="{{ backpack_url('thread') }}"><i class="fa fa-envelope-square"></i> <span>Threads</span></a></li>
              </ul>
          </li> --}}

          <!-- Users, Roles Permissions -->
          <li class="treeview">
            <a href="#"><i class="fa fa-group"></i> <span>Users, Roles, Permissions</span> <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
              <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/user') }}"><i class="fa fa-user"></i> <span>Users</span></a></li>
              <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/role') }}"><i class="fa fa-group"></i> <span>Roles</span></a></li>
              <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/permission') }}"><i class="fa fa-key"></i> <span>Permissions</span></a></li>
            </ul>
          </li>

          <!-- ======================================= -->
          {{-- <li class="header">Other menus</li> --}}
          <li class="treeview">
              <a href="#"><i class="fa fa-cogs"></i> <span>Advanced</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="{{ backpack_url('elfinder') }}"><i class="fa fa-files-o"></i> <span>File manager</span></a></li>
                <li><a href="{{ backpack_url('backup') }}"><i class="fa fa-hdd-o"></i> <span>Backups</span></a></li>
                <li><a href="{{ backpack_url('log') }}"><i class="fa fa-terminal"></i> <span>Logs</span></a></li>
                <li><a href="{{ backpack_url('setting') }}"><i class="fa fa-cog"></i> <span>Settings</span></a></li>
              </ul>
          </li>


        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>
@endif
