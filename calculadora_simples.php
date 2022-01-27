<?php

/* ### EXERCICIO AULA 03###
No PHP:
	--> Recuperar valores (GET/POST) do radio e caixas
	--> Tratar erros para caixa vazia e String
*/

//Declaração de variaveis
$valor1=(double)0;
$valor2=(double)0;

$resultadoSomar=(double)0;
/*$resultadoSubtrair=(double)0;
$resultadoMultiplicar=(double)0;
$resultadoDividir=(double)0;*/

$somar=(string)0;
$subtrair=(string)0;
$multiplicar=(string)0;
$dividir=(string)0;

	//tratando botão 
if(isset($_POST['btncalc'])){
		//Atribuição de dados (POST)
	$valor1=$_POST['txtn1'];
	$valor2=$_POST['txtn2'];
	
	/*$somar=$_POST['somar'];
	$subtrair=$_POST['subtrair'];
	$multiplicar=$_POST['multiplixar'];
	$dividir=$_POST['dividir'];*/

		//calcular ??????????
	$resultadoSomar= $valor1+$valor2;
	/*$resultadoSubtrair=$valor1-$valor2;
	$resultadoMultiplicar=$valor1*$valor2;
	$resultadoDividir=$valor1/$valor2;*/
}

?>

<html>
    <head>
        <title>Calculadora - Simples</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
	<body>
        
        <div id="conteudo">
            <div id="titulo">
                Calculadora Simples
            </div>

            <div id="form">
                <form name="frmcalculadora" method="get" action="">
						Valor 1:<input type="text" name="txtn1" value="0" > <br>
						Valor 2:<input type="text" name="txtn2" value="0" > <br>
						<div id="container_opcoes">
							<input type="radio" name="rdocalc" value="somar" checked>Somar <br>
							<input type="radio" name="rdocalc" value="subtrair" >Subtrair <br>
							<input type="radio" name="rdocalc" value="multiplicar" >Multiplicar <br>
							<input type="radio" name="rdocalc" value="dividir" >Dividir <br>
							
							<input type="submit" name="btncalc" value ="Calcular" >
							
						</div>	
						<div id="resultado">
							Resultado:
							<?php 
								echo($resultadoSomar);
								/*echo($resultadoSubtrair);
								echo($resultadoMultiplicar);
								echo($resultadoDividir);*/
							?>
						</div>
						
					</form>
            </div>
           
        </div>
        
		
	</body>

</html>

