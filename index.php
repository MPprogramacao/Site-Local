<?php
  include_once("calendario.php"); 
  setlocale(LC_TIME, 'portuguese');
?>

<!doctype html>
<html lang="pt">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!-- css -->
    <link href="css.css" rel="stylesheet">

    <title>Local</title>
  </head>
  <body> 
    <!-- MENU -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">MP local</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="#" onclick='mostra_oculta("1")'>Início</a>
                <a class="nav-link" href="#" onclick='mostra_oculta("2")'>Agenda</a>
                <a class="nav-link" href="#" onclick='mostra_oculta("4")'>To-Do</a>
                <a class="nav-link" href="#" onclick='mostra_oculta("3")'>Arquivos</a>
                
            </div>
            </div>
        </div>
    </nav>
    <br>
    <div class="container-fluid">
        <!-- DIV PRINCIPAL -->
        <div id="1">
            <h2 align="center">MP Local</h2>
            <hr>
        </div>

        <!-- DIV AGENDA -->
        <div id="2">
            <h2 align="center">Agenda</h2>
            <hr>

            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">            
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-outline-primary">Novo</button>
                <button type="button" class="btn btn-sm btn-outline-success">Hoje</button>
                </div>
                <button type="button" class="btn btn-sm btn-outline-danger dropdown-toggle">
                <span data-feather="calendar"></span>
                This week
                </button>
            </div>         
            </div>

            <div class="month">      
            <ul>
                <li class="prev">&#10094;</li>
                <li class="next">&#10095;</li>
                <li>
                <?php echo strftime("%B"); ?><br>
                <span style="font-size:18px"><?php echo date('Y'); ?></span>
                </li>
            </ul>
            </div>
            
            <ul class="weekdays">
            <li>D</li>
            <li>S</li>
            <li>T</li>
            <li>Q</li>
            <li>Q</li>
            <li>S</li>
            <li>S</li>
            </ul>
            
            <ul class="days">      
            
            <?php 
            $U_Dia = date("t");
            $h_Dia = date("d");         

            $i = 0;
            while($i < $j){ ?>
            <li></li>
            
            <?php $i++; 
            }

            $i = 1; 
            while($i <= $U_Dia){          
            
            if($i == $h_Dia){ ?>
                <li data-bs-toggle="modal" data-bs-target="#modal_hoje" ><span class="active"><?php echo $i ; ?></span></li>
            <?php } else {  if($i >= $h_Dia){?>

                <li data-bs-toggle="modal" data-bs-target="#modal_novo"> <?php echo $i ; ?></li>
            <?php } else{ ?>
                <li> <?php echo $i ; ?></li>
            <?php }} $i++; } ?>          
            
            </ul>

        </div>

        <!-- DIV ARQUIVOS -->
        <div id="3">
            <h2 align="center">Arquivos</h2>
            <hr>
    

            <form class="row g-3">
                <div class="col-auto">
                    <input class="form-control" type="file" id="formFileMultiple" multiple>
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary mb-3" onclick='mostra_oculta()'>Confirm identity</button>
                </div>
            </form>

            <table class="table">
                <thead>
                    <th scope="col">Nome</th>
                    <th scope="col">Data</th>
                </thead>
                <tboy>
                    <tr>
                    <td>Usuario</td>
                    <td>06/02/2001<td>
                    <td>
                        <a class="btn btn-primary" href="#" role="button">Baixar</a>
                        <a class="btn btn-danger" href="#" role="button">Excluir</a>
                    </td>
                    </tr>
                    <tr>
                    <td>Usuario</td>
                    <td>06/02/2001<td>
                    <td>
                        <a class="btn btn-primary" href="#" role="button">Baixar</a>
                        <a class="btn btn-danger" href="#" role="button">Excluir</a>
                    </td>
                    </tr>
                </tboy>
            </table>
        </div>

        <!-- DIV To-Do -->
        <div id="4">
            <h2 align="center">To-Do</h2>
            <hr>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js.js"></script>

  </body>
</html>