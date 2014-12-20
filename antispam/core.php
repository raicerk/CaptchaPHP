<?php

class Captcha{

	public $paginaerror;
	public $estado;
	public $redirige;
	public $classInput;
	public $classOpciones;
	public $classError;
	public $placeholder;
	public $mensajeError;

	public function CreaCaptcha(){

        $opcion = rand(1, 5);

        $_SESSION['IdRespuesta'] = $opcion;

        switch($opcion){
            case '1':
                return "<input id='txtRespuesta' name='txtRespuesta' value='' placeholder='".$this->placeholder."' class='".$this->classInput."'><span class='".$this->classOpciones."'> - 2 = 4</span><span class='".$this->classError."'>".$_GET['error']."</span>";
            break;
            case '2':
                return "<input id='txtRespuesta' name='txtRespuesta' value='' placeholder='".$this->placeholder."' class='".$this->classInput."'><span class='".$this->classOpciones."'> + 2 = tres</span><span class='".$this->classError."'>".$_GET['error']."</span>";
            break;
            case '3':
                return "<input id='txtRespuesta' name='txtRespuesta' value='' placeholder='".$this->placeholder."' class='".$this->classInput."'><span class='".$this->classOpciones."'> - uno = 2</span><span class='".$this->classError."'>".$_GET['error']."</span>";
            break;
            case '4':
                return "<input id='txtRespuesta' name='txtRespuesta' value='' placeholder='".$this->placeholder."' class='".$this->classInput."'><span class='".$this->classOpciones."'> * 2 = 6</span><span class='".$this->classError."'>".$_GET['error']."</span>";
            break;
            case '5':
                return "<input id='txtRespuesta' name='txtRespuesta' value='' placeholder='".$this->placeholder."' class='".$this->classInput."'><span class='".$this->classOpciones."'> * 1 = 5</span><span class='".$this->classError."'>".$_GET['error']."</span>";
            break;
        }
    }

    public function ValidaCaptcha(){

    	if($_POST){
            $respuesta = array(
                '1' => '6',
                '2' => '1',
                '3' => '3',
                '4' => '3',
                '5' => '5',
            );

            if($respuesta[$_SESSION['IdRespuesta']] != $_POST['txtRespuesta']){
	            $this->estado = false;
	            if ($this->redirige) {
	            	header("location: ".$this->paginaerror);
	            }else{
	            	header("location: ".$_SERVER['HTTP_REFERER']."?error=".$this->mensajeError);
	            }
	        }else{
	            $this->estado = true;
	        }
        }
	}
}

?>