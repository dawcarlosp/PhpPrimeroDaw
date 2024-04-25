<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primer Trabajo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.5/css/dataTables.dataTables.css" />
    <script src="https://cdn.datatables.net/2.0.5/js/dataTables.js"></script>
    <style>
        body {
            background: #7F7FD5;
            /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #91EAE4, #86A8E7, #7F7FD5);
            /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #91EAE4, #86A8E7, #7F7FD5);
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari*/
        }
    </style>
</head>

<body>
    <!--Barra de navegacion-->
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand text-white me-auto" href="#">Carlos - Proyecto Final 3</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="#">Pereira(Administrador)</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Principal</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Gestion
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled text-white" aria-disabled="true">Cerrar Sesion</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--Container-->
    <div class="container bg-light mt-2">
        <div class="row">
            <div class="col-12 col-md-4">
                <form action="model/Insertar.php" method="POST">
                    <fieldset>
                        <legend>Alumno</legend>
                        <div class="mb-3">
                            <label for="inputText" class="form-label">Código</label>
                            <input class="form-control" type="text" placeholder="Código..." aria-label="default input example" name="codigo">
                            <label for="inputText" class="form-label">Apellidos</label>
                            <input class="form-control" type="text" placeholder="Apellidos..." aria-label="default input example" name="apellido">
                            <label for="inputText" class="form-label">Nombres</label>
                            <input class="form-control" type="text" placeholder="Nombres..." aria-label="default input example" name="nombre">
                            <label for="Sexo">Sexo</label>
                            <select class="form-select" aria-label="Default select example" name="sexo">
                                <option selected>Femenino</option>l
                                <option value="2">Masculino</option>
                            </select>
                            <label for="inputText" class="form-label">Fecha de nacimiento</label>
                            <input class="form-control" type="date"  aria-label="default input example">
                            <input class="form-control" type="text" placeholder="Edad" aria-label="default input example" name="edad">
                            <label for="inputText" class="form-label">Especialidad</label>
                            <input class="form-control" type="text" placeholder="Especialidad..." aria-label="default input example" name="especialidad">
                        </div>
                        <div class="d-block mb-3">
                            <button type="submit" class="btn btn-success btn-lg w-100 mb-3">Guardar</button>
                            <button  class="btn btn-light btn-lg w-100">Limpiar</button>
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class="col-12 col-md-8">
                <legend>Listado de Alumnos</legend>
                <button type="submit" class="btn btn-danger btn-lg w-100"><i class="bi bi-file-earmark-pdf"></i>Exportar
                    a PDF</button>
                <div class="row">
                    <div class="col-6">
                        <div class="row">
                            <div class="col-2">
                                <label for="registro" class="col-form-label">Mostrar</label>
                            </div>
                            <div class="col-4">
                                <select class="form-select w-100" id="registro" aria-label="Default select example">
                                    <option selected>1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                            </div>
                            <div class="col-4">
                                <p class="m-0 ml-1">por página</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="row">
                            <div class="col-4 "></div>
                            <div class="col-2 ">
                                <label for="inputEjemplo" class="col-form-label">Buscar:</label>
                            </div>
                            <div class="col-6 ">
                                <input type="text" class="form-control" id="inputEjemplo">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <table class="table table-striped table-light bg-light">
                        </tr>
                        <thead>
                            <tr>
                                <th><b>#</b></th>
                                <th><b>Código</b></th>
                                <th>Alumno</th>
                                <th>Sexo</th>
                                <th>Edad</th>
                                <th>Especialidad</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include_once "model/Alumno.php";
                            $rows = Alumno::getAlumnos();
                            foreach ($rows as $alum) { ?>
                                <tr>
                                    <td class="centrado"><?= $alum->getId()?></td>
                                    <td class="centrado"><?= $alum->getCodigo() ?></td>
                                    <td class="centrado"><?= $alum->getNombre() ?></td>
                                    <td class="centrado"><?= $alum->getSexo() ?></td>
                                    <td class="centrado"><?= $alum->getEdad() ?></td>
                                    <td class="centrado"><?= $alum ->getEspecialidad() ?></td>
                                    <td class="centrado">
                                        <a href="#">
                                            <i class="bi bi-pencil-fill bg-warning m-2"></i>
                                        </a>
                                        <a href="#">
                                            <i class="bi bi-trash-fill bg-danger"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>