<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Tugas</title>
</head>
    <style>
body{
	font-family: sans-serif;
	background: #d5f0f3;
}
h1{
	text-align: center;
	font-weight: 300;
}
.h1_satu{
	text-align: center;
	text-transform: uppercase;
}
.kotak_login{
	width: 550px;
	background: rgb(1, 203, 253);
	margin: 80px auto;
	padding: 30px 20px;
}
label{
	font-size: 14pt;
}
    card{
	box-sizing : border-box;
	width: 100%;
	padding: 10px;
	font-size: 14pt;
	margin-bottom: 20px;
    }
.tombol_login{
	background: black;
	font-size: 11pt;
	width: 50%;
	border: none;
	border-radius: 3px;
	padding: 10px 20px;
}
</style>
    
    <body>
<form action="tampil_data.php" method="POST">
<div class ="kotak_login">
    <h1>Selamat Datang di Program SIA</h1>

    <label>NIM</label>
    <input type="text" name="nim"><br><br>

    <label>Nama Mahasiswa</label>
    <input type="text" name="nama"><br><br>

    <label>Kode Matakuliah</label>
    <input type="text" name="kode"><br><br>

    <label>Nama Mata Kuliah</label>
    <input type="text" name="makul"><br><br>

    <label>SKS</label>
    <select name="sks" id="">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
    </select><br><br></label>

    <label>Kelas</label>
    <select name="kelas" id="">
        <option value="A">A</option>
        <option value="B">B</option>
    </select><br><br>

    <label>Semester</label>
    <select name="semester" id="">
        <option value="1">1</option>
        <option value="3">3</option>
        <option value="5">5</option>
        <option value="7">7</option>
    </select><br><br>
    <div class="tombol_login">
    <input type="submit" name="submit">
    </div>
</form>
    </body>
</html>