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
        max-width: 1600px;
        margin: 0 auto;
        padding: 20px;
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
        /* Menghilangkan semua border */
    }

    .table-bordered th,
    .table-bordered td {
        border: none;
        /* Menghilangkan pemisah di antara kolom dan baris */
        padding: 10px;
        text-align: center;
    }

    /* Radius hanya untuk ujung kiri dan kanan */
    .table-bordered thead th:first-child {
        border-top-left-radius: 6px;
        border-bottom-left-radius: 6px;
    }

    .table-bordered thead th:last-child {
        border-top-right-radius: 6px;
        border-bottom-right-radius: 6px;
    }

    .table-bordered tbody td:first-child {
        border-bottom-left-radius: 10px;
    }

    .table-bordered tbody td:last-child {
        border-bottom-right-radius: 10px;
    }

    .table th {
        background-color: #007bff;
        color: white;
    }

    .table tbody tr:nth-child(even) {
        background-color: #f2f2f2;
    }



    /* Styling tombol aksi */
    .btn {
        padding: 5px 10px;
        font-size: 14px;
        border-radius: 4px;
        text-decoration: none;
        color: #fff;
    }

    .btn-info {
        background-color: #17a2b8;
        border-color: #17a2b8;
    }

    .btn-info:hover {
        background-color: #117a8b;
        border-color: #10707f;
    }

    .btn-danger {
        background-color: #dc3545;
        border-color: #dc3545;
    }

    .btn-danger:hover {
        background-color: #c82333;
        border-color: #bd2130;
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


/* Gaya dasar tombol */
#tambahButton {
    background-color: #007bff;
    color: white;
    padding: 10px 20px;
    font-size: 16px;
    font-weight: bold;
    border: none;
    border-radius: 25px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    transition: background-color 0.3s ease, transform 0.2s ease;

}


/* Efek hover */
#tambahButton:hover {
    background-color: #0056b3; /* Warna biru yang lebih gelap saat hover */
    transform: translateY(-3px); /* Tombol sedikit naik saat di-hover */
    box-shadow: 0 8px 10px rgba(0, 0, 0, 0.15); /* Tambahkan bayangan saat hover */
}

/* Efek saat tombol ditekan */
#tambahButton:active {
    background-color: #004085; /* Warna biru lebih gelap saat tombol ditekan */
    transform: translateY(0); /* Kembalikan tombol ke posisi semula saat ditekan */
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Kembalikan bayangan normal */
}

/* Gaya responsif untuk layar kecil */
@media (max-width: 768px) {
    #tambahButton {
        padding: 8px 16px; /* Padding yang lebih kecil di layar kecil */
        font-size: 14px; /* Ukuran teks lebih kecil */
    }
}
</style>

<div class="container-fluid" id="content">
    <h1>Lembar Signifikan</h1>
    <br>

    <!-- Konten lainnya seperti tabel atau form -->
    <div class="card">
        <div class="card-body">
            <h2>Lembar Signifikan Pasien</h2>
            <br>

            <!-- Pindahkan tombol di sini -->
            <div class="button-container">
                <a href="tambahsignifikan" class="btn btn-primary {{ Request::is('tambah-identitas') ? 'active' : '' }}">
                    Tambah Signifikan
                </a>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Lengkap</th>
                            <th>Diagnosis</th>
                            <th>Dasar Diagnosis</th>
                            <th>Tindakan</th>
                            <th>Tujuan</th>
                            <th>Risiko</th>
                            <th>Prognosis</th>
                            <th>Hal penyelamatan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Dino</td>
                            <td>Cancer Otak</td>
                            <td>inti</td>
                            <td>bedah</td>
                            <td>nyembuhin</td>
                            <td>GILA</td>
                            <td>-</td>
                            <td>feeling</td>
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



