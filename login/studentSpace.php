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
    if (isset($_POST["btn1"])) {

        $idEntre = $_POST['id'];

        class personne
        {
            public $Fname;
            public $Lname;
            public $email;
        }

        class student extends personne
        {
            public $StudentId;
            public function afficher()
            {
                echo '<div class="result">YOU ARE CONNECTED AS : <br> ID :' . $this->StudentId . '<br>YOU ARE : ' . $this->Fname . ' ' . $this->Lname . '<br>YOUR EMAIL :' . $this->email . '</div>';
            }
        }

        $student1 = new student();
        $student1->Fname = 'OUSSAMA';
        $student1->Lname = 'FANNAH';
        $student1->StudentId = 2333;
        $student1->email = "OUSSAMA_FNH@GMAIL:COM";

        $student2 = new student();
        $student2->Fname = 'ISSAM';
        $student2->Lname = 'FANNAH';
        $student2->StudentId = 7654;
        $student2->email = "ISSAM_FNH_11@GMAIL:COM";

        $student3 = new student();
        $student3->Fname = 'MED';
        $student3->Lname = 'FANNAH';
        $student3->StudentId = 4232;
        $student3->email = "MED_FNH@GMAIL:COM";

        $students = array($student1, $student2, $student3);
        for ($i = 0; $i < count($students); $i++) {
            if ($students[$i]->StudentId == $idEntre) {
                $students[$i]->afficher();
                break;
            }
            if ($students[$i]->StudentId !== $idEntre) {
                if ($i == 2  ) //2 est le nombres des elements dans le tableaux stdents
                { 
                    echo '<div class="result">THIS ID DOSE´NT EXIST</div>';
                }
            }
        }
    }
    ?>


</html>
