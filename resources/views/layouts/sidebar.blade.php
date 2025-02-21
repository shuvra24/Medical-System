<aside id="menubar" class="menubar light">
    <div class="app-user">
        <div class="media">
            <div class="media-left">
                <div class="avatar avatar-md avatar-circle">
                    <a href="javascript:void(0)"><img class="img-responsive" src="assets/images/images.png"
                            alt="avatar" /></a>
                </div>
            </div>
            <div class="media-body">
                <div class="foldable">
                    <h5><a href="javascript:void(0)" class="username">{{ Auth::user()->name }}</a></h5>
                    <ul>
                        <li class="dropdown">
                            <a href="javascript:void(0)" class="dropdown-toggle usertitle" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <small>{{ Auth::user()->email }}</small>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="menubar-scroll">
        <div class="menubar-scroll-inner">
            <ul class="app-menu">
                <li class="has-submenu {{ Route::currentRouteName() == 'dashboard' ? 'active' : '' }}">
                    <a href="{{ route('dashboard') }}">
                        
                        <span class="menu-text">Dashboard</span>

                    </a>

                </li>

                <li class="has-submenu">
                    <a href="javascript:void(0)" class="submenu-toggle">
                        <span class="menu-text">Appointment</span>
                        <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{ route('newAppointment') }}"><span class="menu-text">New Appointment</span></a>
                        </li>
                        <li><a href="{{ route('aprvAppointment') }}"><span class="menu-text">Approved
                                    Appointment</span></a>
                        </li>
                        <li><a href="{{ route('cancelAppointment') }}"><span class="menu-text">Cancelled
                                    Appointment</span></a>
                        </li>
                        <li><a href="{{ route('allAppointment') }}"><span class="menu-text">All Appointment</span></a>
                        </li>

                    </ul>
                </li>
            </ul>
        </div>
    </div>
</aside>
