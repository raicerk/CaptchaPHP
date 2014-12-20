## Captcha anti spam PHP ##


capta configurable para cualwuier formulario php, evita el uso de robot que se encargan
de enviar codigo y link maliciosos



* Para el uso del captcha se deben configurar dos paginas, la del form y la pagina que 
  recibe el form.


####Parametros y configuraciones:####


- Pagina Form


classInput: (Parametro | Opcional) Corresponde a la clase css del input del captcha

classOpciones: (Parametro | Opcional) Corresponde a la clase css del las opciones que van cambiando 
				dinamicamente

classError: (Parametro | Opcional) Corresponde a la clase css del mensaje de error

placeholder: (Parametro | Opcional) Corresponde al texto a mostrarse al interior del input del captcha



- Pagina destino


redirige: (Parametro | Opcional) Recibe un true o false, true indica que al encontrar error en el captcha
			se redirigira a una pagina indicada.

paginaerror: (Parametro | Opcional) Corresponde a la pagina que se redirigira cuando se produzca el error.

mensajeError: (Parametro | Opcional) Mensaje que se mostrar si redirige es false, se mostrara bajo el form.

ValidaCaptcha(): (Funcion | Obligatoria) Funcion que activa la validacion de captcha

estado: (Parametro | Obligatorio) Retorna true cuando no existe error al ingresar el captcha o false si existe error.

