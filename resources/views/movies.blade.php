<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>{{env('APP_NAME')}}</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

  <!-- Styles -->
  @vite('resources/js/app.js')
</head>

<body>
  <div class="wrapper">
    <div class="container">
  <h1>Movies!</h1>

      <div class="row">
        @foreach ($movies as $movie)
        <div class="col-3">
          <div class="card">
            <div class="card-body">
              <div class="card-header">
                <div class="card-title">
                  {{$movie['title']}}
                </div>
              </div>
            </div>
          </div>

        </div>
        @endforeach
      </div>
    </div>
  </div>

</body>

</html>
