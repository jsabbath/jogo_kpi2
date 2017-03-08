<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<meta name="viewport" content="initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="assets/css/style.css">

	<!--meta http-equiv="refresh" content="1"-->
</head>
<body class="scroolbar" id="style-3">

<div>
	<nav id="nav-dflt">
		<ul>
			<li>
				<a href="">Kupi2</a>
			</li>
		</ul>
	</nav>
	<nav style="display: none" id="nav-dzplgd">
		<ul>
			<li>Home</li>
			<li>News</li>
			<li>Catálogo</li>
			<li>Contactános</li>
		</ul>
	</nav>
</div>

<!--
Banner header
-->
<img id="bnner-prncpl" alt='Banner kupidos' data-src-base='assets/img/' data-src='<480:Kp2-Cel2.png,<720:kp2-Tablet2.png,<960:Kp2-Tablet2.png,>960:Kp2-PC2.png' />
<noscript><img alt='kitten!' src='assets/img/Kp2-Tablet.png' /></noscript>





<!--
	footer
-->
<!--boton flotante pagamento-->
<div class="buttonfloatbottom" onclick="myFunction1()">
    <p id="buttoninfo">Método de Pago 
    	<img src="http://www.emacs.es/media/img/estructura/flecha-circulo-gris-arriba.png" alt="" width="20px" style="margin-bottom: -5px;" />
    </p> 
</div>
<div id="info">
  <div onclick="myFunction2()" class="cabezainfo" style="">
    Método de Pago
    <img src="http://www.emacs.es/media/img/estructura/flecha-circulo-gris-arriba.png" alt="" width="20px" style="margin-bottom:-3px; right:0; margin-left:80px;" class="icondown"/>
  </div>
  <div style="padding: 5px 10px 5px 20px" id="infopago">
      <ul>
        <li>
          <strong>Caja Huancayo: </strong><br>
          1070-0221-1004-1651-44
        </li>
        <li>
          <strong>Interbank: </strong><br>
          500-3050051-789
        </li>
        <li>
          <strong>Banco de la Nación: </strong><br>
          04-388-292828
        </li>
        <li>
          <strong>Banco de Crédito BCP: </strong><br>
          355-20830262-005
        </li>
        <li>
          <strong>Banco Continental: </strong><br>
          0011-0235-0201-060921
        </li>
      </ul>
  </div>
</div>
<script>
  function myFunction1() {
    var x = document.getElementById('info');
    if (x.style.display === 'none') {
        x.style.display = 'block';
    } else {
        x.style.display = 'none';
    }
}

function myFunction2() {
    var x = document.getElementById('info');
    if (x.style.display === 'block') {
        x.style.display = 'none';
    } else {
        x.style.display = 'block';
    }
}
</script>
<!--END boton flotante pagamento-->



</body>




<script src='responsive-img.min.js' defer></script>
<script src='assets/js/current-src.min.js' defer></script>

</html>