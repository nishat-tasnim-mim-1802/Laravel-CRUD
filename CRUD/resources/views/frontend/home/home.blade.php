<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IMS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" >
  </head>
  <body>
     <navbar>
        <nav class="navbar navbar-expand-lg bg-secondary ">
            <div class="container-fluid ">
              <a class="navbar-brand" href="#">Product Store</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  
                  <li class="nav-item">
                    <a class="nav-link" href="#">Products</a>
                  </li>

                
                </ul>
              </div>
            </div>
          </nav>
     </navbar>
     <main>
        <div class="row p-5">
            @foreach ($products as $product)
            <div class="col-md-4">
                <div class="card bg-info">
                    <div class="card-body">
                      <h5 class="card-title">{{$product->name}}</h5>
                     <h5>{{$product->quantity}}</h5>
                     <h5>{{$product->price}}</h5>
                    </div>
                  </div>
            </div>
            @endforeach
            
        </div>
     </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" ></script>
  </body>
</html>