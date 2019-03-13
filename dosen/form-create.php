<style>
.body{
    font-family: Castellar;
    background: white;
}
.h1{
    text-align: center;
    font-weight: 300;
}
.tulisan_login{
    text-align: center;
    text-transform: uppercase;
}
.kotak_login{
    width: 350px;
    background: white;
    margin: 80px auto;
    padding: 30px 20px;
}
.label{
    font-size: 11pt;
}
.form_login{
    box-sizing: border-box;
    width: 100%;
    padding: 10px;
    font-size: 11pt;
    margin-bottom: 20px;
}
.tombol_login{
    background: green;
    color: white;
    font-size: 11pt;
    width: 100%;
    border: none;
    border-radius: 3px;
    padding: 10px 20px;
}
.link{
    color: #232323;
    text-decoration: none;
    font-size: 10pt;
}
</style>
<body>
    <div class= "kotak_login">
        <form method="POST" action="create.php">
            <label for='Nama'>NAMA DOSEN</label>
            <input type= "text" name= "username" class= "form_login" placeholder="DOSEN" id='nama'>

            <label>NO.TELPON</label>
            <input type= "text" name= "telpon" class= "form_login" placeholder="NO" id='no_telp'>

            <input type= "submit" class= "tombol_login" value= "TAMBAH">

            <br>
            <br>
                </form>
                </div>
                </body>
