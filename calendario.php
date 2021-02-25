<?php 

    //setlocale(LC_TIME, 'portuguese'); 
    date_default_timezone_set('America/Sao_Paulo');
    
    $mes = date('m');
    $ano = date('Y');
    $dia = date('d');
  
    $data = mktime(02,30,00,$mes,01,$ano);
    $comeca = strftime("%A", $data);    

    switch ($comeca) {
      case "Sunday":
          $j = 0;
          break;
      case "Monday":
          $j = 1;
          break;
      case "Tuesday":
          $j = 2;
          break;
      case "Wednesday":
          $j = 3;
          break;
      case "Thursday":
          $j = 4;
          break;
      case "Friday":
          $j = 5;
          break;
      case "Saturday":
          $j = 6;
          break;
  }
  ?>