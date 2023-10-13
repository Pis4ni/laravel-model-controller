<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="dark">

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
                  <h2>
                    {{$movie['title']}}
                  </h2>
                </div>
                <div class="card-subtitle">
                  <h4 class="text-muted">
                    {{$movie['original_title']}}
                  </h4>
                </div>
              </div>
              <div class="card-content">
                {{$movie['nationality']}}
                <br>
                {{$movie['date']}}
              </div>
              <div class="card-footer">
                {{$movie['vote']}}
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
