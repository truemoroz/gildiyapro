<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ГИЛЬДИЯ ПРО - тестовое</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/main.css">

</head>
<body>

<div class="addtasks">
    <h1>Добавление новой задачи</h1>
    <form id="addform" method="post" action="/add">
        @csrf
        <div class="form-group">
            <div class="input-group mb-3">
                <input type="text" name="title" class="form-control" placeholder="Название задачи" aria-label="Название задачи">
            </div>
            <div class="input-group mb-3">
                <input type="text" name="name" class="form-control" placeholder="Имя автора" aria-label="Имя автора">
            </div>
            <div class="input-group mb-3">
                <select class="custom-select" id="js-status" name="status">
                    <option selected>Выбрать статус</option>
                    @foreach($statuses as $status)
                        <option value="{{ $status->id }}">{{ $status->name }}</option>
                    @endforeach

                </select>
            </div>

        </div>

        <button type="submit" class="btn btn-primary">Добавить</button>
    </form>
</div>

</body>
</html>