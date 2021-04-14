<!DOCTYPE html>
<html lang="es">
  <head>
    <link rel="preload" href="css/styles.min.css" as="style">
    <meta charset="utf-8">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <title>OXXO </title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.min.css">
    <script src="js/jquery-3.4.1.min.js"> </script>
    <script src="js/bootstrap.min.js"> </script>
    <script src="js/scripts.min.js"> </script>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  </head>
  <body>
    <main class="homeSuavel">
      <section class="homeSuavel--hero">
        <div class="container"> 
          <div class="row">
            <div class="col-12"> <img src="img/CONCURSO.png" alt="" class="img-fluid">
              <h1>Compra en tiendas OXXO, registra tus tickets de compra <br>y participa para ganar increíbles premios</h1>
            </div>
          </div>
        </div>
      </section>
      <section class="homeSuavel--sesion">
        <div class="container"> 
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <form class="homeSuavel--sesion--caja d-flex">
                <h2> <b>Para participar regístrate aquí</b></h2>
                <div id="cajaChecks" class="d-flex">
                  <div id="cajaEdad" class="checkboxes">
                    <input id="checkEdad" type="checkbox" class="checkbox">
                    <label id="checkboxEdad" for="checkEdad" class="checkmark"> </label>
                    <label id="labelEdads" for="checkEdad" class="label">Acepto que soy mayor de 18 años</label>
                  </div>
                  <div id="cajaLegal" class="checkboxes">
                    <input id="checkLegale" type="checkbox" class="checkbox">
                    <label id="checkboxLegales" for="checkLegale" class="checkmark"> </label>
                    <label id="labelLegales" for="checkLegale" class="label">Acepto <a id="linkTerminos" href="terminos-y-condiciones.php">Términos y Condiciones.</a></label>
                  </div>
                </div>
                <div class="botonera d-flex"><a id="linkFb" href="/registro.php"><img id="imgFb" src="../img/face.png" alt="Oxxo facebook" class="img-fluid"></a><a id="linkGoogle" href="/registro.php"><img id="imgGoogle" src="../img/google.png" alt="Oxxo google" class="img-fluid"></a></div>
                <h6>Tu información es 100% confidencial. No publicaremos nada en tu nombre</h6>
              </form>
            </div>
            <div class="col-12 homeSuavel--sesion--footer">
              <h6>(1)Promoción válida del 22 de abril al 16 de junio del 2021.(2)Consulta términos y condiciones en www.oxxo.com/concursos/suavel. Imágenes sólo de uso ilustrativo. </h6>
              <h6 class="mt-4"> <b>Profeco Folio: PFC.C.A./000230-2021</b></h6>
            </div>
          </div>
        </div>
      </section>
    </main>
  </body>
</html>