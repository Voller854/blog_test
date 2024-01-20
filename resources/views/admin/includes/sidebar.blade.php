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
            </li>   <li class="nav-item">
                <a href="{{route('admin.main.index')}}" class="nav-link">
                    <i class="navi-icon fas fa-home"></i>
                    <p>
                        Главная
                    </p>

                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.user.index')}}" class="nav-link">
                    <i class="navi-icon far fa-address-card"></i>
                    <p>
                        Пользователи
                    </p>

                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.post.index')}}" class="nav-link">
                    <i class="navi-icon fas far fa-clipboard"></i>
                    <p>
                        Посты
                    </p>

                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.category.index')}}" class="nav-link">
                    <i class="navi-icon fas fa-layer-group"></i>
                    <p>
                        Категории
                    </p>

                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.tag.index')}}" class="nav-link">
                    <i class="navi-icon far fa-clone"></i>
                    <p>
                        Теги
                    </p>

                </a>
            </li>
        </ul>
    </div>
</aside>
<!-- /.control-sidebar -->
