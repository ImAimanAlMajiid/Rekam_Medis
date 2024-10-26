@extends('layout.main')

<style>
    * {
        margin: 0;
        padding: 0;
        outline: none;
        border: none;
        text-decoration: none;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
    }

    /* Reset dan styling dasar */
    body {
        font-family: Arial, sans-serif;
        background-color: #f8f9fa;
        margin: 0;
        padding: 50px;
    }

    h1, h2 {
        color: #333;
    }

    .container-fluid {
        max-width: 1700px; /* Lebar diperbesar */
        margin: 0 auto;
        padding-right: 40px
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }



    .card {
        margin-top: 20px;
        border: 1px solid #e0e0e0;
        border-radius: 20px;
        box-shadow: 0 4px 12px rgba(214, 37, 37, 0.1);
    }

    .card-body {
        padding: 20px;
        background: rgb(255, 255, 255);
        border-radius: 20px;
        text-align: center;
        color: black;
    }

    /* Styling tombol tambah */
    .button-container {
        margin-right: auto;
        display: flex;
        margin-bottom: 10px;
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
        color: #fff;
        padding: 10px 15px;
        border-radius: 5px;
        text-transform: uppercase;
        cursor: pointer;
    }

    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #004a99;
    }

    /* Styling tabel */
    .table {
        width: 100%;
        margin-bottom: 1rem;
        background-color: transparent;
    }

    .table-bordered {
        border-collapse: collapse;
        border: none;
    }

    .table-bordered th, .table-bordered td {
        border: none;
        padding: 10px;
        text-align: center;
    }

    /* Responsive styling */
    @media (max-width: 768px) {
        .container-fluid {
            padding: 10px;
        }

        .table-responsive {
            overflow-x: auto;
        }
    }

    .btn-primary {
display: inline-block;
padding: 10px 20px;
background-color: #007bff;
color: #fff;
text-align: center;
border-radius: 5px;
text-decoration: none;
font-weight: bold;
transition: background-color 0.3s ease;
}

.btn-primary:hover {
background-color: #0056b3;
}

.btn-primary:active {
background-color: #004085;
transform: scale(0.98);
}

</style>

<div class="container-fluid" id="content">
    <h1>Lembar Persetujuan</h1>
    <br>

    <!-- Konten lainnya seperti tabel atau form -->
    <div class="card">
        <div class="card-body">
            <h2>Persetujuan Pasien</h2>


            <div class="button-container">
                <a href="tambahpersetujuan" class="btn btn-primary {{ Request::is('tambah-identitas') ? 'active' : '' }}">
                    Tambah Persetujuan
                </a>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Lengkap</th>
                            <th>Jenis Kelamin Pasien</th>
                            <th>Alamat</th>
                            <th>Nama Wali</th>
                            <th>Tanggal Lahir Pasien</th>
                            <th>Alamat Wali</th>
                            <th>TanTan wali</th>
                            <th>TanTan Dokter</th>
                            <th>TanTan Saksi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>DINO ANGGORO SASONGKO</td>
                            <td>Laki-laki</td>
                            <td>jl.soekarno</td>
                            <td>ANDI</h1></td>
                            <td>02-22-2022</td>
                            <td>jl.soekarno</td>
                            <td>image</td>
                            <td>image</td>
                            <td>image</td>
                            <td>
                                <button type="button" class="btn btn-info"><i class="fa fa-edit"></i></button>
                                <button type="button" class="btn btn-warning"><i class="fa-solid fa-file-lines"></i></button>
                                <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@section('container')

@endsection
