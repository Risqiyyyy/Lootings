		<!-- BEGIN #sidebar -->
		<div id="sidebar" class="app-sidebar">
			<!-- BEGIN scrollbar -->
			<div class="app-sidebar-content" data-scrollbar="true" data-height="100%">
				<!-- BEGIN menu -->
				<div class="menu">
					<div class="menu-profile">
							<div class="menu-profile-cover with-shadow"></div>
							<div class="menu-profile-image">
								<img src="../assets/img/user/user-13.jpg" alt="" />
							</div>
							<div class="menu-profile-info">
								<div class="d-flex align-items-center">
									<div class="flex-grow-1">
										<?php echo auth()->user()->name; ?>
									</div>
								</div>
								<small>Frontend developer</small>
							</div>
					</div>
					<div class="menu-header">Pages</div>
                    <div class="menu-item">
                        <a href="{{ route('home') }}" class="menu-link">
                            <div class="menu-text">Dashboard</div>
                        </a>
                        <a href="{{ route('assets') }}" class="menu-link">
                            <div class="menu-text">Assets</div>
                        </a>
						<a href="{{ route('vm.index') }}" class="menu-link">
                            <div class="menu-text">VM</div>
                        </a>
                    </div>
                    <div class="menu-header">Control Panel</div>
					<div class="menu-item">
                        <a href="{{ route('users.index') }}" class="menu-link">
                            <div class="menu-text">Users</div>
                        </a>
                        <a href="{{ route('users.index') }}" class="menu-link">
                            <div class="menu-text">Data Permisions</div>
                        </a>
						<a href="" class="menu-link">
                            <div class="menu-text">Roles</div>
                        </a>
                    </div>
				</div>
				<!-- END menu -->
			</div>
			<!-- END scrollbar -->
		</div>
		<div class="app-sidebar-bg"></div>
		<div class="app-sidebar-mobile-backdrop"><a href="#" data-dismiss="app-sidebar-mobile" class="stretched-link"></a></div>
		<!-- END #sidebar -->