<?php
/*
 * Script PHP ini adalah pendukung materi belajar di Channel Youtube Soboteika yaitu 
 * konsep dasar pemrograman client-server pada aplikasi berbasis web. 
 * 
 * Video bisa dilihat di: 
 * https://youtu.be/9MtqexdAJko
 * 
*/

 // date_default_timezone_set('Asia/Jayapura');
?>
<!DOCTYPE html>
<html>

<head>
    <title>Pemrograman CS</title>
</head>
<style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif
    }
    
    .kotak {
        border: 1px dashed blue;
        padding: 2px 5px;
        margin-bottom:2px;
    }
</style>
<script>
    function jam() {
        setTimeout('jam()', 1000);
        var tgl = new Date();
        var vjam = tgl.getHours() + ':' + tgl.getMinutes() + ':' + tgl.getSeconds();
        document.getElementById('jam').innerHTML = vjam;
    }
</script>

<body onload='jam()'>
    <h1 style="color: red">Pemrograman Client-Server WebApp</h1>
    Modul latihan konsep ..
    <div class="kotak">
        <b>Tanggal komputermu (client):</b><br>
        <script>
            var tgl = new Date();
            document.write(tgl);
        </script>
        <br>pukul <span id="jam" style='color: green'></span>
    </div>
    <div class="kotak">
        <b>Tanggal komputer HTTP Server : (php)</b><br>
        <?php
            echo date('Y-m-d H:i:s');
            echo " - ".date_default_timezone_get();
        ?>
    </div>
    <div class="kotak">
        <b>Tanggal komputer Database Server : (mySql)</b><br>
        <?php
            $koneksi=new mysqli('localhost','root','','pelatihan_guru');
            $sql='select now() tgldb';
            $res=$koneksi->query($sql);
            $row=$res->fetch_array(MYSQLI_ASSOC);
            echo $row['tgldb'];
        ?>
    </div>
</body>

</html>