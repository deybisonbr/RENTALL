<?php
namespace Models;

class Message
{
    private $url;

    public function __construct($url)
    {
        $this->url = $url;
    }

    //Tipos de mensagens neutral info success alert error close



    public function setMessage($msg, $type, $redirect = "")
    {
        $diretoryInitial = "/RENTALL/";

        $_SESSION["msg"] = $msg;
        $_SESSION["type"] = $type;
    

        if ($redirect != "back") {
            $redirectUrl = $diretoryInitial . $redirect;
        } else {
            $redirectUrl = $_SERVER["HTTP_REFERER"] ?? $diretoryInitial . "/index.php"; // Verifica se HTTP_REFERER está definida, caso contrário usa index.php
        }
    
        header("Location: $redirectUrl");
        exit;
       
    }

    public function getMessage()
    {

        if (!empty($_SESSION["msg"])) {
            return [
                "msg" => $_SESSION["msg"],
                "type" => $_SESSION["type"]
            ];
        } else {
            return false;
        }
    }

    public function clearMessage()
    {
        $_SESSION["msg"] = "";
        $_SESSION["type"] = "";
    }
}

