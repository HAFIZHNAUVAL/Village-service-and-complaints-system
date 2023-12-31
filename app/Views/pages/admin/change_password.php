<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header position-relative">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="logo">
                            <a href="<?php echo base_url('User/dashboard') ?>">Sispaldeba</a>
                        </div>
                        <div class="theme-toggle d-flex gap-2  align-items-center mt-2">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--system-uicons" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 21 21">
                                <g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M10.5 14.5c2.219 0 4-1.763 4-3.982a4.003 4.003 0 0 0-4-4.018c-2.219 0-4 1.781-4 4c0 2.219 1.781 4 4 4zM4.136 4.136L5.55 5.55m9.9 9.9l1.414 1.414M1.5 10.5h2m14 0h2M4.135 16.863L5.55 15.45m9.899-9.9l1.414-1.415M10.5 19.5v-2m0-14v-2" opacity=".3"></path>
                                    <g transform="translate(-210 -1)">
                                        <path d="M220.5 2.5v2m6.5.5l-1.5 1.5"></path>
                                        <circle cx="220.5" cy="11.5" r="4"></circle>
                                        <path d="m214 5l1.5 1.5m5 14v-2m6.5-.5l-1.5-1.5M214 18l1.5-1.5m-4-5h2m14 0h2"></path>
                                    </g>
                                </g>
                            </svg>
                            <div class="form-check form-switch fs-6">
                                <input class="form-check-input  me-0" type="checkbox" id="toggle-dark">
                                <label class="form-check-label"></label>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                <path fill="currentColor" d="m17.75 4.09l-2.53 1.94l.91 3.06l-2.63-1.81l-2.63 1.81l.91-3.06l-2.53-1.94L12.44 4l1.06-3l1.06 3l3.19.09m3.5 6.91l-1.64 1.25l.59 1.98l-1.7-1.17l-1.7 1.17l.59-1.98L15.75 11l2.06-.05L18.5 9l.69 1.95l2.06.05m-2.28 4.95c.83-.08 1.72 1.1 1.19 1.85c-.32.45-.66.87-1.08 1.27C15.17 23 8.84 23 4.94 19.07c-3.91-3.9-3.91-10.24 0-14.14c.4-.4.82-.76 1.27-1.08c.75-.53 1.93.36 1.85 1.19c-.27 2.86.69 5.83 2.89 8.02a9.96 9.96 0 0 0 8.02 2.89m-1.64 2.02a12.08 12.08 0 0 1-7.8-3.47c-2.17-2.19-3.33-5-3.49-7.82c-2.81 3.14-2.7 7.96.31 10.98c3.02 3.01 7.84 3.12 10.98.31Z"></path>
                            </svg>
                        </div>
                        <div class="sidebar-toggler  x">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>
                        <li class="sidebar-item  ">
                            <a href="<?php echo base_url('Admin/dashboard') ?>" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-title">Administrator</li>
                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-card-list"></i>
                                <span>Responses</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="<?php echo base_url('Admin/response_layanan') ?>">Layanan</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="<?php echo base_url('Admin/aduan') ?>">Aduan</a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-person-fill"></i>
                                <span>User</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="<?php echo base_url('Admin/all_user') ?>">All</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="<?php echo base_url('Admin/register') ?>">Register</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-title">Settings</li>
                        <li class="sidebar-item  has-sub active">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-person"></i>
                                <span>Account</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="<?php echo base_url('Admin/profile') ?>">Profile</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="<?php echo base_url('Admin/settings_profile') ?>">Settings</a>
                                </li>
                                <li class="submenu-item">
                                    <a href="<?php echo base_url('Admin/show_home') ?>">Home</a>
                                </li>
                                <li class="submenu-item active ">
                                    <a href="<?php echo base_url('Admin/change_password') ?>">Change Password</a>
                                </li>
                            </ul>
                        </li>



                    </ul>
                </div>
            </div>
        </div>
        <div id="main" class='layout-navbar'>
            <header class='mb-3'>
                <nav class="navbar navbar-expand navbar-light navbar-top">
                    <div class="container-fluid">
                        <a href="#" class="burger-btn d-block">
                            <i class="bi bi-justify fs-3"></i>
                        </a>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mb-lg-0">
                            </ul>
                            <div class="dropdown">
                                <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="user-menu d-flex">
                                        <div class="user-name text-end me-3">
                                            <h6 class="mb-0 text-gray-600"> <?= session('username'); ?></h6>
                                            <p class="mb-0 text-sm text-gray-600"> <?php
                                                                                    $role = session('role');

                                                                                    if ($role === '0') {
                                                                                        echo 'Masyarakat';
                                                                                    } elseif ($role === '1') {
                                                                                        echo 'Admin';
                                                                                    }
                                                                                    ?></p>
                                        </div>
                                        <div class="user-img d-flex align-items-center">
                                            <div class="avatar avatar-md">
                                                <?php if ($avatarData) : ?>
                                                    <img width="150" class="rounded-circle " src="<?= base_url() . "/assets/images/profile/" . $avatarData['image']; ?>">
                                                <?php else : ?>
                                                    <img src="<?php echo base_url('assets/images/profile/default.jpg') ?>">
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton" style="min-width: 11rem;">
                                    <li>
                                        <h6 class="dropdown-header">Hello, <?= session('username'); ?></h6>
                                    </li>
                                    <li><a class="dropdown-item" href="<?php echo base_url('Admin/profile') ?>"><i class="icon-mid bi bi-person me-2"></i> Profile Saya</a></li>
                                    <li><a class="dropdown-item" href="<?php echo base_url('Admin/settings_profile') ?>"><i class="icon-mid bi bi-gear me-2"></i>
                                            Pengaturan Akun</a></li>
                                    <li><a class="dropdown-item" href="<?php echo base_url('Admin/change_password') ?>"><i class="icon-mid bi bi-wallet me-2"></i>
                                            Change Password</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="<?php echo base_url('Auth/logout') ?>"><i class="icon-mid bi bi-box-arrow-left me-2"></i> Keluar</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </header>

        </div>
        <div id="main">
            <header class="mb-3">

            </header>

            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Ganti Password</h3>
                            <p class="text-subtitle text-muted">Silahkan ganti password demi keamanan pengguna.</p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo base_url('Admin/dashboard') ?>">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Ganti password</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="mb-5">
                    <a data-bs-toggle="tooltip" data-bs-original-title="Kembali ke halaman sebelumnya." href="<?php echo base_url('Admin/dashboard') ?>" class="btn btn-secondary px-3 pt-2 me-2">
                        <span class="fa-fw fa-lg select-all fas text-white"><i class="bi-arrow-left text-white"></i></span>
                    </a>
                </div>
                <!-- Change Password -->

                <?php if (session()->has('errors')) : ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <?php foreach (session('errors') as $error) : ?>
                            <p><?= $error ?></p>
                        <?php endforeach; ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif; ?>

                <?php if (session()->has('error')) : ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <p><?= session('error') ?></p>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif; ?>

                <?php if (session()->has('success')) : ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong><?= session('success'); ?></strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif; ?>




                <form method="post" action="<?php echo base_url('Admin/changePassword') ?>" class="form-horizontal" role="form">
                    <section class="section">
                        <div class="card mb-5">
                            <div class="card-header">
                                <div class="d-flex align-items-center">
                                    <h3 class="card-title">Password</h3>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 col-12 mb-1">
                                        <div class="form-group has-icon-left">
                                            <label for="current_password" class="form-label">Password Saat Ini</label>
                                            <div class="position-relative">
                                                <input type="password" class="form-control py-2" placeholder="password lama" id="password" name="password" maxlength="255" />
                                                <div class="form-control-icon">
                                                    <i class="bi bi-key py-2"></i>
                                                </div>
                                                <div class="invalid-feedback d-block">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12 mb-1">
                                        <div class="form-group has-icon-left ">
                                            <label for="new_password" class="form-label">Password Baru</label>
                                            <div class="position-relative">
                                                <input type="password" class="form-control py-2" placeholder="password baru" id="new_password" name="new_password" maxlength="255" />
                                                <div class="form-control-icon">
                                                    <i class="bi bi-key-fill py-2"></i>
                                                </div>
                                                <div class="invalid-feedback d-block">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12 mb-1">
                                        <div class="form-group has-icon-left ">
                                            <label for="new_password" class="form-label">Konfirmasi Password</label>
                                            <div class="position-relative">
                                                <input type="password" class="form-control py-2" placeholder="konfirmasi password" id="confirm_password" name="confirm_password" maxlength="255" />
                                                <div class="form-control-icon">
                                                    <i class="bi bi-key-fill py-2"></i>
                                                </div>
                                                <div class="invalid-feedback d-block">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row my-2">
                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="show_change_pw">
                                            <label class="form-check-label" id="label-show_pw" for="show_change_pw">
                                                Tampilkan Password
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 mt-3 d-flex justify-content-start">
                                        <button type="submit" value="Change Password" class="btn btn-success mb-2 btn-pill">
                                            Submit
                                        </button>
                                        &nbsp;&nbsp;
                                        <a href="<?php echo base_url('Admin/dashboard') ?>" class="btn btn-danger mb-2 btn-pill ">Batal</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </section>
                </form>
            </div>