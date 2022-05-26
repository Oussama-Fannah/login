<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    .result {
        font-family: 'Poppins', sans-serif;
        color: #ffe602;
        margin-top: 90px;
        margin-left: 90px;
        height: auto;
        width: 500px;
        background-color: rgba(255, 255, 255, 0.26);
        position: absolute;
        border-radius: 10px;
        backdrop-filter: blur(10px);
        border: 2px solid rgba(255, 255, 255, 0.1);
        box-shadow: 0 0 40px rgba(8, 7, 16, 0.6);
        padding: 50px 35px;
        line-height: 32px;
    }
</style>

<?php
if(isset($_POST["btn2"])){

    $LoginEntre = $_POST['login'];
    $PasswordEntre = $_POST['password'];

    class personne {      
        public $Fname;
        public $Lname;
        public $email;
    }
    class teacher extends personne {
        public $login ;
        public $password ;
        public function affichez(){
            echo '<div class="result">CONNECTED AS :<br> FULL-NAME :'.$this->Fname.' '.$this->Lname.'<br>USER-NAME :'.$this->login.'<br>PASSWORD :'.$this->password.'<br>EMAIL :'.$this->email.'</div>';
        }
    }

    $teacher1= new teacher();
    $teacher1->Fname = "ANAS" ;
    $teacher1->Lname = "YAHYAOUI" ;
    $teacher1->login = "anasyahyaoui10";
    $teacher1->password = "123456";
    $teacher1->email = "ANAS_123@GMAIL:COM";

    $teacher2= new teacher();
    $teacher2->Fname = "MED" ;
    $teacher2->Lname = "NAJI" ;
    $teacher2->login = "Xx_naji_xX";
    $teacher2->password = "qwertz";
    $teacher2->email = "NAJI_LEGEND@GMAIL:COM";


    $teacher3= new teacher();
    $teacher3->Fname = "YOUSSEF" ;
    $teacher3->Lname = "AZREG" ;
    $teacher3->login = "azreg_433";
    $teacher3->password = "20212022";
    $teacher3->email = "AZREG_GOAT@GMAIL:COM";


    $teachers = array($teacher1 ,$teacher2 ,$teacher3);
    for ($i=0; $i <count($teachers) ; $i++) {
            if($teachers[$i]->login == $LoginEntre){
                if($teachers[$i]->password == $PasswordEntre){
                    $teachers[$i]->affichez();
                    break;
                }
                if($teachers[$i]->password !== $PasswordEntre){
                    if($i==2){
                        echo '<div class="result">WRONG PASSWORD</div>';
                        
                    }
                }
            }
            if($teachers[$i]->login !== $LoginEntre){
                if($i==2){
                    echo '<div class="result">WRONG USERNAME</div>';
                    
                }
            }
        }
}

?>
</html>

