<html>
    <head>
        <title>Cinema 99</title>
    </head>
    <body>
        <center>
        <h1>Pemesanan Tiket<br></h1>
        <h1>Cinema 99</h1>
        <form  method="post" action="<?php echo base_url();?>Cinema/cetak">
            <table width="30%" border="0" cellpadding="5">
                <tr>
                    <td width="30%">
                        Nama Pemesan
                    </td>
                    <td  width="70%">
                    :
                        <?=$nama_pemesan;?>
                    </td>
                </tr>
                
                <tr>
                    <td width="30%">
                        Judul Film
                    </td>
                    <td  width="70%">
                        :
                      <?=$judul_film;?>
                    </td>
                </tr>

                <tr>
                    <td width="30%">
                        Pukul
                    </td>
                    <td  width="70%">
                        :
                        <?=$pukul;?>
                        WIB                      
                    </td>
                </tr>      
                
                <tr>
                    <td width="30%">
                        Tipe Studio
                    </td>
                    <td  width="70%">
                        :
                        <?=$tipe_studio;?>
                    </td>
                </tr>                  
                
                <tr>
                    <td width="30%">
                    Jumlah Pemesan

                    </td>
                    <td  width="70%">
                        :
                        <?=$jumlah_pesanan;?>
                    </td>
                    
                </tr>  

                <?php if($tipe_studio=="Reguler 2D")
                {$harga_tiket=40000;}
                elseif($tipe_studio=="3D"){
                    $harga_tiket=80000;
                }
                else {
                    $harga_tiket=100000;
                }
                $total=$jumlah_pesanan*$harga_tiket;?>
                
                <tr>
                    <td width="30%">
                    Harga Tiket
                    </td>
                    <td  width="70%">
                        :
                        <?=$harga_tiket;?>
                    </td>    
                </tr>              

                <tr>
                    <td width="30%">
                    Total
                    </td>
                    <td  width="70%">
                        :
                        <?=$total;?>
                    </td>
                </tr>    

            </table>

        </form>
        <a href="<?php echo base_url();?>Cinema">Input Data Lagi</a>
    </center>
    </body>
</html>