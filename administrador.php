
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="java.js">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/yourcode.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Proyecto</title>
</head>
<body>
    <div class="container-fluid  " id="divglobal">
        <div class="col-sm-2 ">
            <br>
            <span onclick="openNavleft()"><img src="imagenes/icon menu.png" class="pointer" width="40vh" height="40vh"
                    alt=""></span>
            <div class=" sidenav" id="mySidenav">
                <!---Menu lado izquierdo-->
                <a href="javascript:void(0)" class="closebtn" onclick="closeNavleft()">&times;</a>
                <a href="#">
                    <div class=" divbotn">
    
                        <button id="boton" class="btn "><i class="fa fa-home icons" style="font-size: 3vh;"> </i>
                            Inicio</button>
                    </div>
                </a>
                <a href="#">
                    <div class="divbotn">
    
                        <button id="boton" class="btn "><img src="imagenes/dollar.png" alt=""
                                style="width: 3vh;height: 3vh;"> Mis puntos</button>
                    </div>
                </a>
                <a href="#">
                    <div class="divbotn">
                        <button id="boton" class="btn "><img src="imagenes/categoria.png" alt=""
                                style="width: 3vh;height: 3vh;"> Categoria</button>
                    </div>
                </a>
                <a href="#">
                    <div class="divbotn">
                        <button id="boton" class="btn "><i class="fa fa-cogs" style="font-size: 3vh;"></i>
                            Configuracion</button>
    
    
                    </div>
                </a>
    
                <a href="#">
                    <div class="divbotn">
                        <button id="boton" class="btn "><img src="imagenes/question.png" alt=""
                                style="width: 3vh;height: 3vh;"> Acerca del App</button>
                    </div>
                </a>

                
            </div>
        </div>


            <div class=" col-sm-8 " id="menuMedio">
                <!---columna del medio-->
                <div class="banner">
                    <div>
                        <img src="imagenes/banner.png" width="520vh" height="115vh" alt="">
                        
                    </div>
                    
                    
                   
                 </div>   
                 
                 <div class=" col-sm-12 ">
                   <center> <h3>Administrador</h3></center>
                      
                   
                    
                      
                        
                   
                 </div>

            </div>

            <div class=" col-sm-2 " id="menuderecho">
                <!---Menu lado derecho-->

               

                <label for=""> Aqui van los puntos
                    <?php
                   
                    ?>
                </label>
                
                <div>
                    <img onclick="validarVentana()" src="imagenes/arrow-down.png" id ="imagenderecha" style="margin-top: 3vh;"  class="pointer"  width="30vh" height="30vh" alt="">
                    <img onclick="validarVentana()" id ="imagenderecha" src="imagenes/ejemplo-avatar.png" class="pointer"   width="65vh" height="65vh" alt="">
                
                </div>
                
               
                <div class=" col-sm-12 sidenavRight listnotpoint " id="mySidenavRight">
                    
                        
                        <ul id="noBorder" >
                            <!-- <a href="javascript:void(0)" class="closebtnRight" onclick="closeNavRight()">&times;</a>  -->
                           
                                        <th ><img src="imagenes/ejemplo-avatar.png" class="pointer" style="" width="65vh" height="65vh" alt=""> Aqui va el nombre</th>
                                       <hr id="separador">
                             
                            
                            
                            <li class="opcioneslogin" >Cuenta</li>
                            <li class="opcioneslogin"  > <a href="login.html"> Cerrar sesion</a></li>
                            
                            
                        </ul>
                        
                </div>
        
            </div>
    </div>
    
    </div>






<script src="java.js"></script>


<!-------------------------------------------------------------------------------------->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
crossorigin="anonymous"></script>
</body>
</html>