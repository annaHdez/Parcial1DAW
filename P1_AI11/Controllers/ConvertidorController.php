<?php

Class ConvertidorController{
    public $entrad;
    public $panta;
    public $accio;
    public $result;
    public $accioRes;

    function __construct(){
        $this->entrad=0;
        $this->panta="0";
        $this->accio ="";
        $this->result=0;
    }

    public function recibirParametros(){
        if(isset($_POST["entrad"])){
            $this->entrad= $_POST["entrad"];
        }

        if(isset($_POST["result"])){
            $this->result=$_POST["result"];
        }

        if(isset($_POST["accio"])){
            $this->accio=$_POST["accio"];
        }
    }

    public function ejecutaroperacion(){
        switch($_POST["select1"]){
            case "cm"; $this-> convCmaC(); break;
            case "cm"; $this-> convCmaMe(); break;
            case "cm"; $this-> convCmaPul(); break;
            case "cm"; $this-> convCmaYa(); break;
        //-------------------------------------------
            case "mt"; $this-> convMtaC();break;
            case "mt"; $this-> convMtaMe();break;
            case "mt"; $this-> convMtaPul();break;
            case "mt"; $this-> convMtaYa();break;
        //-------------------------------------------
            case "pg"; $this-> convPgaC(); break;
            case "pg"; $this-> convPgaMe(); break;
            case "pg"; $this-> convPgaPul(); break;
            case "pg"; $this-> convPgaYa(); break;
        //-------------------------------------------
            case "yd"; $this-> convYdaC();break;
            case "yd"; $this-> convYdaMe();break;
            case "yd"; $this-> convYdaPul();break;
            case "yd"; $this-> convYdaYa();break;

//----------------------------------------------------------------------
            case "gr"; $this-> convGraGr();break;
            case "gr"; $this-> convGraKg();break;
            case "gr"; $this-> convGraOnz();break;
        //-------------------------------------------
            case "kg"; $this-> convKgaGr();break;
            case "kg"; $this-> convKgaKg();break;
            case "kg"; $this-> convKgaOnz();break;
        //-------------------------------------------
            case "onz"; $this-> convOnzaGr();break;
            case "onz"; $this-> convOnzaKg();break;
            case "onz"; $this-> convOnzaOnz();break;
        
//----------------------------------------------------------------------
            case "lt"; $this-> convLtaLt();break;
            case "lt"; $this-> convLtaMl();break;
            case "lt"; $this-> convLtaM3();break;
        //-------------------------------------------
            case "ml"; $this-> convMlaLt();break;
            case "ml"; $this-> convMlaMl();break;
            case "ml"; $this-> convMlaM3();break;
        //-------------------------------------------
            case "m3"; $this-> convM3aLt();break;
            case "m3"; $this-> convM3aMl();break;
            case "m3"; $this-> convM3aM3();break;

            //default: echo "Las medidas no son compatibles"; break;
        }

       
    }

    private function convCmaC(){
        echo("Estás utilizando esta medida");
    }
    private function convCmaMe(){
        $this->entrad=$this->entrad . " ";
        $this->result=$this->result + $this->entrad;
    }
    private function convCmaPul(){
        $this->entrad=$this->entrad ." ";
        $this->result=$this->result + $this->entrad;
    }
    private function convCmaYa(){
        $this->entrad=$this->entrad ." ";
        $this->result=$this->result + $this->entrad;
    }
//------------------------------------------------------------------
    private function convMtaC(){
        $this->entrad=$this->entrad ." ";
        $this->result=$this->result + $this->entrad;
    }
    private function convMtaMe(){
        $this->entrad=$this->entrad ." ";
        $this->result=$this->result + $this->entrad;
    }
    private function convMtaPul(){
        $this->entrad=$this->entrad ." ";
        $this->result=$this->result + $this->entrad;
    }
    private function convMtaYa(){
        $this->entrad=$this->entrad ." ";
        $this->result=$this->result + $this->entrad;
    }
//--------------------------------------------------------------------
    private function convGr(){
        $this->entrad=$this->entrad ." ";
        $this->result=$this->result + $this->entrad;
    }
    private function convKg(){
        $this->entrad=$this->entrad ." ";
        $this->result=$this->result + $this->entrad;
    }
    private function convOnz(){
        $this->entrad=$this->entrad ." ";
        $this->result=$this->result + $this->entrad;
    }
//-------------------------------------------------------------------
    private function convLt(){
        $this->entrad=$this->entrad ." ";
        $this->result=$this->result + $this->entrad;
    }
    private function convMl(){
        $this->entrad=$this->entrad ." ";
        $this->result=$this->result + $this->entrad;
    }
    private function convM3(){
        $this->entrad=$this->entrad ." ";
        $this->result=$this->result + $this->entrad;
    }
}
