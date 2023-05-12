    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">
        <ul class="sidebar-nav" id="sidebar-nav">
            <li class="nav-heading">Management</li>
            <li class="nav-item">
                <a class="nav-link {{ $activeMenu == 'dashboard' ? '' : 'collapsed' }}" href="dashboard">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <!-- End Dashboard Nav -->

            <li class="nav-item">
                <a class="nav-link {{ $activeMenu == 'member' ? '' : 'collapsed' }}" href="member">
                    <i class="bi bi-people"></i>
                    <span>Members</span>
                </a>
            </li>
            <!-- End Members Page Nav -->
            <li class="nav-item">
                <a class="nav-link {{ $activeMenu == 'posts' ? '' : 'collapsed' }}" href="posts">
                    <i class="bi bi-chat-quote"></i>
                    <span>Posts</span>
                </a>
            </li>
            <!-- End Members Page Nav -->
            <li class="nav-item">
                <a class="nav-link {{ $activeMenu == 'events' ? '' : 'collapsed' }}" href="events">
                    <i class="bi bi-calendar-event"></i>
                    <span>Events</span>
                </a>
            </li>
            <!-- End Members Page Nav -->
            <li class="nav-heading">Contribution</li>
            <li class="nav-item">
                <a class="nav-link {{ $activeMenu == 'contribution' ? '' : 'collapsed' }}" href="contribution">
                    <i class="bi bi-piggy-bank"></i>
                    <span>Contributions Threads</span>
                </a>
            </li>
            <!-- End Members Page Nav -->
            <li class="nav-item">
                <a class="nav-link {{ $activeMenu == 'revenue' ? '' : 'collapsed' }}" href="revenue">
                    <i class="bi bi-currency-dollar"></i>
                    <span>Revenue Management</span>
                </a>
            </li>
            <!-- End Members Page Nav -->
            <li class="nav-heading">Others</li>
            <li class="nav-item">
                <a class="nav-link {{ $activeMenu == 'profile' ? '' : 'collapsed' }}" href="profile">
                    <i class="bi bi-person"></i>
                    <span>My Profile</span>
                </a>
            </li>
            <!-- End Members Page Nav -->
            <li class="nav-item">
                <a class="nav-link {{ $activeMenu == 'signout' ? '' : 'collapsed' }}" href="index">
                    <i class="bi bi-box-arrow-right"></i>
                    <span>Sign Out</span>
                </a>
            </li>
            <!-- End Members Page Nav -->
        </ul>
    </aside>
    <!-- End Sidebar-->
