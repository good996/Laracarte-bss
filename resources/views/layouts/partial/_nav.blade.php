        <nav class="navbar navbar-expand-md navbar-dark bg-dark static-top">
              <a class="navbar-brand" href="{{route('root_path')}}">{{config('app.name')}}</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item {{set_route_active('root_path')}}">
                    <a class="nav-link" href="{{route('root_path')}}">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item {{set_route_active('about_path')}}">
                    <a class="nav-link" href="{{route('about_path')}}">about</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">artisan</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Planet</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown01">
                      <a class="dropdown-item" href="#">Laravel.com</a>
                      <a class="dropdown-item" href="#">Laravel.io</a>
                      <a class="dropdown-item" href="#">Laracast </a>
                      <a class="dropdown-item" href="#">Larajob</a>
                      <a class="dropdown-item" href="#">Laravel News</a>
                      <a class="dropdown-item" href="#">Larachat</a>
                    </div>
                  </li>
                   <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">artisan</a>
                  </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                  <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                  <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
                </form>
              </div>
        </nav>