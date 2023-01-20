<div style="align-items: center">
    <div style="margin:5px;width:250px;display:flex;align-content: center;justify-content: center;margin: auto;">
        <img src="img/car.png" style="width:100px;margin:25px">
    </div>
<?php require_once('models/elipro.php');
if(isset($_SESSION['carro'])){
$dat=$_SESSION['carro']; 
$total=0;
for($a=0;$a<=count($dat)-1;$a++){
    $valto=$dat[$a]['valor'];
    $cant=$dat[$a]['cantidad'];
    $asu=$valto*$cant;
    $total+=$asu;
}
?>
<div class="conte">
    <form name="frmfil" action="<?php if(isset($_SESSION['idusu'])){echo "index.php?pg=1101";}else{echo "index.php?pg=1001";}?>" method="POST">
        <div class="row">
            <div class="form-group col-md-6">
                <label for="idfic">Forma de pago</label>
                <select name="fidjor" id="idfic" class="form-select" onchange="this.form.submit();">
                    <?php
                    if($djor){
                        foreach ($djor as $dj) { 
                    ?>
                            <option value="<?=$dj['idval'];?>"
                                <?php if($fidjor==$dj['idval']) echo " selected "; ?>
                            ><?=$dj['nomval'];?></option>
                    <?php }} ?>
                </select>
            </div>
            <div class = "form-group col-md-6">
                    <br>
                    <input type="submit" class="btn btn-primary" value="Pagar">
                
                    <br><br><br>
                </div>
        </div>
    </form>
</div>
<?php }
if(isset($_SESSION['carro'])){
?>
<div style="float: left;width: 100%;padding: 0px 10px 100px 10px;">
    <table id="example" class="table table-striped" style="width:100%">
        <thead> 
            
            <tr>
                <th>Foto</th>
                <th>Producto</th>
                <th>Valor</th>
                <th>Cantidad</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
                if($dat){
                    for($idp=0;$idp<count($dat);$idp++){
            ?>
                        <tr>
                            <td width="100px">
                            <?php
                            if($dat[$idp]['imagen']){
                             ?>
                                <img src="<?=$dat[$idp]['imagen'];?>" style="width: 100%;">
                            <?php }else{ ?>
                                <img src="image/usuario.png" style="width: 100%;">
                            <?php } ?>
                            </td>
                            <td>
                                <?=$dat[$idp]['nombre'];?><br>
                            </td>
                            <td>
                            <?=$dat[$idp]['valor'];?><br>
                            </td>
                            <td>
                            <?=$dat[$idp]['cantidad'];?><br>
                            </td>
                            <td><a type="button" class="btn btn-primary" href="index.php?pg=1002&idp=<?=$idp?>&uwu=eliun">Eliminar Producto</a></td>
                        </tr>
            <?php
                    }
                }
            ?>
        </tbody>
        <tfoot>
            <tr>
                <td style="text-align: center;font-size: 50px;">
                    $<?=$total;?>
                </td>
                <td style="font-size: 50px;">Total</td>
                <td></td>
                <td><a type="button" class="btn btn-primary" href="index.php?pg=1002&uwu=elitot">Vaciar carrito</a></td>
            </tr>
        </tfoot>
    </table>
</div>
<?php }else{ ?> 
    <br><br><br><br><br><br><br>
<h1 style="font-size:100px;text-align:center;">¡No hay productos en el carrito!</h1>    
<?php } ?>

