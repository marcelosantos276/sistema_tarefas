<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Flex:opsz,wght@8..144,200&display=swap" rel="stylesheet">

    <title>Sistema Tarefas</title>
</head>

<body>
    <div class="container-fluid cor_fundo">
        <div class="row mt-3 mb-3">
            <div class="col">
                <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top fonte-barra">
                    <a class="navbar-brand" href="#">
                        <svg xmlns="../public/img/icons/stack-flow.svg" width="20" height="20" fill="currentColor" class="bi bi-stack-overflow" viewBox="0 0 16 16">
                            <path d="M12.412 14.572V10.29h1.428V16H1v-5.71h1.428v4.282h9.984z" />
                            <path d="M3.857 13.145h7.137v-1.428H3.857v1.428zM10.254 0 9.108.852l4.26 5.727 1.146-.852L10.254 0zm-3.54 3.377 5.484 4.567.913-1.097L7.627 2.28l-.914 1.097zM4.922 6.55l6.47 3.013.603-1.294-6.47-3.013-.603 1.294zm-.925 3.344 6.985 1.469.294-1.398-6.985-1.468-.294 1.397z" />
                        </svg>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="../principal/index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="">Usuários</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="">Tarefas</a>
                            </li>
                            <p class="position-absolute end-0 m-2" role="search">Usuário Logado:</p>
                    </div>
                </nav>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col">
                <p class="fs-1 text-center mt-3"> Inserir Novo Usuário</p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <form action="novo_usuario.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="exampleInputNome" class="form-label">Nome Usuário</label>
                        <input type="text" name="nome" class="form-control" id="exampleInputNome" aria-describedby="NomeHelp" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail" class="form-label">Email Usuário</label>
                        <input type="text" name="email" class="form-control" id="exampleInputNome" aria-describedby="NomeHelp" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputSenha" class="form-label">Senha</label>
                        <input type="password" id="senha" name="senha" class="form-control" aria-describedby="SenhaInicioHelp" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputSenhaConfirma" class="form-label">Confirme a Senha</label>
                        <input type="password" id="confirma_senha" name="confirma_senha" class="form-control" aria-describedby="SenhaInicioHelp" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputTelefone" class="form-label">Telefone</label>
                        <input type="tel" id="telefone" name="telefone" class="form-control" aria-describedby="TelefoneHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputFile" class="form-label">Imagem</label>
                        <input type="file" id="arquivo" name="arquivo" class="form-control" id="exampleInputFile" aria-describedby="FileFimHelp">
                    </div>
                    <input type="submit" name="Enviar" value="Enviar" class="btn btn-primary">
                    <a class="btn btn-primary" href="index_usuario.php">Voltar</a>
                </form>
            </div>
        </div>
        <div class="row mt-3 bg-secondary m-2 fixed-bottom">
            <div class="col text-center">
                Redes Sociais
            </div>
            <div class="col text-center">
                Desenvolvido por: Fulano, Fulano e Fulano
            </div>
            <div class="col text-center">
                Alunos do 3º AI 
            </div>
        </div>
    </div>
    <script src="../public/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>