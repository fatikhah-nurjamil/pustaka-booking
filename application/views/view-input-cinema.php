<html>
    <head>
        <title>Cinema 99</title>
    </head>
    <body>
        <center>
        <h1>Pemesanan Tiket Cinema 99</h1>

        <form  method="post" action="<?php echo base_url();?>Cinema/cetak">
            <table width="30%" border="0" cellpadding="5">
                <tr>
                    <td width="20%">
                        Nama Pemesan
                    </td>
                    <td  width="80%">
                        <input type="text" name="nama_pemesan">
                    </td>
                </tr>
                <tr>
                    <td width="30%">
                        Judul Film
                    </td>
                    <td  width="70%">
                        <select name="judul_film" >
                            <option value="">~Pilih~</option>
                            <option value="Parasite">Parasite</option>
                            <option value="Hereditary">Hereditary</option>
                            <option value="The Closet">The Closet</option>
                            <option value="Kamen Rider Reiwa">Kamen Rider Reiwa</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td width="30%">
                        Pukul
                    </td>
                    <td  width="70%">
                        <input type="radio" name="pukul" value="14.20"> 14.20
                        <input type="radio" name="pukul" value="15.40"> 15.40
                        <input type="radio" name="pukul" value="16.40"> 16.40
                    </td>
                </tr>      
                
                <tr>
                    <td width="30%">
                        Tipe Studio
                    </td>
                    <td  width="70%">
                        <input type="radio" name="tipe_studio" value="Reguler 2D"> Reguler 2D
                        <input type="radio" name="tipe_studio" value="3D"> 3D
                        <input type="radio" name="tipe_studio" value="Velvet"> Velvet
                    </td>
                </tr>                  

                <tr>
                    <td width="30%">
                    Jumlah Pemesan
                    </td>
                    <td  width="70%">
                        <input type="text" name="jumlah_pesanan" size="3">
                    </td>
                    
                </tr>  
                
                <tr>
                    <td width="30%">
                    
                    </td>
                    <td  width="70%">
                        <input type="submit" value="Hitung"> <input type="reset" value="Batal">
                    </td>                 
                </tr>              

            </table>

        </form>
        </center>
    </body>
</html>