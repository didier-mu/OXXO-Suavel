
 /// FORMULARIO

function validacionForm(){
   function valText(nameInput) {

      var regEx = /^[a-zA-ZÀ-ÿ\u00f1\u00d1]+(\s*[a-zA-ZÀ-ÿ\u00f1\u00d1]*)*[a-zA-ZÀ-ÿ\u00f1\u00d1]+$/;
      var validText = regEx.test(nameInput.val());
   
      if (nameInput.val().length < 1) {
          nameInput.siblings("span").remove();
          nameInput.after("<span class='error-input'>Campo requerido");
      } else {
          nameInput.siblings("span").remove();
   
          if (!validText) {
              nameInput.siblings("span").remove();
              nameInput.after('<span class="error-input"> Solo se aceptan letras </span>');
              nameInput.siblings("span").show();
          } else {
              nameInput.siblings("span").remove();
          }
      }
   
   
   }
   
   /// NUMEROS
   
   function valNum(nameInput) {
      if (nameInput.val().length < 1) {
          nameInput.siblings("span").remove();
          nameInput.after("<span class='error-input'>Campo requerido");
      } else {
   
          var regEx = /^[0-9]+$/;
   
          var validEmail = regEx.test(nameInput.val());
   
          if (!validEmail) {
              nameInput.siblings("span").remove();
              nameInput.after('<span class="error-input"> Solo se permiten numeros </span>');
              nameInput.siblings("span").show();
          } else {
              nameInput.siblings("span").remove();
          }
      }
   }
   
   /// TEXTO Y NUMERO
   
   function valTextNum(nameInput) {
   
      if (nameInput.val().length < 1) {
          nameInput.siblings("span").remove();
          nameInput.after("<span class='error-input'>Campo requerido");
      }
      
      else {
          nameInput.siblings("span").remove();
          var regEx = /^[A-Za-z0-9 _]*[A-Za-z0-9][A-Za-z0-9 _]*$/;
          var validText = regEx.test(nameInput.val());
   
          if (!validText) {
              nameInput.siblings("span").remove();
              nameInput.after('<span class="error-input"> No se permiten caracteres especiales </span>');
              nameInput.siblings("span").show();
          } else {
              nameInput.siblings("span").remove();
          }
      }
   
   
   }
   
   /// COMBOS
   
   function valCombos(nameInput){
      var combosContacto = $(nameInput);
      
      combosContacto.each(function () {
          $(this).change(function () {
              if ($(this).val() != null) {
                  $(this).parents(".form__input span").remove();
                  
              }
          });
   
          if ($(this).val() == null) {
              $(this).parents(".form__input span").remove();
              $(this).parents(".form__input").append('<span class="error-input"> Campo requerido </span>');
          }
   
      });
   }
   
   $('#btnEnviar').on("click", function() {

      var nombre = $("#nombre"),
         edad = $("#edad"),
         estado = $("#estado");
         id = $("#idTicket");
         numeroTicket = $("#numeroTicket");
         coments = $("#coments");

      
      valTextNum(id);
      valTextNum(numeroTicket);
      valTextNum(coments);

      // VALIDATE ALL

      if ($('form .error-input').length == 0) {
        //  $("form").submit();
        // window.location.href="gracias-registro.php"
      }

      return false;

   });
   
}

/// HOME

function validacionSesion(){
      $('.botonera a').on("click", function (e) {
          // CHECKBOX
        if($('#checkEdad').prop("checked") == false){
            $('.msjError').remove();
            $('#cajaEdad').append('<span class="msjError" > Debes ser mayor de 18 años. </span>');
            e.preventDefault();
        }
        
        else if($('#checkLegale').prop("checked") == false){
            $('.msjError').remove();
            $('#cajaLegal').append('<span class="msjError" > Debes aceptar los términos y condiciones. </span>');
            e.preventDefault();
        }
        
        else {
            $('.msjError').remove();
        }
        
        // VALIDATE ALL

        if ($('form .msjError').length == 0) {
            // window.location.href = "/registro.php"
        }
     });
     
     $(".checkmark").on("click", function () {
        
         if($('#checkLegale').prop("checked") == false){
            $('.msjError').remove();
         }

   });

  
}


// REGISTRO

function orden(mediaqueryList){
   var mediaqueryList = window.matchMedia("(max-width: 992px)");
   if (mediaqueryList.matches) {
      $(".registroSuavel--hero .row").append($("#imgCarro"));
      // console.log("m");
  } else {
   $(".registroSuavel--hero--arte").append($("#imgCarro"));
      // console.log("d");
  }
   
}

$(document).ready(function () {
  validacionSesion();
  validacionForm();
  orden();
  
   $(window).resize(function () {
      orden();
   });

});

    

