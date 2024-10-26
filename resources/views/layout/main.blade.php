<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Identitas</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="http://keith-wood.name/css/jquery.signature.css">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

    <script type="text/javascript" src="http://keith-wood.name/js/jquery.signature.js"></script>

</head>
<title>Identitas</title>
</head>
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

    h1,
    h2 {
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
        color: #007bff;
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

    /* sidebar */

    nav {
        position: fixed;
        top: 0;
        bottom: 0;
        height: 100%;
        left: 0;
        background: #fff;
        width: 90px;
        overflow: hidden;
        transition: width 0.4s ease;
        box-shadow: 0 20px 35px rgba(0, 0, 0, 0.1);
    }

    nav:hover {
        width: 250px;
    }

    nav ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    nav ul li {
        width: 100%;
        margin-bottom: 20px;
    }

    nav ul li a {
    display: flex;
    align-items: center;
    color: rgb(85, 83, 83);
    font-size: 14px;
    padding: 15px 20px;
    transition: background 0.3s ease, transform 0.2s ease;
    font-weight: bold;
    text-decoration: none; /* Tambahkan ini */
}

    nav ul li a img {
        width: 40px;
        height: 40px;
        object-fit: cover;
        border-radius: 50%;
        margin-right: 10px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    nav ul li a i {
        font-size: 24px;
        margin-right: 15px;
        text-align: center;
        width: 40px;
    }

    nav ul li a span.nav-item {
        display: none;
        margin-left: 10px;
    }

    nav:hover ul li a span.nav-item {
        display: inline;
        transition: opacity 0.3s ease;
        opacity: 1;
    }

    nav ul li a:hover {
        background: #dbdbdb;
        border-radius: 5px;
        transform: scale(1.02);
    }


    nav:hover .logo span {
        display: inline;
        opacity: 1;
        transition: opacity 0.3s ease;
    }

    nav:hover .logo img {
        transform: scale(1.1);
    }

    /* warna aktif */
    .active {
        background-color: #007bff;
        color: white;
    }


    .logo {
        display: flex;
        align-items: center;
        padding: 15px 20px;
        transition: all 0.4s ease;
    }

    .logo img {
        width: 45px;
        height: 45px;
        border-radius: 50%;
        transition: transform 0.3s ease;
    }

    .logo span {
        font-weight: bold;
        padding-left: 15px;
        font-size: 18px;
        text-transform: uppercase;
        display: none;
        opacity: 0;
    }
</style>

<body>
    <nav>
        <ul>
            <li>
                <a href="#">
                    <img src="{{ asset('image/bunga_pkh.png') }}" alt="">
                    <span class="nav-item">Politeknik Karya Husada</span>
                </a>
            </li>
            <li>
                <a href="/" class="{{ Request::is('lembar-identitas') ? 'active' : '' }}">
                    <i class="fas fa-file-alt"></i>
                    <span class="nav-item">Lembar Identitas</span>
                </a>
            </li>
            <li>
                <a href="signifikan" class="{{ Request::is('lembar-signifikan') ? 'active' : '' }}">
                    <i class="fas fa-file-alt"></i>
                    <span class="nav-item">Lembar Signifikan</span>
                </a>
            </li>
            <li>
                <a href="persetujuan" class="{{ Request::is('lembar-persetujuan') ? 'active' : '' }}">
                    <i class="fas fa-file-alt"></i>
                    <span class="nav-item">Lembar Persetujuan</span>
                </a>
            </li>
            <li>
                <a href="pengaturan " class="{{ Request::is('pengaturan') ? 'active' : '' }}">
                    <i class="fa-solid fa-gear"></i>
                    <span class="nav-item">Pengaturan</span>
                </a>
            </li>
        </ul>
    </nav>

    @yield('container')

</body>

</html>
