<a href="../index.php">Regresar al inicio</a><br> <br>
<?php
include("Controllers/CalculadoraController.php");

//------------------------------------------------------------------
echo "<strong> Calculadora <br> </strong>"; 
$calculadora= new CalculadoraController();
$calculadora-> cachaParametros();
$calculadora-> ejecutaoperacion();
//---------------------------------------------------------------
//1. Obtener la entrada y la acción
//2. Ejecutar la operación
//3. Imprimir los resultados ?>
<!------------------------------------------------------------------>
<form method="post">
<label> <?php echo $calculadora->pantalla ?></label>
<input  type="hidden" name="pantalla"
       value ="<?php echo $calculadora->pantalla ?>"> =
<label><?php echo $calculadora->resultado?></label>
<input  type="hidden" name="resultado"
        value = "<?php echo $calculadora->resultado?>"> <br>

<input  type="number" name="entrada" required > 
<button name="accion" value="suma"> + </button> 
<button name="accion" value="resta"> - </button> 
<button name="accion" value="multiplica"> * </button> 
<button name="accion" value="divide"> / </button> 
</form>
<!------------------------------------------------------------------>
<form method="post">
<button name="accion" value="reset"> Reset </button> 
</form>
<?php echo "<hr>" ?>
<!------------------------------------------------------------------>
<?php echo "<strong> <br>Conversor de medidas</strong><br>"?>
<!------------------------------------------------------------------>
<?php include("Controllers/ConvertidorController.php");
$convertidor= new ConvertidorController();
$convertidor->recibirParametros();
$convertidor->ejecutaroperacion();
?>

<form method="post"><br>
<input  type="number" name="entrad" required > =
<label><?php echo $convertidor->result?></label>
<input  type="hidden" name="result"
        value = "<?php echo $convertidor->result?>"> <br> <br>


<button name="accio" value="convertir"> Convertir </button> 
</form><br>

<select name="select1">
<option value="cm">Centímetros</option>
<option value="mt">Metros</option>
<option value="pg">Pulgadas</option>
<option value="yd">Yardas</option>
<option>----------------</option>
<option value="gr">Gramo</option>
<option value="kg">Kilogramo</option>
<option value="onz">Onza</option>
<option>------------------</option>
<option value="lt">Litros</option>
<option value="ml">Mililitros</option>
<option value="m3">Metros cúbicos</option>
</select>

<select name="select2">
<option value="cm2">Centímetros</option>
<option value="mt2">Metros</option>
<option value="pg2">Pulgadas</option>
<option value="yd2">Yardas</option>
<option>----------------</option>
<option value="gr2">Gramo</option>
<option value="kg2">Kilogramo</option>
<option value="onz2">Onza</option>
<option>------------------</option>
<option value="lt2">Litros</option>
<option value="ml2">Mililitros</option>
<option value="m32">Metros cúbicos</option>
</select>

<form method="post">
<button name="accio" value="reset"> Reset </button> 
</form>