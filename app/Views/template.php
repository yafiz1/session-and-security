<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>
<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary" id="sideNav">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
            <span class="d-block d-lg-none">Clarence Taylor</span>
            <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" width="50" src="<?php echo base_url('') ?>" alt="" /></span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <?php if (session()->get('jabatan') == 'pustakawan'):?>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?= base_url(); ?>/perpustakaan/anggota">Anggota</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?= base_url(); ?>/perpustakaan/buku">Buku</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?= base_url(); ?>/perpustakaan/peminjaman">Peminjaman</a></li>
                <?php elseif (session()->get('jabatan' == 'kepala')):?>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?= base_url(); ?>/perpustakaan/petugas">Petugas</a></li>
                <?php endif; ?>
            </ul>
        </div>
    </nav>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
        <div class="container-fluid">
            
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <span class="d-block d-lg-none">Clarence Taylor</span>
                <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" width="50" src="<?php echo base_url('') ?>" alt="" /></span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
                    <?php if (session()->get('jabatan') == 'pustakawan'):?>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?= base_url(); ?>/perpustakaan/anggota">Anggota</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?= base_url(); ?>/perpustakaan/buku">Buku</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?= base_url(); ?>/perpustakaan/peminjaman">Peminjaman</a></li>
                    <?php elseif (session()->get('jabatan' == 'kepala')):?>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?= base_url(); ?>/perpustakaan/petugas">Petugas</a></li>
                    <?php endif; ?>
                </ul>

                 <span class="form-inline my-2 my-lg-0">
                    <a href="/Login/logout" style="text-decoration: none; color: white;"><b>Logout</b></a>
                </span>
            </div>
        </div>
    </nav>
    <div class="container-fluid p-0 mt-4">
        <?php echo view($content) ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>