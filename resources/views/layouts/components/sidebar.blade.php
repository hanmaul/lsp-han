<!-- Left Sidenav -->
<div class="left-sidenav">

    <ul class="metismenu left-sidenav-menu" id="side-nav">
        <li class="menu-title">Dashboard</li>
        <li>
            <a href="#"><i class="mdi mdi-monitor"></i><span>Dashboard</span><span class="badge badge-danger badge-pill float-right">9+</span></a>
        </li>
        @if(Auth::user()->level == "Admin Utama")
        <li class="menu-title">General</li>
        <li>
            <a href="#"><i class="mdi mdi-cards-playing-outline"></i><span>Toko</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
        </li>
        <li>
            <a href="#"><i class="mdi mdi-buffer"></i><span>Pengguna</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
        </li>
        <li class="menu-title">Spesifik</li>
        <li>
            <a href="javascript: void(0);"><i class="mdi mdi-map"></i><span>Units</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
        </li>
        <li>
            <a href="javascript: void(0);"><i class="mdi mdi-lock-outline"></i><span>PPN</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
        </li>
        <li>
            <a href="javascript: void(0);"><i class="mdi mdi-book-open-page-variant"></i><span>Currencies</span><span class="badge badge-success float-right">Hot</span></a>
        </li>
        <li>
            <a href="javascript: void(0);"><i class="mdi mdi-book-open-page-variant"></i><span>Persentase Keuntungan</span><span class="badge badge-success float-right">Hot</span></a>
        </li>
        <li>
            <a href="javascript: void(0);"><i class="mdi mdi-book-open-page-variant"></i><span>Kategori Produk</span><span class="badge badge-success float-right">Hot</span></a>
        </li>
        <li class="menu-title">Produk</li>
        <li>
            <a href="javascript:void(0);"><i class="mdi mdi-contact-mail"></i><span>Produk</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
            <ul class="nav-second-level" aria-expanded="false">
                <li><a href="email-templates-basic.html">Semua Produk</a></li>
                <li><a href="email-templates-alert.html">Laporan Produk Masuk</a></li>
                <li><a href="email-templates-billing.html">Stok Kosong</a></li>
            </ul>
        </li>
        <li class="menu-title">Transaksi</li>
        <li>
            <a href="javascript: void(0);"><i class="mdi mdi-book-open-page-variant"></i><span>Transaksi</span><span class="badge badge-success float-right">Hot</span></a>
        </li>
        <li>
            <a href="javascript: void(0);"><i class="mdi mdi-book-open-page-variant"></i><span>Riwayat Transaksi</span><span class="badge badge-success float-right">Hot</span></a>
        </li>
        @endif
        @if(Auth::user()->level == "Admin Gudang")
        <li class="menu-title">Spesifik</li>
        <li>
            <a href="javascript: void(0);"><i class="mdi mdi-map"></i><span>Units</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
        </li>
        <li>
            <a href="javascript: void(0);"><i class="mdi mdi-lock-outline"></i><span>PPN</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
        </li>
        <li>
            <a href="javascript: void(0);"><i class="mdi mdi-book-open-page-variant"></i><span>Currencies</span><span class="badge badge-success float-right">Hot</span></a>
        </li>
        <li>
            <a href="javascript: void(0);"><i class="mdi mdi-book-open-page-variant"></i><span>Persentase Keuntungan</span><span class="badge badge-success float-right">Hot</span></a>
        </li>
        <li>
            <a href="javascript: void(0);"><i class="mdi mdi-book-open-page-variant"></i><span>Kategori Produk</span><span class="badge badge-success float-right">Hot</span></a>
        </li>
        <li class="menu-title">Produk</li>
        <li>
            <a href="javascript:void(0);"><i class="mdi mdi-contact-mail"></i><span>Produk</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
            <ul class="nav-second-level" aria-expanded="false">
                <li><a href="email-templates-basic.html">Semua Produk</a></li>
                <li><a href="email-templates-alert.html">Laporan Produk Masuk</a></li>
                <li><a href="email-templates-billing.html">Stok Kosong</a></li>
            </ul>
        </li>
        @endif
        @if(Auth::user()->level == "Kasir")
        <li class="menu-title">Transaksi</li>
        <li>
            <a href="javascript: void(0);"><i class="mdi mdi-book-open-page-variant"></i><span>Transaksi</span><span class="badge badge-success float-right">Hot</span></a>
        </li>
        <li>
            <a href="javascript: void(0);"><i class="mdi mdi-book-open-page-variant"></i><span>Riwayat Transaksi</span><span class="badge badge-success float-right">Hot</span></a>
        </li>
        @endif
    </ul>
</div>
<!-- end left-sidenav-->