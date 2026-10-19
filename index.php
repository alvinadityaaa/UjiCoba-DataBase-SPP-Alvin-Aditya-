<html>
    <head>
        <title>Form Login</title>
        <style>
        body {
            background: #186961;
            margin: 0;
            font-family: 'Open Sans', sans-serif;
        }

        fieldset {
            
            margin: 100px auto; 
            width: 320px;
            height: 400px;
            border: 2px solid white;
            background-color: white;
            border-radius: 10px; 
            text-align: center;
        }

        label {
            font-family: tahoma;
            color: red;
        }

        input {
            
            margin: 5px auto;
            padding: 10px;
            width: 280px; 
            height: 40px;
            border: 1px solid white;
            border-radius: 10px;
            box-sizing: border-box; 
        }

        
        #submit {
            color: white;
            background-color: #428df5;
            cursor: pointer; 
            margin-top: 15px; 
        }

        #input {
            background-color: #c6cfc7;
        }

        .alert {
            color: red;
            font-family: tahoma;
            margin-bottom: 10px;
        }
        </style>
    </head>
    <body>
        
        <br> 
        <h1 align="center"> <b> SPP </b> ONLINE </h1>
        
        <form action="login_validasi.php" method="post">
        <fieldset>
        
        <?php
        if(isset($_GET['pesan'])){
            if($_GET['pesan']=="gagal"){
                echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
            }
        }
        ?>
            <legend align="center"> <img src="src/profile1.png" width="75" height="75"> </legend>
            
            <p align="center"> <b>LOGIN</b></p>
            
            
            <table align="center">
                <tr> 
                    <td><input name="username" type="text" placeholder="Username" id="input"></td> 
                </tr>
                <tr> 
                    <td><input name="password" type="password" placeholder="Password" id="input"></td>
                </tr>
                <tr>
                    <td><input name="login" type="submit" value="LOGIN" id="submit"></td>
                </tr>
                <!-- SKRIP TAMBAHAN MODUL 9 -->
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr> 
                    <td align="center"> <a href="bayar.php"> CEK PEMBAYARAN </a> </td>
                </tr>
            </table>

        </fieldset>
        </form>

    </body>
</html>