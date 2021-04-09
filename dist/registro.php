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
    <main class="homeSuavel registroSuavel">
      <section class="registroSuavel--hero">
        <div class="container"> 
          <div class="row">
            <div class="col-lg-6 registroSuavel--hero--arte"><img src="img/CABEZA.png" alt="" class="img-fluid">
              <h3> <b>Llena el formulario con tus datos y participa sin tanto rollo. El 17 de junio a las 20:00 hrs. daremos a conocer al ganador mediante un live en facebook.com/SuavelMexico ¡Mucha suerte!</b></h3><img id="imgCarro" src="img/carro.png" alt="" class="img-fluid">
            </div>
            <div class="col-lg-6">
              <form class="registroSuavel--form d-flex"><a href="/"> <img src="img/CONCURSO.png" alt="" class="img-fluid"></a>
                <div class="form__input">
                  <label for="">Nombre completo y apellidos</label>
                  <input id="nombre" type="text" name="">
                </div>
                <div id="inputEdad" class="form__input">
                  <label for="">Edad</label>
                  <input id="edad" type="text" name="">
                </div>
                <div id="inputEstado" class="form__input">
                  <label for="">Estado</label>
                  <div class="combo">
                    <select id="estado" name=""> 
                      <option value="" disabled="" selected="selected" hidden="hidden">Selecciona</option>
                      <option value="">CDMX</option>
                    </select>
                  </div>
                </div>
                <div class="form__input">
                  <label for="">Celular</label>
                  <input id="celular" type="text" name="">
                </div>
                <div class="form__input">
                  <label for="">Número de ticket</label>
                  <input id="numeroTicket" type="text" name="">
                </div>
                <div class="form__input">
                  <label for="">¿Por qué amas Suavel?<span>(150 caracteres)</span></label>
                  <input id="coments" type="text" name="">
                </div>
                <div class="btn__input">
                  <input id="btnEnviar" type="submit" value="Participa para ganar">
                </div>
              </form>
              <h6>(1)Promoción válida del 22 de abril al 16 de junio del 2021.(2)Consulta términos y condiciones en www.oxxo.com/concursos/suavelImágenes sólo de uso ilustrativo. Aviso Profeco Folio: PFC.C.A./000230-2021</h6>
            </div>
          </div>
        </div>
      </section>
    </main>
  </body>
</html>