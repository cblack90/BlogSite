<nav class="navbar-menu has-shadow">
            <div class="navbar-start container">
                <div class="navbar-brand">
                    <a class="navbar-item" href="{{route('home')}}">
                        <img src="{{asset('images/Chris_Black_logo2.png')}}" alt="CBlack logo" width="218" height="300" />
                    </a>
                    <a href="" class="navbar-item is-tab is-hidden-mobile m-l-10">Blog</a>
                    <a href="" class="navbar-item is-tab is-hidden-mobile">Resources</a>
                </div>
                <div class="navbar-end "> <!-- is-right-->
                    <!--  Not sure if I will end up using this sort of log in as I wont have other users  -->
                    @if(Auth::guest())
                        <a href="{{route('login')}}" class="navbar-item is-tab">Login</a>
                        <a href="{{route('register')}}" class="navbar-item is-tab">Sign up</a>
                    @else
                        <div class="navbar-item has-dropdown is-hoverable"><!-- is-aligned-right navbar-item is-tab -->
                            <span class="navbar-link is-active">Hello Chris</span>
                            <!-- <div class="dropdown-trigger">
                                <button class="button" aria-haspopup="true" aria-controls="dropdown-menu">
                                    <span>Hello Chris</span> Figure out to grab the user name. its just me, but a good practice to learn
                                    <span class="icon is-small"><i class="fas fa-angle-down" aria-hidden="true"></i></span>
                                </button>
                            </div> -->
                            <div class="navbar-dropdown" id="dropdown-menu" role="menu">
                                    <a href="" class="navbar-item">Profile</a>
                                    <a href="" class="navbar-item">Notification</a>
                                    <a href="" class="navbar-item">Settings</a>
                                    <a href="{{route('manage.dashboard')}}" class="navbar-item">Manage</a>
                                    <hr class="navbar-divider"></hr>
                                    <a href="{{ url('/logout')}}" class="navbar-item">Logout</a> 
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </nav>