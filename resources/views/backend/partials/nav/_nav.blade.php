<nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
                <div class="top-left-part">
                    <!-- Logo -->
                    <a class="logo" href="{{route('admin.home')}}">
                        <!-- Logo icon image, you can use font-icon also --><b>
                        <!--This is dark logo icon-->{{-- <img src="{{URL::to('frontend/ample-admin-lite/plugins/images/admin-logo.png')}}" alt="home" class="dark-logo" /> --}}<!--This is light logo icon-->{{-- <img src="{{URL::to('frontend/ample-admin-lite/plugins/images/admin-logo-dark.png') }}" alt="home" class="light-logo" /> --}}

                        cscwebforum
                     </b>
                        <!-- Logo text image you can use text also -->{{-- <span class="hidden-xs">
                        <!--This is dark logo text--><img src="{{URL::to('frontend/ample-admin-lite/plugins/images/admin-text.png') }}" alt="home" class="dark-logo" /> --}}<!--This is light logo text-->{{-- <img src="{{URL::to('frontend/ample-admin-lite/plugins/images/admin-text-dark.png') }}" alt="home" class="light-logo" />
                     </span> --}} </a>
                </div>
                <!-- /Logo -->
                <ul class="nav navbar-top-links navbar-right pull-right">
                    {{-- <li>
                        <form role="search" class="app-search hidden-sm hidden-xs m-r-10">
                            <input type="text" placeholder="Search Users..." class="form-control" id="searchPlatformUser"> <a href=""><i class="fa fa-search"></i></a> </form>
                    </li> --}}
                    <li>
                       {{--  <a class="profile-pic" href="{{route('admin.home')}}"> <img src="{{URL::to('frontend/ample-admin-lite/plugins/images/users/varun.jpg') }}" alt="user-img" width="36" class="img-circle"> --}}
                        <b class="hidden-xs">
                            
                            {{ auth()->user()->name }}

                        </b></a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>