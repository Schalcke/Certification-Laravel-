<!DOCTYPE html>
<html lang="fr">
    <head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Champy</title>
		{!! Html::style('https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css') !!}
		{!! Html::style('https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css') !!}
		<!--[if lt IE 9]>
			{{ Html::style('https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js') }}
			{{ Html::style('https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js') }}
		<![endif]-->
		<style>
            .page-header{
                text-align: center;
            }
        </style>
	</head>
  <body>
    <header class="jumbotron">
      <div class="container">
        <h1 class="page-header">Champy : les équipes de la D1 et de leurs classements</h1>

        <div class="row">
            <div class="col-md-offset-4 col-md-4">
                <a href="http://localhost:8000/equipes" class="btn btn-primary pull-left"> Voir équipes </a>
                <a href="" class="btn btn-primary pull-right"> Ajouter un score </a>
            </div>
        </div>
        @yield('header')
      </div>
    </header>
    <div class="container">
      @yield('contenu')
    </div>
  </body>
</html>
