<nav class="sidebar-nav">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('home') }}">
                <i class="nav-icon icon-speedometer"></i> Dashboard
            </a>
        </li>

        <li class="nav-item nav-dropdown">
            <a class="nav-link nav-dropdown-toggle" href="#">
                <i class="nav-icon icon-cursor"></i>
                Manajemen Produk
            </a>
            <ul class="nav-dropdown-items">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('category.index') }}">
                        <i class="nav-icon"></i>
                        Kategori
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('product.index') }}">
                        <i class="nav-icon"></i>
                        Produk
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('orders.index') }}">
                        <i class="nav-icon"></i>
                        Pesanan
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item nav-dropdown">
            <a class="nav-link nav-dropdown-toggle" href="javascript">
                <i class="nav-icon icon-cursor"></i>
                Laporan
            </a>
            <ul class="nav-dropdown-items">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('report.order') }}">
                        <i class="nav-icon"></i>
                        Order
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('report.return') }}">
                        <i class="nav-icon"></i>
                        Return
                    </a>
                </li>
            </ul>
        </li>
        
    </ul>
</nav>