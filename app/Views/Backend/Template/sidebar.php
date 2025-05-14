	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
	    <form role="search">
	        <div class="form-group">
	            <input type="text" class="form-control" placeholder="Search">
	        </div>
	    </form>
	    <ul class="nav menu">
			<li class="nav-item"><a class="nav-link" href="<?= base_url('admin/dashboard-admin'); ?>"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
          	
			<li class="parent ">
				<a href="#">
					<span class="glyphicon glyphicon-list"></span> Data Aset <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="glyphicon glyphicon-s glyphicon-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li><a class="dropdown-item" href="<?= base_url('data-kendaraan'); ?>"><i class="fas fa-car"></i> Data Kendaraan</a></li>
					<li><a class="dropdown-item" href="<?= base_url('data-properti'); ?>"><i class="fas fa-home"></i> Data Properti</a></li>
					<li><a class="dropdown-item" href="<?= base_url('data-elektronik'); ?>"><i class="fas fa-tv"></i> Data Elektronik</a></li>
				</ul>
			</li>


          	<li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-chart-bar"></i> Rekapitulasi</a></li>
          	<li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-file-alt"></i> Report</a></li>
          	<li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-database"></i> Backup Database</a></li>

	      
	        <li role="presentation" class="divider"></li>
	        <li><a href="login.html"><span class="glyphicon glyphicon-user"></span> Login Page</a></li>
	    </ul>
	    <div class="attribution">Template by <a href="http://www.medialoot.com/item/lumino-admin-bootstrap-template/">Medialoot</a></div>
	</div><!--/.sidebar-->