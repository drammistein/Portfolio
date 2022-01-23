<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel = "shortcut icon" type = "imagem/x-icon" href = "assets/images/favicon_io/images.png" />
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <title>Sistema de Cálculos</title>

</head>

<body>
  
   <header>
        <div class="navbar navbar-expand" style="background-color: #0260a0;">
            <div class="container d-flex justify-content-between">
                            <!-- LOGO da marca -->
                <a class="navbar-brand" href="#">
                    <img id="logo" src="assets/images/logo_biodiesel.png" alt="Logo">    
                </a>

                <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <nav class="navbar-collapse collapse justify-content-end" id="navbarMenu">
                    <div class="navbar-nav">
                        <a href="#" class="nav-item nav-link" data-toggle="modal" data-target="#biodiesel">Biodiesel</a>
                        <a href="#" class="nav-item nav-link" data-toggle="modal" data-target="#oleo">Óleo</a>
                        <a href="#" class="nav-item nav-link" data-toggle="modal" data-target="#sebo">Sebo</a>
                    </div>
                </nav>    
            </div>
    </header>  

<main>

<div class="container-body"> 

    <section>
        <div class="modal fade" id="biodiesel">
            <div class="modal-dialog modal-xl modal-dialog-centered">
                <div class="modal-content">
                   <div id="mh4"> 
                        <div class="modal-header">
                            <h5>Sistema de Cálculo<br> Biodiesel</h5>
                        </div> 
                   </div>    
                    <div class="modal-body">
                        <form class="container d-flex flex-column">
                            <div class="form-group">
                                <label>Peso Bruto Total (PBT):</label>
                                  <!---  <input id="number1" class="form-control form-control-sm" type="text" />    -->
                                  <select class="form-control form-control-sm" id="exampleFormControlSelect1">
                                    <option>Selecione</option>
                                    <option>74000</option>
                                    <option>68500</option>
                                    <option>57000</option>
                                    <option>54500</option>
                                    <option>50000</option>
                                    <option>48500</option>
                                    <option>46000</option>
                                    <option>41500</option>
                                    <option>29000</option>
                                    <option>26000</option>
                                    <option>23000</option>
                                  </select>
                            </div>    
                            <label id="lbTara">Tara:</label>
                                <input id="tara" class="form-control form-control-sm" type="text" /> 
                            
                            <label>Seta do Carregamento:</label>
                                <input id="" class="form-control form-control-sm" type="text" />     

                            <label>Tolerância:</label>
                                <input id="" class="form-control form-control-sm" type="text" />    
                            
                            <label>Massa Suposta do Carregamento:</label>
                                <input id="" class="form-control form-control-sm" type="text" />
                            
                            <label>Massa Suposta Total:</label>
                                <input id="" class="form-control form-control-sm" type="text" />
                            
                              
                        </form>
                    </div>
                    <div class="modal-footer d-flex justify-content-between">
                        <input onclick="limpar()" type="reset" value="Limpar" class="btn btn-secondary fechar" >

                        <div class="right"> 
                            <button class="btn btn-success" data-target="#inserir">Calcular</button>
                            <button class="btn btn-danger" data-dismiss="modal">Fechar</button>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>    
        <div class="modal fade" id="oleo">
            <div class="modal-dialog modal-dialog-centered"> <!-- Posso colocar tbm modal-lg, modal-sm, modal-md -->
                <div class="modal-content">
                    <div id="mh4">	
                        <div class="modal-header">
                            <h5>Sistema de Cáculo<br>Óleo Degomado</h5>
                            <!-- Criando o botão de fechamento na parte superior
                            <button class="close" data-dismiss="modal"><span>&times;</span></button> -->
                        </div> 
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <form class="container d-flex flex-column" >
                                <label>Peso de Entrada:</label>
                                    <input id="pesoEntrada" class="form-control form-control-sm" type="text" /> 

                                <label>Peso Líquido Nota Fiscal:</label>
                                    <input id="pesoNf" class="form-control form-control-sm" type="text" /> 

                                 <label>Resultado:</label>
                                 <div id="resultado">
                                   <!--<input id="result" class="form-control form-control-lg"  value="0" type="text" /> -->
                                 </div>   
                            </form>
                        </div>
                    </div>
                    <div class="modal-footer d-flex justify-content-between" style="margin-right: 30px;">
                        <input onclick="limpar()" type="reset" value="Limpar" class="btn btn-secondary fechar" >
                       
                        <div class="right"> 
                            <button  id="botao" class="btn btn-success" onclick="calcular()">Calcular</button>
                            <button class="btn btn-danger" data-dismiss="modal">Fechar</button>
                        </div> 
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section>    
        <!-------------------------------------------------------------->
        <div class="modal fade" id="sebo">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div id="mh4"> 
                        <div class="modal-header">
                            <h5>Sistema de Cálculo<br>Sebo</h5>
                        </div>
                    </div>    
                    <div class="modal-body">
                        <div class="container">
                            <form class="container d-flex flex-column">
                                <label>Peso de Entrada:</label>
                                    <input class="form-control form-control-sm" type="text" id="pesoEntrada" name="" /> 

                                <label>Peso Líquido Nota Fiscal:</label>
                                    <input class="form-control form-control-sm" type="text" id="pesoNF" name="" /> 

                                 <label>PLaca:</label>
                                 <input class="form-control form-control-sm" type="text" id="placa" />

                                 <label>Resultado:</label>
                                 <input class="form-control form-control-sm" type="text" id="resultado"/>

                            </form>
                        </div>
                    </div>
                    <div class="modal-footer d-flex">
                         <!-- Criando o botão de fechamento na parte inferior-->
                         <button class="btn btn-warning" data-toggle="modal" data-target="#inserir">Adicionar Placa</button>
                         <input onclick="limpar()" type="reset" value="Limpar" class="btn btn-secondary fechar" >

                        <div class="right"> 
                            <button class="btn btn-success"  data-target="#inserir">Calcular</button>
                            <button class="btn btn-danger" data-dismiss="modal">Fechar</button>
                        </div>    
                    </div>
                </div>
            </div>
        </div>
        <!------------------Modal Para adicionar Placa e Tara dos Veículos------------------->
        <div class="modal fade" id="inserir">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5>Inserindo dados ao banco</h5>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <form class="container d-flex flex-column">
                                <label>Placa:</label>
                                    <input class="form-control form-control-sm" type="text" id="placa" name="" /> 
                                <label>Tara Média:</label> 
                                    <input class="form-control form-control-sm" type="text" id="tara" name="" /> 
                                <button class="btn btn-primary" data-dismiss="modal">Salvar</button>
                            </form>
                        </div>
                    </div>
                    <div class="modal-footer modal2 d-flex justify-content-end">
                         <!-- Criando o botão de fechamento na parte inferior-->
                         <button class="btn btn-danger" data-dismiss="modal">Fechar</button>

                    </div>
                </div>
            </div>
        </div>
    </section> 
</div>


</main>

    
    <script src="assets/js/Jquery 3.6.js"></script>
    <script src="assets/js/bootstrap.bundle.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>
