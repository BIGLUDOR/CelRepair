<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/indexmenu.css">
    <link rel="stylesheet" href="../css/contactobody.css">
    <link rel="stylesheet" href="../css/font-awesome.css">

    <script src="../js/jquery-3.5.1.min.js"></script>
    <script src="../js/menu.js"></script>
    <script src="../js/scriptemail.js"></script>
    <title>Contacto</title>
</head>

<body>
    <!-- Cabecera para el menu -->
    <div class="contenedor">
        <header class="header">
            <h1><a href="../index.php" style="color: white">ItForYou</a></h1>
            <span class="fa fa-navicon icon"></span>
            <lu class="menu">
                <li><a href="../pages/reparacioncelu.php">Reparaciones de Celulares</a></li>
                <li><a href="../pages/mantencomput.php">Mantenimiento de computo</a></li>
                <li><a href="../pages/ubicacion.php">Ubicación</a></li>
                <li><a href="../pages/contacto.php">Contacto</a></li>
            </lu>
        </header>
    </div>
    <div class="conteiner">
        <section class="form_wrap">

            <section class="cantact_info">
                <section class="info_title">
                    <span class="fa fa-user-circle"></span>
                    <h2>INFORMACION<br>DE CONTACTO</h2>
                </section>
                <section class="info_items">
                    <p><span class="fa fa-envelope"></span> luis_149@live.com</p>
                    <p><span class="fa fa-mobile"></span> +52 (331) 469-0963</p>
                </section>
            </section>

            <form action="enviaremail.php" method="POST" class="form_contact">
                <h2>Envia un mensaje</h2>
                <div class="user_info">
                    <label for="names">Nombres *</label>
                    <input type="text" id="names" name="nombre" required>

                    <label for="phone">Telefono / Celular</label>
                    <input type="text" id="phone" name="telefono" required>

                    <label for="email">Correo electronico *</label>
                    <input type="text" id="email" name="correo" required>

                    <label for="mensaje">Mensaje *</label>
                    <textarea id="mensaje" name="mensaje" required></textarea>

                    <input type="submit" value="Enviar Mensaje" id="btnSend">
                </div>
            </form>

        </section>
    </div>
    <div class="footer">
        <div class="paginas">
            <div><img src="../icons/Home_48px.png" alt="inicio"><a href="index.php" class="active">Inicio</a></div>
            <div><img src="../icons/CellPhone_48px.png" alt="Celular"><a href="pages/reparacioncelu.php">Reparacion de celulares</a></div>
            <div><img src="../icons/Computer_48px.png" alt="Computadora"><a href="mantencomput.php">Mantenimiento de computadoras</a></div>
            <div><img src="../icons/Location_48px.png" alt="Location"><a href="ubicacion.php">Ubicación</a></div>
            <div><img src="../icons/Contacts_48px.png" alt="Contact"><a href="contacto.php">Contacto</a></div>
        </div>
        <div class="piepagina">
            <h2>Reparación de celulares y equipos de computo</h2>
            <h2>¡Visitanos!</h2>
        </div>
        <div class="ubicacion">
            <div>
                <img src="../icons/Location_48px.png" alt="Location">
                <p>Nos ubicamos en Tototlán, Jalisco. ¡Confianos tu celular!</p>
            </div>
            <div>
                <img src="../icons/WhatsApp_48px.png" alt="whatsapp">
                <p>Tel: 3314690963</p>
            </div>
            <div>
                <img src="../icons/Facebook_48px.png" alt="whatsapp">
                <p><a href="#">ItForYou</a></p>
            </div>

        </div>
    </div>

</body>

</html>