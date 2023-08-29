<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>CV MAKER</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        main {
            flex: 1;
        }
    </style>
</head>

<body>
    <!-- create nav for CV Maker -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">CV Maker</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="true" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- create nav link -->
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <!-- create nav link -->
                    <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                    <a class="nav-link" href="about.html">About</a>
                    <a class="nav-link" href="contact_us.html">Contact Us</a>
                </div>
            </div>
        </div>
    </nav>

    <main>
        <div class="container">
            <div class="row">
                <h3 class="mt-4 text-center">Create Your Own CV</h3>
                <div class="row p-3">
                    <form action="php/create_cv.php" method="POST">
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="name" name="nama" required />
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required />
                        </div>
                        <div class="mb-3">
                            <label for="noHp" class="form-label">No. Hp</label>
                            <input type="tel" class="form-control" id="noHp" name="noHp" />
                        </div>
                        <div class="mb-3">
                            <div class="row">
                                <div class="col-6">
                                    <label for="kota" class="form-label">Kota</label>
                                    <input type="text" class="form-control" id="kota" name="kota" required />
                                </div>
                                <div class="col-6">
                                    <label for="negara" class="form-label">Negara</label>
                                    <input type="text" class="form-control" id="negara" name="negara" required />
                                </div>
                            </div>
                        </div>

                        <!-- deskripsi diri -->
                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi Diri</label>
                            <textarea class="form-control" id="deskripsi" rows="3" name="deskripsiDiri" required></textarea>
                        </div>

                        <!-- pengalaman Kerja -->
                        <h4 class="mb-3">Pengalaman Kerja</h4>
                        <hr>

                        <div class="mb-3">
                            <div class="row">
                                <div class="col-6">
                                    <!-- posisi -->
                                    <label for="posisi" class="form-label">Posisi</label>
                                    <input type="text" class="form-control" id="posisi" name="posisi" required />
                                </div>
                                <div class="col-6">
                                    <!-- nama perusahaan -->
                                    <label for="namaPerusahaan" class="form-label">Nama Perusahaan</label>
                                    <input type="text" class="form-control" id="namaPerusahaan" name="namaPerusahaan" required />
                                </div>
                            </div>
                        </div>

                        <!-- dari sampai -->
                        <div class="mb-3">
                            <div class="row">
                                <div class="col-6">
                                    <!-- dari -->
                                    <label for="dari" class="form-label">Dari</label>
                                    <input type="month" class="form-control" id="dari" name="dari" required />
                                </div>
                                <div class="col-6">
                                    <!-- sampai -->
                                    <label for="sampai" class="form-label">Sampai</label>
                                    <input type="month" class="form-control" id="sampai" name="sampai" required max="<?php
                                                                                                                        $date = date('Y-m');
                                                                                                                        echo $date;
                                                                                                                        ?>" />
                                </div>
                            </div>
                        </div>

                        <!-- jobdesk -->
                        <h6 class="mb-1">Jobdesk</h6>
                        <div class="mb-3">
                            <input type="text" class="form-control mb-2" id="jobdesk" name="jobdesk[]" required />
                            <input class="form-check-input" type="checkbox" id="addMoreJobdesk"> Tambah Jobdesk</input>
                            <div id="addJobdesk">
                            </div>
                        </div>


                        <!-- checkbox if its clicked add 1 more pengalaman kerja -->
                        <input class="form-check-input" type="checkbox" value="" id="tambahPengalamanKerja" /> Tambah Pengalaman Kerja

                        <div id="pengalamanKerjaOptional" class="mb-4"></div>

                        <!-- Pendidikan -->
                        <h4 class="mb-3">Pendidikan</h4>
                        <hr>

                        <!-- pendidikan terakhir -->
                        <div class="mb-3">
                            <label for="namaSekolah" class="form-label">Nama Sekolah</label>
                            <input type="text" class="form-control" id="namaSekolah" name="namaSekolah[]" required />
                        </div>

                        <!-- dari sampai -->
                        <div class="mb-3">
                            <div class="row">
                                <div class="col-6">
                                    <!-- dari -->
                                    <label for="dari" class="form-label">Dari</label>
                                    <input type="month" class="form-control" id="dari" name="dariSekolah[]" required />
                                </div>
                                <div class="col-6">
                                    <!-- sampai -->
                                    <label for="sampai" class="form-label">Sampai</label>
                                    <input type="month" class="form-control" id="sampai" name="sampaiSekolah[]" required max="<?php
                                                                                                                                $date = date('Y-m');
                                                                                                                                echo $date;
                                                                                                                                ?>" />
                                </div>
                            </div>
                        </div>

                        <!-- jurusan -->
                        <div class="mb-3">
                            <label for="jurusan" class="form-label">Jurusan</label>
                            <input type="text" class="form-control" id="jurusan" name="jurusan[]" required />
                        </div>

                        <!-- checkbox to add more pendidikan terakhir -->
                        <input class="form-check-input mb-2" type="checkbox" value="" id="tambahPendidikan" /> Tambah Pendidikan

                        <div id="pendidikanOptional" class="mb-4"></div>

                        <!-- Pengalaman Organissi -->
                        <h4 class="mb-3">Pengalaman Organisasi</h4>
                        <hr>

                        <div class="mb-3">
                            <div class="row">
                                <div class="col-6">
                                    <!-- jabatan -->
                                    <label for="jabatan" class="form-label">Jabatan</label>
                                    <input type="text" class="form-control" id="jabatan" name="jabatan[]" required />
                                </div>
                                <div class="col-6">
                                    <!-- organisasi -->
                                    <label for="organisasi" class="form-label">Organisasi</label>
                                    <input type="text" class="form-control" id="organisasi[]" name="organisasi" required />
                                </div>
                            </div>
                        </div>

                        <!-- dari sampai -->
                        <div class="mb-3">
                            <div class="row">
                                <div class="col-6">
                                    <!-- dari -->
                                    <label for="dari" class="form-label">Dari</label>
                                    <input type="month" class="form-control" id="dari" name="dariOrganisasi[]" required />
                                </div>
                                <div class="col-6">
                                    <!-- sampai -->
                                    <label for="sampai" class="form-label">Sampai</label>
                                    <input type="month" class="form-control" id="sampai" name="sampaiOrganisasi[]" required max="<?php
                                                                                                                                    $date = date('Y-m');
                                                                                                                                    echo $date;
                                                                                                                                    ?>" />
                                </div>
                            </div>
                        </div>

                        <!-- jobdesk -->
                        <h6 class="mb-1">Jobdesk</h6>
                        <div class="mb-3">
                            <input type="text" class="form-control mb-2" id="jobdeskOrganisasi" name="jobdeskOrganisasi[]" required />
                            <input class="form-check-input" type="checkbox" id="addMoreJobdeskOrganisasi"> Tambah Jobdesk</input>
                            <div id="addJobdeskOrganisasi">
                            </div>
                        </div>

                        <!-- checkbox if its clicked add 1 more pengalaman kerja -->
                        <input class="form-check-input" type="checkbox" value="" id="tambahPengalamanOrganisasi" /> Tambah Pengalaman Organisasi

                        <div id="pengalamanOrganisasiOptional" class="mb-4"></div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <footer class="bg-dark text-light text-center py-3">
        <p>&copy; 2023 CV Maker. All rights reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    <script>
        const pengalamanKerjaOptional = document.getElementById("pengalamanKerjaOptional");
        const tambahPengalamanKerja = document.getElementById("tambahPengalamanKerja");
        const addMoreJobdesk = document.getElementById("addMoreJobdesk");
        const addJobdesk = document.getElementById("addJobdesk");


        // if tambahPengalamanKerja is clicked, add 1 more pengalaman kerja
        tambahPengalamanKerja.addEventListener("click", function() {
            // if tambahPengalamanKerja is checked, add 1 more pengalaman kerja
            if (tambahPengalamanKerja.checked) {
                pengalamanKerjaOptional.innerHTML = `
                <div class="mb-3">
                            <div class="row">
                                <div class="col-6">
                                    <!-- posisi -->
                                    <label for="posisi" class="form-label">Posisi</label>
                                    <input type="text" class="form-control" id="posisi" name="posisi2" required />
                                </div>
                                <div class="col-6">
                                    <!-- nama perusahaan -->
                                    <label for="namaPerusahaan" class="form-label">Nama Perusahaan</label>
                                    <input type="text" class="form-control" id="namaPerusahaan" name="namaPerusahaan2" required />
                                </div>
                            </div>
                        </div>

                        <!-- dari sampai -->
                        <div class="mb-3">
                            <div class="row">
                                <div class="col-6">
                                    <!-- dari -->
                                    <label for="dari" class="form-label">Dari</label>
                                    <input type="month" class="form-control" id="dari" name="dari2" required />
                                </div>
                                <div class="col-6">
                                    <!-- sampai -->
                                    <label for="sampai" class="form-label">Sampai</label>
                                    <input type="month" class="form-control" id="sampai" name="sampai2" required max="<?php
                                                                                                                        $date = date('Y-m');
                                                                                                                        echo $date;
                                                                                                                        ?>" />
                                </div>
                            </div>
                        </div>

                        <!-- jobdesk -->
                        <h6 class="mb-1">Jobdesk</h6>
                        <div class="mb-3">
                            <input type="text" class="form-control mb-2" id="jobdesk2" name="jobdesk[]" required />
                            <input class="form-check-input" type="checkbox" id="addMoreJobdesk2">Tambah Jobdesk</input>                                
                            <div id="addJobdesk2">
                            </div>
                        </div>

                `;
                const addMoreJobdesk2 = document.getElementById("addMoreJobdesk2");
                const addJobdesk2 = document.getElementById("addJobdesk2");

                // if addMoreJobdesk2 is clicked, add 1 more jobdesk

                addMoreJobdesk2.addEventListener("click", function() {
                    // if addMoreJobdesk2 is checked, add 1 more jobdesk
                    if (addMoreJobdesk2.checked) {
                        addJobdesk2.innerHTML = `
                    <input type="text" class="form-control mb-1 mt-2" id="jobdesk2" name="jobdesk2[]" required />
                `;
                    } else {
                        addJobdesk2.innerHTML = "";
                    }
                });
            } else {
                pengalamanKerjaOptional.innerHTML = "";
            }
        });

        // if addMoreJobdesk is clicked, add 1 more jobdesk
        addMoreJobdesk.addEventListener("click", function() {
            // if addMoreJobdesk is checked, add 1 more jobdesk
            if (addMoreJobdesk.checked) {
                addJobdesk.innerHTML = `
                    <input type="text" class="form-control mb-1 mt-2" id="jobdesk" name="jobdesk[]" required />
                `;
            } else {
                addJobdesk.innerHTML = "";
            }
        });

        const tambahPendidikan = document.getElementById("tambahPendidikan");
        const pendidikanOptional = document.getElementById("pendidikanOptional");

        // if tambahPendidikan is clicked, add 1 more pendidikan
        tambahPendidikan.addEventListener("click", function() {
            // if tambahPendidikan is checked, add 1 more pendidikan
            if (tambahPendidikan.checked) {
                pendidikanOptional.innerHTML = `
                <!-- pendidikan terakhir -->
                        <div class="mb-3">
                            <label for="namaSekolah" class="form-label">Nama Sekolah</label>
                            <input type="text" class="form-control" id="namaSekolah" name="namaSekolah[]" required />
                        </div>

                        <!-- dari sampai -->
                        <div class="mb-3">
                            <div class="row">
                                <div class="col-6">
                                    <!-- dari -->
                                    <label for="dari" class="form-label">Dari</label>
                                    <input type="month" class="form-control" id="dari" name="dariSekolah[]" required />
                                </div>
                                <div class="col-6">
                                    <!-- sampai -->
                                    <label for="sampai" class="form-label">Sampai</label>
                                    <input type="month" class="form-control" id="sampai" name="sampaiSekolah[]" required max="<?php
                                                                                                                                $date = date('Y-m');
                                                                                                                                echo $date;
                                                                                                                                ?>" />
                                </div>
                            </div>
                        </div>  

                        <!-- jurusan -->
                        <div class="mb-3">
                            <label for="jurusan" class="form-label">Jurusan</label>
                            <input type="text" class="form-control" id="jurusan" name="jurusan[]" required />
                        </div>

                        <input class="form-check-input mb-2" type="checkbox" value="" id="tambahPendidikanThird" /> Tambah Pendidikan

                        <div id="pendidikanOptionalThird" class="mb-4"></div>
                        `;

                const pendidikanOptionalThird = document.getElementById("pendidikanOptionalThird");
                const tambahPendidikanThird = document.getElementById("tambahPendidikanThird");

                tambahPendidikanThird.addEventListener("click", function() {
                    if (tambahPendidikanThird.checked) {
                        pendidikanOptionalThird.innerHTML = `
                                <!-- pendidikan terakhir -->
                                    <div class="mb-3">
                                        <label for="namaSekolah" class="form-label">Nama Sekolah</label>
                                        <input type="text" class="form-control" id="namaSekolah" name="namaSekolah[]" required />
                                    </div>

                                    <!-- dari sampai -->
                                    <div class="mb-3">
                                        <div class="row">
                                            <div class="col-6">
                                                <!-- dari -->
                                                <label for="dari" class="form-label">Dari</label>
                                                <input type="month" class="form-control" id="dari" name="dariSekolah[]" required />
                                            </div>
                                            <div class="col-6">
                                                <!-- sampai -->
                                                <label for="sampai" class="form-label">Sampai</label>
                                                <input type="month" class="form-control" id="sampai" name="sampaiSekolah[]" required max="<?php
                                                                                                                                            $date = date('Y-m');
                                                                                                                                            echo $date;
                                                                                                                                            ?>" />
                                            </div>
                                        </div>
                                    </div>  

                                    <!-- jurusan -->
                                    <div class="mb-3">
                                        <label for="jurusan" class="form-label">Jurusan</label>
                                        <input type="text" class="form-control" id="jurusan" name="jurusan[]" required />
                                    </div>
                                    `;
                    } else {
                        pendidikanOptionalThird.innerHTML = "";
                    }
                });
            } else {
                pendidikanOptional.innerHTML = "";
            }
        });

        const addMoreJobdeskOrganisasi = document.getElementById("addMoreJobdeskOrganisasi");
        const addJobdeskOrganisasi = document.getElementById("addJobdeskOrganisasi");

        // if addMoreJobdeskOrganisasi is clicked, add 1 more jobdesk
        addMoreJobdeskOrganisasi.addEventListener("click", function() {
            // if addMoreJobdeskOrganisasi is checked, add 1 more jobdesk
            if (addMoreJobdeskOrganisasi.checked) {
                addJobdeskOrganisasi.innerHTML = `
                    <input type="text" class="form-control mb-1 mt-2" id="jobdeskOrganisasi" name="jobdeskOrganisasi[]" required />
                `;
            } else {
                addJobdeskOrganisasi.innerHTML = "";
            }
        });

        const tambahPengalamanOrganisasi = document.getElementById("tambahPengalamanOrganisasi");
        const pengalamanOrganisasiOptional = document.getElementById("pengalamanOrganisasiOptional");

        // if tambahPengalamanOrganisasi is clicked, add 1 more pengalaman organisasi
        tambahPengalamanOrganisasi.addEventListener('click', function() {
            if (tambahPengalamanOrganisasi.checked) {
                pengalamanOrganisasiOptional.innerHTML = `
                <div class="mb-3">
                            <div class="row">
                                <div class="col-6">
                                    <!-- jabatan -->
                                    <label for="jabatan" class="form-label">Jabatan</label>
                                    <input type="text" class="form-control" id="jabatan" name="jabatan[]" required />
                                </div>
                                <div class="col-6">
                                    <!-- organisasi -->
                                    <label for="organisasi"class="form-label">Organisasi</label>
                                    <input type="text" class="form-control" id="organisasi" name="organisasi[]" required />
                                </div>
                            </div>
                        </div>

                        <!-- dari sampai -->
                        <div class="mb-3">
                            <div class="row">
                                <div class="col-6">
                                    <!-- dari -->
                                    <label for="dari" class="form-label">Dari</label>
                                    <input type="month" class="form-control" id="dari" name="dariOrganisasi[]" required />
                                </div>
                                <div class="col-6">
                                    <!-- sampai -->
                                    <label for="sampai" class="form-label">Sampai</label>
                                    <input type="month" class="form-control" id="sampai" name="sampaiOrganisasi[]" required max="<?php
                                                                                                                                    $date = date('Y-m');
                                                                                                                                    echo $date;
                                                                                                                                    ?>" />
                                </div>
                            </div>
                        </div>  
                        <!-- jobdesk -->
                        <h6 class="mb-1">Jobdesk</h6>
                        <div class="mb-3">
                            <input type="text" class="form-control mb-2" id="jobdeskOrganisasi" name="jobdeskOrganisasi[]" required />
                            <input class="form-check-input" type="checkbox" id="addMoreJobdeskOrganisasi2"> Tambah Jobdesk</input>
                            <div id="addJobdeskOrganisasi2">
                            </div>
                        </div>
                        `;

                const addMoreJobdeskOrganisasi2 = document.getElementById("addMoreJobdeskOrganisasi2");
                const addJobdeskOrganisasi2 = document.getElementById("addJobdeskOrganisasi2");

                // if addMoreJobdeskOrganisasi2 is clicked, add 1 more jobdesk
                addMoreJobdeskOrganisasi2.addEventListener("click", function() {
                    // if addMoreJobdeskOrganisasi2 is checked, add 1 more jobdesk
                    if (addMoreJobdeskOrganisasi2.checked) {
                        addJobdeskOrganisasi2.innerHTML = `
                    <input type="text" class="form-control mb-1 mt-2" id="jobdeskOrganisasi" name="jobdeskOrganisasi[]" required />
                `;
                    } else {
                        addJobdeskOrganisasi2.innerHTML = "";
                    }
                });

            } else {

            }
        });


        // JavaScript code to handle form submission and displaying CV result
        // const form = document.querySelector("form");
        // const cvResult = document.getElementById("cv-result");

        // form.addEventListener("submit", function (event) {
        //     event.preventDefault(); // Prevent form submission

        //     // Fetch form values and create CV content
        //     const name = document.getElementById("name").value;
        //     const email = document.getElementById("email").value;
        //     const phone = document.getElementById("phone").value;

        //     const cvContent = `
        //             <p><strong>Name:</strong> ${name}</p>
        //             <p><strong>Email:</strong> ${email}</p>
        //             <p><strong>Phone:</strong> ${phone}</p>
        //             <!-- Add more content here as needed -->
        //         `;

        // Display CV content in the result div
        // cvResult.innerHTML = cvContent;
        // });
    </script>
</body>

</html>