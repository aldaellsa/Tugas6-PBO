<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link <?php echo e(Request::is('/') ? 'active' : ''); ?>" aria-current="page" href="/">
                    <span data-feather="home"></span>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo e(Request::is('mahasiswa*') ? 'active' : ''); ?>" href="/mahasiswa">
                    <span data-feather="file-text"></span>
                    Mahasiswa
                </a>
            </li>
        </ul>
    </div>
</nav><?php /**PATH C:\xampp\htdocs\Tugas6\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>