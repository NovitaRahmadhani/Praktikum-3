<!DOCTYPE html>
<html>
<head>
    <title>Form BMI Pasien</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

    <h1>FORM ISIAN INDEKS MASSA TUBUH (BMI)</h1>
    <form class="form-horizontal" method="POST" action="hasil.php">
        Nama : <input type="text" name="nama" value="" size="30"/><br/>
        Berat Badan : <input type="number" value="" name="beratBadan" size="6"/><br/>
        Tinggi Badan : <input type="number" value="" name="tinggiBadan"size="6"/><br/>
        Umur : <input type="number" value="" name="umur" size="6"/><br/>
        Jenis Kelamin : <label class="radio-inline">   
        <input type="radio" name="gender" checked value="Laki-laki">Laki-laki
        <input type="radio" name="gender" value="Perempuan">Perempuan
    </label>
        <input type="submit" value="Kirim" name="proses"/>
        
    </form>
</body>
</html>
<style>
body{
    background-color: grey;

}
h1{
    text-align: center;
    color: white;
}
form {
    color: white;
    display: grid;
    grid-template-columns: 300px 0.50fr;
    padding: 50px 50px;
    margin: 50px 50px;
       
}


