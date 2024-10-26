@extends('layout.main')

@section('container')
<style>
    * {
    font-family: Arial, Helvetica, sans-serif;
}

.container-fluid {
    padding: 25px 30px;
    border-radius: 5px;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.15); /* Corrected shadow properties */
    justify-content: center;
    max-width: 800px; /* Ukuran maksimum kontainer */
    margin: auto; /* Centering container */
    min-height: 700px; /* Menetapkan tinggi minimum agar lebih lebar */
}

.container-fluid .title {
    position: relative;
}

.container-fluid .title::before {
    position: absolute;
    left: 0;
    bottom: 0;
    height: 3px;
    width: 30px;
    border-radius: 5px;
}

.container-fluid form .user-details {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    margin: 20px 0;
}

form .user-details .input-box {
    margin-bottom: 15px;
    width: calc(100% / 2 - 20px); /* Fixed spacing */
}

form .input-box span.details {
    display: block;
    font-weight: 500;
    margin-bottom: 5px;
}

.user-details .input-box input {
    height: 45px;
    width: 100%;
    outline: none;
    font-size: 16px;
    border-radius: 6px;
    padding-left: 15px;
    border: 1px solid #ccc;
    border-bottom-width: 2px;
    transition: all 0.3s ease;
}

.user-details .input-box input:focus,
.user-details .input-box input:valid {
    border-color: #9b59b6;
}

form .gender-details {
    margin-top: 20px; /* Tambahkan margin untuk pemisahan */
}

form .gender-details .gender-title {
    font-size: 20px;
    font-weight: 500;
}

form .category {
    display: flex;
    width: 100%; /* Memastikan kategori memanfaatkan seluruh lebar */
    margin: 14px 0;
    justify-content: space-between;
}

form .category label {
    display: flex;
    align-items: center; /* Aligned center */
    cursor: pointer;
}

form .category label .dot {
    height: 18px;
    width: 18px;
    border-radius: 50%;
    margin-right: 10px;
    background: #d9d9d9;
    border: 5px solid transparent;
    transition: all 0.3s ease;
}

#dot-1:checked ~ .category .one,
#dot-2:checked ~ .category .two,
#dot-3:checked ~ .category .three {
    background: #9b59b6;
    border-color: #d9d9d9;
}

form input[type="radio"] {
    display: none;
}

form .button input {
    height: 100%;
    width: 100%;
    border-radius: 5px;
    border: none;
    color: #fff;
    font-size: 25px;
    font-weight: 500;
    letter-spacing: 1px;
    cursor: pointer;
    transition: all 0.3s ease;
    background:  #007bff;
}

form .button input:hover {
    background: linear-gradient(-135deg, #71b7e6, #9b59b6); /* Modified hover effect */
}

@media (max-width: 584px) {
    .container-fluid {
        max-width: 100%;
    }
    form .user-details .input-box {
        width: 100%;
    }
    form .category {
        width: 100%;
    }
}

@media (max-width: 459px) {
    .container-fluid .content .category {
        flex-direction: column;
    }
}

</style>
<div class="container-fluid">
<div class="content">
    <form action="#">
        <div class="user-details">
            <div class="input-box">
                <span class="details">Nama Lengkap</span>
                <input type="text" placeholder="Masukkan Nama Lengkap" required>
            </div>
            <div class="input-box">
                <span class="details">Nomor Rekam Medis</span>
                <input type="text" placeholder="Masukkan Nomor Rekam Medis" required>
            </div>
            <div class="input-box">
                <span class="details">Nomor Induk Kependudukan</span>
                <input type="text" placeholder="Masukkan Nomor Induk Kependudukan" required>
            </div>
            <div class="input-box">
                <span class="details">Nomor Telepon</span>
                <input type="text" placeholder="Masukkan Nomor Telepon" required>
            </div>
            <div class="input-box">
                <span class="details">Alamat Lengkap</span>
                <input type="text" placeholder="Masukkan Alamat Lengkap" required>
            </div>
            <div class="input-box">
                <span class="details">Tempat Lahir</span>
                <input type="text" placeholder="Masukkan Tempat Lahir" required>
            </div>
            <div class="input-box">
                <span class="details">Tanggal Lahir</span>
                <input type="date" placeholder="Masukkan Tanggal Lahir" required>
            </div>
            <div class="input-box">
                <span class="details">Agama</span>
                <input type="text" placeholder="Masukkan Agama" required>
            </div>
            <div class="input-box">
                <span class="details">RT</span>
                <input type="text" placeholder="Masukkan RT" required>
            </div>
            <div class="input-box">
                <span class="details">RW</span>
                <input type="text" placeholder="Masukkan RW" required>
            </div>
            <div class="input-box">
                <span class="details">Kecamatan</span>
                <input type="text" placeholder="Masukkan Kecamatan" required>
            </div>
            <div class="input-box">
                <span class="details">Kelurahan</span>
                <input type="text" placeholder="Masukkan Kelurahan" required>
            </div>
            <div class="input-box">
                <span class="details">Kota</span>
                <input type="text" placeholder="Masukkan Kota" required>
            </div>
            <div class="input-box">
                <span class="details">Kode pos</span>
                <input type="text" placeholder="Masukkan Kode Pos" required>
            </div>
        </div>

        <div class="button">
            <input type="submit" value="Daftar">
        </div>
    </form>
</div>
</div>


@endsection
