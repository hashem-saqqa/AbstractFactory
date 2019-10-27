<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        spl_autoload_register(function($className){
            include_once $className . '.php';
        });

      $aCourse1 = Course::getaCourse();
      $aCourse1->setaDegree(new MscDegree());
      $aCourse1->view("SW Engineering 2", "Introduces design patterns ...","Abdelkareem Alashqar");

      $aCourse2 = Course::getaCourse();
      $aCourse2->setaDegree(new PhdDegree());
      $aCourse2->view("SW Engineering 2", "Introduces design patterns ...","Abdelkareem Alashqar");
      
      $aCourse3 = Course::getaCourse();
      $aCourse3->setaDegree(new BscDegree());
      $aCourse3->view("SW Engineering 2", "Introduces design patterns ...","Abdelkareem Alashqar");

      $aCourse4 = Course::getaCourse();
      $aCourse4->setaDegree(new DipDegree());
      $aCourse4->view("SW Engineering 2", "Introduces design patterns ...","Abdelkareem Alashqar");



        ?>
    </body>
</html>
