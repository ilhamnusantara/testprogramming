<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ asset('/dashboard/plugins/fontawesome-free/css/all.min.css') }}">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{asset('/dashboard/dist/css/adminlte.min.css')}}">
        <style>
            .container2 {
                height: 200px;
                position: relative;
                border: 3px solid green;
            }

            .vertical-center {
                /*margin: 0;*/
                position: absolute;
                top: 50%;
                left: 46%;
                /*-ms-transform: translateY(-50%);*/
                /*transform: translateY(-50%);*/
            }
        </style>

    </head>
    <body>
        <div class="hold-transition sidebar-mini layout-fixed">
            <div class="content">
                <div class="container">
                    <div class="vertical-center">
                        <form method="get" action="{{route('produk.index')}}">
                            <button class="btn btn-info btn-lg float-right" type="submit">
                                Going to Produk
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
