
            <div class="nav-bar-header-one">
                <div class="header-logo">
                    <a href="{{ route('cultivationIndex') }}">
                        <img src="{{ asset('/public/back-office/') }}/img/logo.png" class="logosize" alt="logo">
                    </a>
                </div>
                 <div class="toggle-button sidebar-toggle">
                    <button type="button" class="item-link">
                        <span class="btn-icon-wrap">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="d-md-none mobile-nav-bar">
               <button class="navbar-toggler pulse-animation" type="button" data-toggle="collapse" data-target="#mobile-navbar" aria-expanded="false">
                    <i class="far fa-arrow-alt-circle-down"></i>
                </button>
                <button type="button" class="navbar-toggler sidebar-toggle-mobile">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
            <div class="header-main-menu collapse navbar-collapse" id="mobile-navbar">
                <ul class="navbar-nav">
                    <li class="navbar-item header-search-bar">
                        <div class="input-group stylish-input-group">
                            <span class="input-group-addon">
                                <button type="submit">
                                    <span class="flaticon-search" aria-hidden="true"></span>
                                </button>
                            </span>
                            <input type="text" class="form-control" placeholder="Find Something . . .">
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    @php
                        $cultivationAdmin = \App\Models\CultivationAdmin::orderBy('id','DESC')->limit(1)->first();
                        if(!empty($cultivationAdmin)):
                            $adminName      =   $cultivationAdmin->adminName;
                            $adminEmail     =   $cultivationAdmin->adminMail;
                            $userId         =   $cultivationAdmin->adminUser;
                            $adminMobile    =   $cultivationAdmin->adminMobile;
                            $adminType      =   $cultivationAdmin->adminType;
                        else:
                            $adminName      =   "Abu Yousuf";
                            $adminEmail     =   "cultivation@virtualitprofessional.com";
                            $userId         =   "Spark Coder";
                            $adminMobile    =   "01678909091";
                            $adminType      =   "Admin";
                        endif;
                    @endphp
                    <li class="navbar-item dropdown header-admin">
                        <a class="navbar-nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                            aria-expanded="false">
                            <div class="admin-title">
                                <h5 class="item-title">{{ $adminName }}</h5>
                                <span>{{ $adminType }}</span>
                            </div>
                            <div class="admin-img">
                                <img src="{{ asset('/public/back-office/') }}/img/figure/admin.jpg" alt="Admin">
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="item-header">
                                <h6 class="item-title">{{ $adminName }}</h6>
                            </div>
                            <div class="item-content">
                                <ul class="settings-list">
                                    <li><a href="{{ route('adminProfile') }}"><i class="flaticon-user"></i>Profile</a></li>
                                    <li><a href="{{ route('serverConfig') }}"><i class="flaticon-gear-loading"></i>Configuration</a></li>
                                    <li><a href="{{ route('adminLogout') }}"><i class="flaticon-turn-off"></i>Log Out</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>