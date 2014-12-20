## Captcha AntiSpam PHP ##


Captcha configurable para cualquier formulario php, evita el uso de robot que se encargan
de enviar códigos y link maliciosos.


Para el uso del captcha se deben configurar dos páginas, la del form y la página que recibe el form.



####Parámetros y configuraciones:####


#####Pagina Form#####


classInput: (Parámetro | Opcional) Corresponde a la clase css del input del captcha.

classOpciones: (Parámetro | Opcional) Corresponde a la clase css de las opciones que van cambiando 
				dinámicamente.

classError: (Parámetro | Opcional) Corresponde a la clase css del mensaje de error.

placeholder: (Parámetro | Opcional) Corresponde al texto a mostrarse al interior del input del captcha.



#####Pagina Destino#####


redirige: (Parámetro | Opcional) Recibe un true o false, true indica que al encontrar error en el captcha
			se redirigirá  a una página indicada.

paginaerror: (Parámetro | Opcional) Corresponde a la página que se redirigira cuando se produzca el error.

mensajeError: (Parámetro | Opcional) Mensaje que se mostrar si redirige es false, se mostrara bajo el form.

ValidaCaptcha(): (Función| Obligatoria) Función que activa la validación de captcha.

estado: (Parámetro | Obligatorio) Retorna true cuando no existe error al ingresar el captcha o false si existe error.

