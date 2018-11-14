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

<div class="tasks">
    <a href="./tasks/add" type="button" class="btn btn-primary tasks__button">Добавить задачу</a>
    <table id="tasks" class="tasks__table table table-striped table-bordered">
        <tr>
            <th></th>
            <th>Название задачи</th>
            <th>Автор</th>
            <th>Статус</th>
        </tr>
        @foreach($tasks as $task)
            <tr>
                <td><span class="js-delete tasks__delete" data-id="{{ $task->id }}">X</span>  {{ $task->id }}</td>
                <td>{{ $task->subject }}</td>
                <td>{{ $task->name }}</td>
                <td>{{ $task->status }}</td>
            </tr>
        @endforeach
    </table>


</div>


<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
{{--<script src="./js/paging.js"></script>--}}
<script src="/js/tablefilter/tablefilter.js"></script>
<script src="/js/main.js"></script>
</body>
</html>
