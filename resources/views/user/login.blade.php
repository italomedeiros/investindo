<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="{{ asset('css/stylesheet.css') }}">
	<link href="https://fonts.googleapis.com/css?family=Fredoka+One" rel="stylesheet">
	<title>Login | Investindo</title>
</head>
<body>

	<div class="background"></div>

	<section id='conteudo-view' class="login"> 

		<h1>Investindo</h1>
		<h3>O nosso gerenciador de investimento</h3>

		{!! Form::open(['route' => 'user.login', 'method' => 'post']) !!}

		<p>Acesse o sistema</p>
		<label>
			{!! Form::text('username', null, ['class' => 'input', 'placeholder' => "Usuário"]) !!}
		</label>
		
		<label>
			{!! Form::password('password', ['class' => 'input', 'placeholder' => "Senha"]) !!}
		</label>

		{!! Form::submit("Entrar") !!}

		{!! Form::close() !!}

	</section>
</body>
</html>