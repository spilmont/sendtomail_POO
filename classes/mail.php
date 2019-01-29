<?php
/**
 * Created by PhpStorm.
 * User: Onatouvus
 * Date: 29/01/2019
 * Time: 20:56
 */

class mail
{
    private $destinataire;
    private $titre;
    private $message;


    public function __construct()
    {
        $this->destinataire;
        $this->titre;
        $this->message;


    }




    public function setdestinataire($destinataire){

        $this->destinataire = $destinataire;
    }

    public function settitre($titre){

        $this->titre = $titre;
    }
    public function setmessage($message){

        $this->destinataire = $message;
    }



    public function send(){

        mail($this->destinataire,$this->titre,$this->message);
    }

}