<?php
    require_once('header.php');
    require_once('../config/Conexao.php');  
    $pdo = (ConnectionFactory::getConnection());

    $stm = $pdo->query("SELECT * FROM atendimentos");
    $stm->execute();
    $atendimentos = $stm->fetchAll();
?>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Atendimentos</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-dashboard"></i>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-globe"></i>
                                    <b class="caret"></b>
                                    <span class="notification">5</span>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Notification 1</a></li>
                                <li><a href="#">Notification 2</a></li>
                                <li><a href="#">Notification 3</a></li>
                                <li><a href="#">Notification 4</a></li>
                                <li><a href="#">Another notification</a></li>
                              </ul>
                        </li>
                        <li>
                           <a href="">
                                <i class="fa fa-search"></i>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                           <a href="">
                               Account
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    Dropdown
                                    <b class="caret"></b>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                              </ul>
                        </li>
                        <li>
                            <a href="logout.php">
                                Log out
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12" style="margin-bottom: 10px;">
                        <a href="new-attendance.php">
                            <button type="button" class="btn btn-success" style="background-color: #5cb85c !important; border-color: #4cae4c; color: #fff;">Cadastrar novo atendimento</button>    
                        </a>                        
                    </div>  
                    <div class="col-md-12">
                        <div class="card">
                            <!--
                            <div class="header">
                                <h4 class="title">Striped Table with Hover</h4>
                                <p class="category">Here is a subtitle for this table</p>
                            </div>
                            -->                                                    

                            <div class="content table-responsive table-full-width">
                                <table id="table" class="table table-hover table-striped">
                                    <thead>
                                        <th>ID</th>
                                    	<th>Nome do paciente</th>
                                    	<th>Médico responsável</th>
                                    	<th>Data de cadastro</th>
                                    	<th>Data da consulta</th>
                                    </thead>
                                    <tbody>
                                        <?php foreach($atendimentos as $row){ ?>

                                            <tr>
                                                <td><?php echo $row['id_atend']; ?></td>
                                                <td><?php echo $row['nomepaciente_atend']; ?></td>
                                                <td><?php echo $row['nomemedico_atend']; ?></td>
                                                <td><?php echo $row['dtcadastro_atend']; ?></td>
                                                <td><?php echo $row['dtconsulta_atend']; ?></td>
                                            </tr>
                                        <?php } ?>        
                                    </tbody>
                                </table>

                                <script type="text/javascript">
                                    $('#table').bootstrapTable({
                                        data: data,
                                        showExport: true,
                                        exportOptions: {
                                            fileName: 'custom_file_name'
                                        }
                                    });
                                </script>                               

                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>

<?php
    require_once('footer.php');
?>

