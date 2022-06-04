<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href={{ asset('assets/css/home.css') }} rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="filter" id="myDIV">
        <div class="text-right close" id="hide" >
            <i class="fa-solid fa-xmark"></i>
        </div>
        <form method="GET" action="filter">
            <div class="choices">
                <p>category</p>
                @foreach($category as $value)
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="type" id="type{{ $value->id }}"
                            {{request()->get('type') == $value->id  ? 'checked' : ''}}
                        value="{{ $value->id }}">

                        <label class="form-check-label" for="type{{ $value->id }}">
                            {{ $value->name }}
                        </label>
                    </div>
                @endforeach
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="type" id="type"
                        value="all">
                    <label class="form-check-label" for="type">
                        all
                    </label>
                </div>
            </div>
            {{-- <div class="form-check">
                <input class="form-check-input" type="hidden" name="status" value="encour">
            </div> --}}
            <div class="w-100 mt-btn">
                <button type="submit" class="btn btn-primary es-search w-100">
                    Filter
                </button>
            </div>
        </form>
    </div>
</div>
    <div class="container">

        <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 col-product">
            @foreach ($products as $value)
            <div class="col product">
                <div class="card radius-10 w-100">
                    <div class="card-body card-menu">
                        <div>
                            <div class="d-flex justify-content-between">
                                <div class="ps">
                                    <p class="ps-profession"></p>
                                </div>
                                <div>
                                    <p><strong class="strong"><img class="float-right" src='/img/prix.png'
                                                width="15" height="15" alt="">{{ $value->price }}</strong><span
                                            class="heure">/Price</span></p>
                                </div>
                            </div>
                            <div class="es">
                                <p class="es-name">{{ $value->title }}</p>
                            </div>
                            <div>
                                <p class="date-time">
                                    <span class="date"><img class="float-right" src='img/date.png'
                                            width="18" height="18" alt="">{{ $value->category->name }}</span>
                                </p>
                            </div>
                            <div class="product-text"> {{ Str::limit($value->desc, 40) }}</div>
                            <div class="float-right"> <button type="button"
                                    class="btn btn-primary btn-product">Voir Product</button></div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

</body>

</html>
