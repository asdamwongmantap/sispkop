
<div class="container body">
    <div class="main_container">
    <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border:0px solid black;">
              <a href="#" class="site_title"><i class="fa fa-bank"></i> <span><small>SISPKOP</small></span></a>
            </div>
            
            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="{{ asset('/assets/images/logoawr.png')}}" alt="user" class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>{{auth()->user()->name}}</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->
			
            <br />
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
              @if (auth()->user()->level == '1')
              <ul class="nav side-menu">
                    <h3>General</h3>
               <li><a href="/sispkop/dashboard"><i class="fa fa-home"></i> Dashboard </a></li>
               <!-- <li><a href="/sispkop/liststaff"><i class="fa fa-users"></i> List Staff </a></li> -->
               <li><a href="/sispkop/listuser"><i class="fa fa-users"></i> List Pengguna </a></li>
               <h3>Data Anggota Koperasi</h3>
               <li><a href="/sispkop/mytask"><i class="fa fa-money"></i> Simpanan Anggota </a></li>
               <li><a href="/sispkop/mytask"><i class="fa fa-money"></i> Pinjaman Anggota </a></li>
               <li><a href="/sispkop/mytask"><i class="fa fa-money"></i> Angsuran Anggota</a></li>
               <h3>Laporan</h3>
               <li><a href="/sispkop/mytask"><i class="fa fa-file-pdf-o"></i> Laporan Bulanan </a></li>
               <li><a href="/sispkop/mytask"><i class="fa fa-file-pdf-o"></i> Laporan Tahunan </a></li>
              <h3>Others</h3>
              <li><a href="/sispkop/logout"><i class="fa fa-sign-out"></i> Logout </a></li>
              
                    </ul>
                    @else
                    <ul class="nav side-menu">
                    <h3>General</h3>
               <li><a href="/sispkop/dashboard"><i class="fa fa-home"></i> Dashboard </a></li>
               <!-- <li><a href="/sispkop/liststaff"><i class="fa fa-users"></i> List Staff </a></li> -->
               <h3>Data Transaksi</h3>
               <li><a href="/sispkop/mytask"><i class="fa fa-money"></i> Pinjaman </a></li>
               <li><a href="/sispkop/mytask"><i class="fa fa-money"></i> Angsuran </a></li>
               <h3>Others</h3>
              <li><a href="/sispkop/logout"><i class="fa fa-sign-out"></i> Logout </a></li>
              
                    </ul>
                    @endif
                
                
				
              </div>
              
            </div>
            <!-- /sidebar menu -->

          </div>
        </div>
        <!-- <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                 
				  <a class="user-profile dropdown-toggle">
                    <img src="{{ asset('/assets/prod/images/img.jpg')}}" alt="">asdam
                   
                  </a>
                
                </li>
              </ul>
            </nav>
          </div>
        </div> -->
        <!-- /top navigation -->
        