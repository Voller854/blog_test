<!-- Control Sidebar -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <div class="sidebar">

    <ul class="pt-3 nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item">
            <a href="{{route('main.index')}}" class="nav-link">
                <i class="navi-icon fas fa-bold"></i>
                <p>
                    Блог
                </p>

            </a>
        </li> <li class="nav-item">
            <a href="{{route('main.index')}}" class="nav-link">
                <i class="navi-icon fas fa-home"></i>
                <p>
                    Личный кабинет
                </p>

            </a>
        </li>
        <li class="nav-item">
            <a href="{{route('personal.liked.index')}}" class="nav-link">
                <i class="navi-icon far fa-heart"></i>
                <p>
                    Понравившиеся посты
                </p>

            </a>
        </li>
        <li class="nav-item">
            <a href="{{route('personal.comment.index')}}" class="nav-link">
                <i class="navi-icon far fa-comment"></i>
                <p>
                    Комментарии
                </p>

            </a>
        </li>

    </ul>
    </div>
</aside>
<!-- /.control-sidebar -->
