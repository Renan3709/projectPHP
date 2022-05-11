<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{env("APP_NAME")}}</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" type="text/css" href="{{ asset('css/ixtilo.css') }}" />
</head>

<body id="pagina">
  <div class="card" id="telalogin">
    <button type="button" class="btn btn-dark dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">
      <span class="caret">Login</span>
    </button>
    <div class="card-body">
      </button>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="{{route('cadastro')}}">Cadastro</a>
      </div>
      <form action="save_user" method="post">
        @csrf
        <hr>
        <div class="form-group">
          <label for="">Email:</label>
          <input type="text" name="email" id="" placeholder="insira seu email" class="form-control">
        </div>
        <hr>
        <div class="form-group">
          <label for="">Senha:</label>
          <input type="password" name="password" id="" placeholder="insira sua senha" class="form-control">
        </div>
        <hr>
        <hr>
        <button type="submit" class="btn btn-outline-dark  btn-block ">Login</button>
      </form>

    </div>
  </div>

</body>

</html>