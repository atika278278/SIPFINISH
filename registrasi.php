<!DOCTYPE HTML>
<html>
    <head>
        <title>Halaman Daftar</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <style>
        *{
    margin: 0;
    padding: 0;
    outline: 0;
    font-family: 'Open Sans', sans-serif;
}
body{
    height: 100vh;
    background-image: url(https://images.unsplash.com/photo-1476385822777-70eabacbd41f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1074&q=80);
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}

.container{
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%,-50%);
    padding: 20px 25px;
    width: 300px;
    background-color: rgba(0,0,0,.6);
    box-shadow: 0 0 10px rgba(255,255,255,.3);
}
.container h1{
    text-align: center;
    color: #fafafa;
    margin-bottom: 30px;
    text-transform: uppercase;
    border-bottom: 4px solid ;
}
.container label{
    text-align: center;
    color: #90caf9;
}
.container form input{
    width: calc(100% - 20px);
    padding: 8px 10px;
    margin-bottom: 15px;
    border: none;
    background-color: transparent;
    border-bottom: 2px solid #2979ff;
    color: #fff;
    font-size: 21px;
}
.container form button{
    width: 100%;
    padding: 5px 0;
    border: none;
    background-color:#2979ff;
    font-size: 18px;
    color: #fafafa;
}
    </style>
    <body>
        <div class="container">
          <h1>Daftar</h1>
            <form>
        <input type="text" name="name" required placeholder="Masukan nama lengkap"><br>
         <input type="email" name="email" required placeholder="Masukan email"><br>
         <input type="password" name="password" required placeholder="Masukan password"><br>
         <select name="user_type">name="password" required placeholder="Masukan password"><br>
            <p>Pilih Pengguna </p><br>
         <option value="user">pemilik</option>
         <option value="admin">admin</option>
         <option value="surveyor">surveyor</option>
         </select>
         <button>Daftar Sekarang</button>
         <p>punya akun? <a href="login.php">silahkan login</a></p>
         <p>pengunjung biasa? <a href="home.php">Kembali ke Home</a></p>

            </form>
        </div>     
    </body>
</html>