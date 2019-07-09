<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/style.css">

    <title>generate password using vue</title>
  </head>
  <body>
    <div id="app">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row top-margin">
                        <div class="col-md-8">
                            <div class="form-group">
                                <input type="number" class="form-control" id="number" aria-describedby="number" placeholder="Enter how many password want to generate?" v-model="length">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <button v-on:click="generatepassword" type="button" class="btn btn-primary btn-block">{{ button_name }}</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <ul class="list-group">
                        <li v-for="(password, index) in passwords" v-if="length > 0" class="list-group-item">{{ index+1 }} password is: "{{ password }}"</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/vue.min.js"></script>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="assets/app.js"></script>
  </body>
</html>