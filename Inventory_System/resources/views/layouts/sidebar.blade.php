<aside class="main-sidebar">
    <section class="sidebar">

        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('user-profile.png') }} " class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ \Auth::user()->name  }}</p>
                <!-- Status -->
                <a href="{{route('home')}}"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <ul class="sidebar-menu" data-widget="tree">

            <li>
                <a href="{{route('home')}}" class="nav-link link-dark">
                    <i class="fa fa-dashboard"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{route('categories')}}" class="nav-link link-dark">
                    <i class="fa fa-cubes"></i>
                    <span>Categories</span>
                </a>
            </li>
            <li>
                <a href="{{route('products')}}" class="nav-link link-dark">
                    <i class="fa fa-cubes"></i>
                    <span>Products</span>
                </a>
            </li>
            <li>
                <a href="{{route('users')}}" class="nav-link link-dark">
                    <i class="fa fa-users"></i>
                    <span>Users</span>
                </a>
            </li>
        </ul>
    </section>
</aside>
